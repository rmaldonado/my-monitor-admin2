<?php


class LuserController extends LoomController {
    
    public function init() {
        $this->layout = false;
    }
    
    public function accessRules() {
        return array(
            array('allow',
                    'users'=>array('*'),
            ),
        );
    }
    
    public function actionLogin() {
        //print_r($_REQUEST);
        var_dump(Yii::app()->user);
        $tplFile = 'index';
        $model=new LUserService();
        $model->validate();
        $model->login();
        $this->render($tplFile);
    }
}

?>
