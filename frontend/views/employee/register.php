<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
if ($model->hasErrors()){
    echo '<pre>';
    print_r($model->getErrors());
    echo '<pre>';
}
?>
<h1>Welcome to our company!</h1>


<?php $form = ActiveForm::begin(); ?>

<?php echo $form->field($model, 'firstName'); ?>
<?php echo $form->field($model, 'lastName'); ?>
<?php echo $form->field($model, 'middleName'); ?>
<?php echo $form->field($model, 'email'); ?>
<?php echo $form->field($model, 'birthDate'); ?>
<?php echo $form->field($model, 'hiringDate'); ?>
<?php echo $form->field($model, 'position'); ?>
<?php echo $form->field($model, 'idCode'); ?>
<?php echo $form->field($model, 'city')->dropDownList([
        '0'=>'London',
        '1'=>'Berlin',
        '2'=>'Tokyo',
        '3'=>'Astana',
]); ?>
<?php echo Html::submitButton('Send', ['class' => 'btn- btn-primary']);?>


<?php ActiveForm::end(); ?>
