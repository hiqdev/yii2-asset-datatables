<?php

/*
 * Yii2 asset for DataTables jQuery plugin
 *
 * @link      https://github.com/hiqdev/yii2-asset-datatables
 * @package   yii2-asset-datatables
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\assets\datatables;

/**
 * Asset bundle for the DataTables plug-in for Bootstrap 3.
 */
class BootstrapDataTablesAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/drmonty-datatables-plugins/integration';
    public $css = ['bootstrap/3/dataTables.bootstrap.css'];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
