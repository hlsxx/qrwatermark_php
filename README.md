# Hlsxx QR Watermark

![QR Code](https://github.com/hlsxx/qrwatermark_php/blob/master/imgs/custom.png)

A library to generate QR codes with watermarks.

## Downloads

You can download the latest version of the PHP extension here:

- [libqrwatermark.so](https://github.com/hlsxx/qrwatermark_php_extension/releases/download/v0.1.2/libqrwatermark.so) - Version 0.1.2

Or check the repository:
- [qrwatermark_php_extension](https://github.com/hlsxx/qrwatermark_php_extension)

## Installation

You can install this library using Composer:

```bash
composer require hlsxx/qrwatermark
```

```php
// Custom image config
$imageConfig = (new ImageConfigBuilder())
  // ->colorGradient([255, 255, 255], [0, 0, 0]) // Custom gradient
  ->color([72, 76, 137])
  ->isAutoGradientEnabled()
  ->build();

// Custom logo config
$logoConfig =  (new LogoConfigBuilder())
  ->width(70)
  ->height(70)
  ->build();

$qrw = (new QrWatermark("Hello from PHP custom"))
  ->logo("imgs/php_logo.png")
  ->logoConfig($logoConfig)
  ->imageConfig($imageConfig);

$qrw->saveAsImage("imgs/custom.png");
```

