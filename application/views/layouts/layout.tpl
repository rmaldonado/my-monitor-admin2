<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->                
    <title>{$SITETITLE_PREFIX}</title>
    {include file="{$SMARTY_TPL_PATH}/layouts/mediascripts.tpl"}    
</head>
<body>    
    <div id="loader"><img src="/media/img/loader.gif"/></div>
    <div class="wrapper">
        
        <div class="sidebar">
            {include file="{$SMARTY_TPL_PATH}/layouts/sidebar.tpl"}
        </div>
        
        <div class="body">            
            <ul class="navigation">
                {include file="{$SMARTY_TPL_PATH}/layouts/topnav.tpl"}
            </ul>
            
            <div class="content"> 
                {$content}
            </div>            
                
            </div>
    </div>        
    <div class="dialog" id="source" style="display: none;" title="Source"></div>
    <div style="margin-top:8px; text-align: center; color:#999;"> Eweilian Tech. &copy; 2013 - 2014 </div>
</body>
</html>
