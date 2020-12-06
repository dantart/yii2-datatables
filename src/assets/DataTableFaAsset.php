<?php
/**
 * @copyright Copyright (c) 2014 Serhiy Vinichuk
 * @license MIT
 * @author Serhiy Vinichuk <serhiyvinichuk@gmail.com>
 */

namespace dantart\datatable\assets;


use yii\web\AssetBundle;

class DataTableFaAsset extends AssetBundle
{
    public $css = [
        'dataTables.fontAwesome.css',
    ];

    public $depends = [
        DataTableBaseAsset::class,
    ];
} 