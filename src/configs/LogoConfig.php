<?php

namespace Holes\QrWatermark\Configs;

class LogoConfig {

  private int $_pixelSize;
  private int $_marginSize;
  private array $_color;
  private array $_backgroundColor;
  private bool $_isGradientEnabled;

  public function pixelSize(int $size): LogoConfig {
    $this->_pixelSize = $size;
    return $this;
  }

  public function marginSize(int $size): LogoConfig {
    $this->_marginSize = $size;
    return $this;
  }

  public function color(array $rgb): LogoConfig {
    $this->_color = $rgb;
    return $this;
  }

  public function backgroundColor(array $rgb): LogoConfig {
    $this->_backgroundColor = $rgb;
    return $this;
  }

  public function isGradientEnabled(): LogoConfig {
    $this->_isGradientEnabled = true;
    return $this;
  }

}

?>
