<?php
/**
 * Created by PhpStorm.
 * User: Sayat
 * Date: 026 26.02.18
 * Time: 15:31
 */

namespace frontend\models;

use Yii;
use frontend\components\StringHelper;

class Test
{
    public static function getNewsList($max)
    {
        $max = intval($max);
        $sql ='SELECT * FROM news LIMIT '.$max;
        $result = Yii::$app->db->createCommand($sql)->queryAll();

        $helper = new StringHelper();



        foreach ($result as $item) {
            $item['content'] = $helper->getShort($item['content']);

        }

        return $result;
    }
}