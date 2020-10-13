<?php

use Jinas\Dhivatar\DhivatarFactory;

require '../vendor/autoload.php';

DhivatarFactory::create()
    ->setText("ޖިނާސް")
    ->output("default.jpg");

DhivatarFactory::create()
    ->setText("ޖިނާސް", "#C93839")
    ->setFontSize(255)
    ->setBackground("#3083AD")
    ->output("file.jpg");
