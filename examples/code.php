<?php

use Jinas\Dhivatar\Dhivatar;

require '../vendor/autoload.php';

(new Dhivatar)->create()
            ->setText("އަހުމަދު")
            ->output();