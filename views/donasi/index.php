<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\grid\GridView;
$this->title = 'Donate';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>Donasi</h1>

<?= GridView::widget([
    'dataProvider' => $model,
    'layout'=>"{items}",
    'columns' => [
        [
            'label' => 'Bank',
            'value' => function ($model) {
                return $model->bank->nama_bank;
            }
        ],
        'atas_nama',
        'nomor_rekening'
    ],
]); ?>