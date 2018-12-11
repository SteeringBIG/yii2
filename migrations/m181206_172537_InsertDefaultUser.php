<?php

use yii\db\Migration;

/**
 * Class m181206_163115_InsertUser
 */
class m181206_172537_InsertDefaultUser extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	    $this->insert('{{%user}}', [
	    	'login' => 'Admin',
		    'name' => 'Administrator',
		    'password_hash' => '000',
	    ]);
	    
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
		$this->delete('{{%user}}', 'login=Admin');
		$this->delete('{{%user}}', 'login=User');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181206_163115_InsertUser cannot be reverted.\n";

        return false;
    }
    */
}
