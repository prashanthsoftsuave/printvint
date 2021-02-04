const FtpClient = require('ssh2-sftp-client');
const path = require('path');
const ftp = new FtpClient();
const argv = require('yargs').argv;

const OPTIONS = {
  'core': {
    buildSrc: '../../..',
    buildDest: '/www/wp-content/themes/diamanti',
    scope: [
      'app',
      'resources',
      'dist'
    ]
  },
  'uploads': {
    buildSrc: '../../../../../uploads',
    buildDest: '/www/wp-content/uploads',
    scope: ['2020']
  },
};

const connect = () => ftp.connect({
  host: process.env.FTP_HOST,
  port: process.env.FTP_PORT,
  username: process.env.FTP_USERNAME,
  password: process.env.FTP_PASSWORD,
});

const run = async ({ buildSrc, buildDest, scope }) => {
  try {
    const srcPath = src => path.join(__dirname, buildSrc, src);
    const targetPath = src => path.join(buildDest, src);

    await connect();
    ftp.on('upload', ({ source, destination }) => {
      console.log(`Uploaded ${source} -> ${destination}`);
    });

    await Promise.all(
      scope.map(async dir => {
        console.log('Directory upload started', srcPath(dir), '->', targetPath(dir));
        await  ftp.uploadDir(srcPath(dir), targetPath(dir));
        console.log('Directory upload finished', srcPath(dir), '->', targetPath(dir));
      })
    );

  } catch (ex) {
    console.log('Upload failed');
    console.log(ex);
  } finally {
    await ftp.end();
    console.log('Upload successfull');
  }
};


const opts = OPTIONS[argv.uploads ? 'uploads' : 'core'];
run(opts);
