# dhivatar

![StyleCI](https://github.styleci.io/repos/303485611/shield?branch=master)

PHP port of phoenixatom Dhivatar package

## Installation

```
composer require jinas/dhivatar
```

## Usage

```php

use Jinas\Dhivatar\DhivatarFactory;

(string) DhivatarFactory::create()
    ->setText('ޖިނާސް')
    ->build()
  	->encode('data-url');
```

This will output a base64 encoded of the image

OUTPUT:

![default](examples/default.jpg)

```php

use Jinas\Dhivatar\DhivatarFactory;

DhivatarFactory::create()
            ->setText("ޖިނާސް", "#C93839")
            ->setFontSize(255)
            ->setBackground("#3083AD")
            ->build()
            ->save('file', 80, 'jpg');  // save the image in 80% quality and  jpg format defined by third parameter
```

OUTPUT:

![default](examples/file.jpg)

You can chain setters to customize the generated image.

If you don't set a background image. It will automatically generate a random background color.

## Available Methods

- setBackground(string \$background) : Set the background of the image
- setSize(int $width, int $height) : Set the size of the image canvas
- setText(string $text, string $color) : Set the text and text color
- setFontSize(int \$size) : Set the font size
- build() : This method will return an instance of `Intervention\Image\Image` after building the image. Any methods available by [Image Intervention](http://image.intervention.io/) you can call to render,ouput or save the image.

## Project by

- [Jinas](https://github.com/jinas123)


## Inspired by

- [phoenixatom dhivehi-avatar](https://github.com/phoenixatom/dhivehi-avatar)
