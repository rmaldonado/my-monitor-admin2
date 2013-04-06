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
            $encPass = md5($this->username.$this->password);
            $userObj = LUserService::model()
                        ->find('fname = ? AND fpass = ?', 
                                array($this->username, $encPass));
            $retCode = false;
            if ($userObj === null)
            {
                $this->errorCode = self::ERROR_USERNAME_INVALID;               
            }
            else {
                $this->_fid = $userObj->fid;
                $this->username = $userObj->fname;
                $this->errorCode = self::ERROR_NONE;
                $retCode = true;
            }
            return $retCode;
	}
        
        public function getId() {
            return $this->_fid;
        }
}