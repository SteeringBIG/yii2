<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * RegisterForm is the model behind the register form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class RegisterForm extends Model
{
	public $username;
	public $email;
	public $password;
	
	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			['username', 'trim'],
			['username', 'required'],
			['username', 'unique', 'targetAttribute' => 'login', 'targetClass' => '\app\models\User', 'message' => 'Этот логин не подходит. Минимум 2, максимум 255 символов.'],
			//['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Этот логин не подходит. Минимум 2, максимум 255 символов.'],
			['username', 'string', 'min' => 2, 'max' => 255],
			['email', 'trim'],
			['email', 'required'],
			['email', 'email'],
			['email', 'string', 'max' => 255],
			['email', 'unique', 'targetAttribute' => 'e_mail', 'targetClass' => '\app\models\User', 'message' => 'Email не прошол проверку.'],
			//['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Email не прошол проверку.'],
			['password', 'required'],
			['password', 'string', 'min' => 6],
		];
	}
	// ['nama_barang', 'unique', 'targetAttribute' => ['nama_barang'], 'message' => 'Username must be unique.'],   targetAttribute
	/**
	 * Registers user
	 *
	 * @return User|null the saved model or null if saving fails
	 */
	public function register()
	{
		if (!$this->validate()) {
			return null;
		}
		
		$user = new User();
		$user->login = $this->username;
		$user->e_mail = $this->email;
		$user->setPassword($this->password);
		
		return $user->save() ? $user : null;
	}
}