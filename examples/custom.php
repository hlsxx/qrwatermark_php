<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Hlsxx\QrWatermark\QrWatermark;
use Hlsxx\QrWatermark\Configs\ImageConfigBuilder;
use Hlsxx\QrWatermark\Configs\LogoConfigBuilder;

// Custom image config
$imageConfig = (new ImageConfigBuilder())
  ->color([72, 76, 137])
  ->isGradientEnabled()
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

?>