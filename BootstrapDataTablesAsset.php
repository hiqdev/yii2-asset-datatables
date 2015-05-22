<?php
/**
 * @link      http://hiqdev.com/yii2-asset-datatables
 * @license   BSD 3-clause
 * @copyright Copyright (c) 2015 HiQDev
 */

namespace hiqdev\assets\datatables;

/**
 * Asset bundle for the DataTables plug-in for Bootstrap 3.
 */
class BootstrapDataTablesAsset extends \yii\web\AssetBundle
{
    /**
     * @inheritdoc
     */
     public $sourcePath = '@bower/datatables-plugins';

    /**
     * @inheritdoc
     */
    public $css = [
        'integration/bootstrap/3/dataTables.bootstrap.css',
    ];

    /**
     * @inheritdoc
     */
    public $js = [
//      'integration/bootstrap/3/dataTables.bootstrap.min.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
//      'yii\bootstrap\BootstrapPluginAsset',
    ];
}
