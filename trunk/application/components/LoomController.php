<?php

class LoomController extends CController 
{
    public $layout      = 'layout';
    public $view        = null;// view render object
    public $breadcrumbs = array();
    public $menus       = array(
        'items' =>  array(
                array(
                    'label' => '总览', 
                    'url'   => '#',
                    'class' => 'blblue',
                    'acss'  => '',
                    'tcss'  => 'ico-monitor',
                    'items' => null,
                ),
                array(
                    'label'	=> '织机管理',
                    'class'	=> 'blyellow',
                    'url'       => '#',
                    'acss'      => 'yellow',
                    'tcss'      => 'ico-cog-2',
                    'items'	=> null,
                ),
                array(
                    'label'	=> '统计信息',
                    'class'	=> null,
                    'url'	=> 'ui.html',
                    'acss'      =>  'green',
                    'tcss'      =>  'ico-chart-4',
                    'items'     => null,
                ),
                array(
                    'label'	=> '上轴管理',
                    'class'	=> null,
                    'acss'      =>  'red',
                    'tcss'      =>  'ico-pen-2',
                    'url'	=> 'widgets.html',
                    'items'     =>  null,
                ),
                array(
                    'label'	=> '产品管理',
                    'class'	=> null,
                    'acss'      =>  'blue',
                    'tcss'      =>  'ico-layout-7',
                    'url'	=> 'buttons.html',
                    'items'     =>  null,
                ),
                array(
                    'label'	=> '员工管理',
                    'class'	=> null,
                    'acss'      =>  'purple',
                    'tcss'      =>  'ico-box',
                    'url'	=> 'icons.html',
                    'items'     =>  null,
                ),
                array(
                    'label'	=> '其他操作',
                    'class'	=> null,
                    'acss'      =>  'orange',
                    'tcss'      =>  'ico-cloud',
                    'url'	=> 'grid_sys.html',
                    'items'     =>  null,
                ),
            ),
    );
    

    public function getRender() {
        if ($this->view === null)
            $this->view = Yii::app()->getViewRenderer();
        
        return $this->view;
    }
    
    public function init() {
        $uri = Yii::app()->request->requestUri;
        if (strpos($uri, 'favicon') !== false || strpos($uri, 'robots') !== false) {
            Yii::app()->end();
        }
        parent::init();
        $this->view = Yii::app()->getViewRenderer();
        $this->view->userinfo = array(
            'fscname'   =>  Yii::app()->user->fscname,
        );
        $this->renderMenu();
    }
    
    public function renderMenu() {
        $this->view->sidebarMenus = $this->menus;
    }
    
    public function filters()
    {
            return array(
                    'accessControl', // perform access control for CRUD operations
            );
    }

    public function accessRules()
    {
            return array(
                    array('allow', // allow authenticated users to access all actions
                            'users'=>array('@'),
                    ),
                    array('deny',  // deny all users
                            'users'=>array('*'),
                    ),
            );
    }

}

?>
