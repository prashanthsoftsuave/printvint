WebP Express 0.19.0. Conversion triggered with the conversion script (wod/webp-on-demand.php), 2021-01-29 09:32:47

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.26
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/slider2/201989_diamanti_whypage_assets_r3.2_el1920x600-tunnel-blue-1-e1605690609574.png
- destination: [doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/slider2/201989_diamanti_whypage_assets_r3.2_el1920x600-tunnel-blue-1-e1605690609574.png.webp
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
- source: [doc-root]/wp-content/uploads/slider2/201989_diamanti_whypage_assets_r3.2_el1920x600-tunnel-blue-1-e1605690609574.png
- destination: [doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/slider2/201989_diamanti_whypage_assets_r3.2_el1920x600-tunnel-blue-1-e1605690609574.png.webp
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

GD Version: bundled (2.1.0 compatible)
image is true color
Quality: 85. 
gd succeeded :)

Converted image in 30 ms, reducing file size with 93% (went from 67 kb to 5 kb)
