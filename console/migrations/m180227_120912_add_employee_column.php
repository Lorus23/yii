<?php

use yii\db\Migration;


class m180227_120912_add_employee_column extends Migration
{

    public function safeUp()
    {
        $this->addColumn('employee', 'Oklad', 'integer');
    }


    public function safeDown()
    {
        $this->dropColumn('employee', 'Oklad');
    }



}
