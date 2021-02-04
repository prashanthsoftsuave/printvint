WebP Express 0.17.2. Conversion triggered using bulk conversion, 2020-01-11 01:13:04

*WebP Convert 2.3.0*  ignited.
- PHP version: 7.2.26
- Server software: nginx/1.17.6

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2020/01/Screen-Shot-2020-01-10-at-2.50.57-PM.png
- destination: [doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/01/Screen-Shot-2020-01-10-at-2.50.57-PM.png.webp
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
vips failed in 1 ms

*Trying: gd* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2020/01/Screen-Shot-2020-01-10-at-2.50.57-PM.png
- destination: [doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/01/Screen-Shot-2020-01-10-at-2.50.57-PM.png.webp
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

Converted image in 66 ms, reducing file size with 32% (went from 92 kb to 63 kb)
