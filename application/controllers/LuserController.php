<?php


class LuserController extends LoomController {
    
    public function accessRules() {
        return array(
            array('allow',
				'users'=>array('*'),
			),
        );
    }
    
    public function actionLogin() {
        print_r($_REQUEST);
        var_dump(Yii::app()->user);
    }
}

?>
