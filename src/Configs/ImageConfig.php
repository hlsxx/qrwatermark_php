<?php

namespace Hlsxx\QrWatermark\Configs;

class ImageConfig {

  public function __construct(
    public int $pixelSizea,
    public int $marginSize,
    public array $color,
    public array $backgroundColor,
    public bool $isGradientEnabled
  ) {}

}

?>
