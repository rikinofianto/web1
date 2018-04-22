<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Rekening */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rekening-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_bank')->hiddenInput(['value' => $id])->label(false) ?>

    <?= $form->field($model, 'atas_nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomor_rekening')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
