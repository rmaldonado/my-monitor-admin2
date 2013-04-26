<?php
class LoomComBaseModel extends LoomBaseModel{
    private $_comid;
    private static $companyid;
    
    public static function setCompanyId($comid) {
        self::$companyid = $comid;
    }
    public function getDbConnection() {
        $conn = parent::getDbConnection();
        $this->_comid = self::$companyid;
        $conn->setCompanyId($this->_comid);
        return $conn;
    }
    
    
    public function getCompanyId() {
        return $this->_comid;
    }
}

?>
