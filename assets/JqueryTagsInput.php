<?php

namespace faryshta\assets;

use yii\web\AssetBundle;

/**
 * @author Angel Guevara <angeldelcaos@gmail.com>
 */
class JqueryTagsInput extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/jquery.tagsinput';

    /**
     * @inheritdoc
     */
    public $js = ['dist/jquery.tagsinput.min.js'];

    /**
     * @inheritdoc
     */
    public $css = ['dist/jquery.tagsinput.min.css'];

    /**
     * @inheritdoc
     */
    public $depends = ['yii\web\JqueryAsset'];
}
