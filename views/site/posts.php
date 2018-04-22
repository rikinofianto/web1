<?php
use yii\widgets\ListView;
$this->title = 'Event';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <?= 
            ListView::widget([
                'dataProvider' => $listDataProvider,
                'options' => [
                    'tag' => 'div',
                    'class' => 'list-wrapper',
                    'id' => 'list-wrapper',
                ],
                'layout' => "{items}\n{pager}",
                'itemView' => function ($model, $key, $index, $widget) {
                    return $this->render('_list_item',['model' => $model]);
                },
            ]); 
            ?>
        </div>

    </div>
</div>
