<?php
namespace yii\SourceSans3\assets;

use yii\web\AssetBundle;

class SourceSans3CdnAsset extends AssetBundle
{
    public $css = [
        'https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@latest/index.css',
    ];
}