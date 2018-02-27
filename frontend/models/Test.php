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
    /**
     * @param integer $max
     * @return array $result
     *
     */
    public static function getNewsList($max)
    {
        $max = intval($max);
        $sql ='SELECT * FROM news LIMIT '.$max;
        $result = Yii::$app->db->createCommand($sql)->queryAll();

        $helper = new StringHelper();

        if (!empty($result) && is_array($result)){

        foreach ($result as $item) {
            $item['content'] = $helper->getShort($item['content'], 50);

        }
        }

        return $result;
    }

    /**
     * @param integer $id
     * @return array
     */
    public static function getNewsById($id)
    {
        $id = intval($id);
        $sql = 'SELECT * FROM news WHERE id = '.$id;
        return Yii::$app->db->createCommand($sql)->queryOne();

    }
}