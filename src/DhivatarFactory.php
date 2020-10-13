<?php
namespace Jinas\Dhivatar;

class DhivatarFactory
{    
    /**
     * create
     *
     * @param  mixed $width
     * @param  mixed $height
     * @return void
     */
    public static function create($width = 512, $height = 512) : Dhivatar
    {
        return new Dhivatar($width, $height);
    }
}