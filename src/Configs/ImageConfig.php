<?php

namespace Hlsxx\QrWatermark\Configs;

class ImageConfig {

  public int $pixelSize;
  public int $marginSize;
  public array $color;
  public array $backgroundColor;
  public bool $isGradientEnabled;

  public function __construct(
    int $pixelSize,
    int $marginSize,
    array $color,
    array $backgroundColor,
    bool $isGradientEnabled
  ) {
    $this->pixelSize = $pixelSize;
    $this->marginSize = $marginSize;
    $this->color = $color;
    $this->backgroundColor = $backgroundColor;
    $this->isGradientEnabled = $isGradientEnabled;
  }

}

?>
