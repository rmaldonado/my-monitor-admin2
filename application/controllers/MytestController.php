<?php

class MytestController extends LoomComController
{
    //put your code here
    public $menus = array(
        'items' => array(),
    );
    
    public function actionIndex()
    {
        $mod = new MytestService();
        $mod->setInfo('sdfsf');
        var_dump($mod);
        $ret = $mod->find('fid = 2');
        
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
        $tbutton = $this->widget('bootstrap.widgets.TbButton', array(
            'label'=>'Primary',
            'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
            'size'=>'large', // null, 'large', 'small' or 'mini'
        ), true);
            
		//$cnt->run();
        //var_dump($cnt);
        $this->view->media = array(
                'scripts' => array(
                    'plugins/jquery/jquery.timer.js',
                    'mytest/static.js',
                ),
            ); 
        $infoRows = array();
        $num = 1;
        for($i = 1; $i < 10; $i++) {
            $row = array();
            for($j = 1; $j < 20; $j++) {
                $row[] = array(
                    'sid'   => sprintf('A%03d', $num++),
                );
            }
            $infoRows[] = $row;
        }

        $this->view->looms = array(
            'info'  => $infoRows,
        );
        //$this->view->tbutton = $tbutton;
        //$this->view->btgroup = $btgroup;
        $this->render($view, $viewdata);
    }
    
    public function actionPlot()
    {
        $view = 'plot';
        $viewdata = array();
        $this->render($view, $viewdata);
    }
}

