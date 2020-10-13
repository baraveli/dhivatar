# dhivatar
PHP port of phoenixatom Dhivatar package


## Installation

```
composer require jinas/dhivatar
```

## Usage

```php

use Jinas\Dhivatar\DhivatarFactory;

DhivatarFactory::create()
            ->setText("ޖިނާސް")
            ->output("default.jpg");        
```
OUTPUT:

![default](examples/default.jpg)

```php

use Jinas\Dhivatar\DhivatarFactory;

DhivatarFactory::create()
            ->setText("ޖިނާސް", "#C93839")
            ->setFontSize(255)
            ->setBackground("#3083AD")
            ->output("file.jpg");            
```
OUTPUT:

![default](examples/file.jpg)

You can chain setters to customize the generated image.

## Available Methods

- setBackground(string $background) : Set the background of the image
- setSize(int $width, int $height) : Set the size of the image canvas
- setText(string $text, string $color) : Set the text and text color
- setFontSize(int $size) : Set the font size
- output(string $filename) : Output the final image file.

## Inspired by

- [phoenixatom dhivehi-avatar](https://github.com/phoenixatom/dhivehi-avatar)
