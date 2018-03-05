<?php

use yii\db\Migration;


class m180228_063435_drop_column_city_employee extends Migration
{

    public function safeUp()
    {
        $this->dropColumn('employee', 'City');

    }


    public function safeDown()
    {
        $this->addColumn('employee', 'City', 'string');
    }

}
