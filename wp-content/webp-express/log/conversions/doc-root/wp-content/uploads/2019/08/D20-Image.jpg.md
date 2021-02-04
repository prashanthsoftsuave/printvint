WebP Express 0.14.22. Conversion triggered using bulk conversion, 2019-08-07 17:16:39

*WebP Convert 2.1.4*  ignited.
- PHP version: 7.2.21
- Server software: nginx/1.15.4

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2019/08/D20-Image.jpg
- destination: [doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2019/08/D20-Image.jpg.webp
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
vips failed in 2 ms

*Trying: gd* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2019/08/D20-Image.jpg
- destination: [doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2019/08/D20-Image.jpg.webp
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
Quality set to same as source: 79
gd succeeded :)

Converted image in 165 ms, reducing file size with 37% (went from 141 kb to 88 kb)
