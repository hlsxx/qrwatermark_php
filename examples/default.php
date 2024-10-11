<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Hlsxx\QrWatermark\QrWatermark;
use Hlsxx\QrWatermark\Configs\LogoConfigBuilder;
use Hlsxx\QrWatermark\Configs\ImageConfigBuilder;

$qrw = new QrWatermark("Hello from PHP");
$qrw->saveAsImage("test.png");

?>
