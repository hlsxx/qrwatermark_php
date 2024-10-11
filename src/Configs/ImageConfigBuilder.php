<?php

namespace Hlsxx\QrWatermark\Configs;

class ImageConfigBuilder {

  private int $_pixelSize = 10;
  private int $_marginSize = 1;
  private array $_color = [0, 0, 0];
  private array $_backgroundColor = [255, 255, 255];
  private bool $_isGradientEnabled = false;

  public function pixelSize(int $size): ImageConfigBuilder {
    $this->_pixelSize = $size;
    return $this;
  }

  public function marginSize(int $size): ImageConfigBuilder {
    $this->_marginSize = $size;
    return $this;
  }

  public function color(array $rgb): ImageConfigBuilder {
    $this->_color = $rgb;
    return $this;
  }

  public function backgroundColor(array $rgb): ImageConfigBuilder {
    $this->_backgroundColor = $rgb;
    return $this;
  }

  public function isGradientEnabled(): ImageConfigBuilder {
    $this->_isGradientEnabled = true;
    return $this;
  }

  public function build() {
    return new ImageConfig(
      $this->_pixelSize,
      $this->_marginSize,
      $this->_color,
      $this->_backgroundColor,
      $this->_isGradientEnabled
    );
  }

}

?>
