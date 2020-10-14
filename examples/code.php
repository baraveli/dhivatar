<?php

use Jinas\Dhivatar\DhivatarFactory;

require '../vendor/autoload.php';

(string) DhivatarFactory::create()
    ->setText('ޖިނާސް')
    ->build()
    ->encode('data-url');

DhivatarFactory::create()
    ->setText('ޖިނާސް', '#C93839')
    ->setFontSize(255)
    ->setBackground('#3083AD')
    ->build();
