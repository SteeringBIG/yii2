<?php

use yii\db\Migration;

/**
 * Handles the creation of table `info_kkm`.
 */
class m181219_141002_create_info_kkm_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	    $this->addForeignKey('FK_users_profiles', '{{%users}}', 'id_profile', '{{%profiles}}', 'id');
	    
        $this->createTable('{{%info_kkm}}', [
            'id' => $this->primaryKey(),
	        'date_upd' => $this->date()->comment('Дата обновления записи'),
	        'user_code' => $this->integer(3)->unsigned()->comment('Код пользователя вов нешней базе'),
	        'org_name' => $this->string(255)->comment('Название организации'),
	        'org_inn' => $this->integer(11)->unsigned()->comment('ИНН'),
	        'kkm_model' => $this->string(255)->comment('Модель ККМ'),
	        'kkm_number' => $this->integer(50)->unsigned()->comment('Серийный номер'),
	        'kkm_sno' => $this->string(100)->comment('Система налогообложения, может быть несколько'),
	        'kkm_firmware' => $this->string(6)->comment('Прошивка ККМ'),
	        'fn_size' => $this->integer(2)->comment('Срок работы ФН'),
	        'fn_protocol' => $this->string(20)->comment('Протокол обмена ФН'),
	        'sub_firmware' => $this->date()->comment('Дата подписки на обновление прошивки'),
	        'auto_upd_firmware' => $this->string(1)->comment('Автоматическое обновление прошивки'),
	        'groups_product' => $this->string(100)->comment('Список групп товаров'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('info_kkm');
    }
}
