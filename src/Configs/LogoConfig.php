<?php

namespace Hlsxx\QrWatermark\Configs;

class LogoConfig {

  public int $width;
  public int $height;

  public function __construct(
    int $width,
    int $height
  ) {
    $this->width = $width;
    $this->height = $height;
  }

}

?>
