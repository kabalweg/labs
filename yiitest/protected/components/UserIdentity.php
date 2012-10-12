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
	public function authenticate()
	{
            $identity = User::model()->findByAttributes(array('username'=>$this->username));
            if($identity) {
                if($identity->password = $this->password) {
                    Yii::app()->user->setState('username', $this->username);
                    Yii::app()->user->setState('password', $this->password);
                    $this->errorCode = self::ERROR_NONE;
                }
                else {
                    $this->errorCode = self::ERROR_PASSWORD_INVALID;
                }
            }
            else {
                $this->errorCode = self::ERROR_UNKNOWN_IDENTITY;
            }
            
            return !$this->errorCode;
            
            /*
		$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
             */
	}
}