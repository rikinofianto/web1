<?php

namespace frontend\controllers;
use Yii;
use yii\data\ActiveDataProvider;
use frontend\models\Rekening;

class DonasiController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$dataProvider = new ActiveDataProvider([
            'query' => Rekening::find()->orderBy('id DESC'),
            'pagination' => [
                'pageSize' => false,
            ],
        ]);

        return $this->render('index', ['model' => $dataProvider]);
    }

}
