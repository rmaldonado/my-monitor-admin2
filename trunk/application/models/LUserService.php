<?php

class LUserService extends LoomBaseModel{
    private $_identity = null;
    public $username;
    public $password;
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    
    public function tableName() {
        return '{{customers}}';
    }
    
    public function login() {
        if($this->_identity === null)
        {
            $this->_identity = new LUserIdentity($this->username, $this->password);
            $this->_identity->authenticate();
        }        
        Yii::app()->user->login($this->_identity,0);
        return true;
    }
    
}

?>
