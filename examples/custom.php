<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Hlsxx\QrWatermark\QrWatermark;
use Hlsxx\QrWatermark\Configs\ImageConfigBuilder;
use Hlsxx\QrWatermark\Configs\LogoConfigBuilder;

// Custom image config
$imageConfig = new ImageConfigBuilder()
  // ->colorGradient([255, 255, 255], [0, 0, 0]) // Custom gradient
  ->color([72, 76, 137])->isAutoGradientEnabled();

// Custom logo config
$logoConfig =  new LogoConfigBuilder()->width(70)->height(70);

$qrw = new QrWatermark("Hello from PHP custom")
  ->logo("imgs/php_logo.png")
  ->logoConfig($logoConfig)
  ->imageConfig($imageConfig);

// Error handling
try {
  $qrw->saveAsImage("imgs/custom.png");
} catch (\Exception $e) {
  var_dump($e->getMessage());
}
