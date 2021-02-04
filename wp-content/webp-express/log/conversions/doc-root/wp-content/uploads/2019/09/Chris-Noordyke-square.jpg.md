WebP Express 0.15.2. Conversion triggered using bulk conversion, 2019-09-18 23:16:38

*WebP Convert 2.1.4*  ignited.
- PHP version: 7.2.22
- Server software: nginx/1.17.3

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2019/09/Chris-Noordyke-square.jpg
- destination: [doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2019/09/Chris-Noordyke-square.jpg.webp
- log-call-arguments: true
- converters: (array of 4 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- default-quality: 70
- encoding: "auto"
- max-quality: 100
- metadata: "none"
- near-lossless: 60
- quality: "auto"
------------


*Trying: vips* 

**Error: ** **Required Vips extension is not available.** 
Required Vips extension is not available.
vips failed in 21 ms

*Trying: gd* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2019/09/Chris-Noordyke-square.jpg
- destination: [doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2019/09/Chris-Noordyke-square.jpg.webp
- default-quality: 70
- log-call-arguments: true
- max-quality: 100
- quality: "auto"

The following options have not been explicitly set, so using the following defaults:
- skip: false

The following options were supplied but are ignored because they are not supported by this converter:
- encoding
- metadata
- near-lossless
------------

GD Version: 2.2.5
image is true color
Quality set to same as source: 90
gd succeeded :)

Converted image in 759 ms, reducing file size with 33% (went from 283 kb to 190 kb)
