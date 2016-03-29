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
 * Asset bundle for the DataTables plug-in for jQuery.
 */
class JuiDataTablesAsset extends \yii\web\AssetBundle
{
    /**
      * {@inheritdoc}
      */
     public $sourcePath = '@bower/drmonty-datatables-plugin';

    /**
     * {@inheritdoc}
     */
    public $css = [
        'integration/jqueryui/dataTables.jqueryui.css',
    ];

    /**
     * {@inheritdoc}
     */
    public $js = [
//      'integration/jqueryui/dataTables.jqueryui.min.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'yii\bootstrap\JuiAsset',
    ];
}
