<?php

use yii\db\Migration;

/**
 * Handles the creation of table `employee`.
 */
class m180227_120708_create_employee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('employee', [
            'id' => $this->primaryKey(),
            'FIO' => $this->string(),
            'Date of birth' => $this->date(),
            'City' => $this->string(),
            'experience' => $this->integer(),
            'dolzhnost' => $this->string(),
            'Num depart' => $this->integer(),
            'Id code' => $this->integer(),
            'email' => $this->string()->unique(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('employee');
    }
}
