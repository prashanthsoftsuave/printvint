WebP Express 0.17.4. Conversion triggered using bulk conversion, 2020-07-23 22:41:24

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.2.32
- Server software: nginx/1.17.6

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2020/07/Splunk-hero@2x.png
- destination: [doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/07/Splunk-hero@2x.png.webp
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
vips failed in 5 ms

*Trying: gd* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2020/07/Splunk-hero@2x.png
- destination: [doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/07/Splunk-hero@2x.png.webp
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

GD Version: 2.3.0
image is true color
Quality: 85. 
gd succeeded :)

Converted image in 834 ms, reducing file size with 86% (went from 576 kb to 82 kb)
