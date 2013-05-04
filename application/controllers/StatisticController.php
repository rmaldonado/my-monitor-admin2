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
}

?>
