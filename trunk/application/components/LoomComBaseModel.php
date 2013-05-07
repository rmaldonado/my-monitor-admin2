<?php
abstract class LoomComBaseModel extends LoomBaseModel{
    protected $_comid;
    
    protected function initCompanyId() {
        $this->_comid = Yii:app()->user->fcompanyid;
    }
    
    public  function setCompanyId($comid) {
        $this->_comid = $comid;
    }
    
    public function getDbConnection() {
        $this->initCompanyId();
        $conn = parent::getDbConnection();
        $conn->setCompanyId($this->_comid);
        return $conn;
    }
    
    
    public function getCompanyId() {
        return $this->_comid;
    }
}

?>
