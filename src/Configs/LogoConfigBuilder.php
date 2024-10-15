<?php

namespace Hlsxx\QrWatermark\Configs;

class LogoConfigBuilder {

  private int $_width = 50;
  private int $_height = 50;

  /*
   * Sets the logo (watermark) width
   *
   * @param int $size
   * @return LogoConfigBuilder
  */
  public function width(int $size): LogoConfigBuilder {
    $this->_width = $size;
    return $this;
  }

  /*
   * Sets the logo (watermark) height
   *
   * @param int $size
   * @return LogoConfigBuilder
  */
  public function height(int $size): LogoConfigBuilder {
    $this->_height = $size;
    return $this;
  }

  /*
   * Generates the LogoConfig
   *
   * @return LogoConfig
  */
  public function build() {
    return new LogoConfig(
      $this->_width,
      $this->_height,
    );
  }

}

?>
