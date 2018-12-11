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
			['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Этот логин не подходит. Минимум 2, максимум 255 символов.'],
			['username', 'string', 'min' => 2, 'max' => 255],
			['email', 'trim'],
			['email', 'required'],
			['email', 'email'],
			['email', 'string', 'max' => 255],
			['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Email не прошол проверку.'],
			['password', 'required'],
			['password', 'string', 'min' => 6],
		];
	}
	
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
		$user->username = $this->username;
		$user->email = $this->email;
		$user->setPassword($this->password);
		
		return $user->save() ? $user : null;
	}
}