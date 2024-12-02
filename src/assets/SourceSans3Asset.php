<?php
namespace yii\SourceSans3\assets;

use yii\web\AssetBundle;

class SourceSans3Asset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/dist';
    public $css = [
        'css/source-sans-3.min.css',
    ];
}