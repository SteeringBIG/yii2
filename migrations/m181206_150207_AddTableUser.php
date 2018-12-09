<?php

use yii\db\Migration;

/**
 * Class m181206_150207_AddTableUser
 */
class m181206_150207_AddTableUser extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->createTable('user', [
			'id' => $this->primaryKey()->comment('Первичный ключь'),
			'user_id' => $this->integer()->unsigned()->comment('Код пользователя во внешней базе'),
			'status' => $this->bigInteger()->unsigned()->notNull()->defaultValue(1)->comment('Статус пользователя в системе'),
			'login' => $this->string(50)->notNull()->unique()->comment('Логин пользователя'),
			'password_hash' => $this->string(200)->notNull(),
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
		$this->dropTable('user');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181206_150207_AddTableUser cannot be reverted.\n";

        return false;
    }
    */
}
