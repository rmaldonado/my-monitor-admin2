<?php

class MytestService extends LoomComBaseModel {
    //
    public function initCompanyId() {
        $comid = Yii::app()->user->fcompanyid;
        $this->setCompanyId($comid);
    }
    
    public function setInfo($info) {
    
        $this->floominfo = $info;
    }
    
    public function tableName() {

        return '{{loominfo}}';
    }
}

?>
