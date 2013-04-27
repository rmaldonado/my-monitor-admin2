<?php
class LoomDbSchema extends CMysqlSchema {
    //put your code here
    private $_dbname;
    
    public function setDbName($dbname) {
        $this->_dbname = $dbname;
    }
    
    public function getDbName() {
        return $this->_dbname;
    }
    
    public function loadTable($name) {
        $conn = $this->getDbConnection();
        $this->_dbname = $conn->getDbName();
        $name = $this->_dbname . '.' . $name;
        
        return parent::loadTable($name);
    }
}

?>
