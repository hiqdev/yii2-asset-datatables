<?php
/**
 * @link      http://hiqdev.com/yii2-asset-datatables
 * @license   BSD 3-clause
 * @copyright Copyright (c) 2015 HiQDev
 */

namespace hiqdev\assets\datatables;

/**
 * Asset bundle for the DataTables plug-in for jQuery.
 */
class JuiDataTablesAsset extends \yii\web\AssetBundle
{
    /**
     * @inheritdoc
     */
     public $sourcePath = '@bower/datatables-plugin';

    /**
     * @inheritdoc
     */
    public $css = [
        'integration/jqueryui/dataTables.jqueryui.css',
    ];

    /**
     * @inheritdoc
     */
    public $js = [
//      'integration/jqueryui/dataTables.jqueryui.min.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\bootstrap\JuiAsset',
    ];
}
