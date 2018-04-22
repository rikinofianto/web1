<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-5">
            <p>For your further information, feel free to contact us on :</p>
            <i class="fa fa-phone fa-3" aria-hidden="true"></i> 021-44455
            <br/>
            <i class="fa fa-mobile fa-3" aria-hidden="true"></i> 089637902808
            <br/>
            <i class="fa fa-envelope-o fa-3" aria-hidden="true"></i> gg@gmail.com
        </div>
    </div>

</div>
