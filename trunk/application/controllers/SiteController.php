<?php
class SiteController extends LoomController {

    public function actionIndex() {
        $data = array(
            'site_page_title'   => 'ffff',
        );
        $this->view->testvars = $data;
        $this->render('index', $data);
    }

    public function actionInfo() {
        //echo Yii::app()->user->femail;
        //$name = Yii::app()->user->extinfo;
        echo json_encode(array());
    }
    
    public function ActionRollinfo() {
        //TODO
        echo json_encode(array());
        
    }
    
    public function actionCharteffect() {
        //TODO
        echo json_encode(array());
    }
    public function beforeWebMethod($service) {
        $safeMethods=array(
            'login',
            'getContacts',
        );
        $pattern='/^('.implode('|',$safeMethods).')$/i';
        if(!Yii::app()->user->isGuest || preg_match($pattern,$service->methodName))
            return true;
        else
            throw new CException('Login required.');
    }


    public function afterWebMethod($service) {
        
    }


    public function login($username,$password) {
        $identity = new UserIdentity($username,$password);
        if($identity->authenticate())
                Yii::app()->user->login($identity);
        
        return $identity->isAuthenticated;
    }

    public function getContacts()
    {
            return Contact::model()->findAll();
    }

}