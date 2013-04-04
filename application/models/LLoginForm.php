<?php
class LLoginForm extends CFormModel{
    public $username;
    public $password;
    public $remember = false;
    
    private $_identity;
    
    public function rules() {
        return array(
            array('username,password', 'required'),
            array('remember', 'boolean'),
            array('password', 'authenticate'),
        );
    }
    
    public function authenticate($attribute, $params) {
        $this->_identity = new LUserIdentity($this->username, $this->password);
        if (!$this->_identity->authenticate()) {
            $this->addError('password', '密码错误');
        }
    }
    
    public function login() {
        if ($this->_identity === null) {
            $this->_identity = new LUserIdentity($this->username, $this->password);
            $this->_identity->authenticate();
        }

        if ($this->_identity->errorCode === LUserIdentity::ERROR_NONE) {
            $duration = 0;
            Yii::app()->user->login($this->_identity, $duration);
            return true;
        }
        
        return false;
    }
    
}

?>
