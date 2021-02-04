WebP Express 0.18.3. Conversion triggered using bulk conversion, 2020-12-01 05:01:54

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.2.5-1+ubuntu14.04.1+deb.sury.org+1
- Server software: nginx/1.14.0

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]wp-content/uploads/2020/11/InformationWeek-200x27.jpeg
- destination: [doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/11/InformationWeek-200x27.jpeg.webp
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
vips failed in 0 ms

*Trying: gd* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]wp-content/uploads/2020/11/InformationWeek-200x27.jpeg
- destination: [doc-root]wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/11/InformationWeek-200x27.jpeg.webp
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
Quality set to same as source: 82
gd succeeded :)

Converted image in 16 ms, reducing file size with 26% (went from 3580 bytes to 2650 bytes)
