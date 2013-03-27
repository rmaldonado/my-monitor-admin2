<?php

class MytestController extends LoomController
{
    //put your code here
    public function actionIndex()
    {
         echo 'sdfsdf';
    }
    
    public function actionGetmap()
    {
        //echo "getMap";
        $act = $this->getAction();
        $req = Yii::app()->getRequest();
        $id = $req->getParam("id");
        $mod = new UserEvents();
        $view = 'getmap';
        $viewdata = array(
            'ppt' => array(
                    'kk' => 'sdfsfds'
                ),
        );
        
        $this->render($view, $viewdata);
        
    }
    
    public function actionStatic()
    {
        $view = 'static';
        $viewdata = array();

        $this->render($view, $viewdata);
    }
}

