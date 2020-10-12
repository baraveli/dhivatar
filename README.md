# dhivatar
PHP port of phoenixatom Dhivatar package


## Installation

```
composer require jinas/dhivatar
```

## Usage

```php
(new Dhivatar)->create("#2D2D2D", 512, 512) //Background color and image width and height
            ->setText("އަހުމަދު", "#fdf6e3") //Text and text color
            ->output("path/final.jpg"); //output path
```

You can override any defaults configs by passing params.

I will add more configuration options later when I get time.

## Inspired by

- [phoenixatom dhivehi-avatar](https://github.com/phoenixatom/dhivehi-avatar)
