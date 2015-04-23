<?php

namespace mervick\yii2\fastclick;

use yii\web\AssetBundle;

class FastClickAsset extends AssetBundle
{
    public $sourcePath = '@bower/fastclick/lib';
    public $js = [
        'fastclick.js',
    ];
}
