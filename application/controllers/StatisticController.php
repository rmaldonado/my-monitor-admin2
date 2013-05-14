<?php

class StatisticController extends LoomComController{
    
    public function ActionIndex() {
        $viewName = 'index';
        $this->view->media = array(
            'scripts'   =>  array(
                'statistic/index.js',
            ),
        );
        $this->render($viewName);
    }
    
    public function ActionEffect() {
        
        //TODO
        $viewName = 'effect';
        $this->render($viewName);
    }
    
    public function ActionProduct() {
        
        //TODO
        $viewName = 'product';
        $this->render($viewName);
    }
}

?>
