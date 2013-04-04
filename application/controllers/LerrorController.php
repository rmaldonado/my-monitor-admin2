<?php
class LerrorController extends LoomController {
    public $layout = false;
    public function actionError() {
        
        $errorInfoRows = array (
            'errorsArr'     => array(
                '400'   => array(
                    'msg'   =>  '',
                ),
                '401'   => array(
                    'msg'   =>  '',
                ),
                '403'   => array(
                    'msg'   =>  '',
                ),
                '404'   => array(
                    'msg'   =>  '页面未找到',
                ),                
                '500'   => array(
                    'msg'   =>  '',
                ),  
                '503'   => array(
                    'msg'   =>  '',
                ),                  
            )
        );
        $errorInfoRows = array (
                'errorsArr' => array(404 => $errorInfoRows['errorsArr'][404]),
        );
        $viewName = 'error';
        $this->render($viewName, $errorInfoRows);
    }
}

?>
