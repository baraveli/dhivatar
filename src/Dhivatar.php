<?php

namespace Jinas\Dhivatar;

use Intervention\Image\ImageManagerStatic;

class Dhivatar
{

    protected $image;

    public function create(int $width = 512, int $height = 512, string $background = "#2D2D2D") : Object
    {
        $this->image = ImageManagerStatic::canvas($width, $height, $background);
        return $this;
    }

    public function setText(string $text, $color = "#fdf6e3") : Object
    {
        $this->image->text(mb_substr($text, 0, 1), 245, 245, function ($font) use ($color) {
            $font->file(__DIR__ . '/fonts/MV_Faseyha.otf');
            $font->size(250);
            $font->color($color);
            $font->align('center');
            $font->valign('center');
            $font->angle(0);
        });
        return $this;
    }

    public function output(string $filename = 'default.jpg') : void
    {
        $this->image->save($filename);
    }
}
