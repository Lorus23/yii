<?php
/*@var $model frontend\models\Subscribe */
//if (Yii::$app->session->hasFlash('success')){
//    echo Yii::$app->session->getFlash('success');
//}
$this->title = 'Подпишитесь на новости!';

if ($model->hasErrors()){
    echo '<pre>';
    print_r($model->getErrors());
    echo '<pre>';
}
?>

<form method="post">
    <p>Email:</p>
    <input type="text" name="email" />
    <br><br>
    <input type="submit"/>
</form>