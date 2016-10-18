# Yii2 Material Ripple
***
[![Latest Stable Version](https://poser.pugx.org/ayrozjlc/yii2-material-ripple/v/stable)](https://packagist.org/packages/ayrozjlc/yii2-material-ripple)
[![Total Downloads](https://poser.pugx.org/ayrozjlc/yii2-material-ripple/downloads)](https://packagist.org/packages/ayrozjlc/yii2-material-ripple)
[![Latest Unstable Version](https://poser.pugx.org/ayrozjlc/yii2-material-ripple/v/unstable)](https://packagist.org/packages/ayrozjlc/yii2-material-ripple)
[![License](https://poser.pugx.org/ayrozjlc/yii2-material-ripple/license)](https://packagist.org/packages/ayrozjlc/yii2-material-ripple)
***
AssetBundle for material-ripple

## Installation

####Composer

```
composer require --prefer-dist "ayrozjlc/yii2-material-ripple:*"
```

or add

```
"ayrozjlc/yii2-material-ripple": "dev-master"
```

to the ```require``` section of your `composer.json` file.

## Usage

in view (for example: ```@app/views/layouts/main.php```)

```php
// ...
use ayrozjlc\ripple\RippleAsset;
// ...
RippleAsset::register($this);
```

or add to your ```assets/AppAsset.php```

```php
public $depends = [
    // ...
    'ayrozjlc\ripple\RippleAsset',
];
```
