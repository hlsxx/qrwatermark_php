<?php

namespace Hlsxx\QrWatermark\Configs;

class ImageConfig
{
  public function __construct(
    public int $pixelSize,
    public int $marginSize,
    public array $color,
    public ?array $colorsGradient,
    public array $backgroundColor,
    public bool $isAutoGradientEnabled
  ) {}
}
