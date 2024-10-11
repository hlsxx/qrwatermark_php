<?php

namespace Hlsxx\QrWatermark\Configs;

class LogoConfigBuilder {

  private int $_width = 50;
  private int $_height = 50;

  public function width(int $size): LogoConfigBuilder {
    $this->_width = $size;
    return $this;
  }

  public function height(int $size): LogoConfigBuilder {
    $this->_height = $size;
    return $this;
  }

  public function build() {
    return new LogoConfig(
      $this->_width,
      $this->_height,
    );
  }

}

?>
