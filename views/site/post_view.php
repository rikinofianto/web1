<?php

use yii\helpers\Html;
?>
<article id="post-<?=$model->id;?>" class="sdw-post sdw-single post-3671 post type-post status-publish format-standard">
<div class="entry-wrapper">
    <div class="entry-header">
        <h1 class="entry-title"><?=Html::decode($model->title);?></h1>
    </div>
    <div class="entry-content" style="text-align: justify;">
        <?=Html::decode($model->content);?>
    </div>
</div>
</article>