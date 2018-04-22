<?php

namespace frontend\modules\admin;

/**
 * admin module definition class
 */
use yii\filters\AccessControl;

class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'frontend\modules\admin\controllers';
    /**
     * @inheritdoc
     */
    public function init()
    {
        
        parent::init();
        $this->layout = '@frontend//views/layouts/main_2';
        // custom initialization code goes here
    }
}
