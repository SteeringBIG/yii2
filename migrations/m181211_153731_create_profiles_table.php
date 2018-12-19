<?php

use yii\db\Migration;

/**
 * Handles the creation of table `profiles`.
 */
class m181211_153731_create_profiles_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
    	$this->renameTable('{{%user}}', '{{%users}}');
    	
    	$this->dropColumn('{{%users}}', 'user_id');
    	$this->dropColumn('{{%users}}', 'last_name');
    	$this->dropColumn('{{%users}}', 'name');
    	$this->dropColumn('{{%users}}', 'phone');
	
	    $this->addColumn('{{%users}}', 'auth_key', $this->string(32));
	    $this->addColumn('{{%users}}', 'id_profile', $this->integer());
	    
    	$this->createTable('{{%profiles}}', [
            'id' => $this->primaryKey(),
	        'user_code' => $this->integer()->unsigned()->comment('Код пользователя во внешней базе'),
	        'last_name' => $this->string(50)->comment('Фамилия'),
	        'name' => $this->string(50)->comment('Имя'),
	        'e_mail' => $this->string(50)->comment('Электронная почта'),
	        'phone' =>$this->string(10)->comment('Телефон')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%profiles}}');
	
	    $this->dropColumn('{{%users}}', 'auth_key', $this->string(32));
	    $this->dropColumn('{{%users}}', 'id_profile', $this->integer());
	    
	    $this->addColumn('{{%users}}', 'user_id');
	    $this->addColumn('{{%users}}', 'last_name');
	    $this->addColumn('{{%users}}', 'name');
	    $this->addColumn('{{%users}}', 'phone');
	
	    $this->renameTable('{{%users}}', '{{%user}}');
	    
    }
}
