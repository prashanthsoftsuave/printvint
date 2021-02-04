WebP Express 0.14.21. Conversion triggered using bulk conversion, 2019-08-01 20:24:44

*WebP Convert 2.1.4*  ignited.
- PHP version: 7.2.21
- Server software: nginx/1.15.4

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2019/07/Screen-Shot-2019-08-01-at-1.21.18-PM-e1564691083627-400x333.png
- destination: [doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2019/07/Screen-Shot-2019-08-01-at-1.21.18-PM-e1564691083627-400x333.png.webp
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
vips failed in 1 ms

*Trying: gd* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2019/07/Screen-Shot-2019-08-01-at-1.21.18-PM-e1564691083627-400x333.png
- destination: [doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2019/07/Screen-Shot-2019-08-01-at-1.21.18-PM-e1564691083627-400x333.png.webp
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

Converted image in 35 ms, reducing file size with 85% (went from 116 kb to 18 kb)
