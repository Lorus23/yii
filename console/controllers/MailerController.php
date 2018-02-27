<?php

namespace console\controllers;

class MailerController extends \yii\console\Controller
{
    public function actionSend()
    {
   $result = \Yii::$app->mailer->compose()
       ->setFrom('bazarkanovsayat@gmail.com')
       ->setTo('bazarkanovsayat@gmail.com')
        ->setSubject('SMS Theme')
       -> setTextBody('SMS text')
       ->setHtmlBody('<b> SMS text in HTML format</b>')
       ->send();
   var_dump($result);die;
    }


}