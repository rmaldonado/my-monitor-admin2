<?php
class SiteController extends LoomController {

    public function actionIndex() {
        $data = array(
            'site_page_title'   => 'index',
        );
        
        $this->view->media = array(
            'scripts'   => array(
                'site/index.js',
            ),
        );
        $productRows = array();
        for($i =0; $i < 7; $i++) {
            $productRows[] = array(
                'code'  =>  '1515花瑶绉',
                'name'  =>  '1515花瑶绉',
                'spec'  =>  '2013尼达丝',
                'width' =>  '150',
                'tlength'   =>  '3880',
            );
        }
        $this->view->product = $productRows;
        $this->render('sp_index', $data);
    }
    
    public function actionCharteffect() {
        //TODO
        echo json_encode(array());
    }

    public function actionInfo() {
        //echo Yii::app()->user->femail;
        //$name = Yii::app()->user->extinfo;
        echo json_encode(array());
    }
    
    public function actionRollinfo() {
        //TODO
        echo json_encode(array());
        
    }

    public function login($username,$password) {
        $identity = new UserIdentity($username,$password);
        if($identity->authenticate())
                Yii::app()->user->login($identity);
        
        return $identity->isAuthenticated;
    }

    public function ActionProduct() {
        
        //TODO
        echo json_encode(array());
    }
    
    public function ActionEvents() {
        //TODO
        echo json_encode(array());
    }
            
}