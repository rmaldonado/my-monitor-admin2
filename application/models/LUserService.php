<?php

class LUserService extends LoomBaseModel{
    
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    
    public function tableName() {
        return '{{customers}}';
    }
    
}

?>
