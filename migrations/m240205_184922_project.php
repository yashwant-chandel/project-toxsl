<?php

use yii\db\Migration;

/**
 * Class m240205_184922_project
 */
class m240205_184922_project extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('projects',[
            'id'=>$this->primaryKey(),
            'title' => $this->string(255),
            'description' => $this->string(255),
        ]);
    

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
    }
        

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240205_184922_project cannot be reverted.\n";

        return false;
    }
    */
}
