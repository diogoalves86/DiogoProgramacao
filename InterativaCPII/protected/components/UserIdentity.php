<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */

	public $errorMessage = "";

	public function authenticate()
	{

		$record = User::model()->findByAttributes(array('login'=>$this->username));

		if($record === null){
			$this->errorMessage = "Login ou senha inválidos";
		} elseif ($record->password !== $this->password){
			$this->errorMessage = "Login ou senha inválidos";
		} else {
			$this->username=$record->login;
			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	}
}
