<?php

namespace Hlsxx\QrWatermark;

use Hlsxx\QrWatermark\Configs\ImageConfig;
use Hlsxx\QrWatermark\Configs\ImageConfigBuilder;
use Hlsxx\QrWatermark\Configs\LogoConfig;
use Hlsxx\QrWatermark\Configs\LogoConfigBuilder;

class QrWatermark {

  private string $_text;
  private ?string $_logoPath = null;
  private ImageConfig $_imageConfig;
  private LogoConfig $_logoConfig;

  /**
   * @param string $text QR code text
   */
  public function __construct(
    string $text,
  ) {
    $this->_text = $text;

    // Defaults
    $this->_imageConfig = (new ImageConfigBuilder())->build();
    $this->_logoConfig = (new LogoConfigBuilder())->build();
  }

  /*
   * Sets the logo (watermark) path
   *
   * @param string $logoPath
   * @return QrWatermark
  */
  public function logo(string $logoPath): QrWatermark {
    $this->_logoPath = $logoPath;
    return $this;
  }

  /*
   * Sets the ImageConfig
   *
   * @param ImageConfig $imageConfig
   * @return QrWatermark
  */
  public function imageConfig(ImageConfig $imageConfig): QrWatermark {
    $this->_imageConfig = $imageConfig;
    return $this;
  }

  /*
   * Sets the LogoConfig
   *
   * @param LogoConfig $logoConfig
   * @return QrWatermark
  */
  public function logoConfig(LogoConfig $logoConfig): QrWatermark {
    $this->_logoConfig = $logoConfig;
    return $this;
  }

  /*
   * Save the generated QR code into an image
   *
   * @param string $path Path to the file e.g.:(/var/www/image.png)
   * @return bool
  */
  public function saveAsImage(string $path): bool {
    return qrwatermark_generate(
      $this->_text,
      $this->_logoPath,
      $path,
      $this->_imageConfig->color,
      $this->_imageConfig->colorsGradient,
      $this->_imageConfig->backgroundColor,
      $this->_imageConfig->isAutoGradientEnabled,
      $this->_logoConfig->width,
      $this->_logoConfig->height
    );
  }

}

?>
