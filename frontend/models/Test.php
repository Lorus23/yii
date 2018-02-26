<?php
/**
 * Created by PhpStorm.
 * User: Sayat
 * Date: 026 26.02.18
 * Time: 15:31
 */

namespace frontend\models;

use Yii;

class Test
{
    public static function getNewsList()
    {
        $sql ='SELECT * FROM news';
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
}