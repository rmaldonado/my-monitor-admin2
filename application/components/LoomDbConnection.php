<?php

class LoomDbConnection extends CDbConnection {
    private $_dbprefix = 'comloom_';
    private $_comid = 0;
    private $_schema;
    public function getSchema() {        

        if ($this->_schema === null)
        {
            $this->_schema = Yii::createComponent('LoomDbSchema', $this);
        }
        
        $this->_schema->setDbName($this->getDbName());
        
        return $this->_schema;
    }
    
    public function setCompanyId($comid)  {
        $this->_comid = $comid;        
    }
    
    public function getCompanyId() {
        return $this->_comid;
    }
    
    public function getDbName() {
        return $this->_dbprefix . $this->_comid;
    }
    
    public function getDbPrefix() {
        return $this->_dbprefix;
    }
    
    public function setDbPrefix($dbprefix) {
        $this->_dbprefix = $dbprefix;
    }
}

?>
