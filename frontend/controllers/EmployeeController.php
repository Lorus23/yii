<?php
/**
 * Created by PhpStorm.
 * User: Sayat
 * Date: 028 28.02.18
 * Time: 12:42
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Employee;

class EmployeeController extends Controller
{

    public function actionIndex()
    {
        $employee1 = new Employee();
        $employee1->firstName='Alex';
        $employee1->lastName='Smith';
        $employee1->middleName='John';
        $employee1->salary=1000;

        echo $employee1['salary'];
        echo '<hr>';
        foreach ($employee1 as $atribute=>$value){
            echo "$atribute: $value<br>";
            $employee1->toArray();
        }

    }

    public function actionRegister()
    {
        $model = new Employee();
        $model->scenario=Employee::SCENARIO_EMPLOYEE_REGISTER;

        $formData = Yii::$app->request->post();

        if (Yii::$app->request->isPost){
            $model->attributes=$formData['Employee'];
            if ($model->validate() && $model->save()){
                Yii::$app->session->setFlash('success', 'Registered!') ;;
            }

        }

        return $this->render('register',[
            'model'=>$model,
        ]);
    }

    public function actionUpdate()
    {
        $model = new Employee();
        $model->scenario=Employee::SCENARIO_EMPLOYEE_UPDATE;

        $formData = Yii::$app->request->post();

        if (Yii::$app->request->isPost){
            $model->attributes=$formData;
            if ($model->validate() && $model->save()){
                Yii::$app->session->setFlash('success', 'Updated!') ;;
            }

        }

        return $this->render('update',[
            'model'=>$model,
        ]);
    }

}