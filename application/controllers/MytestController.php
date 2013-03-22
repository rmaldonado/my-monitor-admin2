<?php

class MytestController extends CController
{
    //put your code here
    public function actionIndex()
    {

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
}

