<?php
class LoomComBaseModel extends LoomBaseModel{
    //put your code here
    public function getDbConnection() {
        parent::getDbConnection();
        return new TComMysqlSchema();
    }
    
    
}

?>
