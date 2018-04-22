<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p> Kami adalah organisasi pecinta alam yang ada di universitas Mercu Buana (UMB).
        Kami sebagai salah satu Unit Kegiatan Mahasiswa (UKM) merupakan wadah bagi mahasiswa UMB yang memiliki
        jiwa petualang, mencintai lingkungan, menyukai tantangan, menikmati perjalanan, dan menghargai kerja sama tim, 
        serta berusaha untuk mengembangkan diri sendiri.</p>
    
    <p> Jika Anda adalah seseorang yang ingin menumbuhkan jiwa petualangan Anda, 
        ingin mengembangkan minat dan/atau bakat Anda, serta ingin mengembangkan managerial skill dan soft skill Anda, 
        maka bergabunglah bersama kami!</p>
        
    <p><b> MEET THE TEAM : </b></p>

<div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <?php echo Html::img('@web/img/IMG_8137.jpg', ['style' =>' transform: rotate(-90deg); width:200px; height:200px; border:solid; border-radius: 50%; -moz-border-radius: 50%; -webkit-border-radius: 50%;']); ?>
                <h2>Ridwan Ardiansyah</h2>
    
                <p>FRONT END DEVELOPER</p>

                <p><a class="btn btn-default" href="#">Profile &raquo;</a></p>
            </div>
        </div>
</div>
</div>
