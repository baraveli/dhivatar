<?php

namespace Jinas\Dhivatar;

use Intervention\Image\ImageManagerStatic;

class Dhivatar
{
    protected const MAX_SIZE = 512;

    protected $background;
    protected $width;
    protected $height;
    protected $text;
    protected $textColor;
    protected $fontSize = 250;

    /**
     * __construct.
     *
     * @param int $width
     * @param int $height
     *
     * @return void
     */
    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * setBackground.
     *
     * @param string $background
     *
     * @return object
     */
    public function setBackground(string $background): object
    {
        $this->background = $background;

        return $this;
    }

    /**
     * setSize.
     *
     * @param int $width
     * @param int $height
     *
     * @return object
     */
    public function setSize(int $width, int $height): object
    {
        $this->width = $width;
        $this->height = $height;

        return $this;
    }

    /**
     * setText.
     *
     * @param string $text
     * @param string $color
     *
     * @return object
     */
    public function setText(string $text, string $color = '#ffff'): object
    {
        $this->text = $text;
        $this->textColor = $color;

        return $this;
    }

    /**
     * setFontSize.
     *
     * @param int $size
     *
     * @return object
     */
    public function setFontSize(int $size): object
    {
        $this->fontSize = $size;

        return $this;
    }

    /**
     * output.
     *
     * @param string $filename
     *
     * @return void
     */
    public function output(string $filename = 'default.jpg'): void
    {
        $image = ImageManagerStatic::canvas($this->width ?? $this::MAX_SIZE, $this->height ?? $this::MAX_SIZE, $this->background ?? $this->generateColor());

        $image->text(mb_substr($this->text, 0, 1), 245, 245, function ($font) {
            $font->file(__DIR__.'/fonts/MV_Faseyha.otf');
            $font->size($this->fontSize);
            $font->color($this->textColor);
            $font->align('center');
            $font->valign('center');
            $font->angle(0);
        });

        $image->save($filename);
    }

    /**
     * generateColor.
     *
     * @return void
     */
    protected function generateColor()
    {
        return '#'.str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
    }
}
