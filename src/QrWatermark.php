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

  public function __construct(
    string $text,
  ) {
    $this->_text = $text;

    // Defaults
    $this->_imageConfig = (new ImageConfigBuilder())->build();
    $this->_logoConfig = (new LogoConfigBuilder())->build();
  }

  public function logo(string $logoPath): QrWatermark {
    $this->_logoPath = $logoPath;
    return $this;
  }

  public function imageConfig(ImageConfig $imageConfig): QrWatermark {
    $this->_imageConfig = $imageConfig;
    return $this;
  }

  public function logoConfig(LogoConfig $logoConfig): QrWatermark {
    $this->_logoConfig = $logoConfig;
    return $this;
  }

  public function saveAsImage(string $path): bool {
    try {
      return qrwatermark_generate(
        $this->_text,
        $this->_logoPath,
        $path,
        $this->_imageConfig->color,
        $this->_imageConfig->colorsGradient,
        $this->_imageConfig->backgroundColor,
        $this->_imageConfig->isGradientEnabled,
        $this->_logoConfig->width,
        $this->_logoConfig->height
      );
    } catch (\Exception $e) {
      echo $e->getMessage();
      return false;
    }
  }

}

?>
