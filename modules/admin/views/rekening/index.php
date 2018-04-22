<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\search\RekeningSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rekenings';
$this->params['breadcrumbs'][] = ['label' => 'Bank', 'url' => ['bank/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekening-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Rekening', ['create', 'id' => $id], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'atas_nama',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
