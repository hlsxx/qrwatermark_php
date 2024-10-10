<?php

namespace Holes\QrWatermark;

class QrWatermark {

  private string $_text;
  private string $_logoPath;

  public function __construct(string $text) {
    $this->_text = $text;
  }

  public function logo(string $logoPath) {
    $this->_logoPath = $logoPath;
  }

}

?>
