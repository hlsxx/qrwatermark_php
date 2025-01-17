<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Hlsxx\QrWatermark\QrWatermark;

$qrw = new QrWatermark("Hello from PHP");
$qrw->saveAsImage("imgs/default.png");
