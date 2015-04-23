# Yii2 fastclick.js Asset

## Installation
Add in `composer.json`:
```JSON
{
    "require": {
        "mervick/yii2-fastclick-asset": "*"
    }
}
```
## Usage
In view
```PHP
<?
// ...

mervick\yii2\FastClickAsset::register($this);
```
or as dependency in your asset bundle
```PHP
<?
// ...

class AppAsset extends AssetBundle
{
    // ...

    public $depends = [
        // ...
        'mervick\yii2\FastClickAsset'
    ];
}
```
