WebP Express 0.17.2. Conversion triggered using bulk conversion, 2019-10-30 20:07:13

*WebP Convert 2.3.0*  ignited.
- PHP version: 7.2.24
- Server software: nginx/1.17.3

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2019/10/mariadb-logo-400x100.png
- destination: [doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2019/10/mariadb-logo-400x100.png.webp
- log-call-arguments: true
- converters: (array of 4 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- alpha-quality: 80
- encoding: "auto"
- metadata: "none"
- near-lossless: 60
- quality: 85
------------


*Trying: vips* 

**Error: ** **Required Vips extension is not available.** 
Required Vips extension is not available.
vips failed in 0 ms

*Trying: gd* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2019/10/mariadb-logo-400x100.png
- destination: [doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2019/10/mariadb-logo-400x100.png.webp
- log-call-arguments: true
- quality: 85
- skip: false

The following options have not been explicitly set, so using the following defaults:
- default-quality: 85
- max-quality: 85

The following options were supplied but are ignored because they are not supported by this converter:
- alpha-quality
- encoding
- metadata
- near-lossless
------------

GD Version: 2.2.5
image is true color
Quality: 85. 
gd succeeded :)

Converted image in 12 ms, reducing file size with 37% (went from 6235 bytes to 3948 bytes)
