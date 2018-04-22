<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
$this->title = Yii::$app->name;
?>
<div class="site-index">

    <div class="jumbotron">
        <h1><?php echo Html::img('@web/img/Project1.png', ['class' =>'']); ?></h1>

        <p class="lead">Kami merupakan salah satu Unit Kegiatan Mahasiswa tingkat universitas yang berdiri sejak 10 Maret 2018.
						Kami merupakan wadah bagi mahasiswa Universitas Mercu Buana untuk berkegiatan di alam bebas, berkontribusi bagi masyarakat, serta peduli terhadap pelestarian lingkungan.</p>

        <p><?= Html::a('Donate Now', Url::toRoute(['/donasi']), ['class' => 'btn btn-lg btn-success']) ?></p>
    </div>

    <div class="body-content">

        <div class="row">
            
        </div>

    </div>
</div>
