<?php

class MytestService extends LoomComBaseModel {
    //
    public function initCompanyId() {
        $comid = Yii::app()->user->fcompanyid;
        $this->setCompanyId($comid);
    }
    
    public function tableName() {

        return '{{loominfo}}';
    }
}

?>
