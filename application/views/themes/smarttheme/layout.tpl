<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8" />
		<title>Dashboard - NetLoom</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        {include file="{$SMARTY_TPL_PATH}/themes/smarttheme/mediastyle.tpl"}
	</head>
	<body>
        {include file="{$SMARTY_TPL_PATH}/themes/smarttheme/topnav.tpl"}
		<div class="container-fluid" id="main-container">
			<a href="#" id="menu-toggler"><span></span></a> <!-- menu toggler -->            
            {include file="{$SMARTY_TPL_PATH}/themes/smarttheme/sidebar.tpl"}		
            <div id="main-content" class="clearfix">
                 {include file="{$SMARTY_TPL_PATH}/themes/smarttheme/searchbar.tpl"}
                 <div id="page-content" class="clearfix">
                 {$content}
                 </div>
                 {include file="{$SMARTY_TPL_PATH}/themes/smarttheme/skinset.tpl"}   
			</div>
		</div>
        {include file="{$SMARTY_TPL_PATH}/themes/smarttheme/footerbar.tpl"}
		{include file="{$SMARTY_TPL_PATH}/themes/smarttheme/mediascripts.tpl"}
	</body>
</html>
