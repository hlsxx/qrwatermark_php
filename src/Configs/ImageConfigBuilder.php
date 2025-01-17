<?php

namespace Hlsxx\QrWatermark\Configs;

class ImageConfigBuilder
{

  private int $_pixelSize = 10;
  private int $_marginSize = 1;
  private array $_color = [0, 0, 0];
  private ?array $_colorsGradient = null;
  private array $_backgroundColor = [255, 255, 255];
  private bool $_isAutoGradientEnabled = false;

  /*
   * Sets the QR code pixel size
   *
   * @param int $size
   * @return ImageConfigBuilder
  */
  public function pixelSize(int $size): ImageConfigBuilder
  {
    $this->_pixelSize = $size;
    return $this;
  }

  /*
   * Sets the QR code margin size
   *
   * @param int $size
   * @return ImageConfigBuilder
  */
  public function marginSize(int $size): ImageConfigBuilder
  {
    $this->_marginSize = $size;
    return $this;
  }

  /*
   * Sets the QR code color
   *
   * @param array $rgb Pixel color e.g. black ([255, 255, 255])
   * @return ImageConfigBuilder
  */
  public function color(array $rgb): ImageConfigBuilder
  {
    $this->_color = $rgb;
    return $this;
  }

  /*
   * Sets the QR code color gradient
   * Creates gradient from startColor to endColor
   *
   * @param array $startColorRgb Start color e.g., 255, 255, 255
   * @param array $endColorRgb End color e.g., 0, 0, 0
   *
   *
   * @return ImageConfigBuilder
  */
  public function colorGradient(array $startColorRgb, array $endColorRgb): ImageConfigBuilder
  {
    $this->_colorsGradient = [$startColorRgb, $endColorRgb];
    return $this;
  }

  /*
   * Sets the opposite (background) pixel color
   *
   * @param array $rgb Rgb color e.g., Black color ([0, 0, 0])
   * @return ImageConfigBuilder
  */
  public function backgroundColor(array $rgb): ImageConfigBuilder
  {
    $this->_backgroundColor = $rgb;
    return $this;
  }

  /*
   * Enable auto gradient
   * The auto gradient is calculated based on the entered color value
   *
   * @return ImageConfigBuilder
  */
  public function isAutoGradientEnabled(): ImageConfigBuilder
  {
    $this->_isAutoGradientEnabled = true;
    return $this;
  }

  /*
   * Generates the ImageConfig
   *
   * @return ImageConfig
  */
  public function build()
  {
    return new ImageConfig(
      $this->_pixelSize,
      $this->_marginSize,
      $this->_color,
      $this->_colorsGradient,
      $this->_backgroundColor,
      $this->_isAutoGradientEnabled
    );
  }
}
