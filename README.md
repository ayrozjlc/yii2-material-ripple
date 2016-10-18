# Yii2 BlockUI
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
