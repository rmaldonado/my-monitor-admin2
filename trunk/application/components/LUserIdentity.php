<?php
class LUserIdentity extends CUserIdentity
{
    private $_fid;
    private $_state = array();
    
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
                $this->_fid      = $userObj->fname;
                $this->username  = $userObj->fname;
                $this->errorCode = self::ERROR_NONE;
                $this->_state = array(
                    'femail'    => $userObj->femail,
                    'fscname'   => $userObj->fscname,
                    'fcompanyid'    => $userObj->fcompanyid,
                );
                $retCode = true;
            }
            return $retCode;
	}
        
    public function getPersistentStates() {
        return $this->_state;
    }
    
    public function getId() {
        return $this->_fid;
    }
    
    public function getExtinfo() {
        return 'sdd';
    }
}