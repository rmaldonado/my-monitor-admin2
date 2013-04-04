<?php
class LUserIdentity extends CUserIdentity
{
        private $_fid;
	/**
	 * Validates the username and password.
	 * This method should check the validity of the provided username
	 * and password in some way. In case of any authentication failure,
	 * set errorCode and errorMessage with appropriate values and return false.
	 * @param string username
	 * @param string password
	 * @return boolean whether the username and password are valid
	 */
	public function authenticate()
	{
            
		if($this->username ==='demo' && $this->password === 'demo')
			$this->errorCode=self::ERROR_NONE;
		else
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
                $this->errorCode = self::ERROR_NONE;
                $this->_fid = 33;
		return !$this->errorCode;
	}
        
        public function getId() {
            return $this->_fid;
        }
}