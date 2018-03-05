<?php


namespace frontend\models;

use yii\base\Model;

class Employee extends Model
{
    const SCENARIO_EMPLOYEE_REGISTER = 'employee_register';
    const SCENARIO_EMPLOYEE_UPDATE = 'employee_update';

    public $firstName;
    public $lastName;
    public $middleName;
    public $email;


    public $birthDate;
    public $hiringDate;
    public $city;
    public $position;
    public $idCode;

    public function scenarios()
    {
        return [
            self::SCENARIO_EMPLOYEE_REGISTER=>['firstName','lastName','middleName','birthDate','hiringDate','city','email','position','idCode'],
            self::SCENARIO_EMPLOYEE_UPDATE=>['firstName','lastName','middleName'],
        ];
    }

    public function rules()
    {
        return [
            [['firsName','lastName','email'],'required'],
            [['firstName'],'string','min'=>2],
            [['lastName'],'string','min'=>3],
            [['middleName'],'string','min'=>3],
            [['email'],'email'],
            [['middleName'], 'required', 'on'=>self::SCENARIO_EMPLOYEE_UPDATE],
            [['birthDate','hiringDate'],'date','format'=>'php:Y-m-d'],
            [['city'], 'integer'],
            [['position'], 'string'],
            [['idCode'], 'string','length'=>10],
            [['hiringDate','position','idCode'], 'required','on'=>self::SCENARIO_EMPLOYEE_REGISTER],
        ];
    }

    public function save()
    {
        return true;
//        $sql = "INSERT INTO subscriber (id, email) VALUES (null, '{$this->email}')";
//        return Yii::$app->db-> createCommand($sql)->execute();

    }

}