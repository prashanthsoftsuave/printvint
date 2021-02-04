WebP Express 0.19.0. Conversion triggered with the conversion script (wod/webp-on-demand.php), 2021-01-29 09:30:19

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.26
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2021/01/ai-copy-200x88.jpg
- destination: [doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2021/01/ai-copy-200x88.jpg.webp
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
- source: [doc-root]/wp-content/uploads/2021/01/ai-copy-200x88.jpg
- destination: [doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2021/01/ai-copy-200x88.jpg.webp
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

GD Version: bundled (2.1.0 compatible)
image is true color
Quality of source could not be established (Imagick or GraphicsMagick is required) - Using default instead (70).
gd succeeded :)

Converted image in 6 ms, reducing file size with 65% (went from 3115 bytes to 1080 bytes)
