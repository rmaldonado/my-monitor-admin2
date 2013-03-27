<?php

class LoomController extends CController 
{
    public $layout = 'column1';
    
    public $menus = array(
        'items' =>  array(
                array(
                    'label' => 'Dashboard', 
                    'url'   => '#',
                    'class' => 'blblue',
                    'items' => null,
                ),
                array(
                    'label'	=> 'UI Elements',
                    'class'	=> 'blyellow',
                    'url'   => '#',
                    'items'	=> array(
                        array(
                            'label'	=> 'UI Elements',
                            'class'	=> null,
                            'url'	=> 'ui.html',
                        ),
                        array(
                            'label'	=> 'Widgets',
                            'class'	=> null,
                            'url'	=> 'widgets.html',
                        ),
                        array(
                            'label'	=> 'Buttons',
                            'class'	=> null,
                            'url'	=> 'buttons.html',
                        ),
                        array(
                            'label'	=> 'Icons',
                            'class'	=> null,
                            'url'	=> 'icons.html',
                        ),
                        array(
                            'label'	=> 'Grid System',
                            'class'	=> null,
                            'url'	=> 'grid_sys.html',
                        ),
                    ),
                ),            
            ),
    );
    
    public $breadcrumbs = array();
    
}

?>
