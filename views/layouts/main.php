<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap <?=Yii::$app->session->getFlash('class-wrap');?>">
    <?php
    NavBar::begin([
        'brandLabel' => '<i class="fa fa-home" aria-hidden="true"></i>'.Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    if (Yii::$app->user->isGuest) {
        $menuItems = [
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Donate', 'url' => ['/donasi/index']],
            ['label' => 'Event', 'url' => ['/site/posts']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
        ];
    } else {
        $menuItems = [
            ['label' => 'Post', 'url' => ['/admin/post']],
            ['label' => 'Bank', 'url' => ['/admin/bank']],
        ];
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer role="contentinfo" class="site-footer no-padding--important">
<div class="footer-social-wrapper">
    <div class="container pos-r">
        <img class="footer-flat__logo" src="/img/project1.png">
        <div class="pos-a pos-a--r0-t50">
            <ul class="footer-social large-margin-right">
                <span class="centered-inline">Find us on :</span>
                <li class="footer-social__item">
                    <?= Html::a(Html::img('@web/img/logo__fb-circle.png', ['class' =>'']), 'http://facebook.com', ['class' => 'btn btn-social', 'target' => '_blank']) ?>
                </li>
                <li class="footer-social__item">
                    <?= Html::a(Html::img('@web/img/logo__ig-circle.png', ['class' =>'']), 'http://instagram.com', ['class' => 'btn btn-social', 'target' => '_blank']) ?>
                </li>
                <li class="footer-social__item">
                    <?= Html::a(Html::img('@web/img/logo__twitter-circle.png', ['class' =>'']), 'http://twitter.com', ['class' => 'btn btn-social', 'target' => '_blank']) ?>
                </li>
                <li class="footer-social__item">
                    <?= Html::a(Html::img('@web/img/logo__yt-circle.png', ['class' =>'']), 'http://youtube.com', ['class' => 'btn btn-social', 'target' => '_blank']) ?>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="col">
        <div class="col--m4">
            <p>
                <span class="text-blue">Greenlight.com</span> adalah website yang bertujuan untuk mengajak kita dalam menjaga kelestarian alam dan lingkungan juga bertanggung jawab atas penggalangan dana dan berdonasi secara online dan transparan. <br></p>
            <p>
                <a href="#">Jl. Kasuari Blok A No.14</a>
                <br>Pondok Aren, Tangerang Selatan.</p>
        </div>
        <div class="col--m2" style="float: right;">
            <h3 class="footer-flat-list__title">Connect</h3>
            <ul class="list-nostyle footer-flat-list">
                <li>
                    <?= Html::a('Out Team', Url::toRoute(['about']), []) ?>
                </li>
                <li>
                    <?= Html::a('Our Partners', Url::toRoute(['partner']), []) ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="copyright">
        <small>Copyright © 2018 Project V All Rights Reserved</small>
    </div>
</div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
