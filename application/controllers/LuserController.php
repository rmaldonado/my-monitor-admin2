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
            $jsonArr = array();
            if($loginObj->validate() && $loginObj->login())
            {
                $jsonArr['url'] = Yii::app()->user->returnUrl;
                $jsonArr['retcode'] = 0;
            }
            else {
                $jsonArr['url'] = null;
                $jsonArr['retcode'] = -1;
            }
            echo json_encode($jsonArr);
        }
        else {
            $tplFile = 'loginform';
            $tplFile = 'sp_loginform';
            if ($this->view === null) {
                $this->view = Yii::app()->getViewRenderer();
            }
            $this->view->sitemedia = array(
                'uri'   => Yii::app()->params['mediauri'],
            );
            $datas = array(
                'sitemedia' => array(
                    'uri'   => Yii::app()->params['mediauri'],
                    'jssuffix' => Yii::app()->params['mediasuffix'],
                ),
               
            );
            $this->render($tplFile, $datas);
        }
    }
    
    public function ActionLogout() {
        session_destroy();
        Yii::app()->user->logout();
        $url = '/loom/luser/login';
        Yii::app()->getRequest()->redirect($url);
    }
}

?>
