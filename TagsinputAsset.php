<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace xutl\bootstrap\tagsinput;

use yii\web\AssetBundle;

/**
 * Class TagsinputAsset
 * @package xutl\bootstrap\tagsinput
 */
class TagsinputAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap-tagsinput/dist';

    public $css = [
        'bootstrap-tagsinput.css',
    ];
    public $js = [
        'bootstrap-tagsinput.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset'
    ];
}