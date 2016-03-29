<?php

namespace hiqdev\assets\datatables;

/**
 * Asset bundle for the DataTables plug-in for jQuery.
 */
class JuiDataTablesAsset extends \yii\web\AssetBundle
{
    /**
     * @inheritdoc
     */
     public $sourcePath = '@bower/drmonty-datatables-plugin';

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
