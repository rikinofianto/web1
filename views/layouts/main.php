<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

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
            ['label' => 'Donasi', 'url' => ['/donasi/index']],
            ['label' => 'Post', 'url' => ['/site/posts']],
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
                    <a target="_blank" class="btn btn-social" onclick="ga('send', 'event', 'desktop.site-footer-facebook.icon', 'click', 'desktop.site-footer-facebook.icon')" href="https://www.facebook.com/Kitabisadotcom"><img src="https://assets.kitabisa.com/images/logo__fb-circle.png" alt=""></a>
                </li>
                <li class="footer-social__item">
                    <a target="_blank" class="btn btn-social" onclick="ga('send', 'event', 'desktop.site-footer-instagram.icon', 'click', 'desktop.site-footer-instagram.icon')" href="https://instagram.com/kitabisacom/"><img src="https://assets.kitabisa.com/images/logo__ig-circle.png" alt=""></a>
                </li>
                <li class="footer-social__item">
                    <a target="_blank" class="btn btn-social" onclick="ga('send', 'event', 'desktop.site-footer-twitter.icon', 'click', 'desktop.site-footer-twitter.icon')" href="https://twitter.com/kitabisacom"><img src="https://assets.kitabisa.com/images/logo__twitter-circle.png" alt=""></a>
                </li>
                <li class="footer-social__item">
                    <a target="_blank" class="btn btn-social" onclick="ga('send', 'event', 'desktop.site-footer-youtube.icon', 'click', 'desktop.site-footer-youtube.icon')" href="https://www.youtube.com/user/kitabisaindonesia"><img src="https://assets.kitabisa.com/images/logo__yt-circle.png" alt=""></a>
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
        <div class="col--m4">
            <h3 class="footer-flat-list__title">Take Action</h3>
            <ul class="list-nostyle footer-flat-list">
                <li>
                    <a onclick="ga('send', 'event', 'desktop.site-footer-register.campaign', 'click', 'desktop.site-footer-register.campaign')" href="/buat-campaign">Galang Dana</a>
                </li>
                <li>
                    <a onclick="ga('send', 'event', 'desktop.site-footer-explore.campaign', 'click', 'desktop.site-footer-explore.campaign')" href="/explore/all">Donasi</a>
                </li>
            </ul>
        </div>
        <!-- <div class="col--m3">
            <h3 class="footer-flat-list__title">Connect</h3>
            <ul class="list-nostyle footer-flat-list">
                <li>
                    <a onclick="ga('send', 'event', 'desktop.site-footer-our-team', 'click', 'desktop.site-footer-our-team')" href="/our-team">Our Team</a>
                </li>
                <li>
                    <a onclick="ga('send', 'event', 'desktop.site-footer-partners', 'click', 'desktop.site-footer-partners')" href="/partners">Our Partners</a>
                </li>
            </ul>
        </div> -->
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
