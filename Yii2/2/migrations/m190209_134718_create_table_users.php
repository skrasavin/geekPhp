<?php

use yii\db\Migration;

/**
 * Class m190209_134718_create_table_users
 */
class m190209_134718_create_table_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->string(),
            'username' => $this->string()->notNull(),
            'password' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190209_134718_create_table_users cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190209_134718_create_table_users cannot be reverted.\n";

        return false;
    }
    */
}
