<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Test;
use Yii;

class TestController extends Controller
{
    public function actionIndex()
    {
       // $list = Test::getNewsList();

        $max = Yii::$app->params['maxNewsInList'];
        $list =  Test::getNewsList($max);

        return $this->render('index',[
            'list'=>$list,
        ]);
    }

}

