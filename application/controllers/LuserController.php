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
        $req = Yii::app()->getRequest();
        if ( $req->getIsPostRequest()) {
            $loginObj = new LLoginForm();
            $username = trim($req->getParam('luserid'));
            $password = trim($req->getParam('lpasswd'));

            $loginObj->attributes = array(
                    'username' => $username,
                    'password' =>  $password,
                    'remember' => false,
            );

            if($loginObj->validate() && $loginObj->login())
                $this->redirect(Yii::app()->user->returnUrl);
            
        }
        else {
            $tplFile = 'loginform';
            $this->render($tplFile);
        }
    }
}

?>
