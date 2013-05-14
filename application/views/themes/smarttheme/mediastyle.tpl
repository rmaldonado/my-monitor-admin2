<link rel="stylesheet"href="{$sitemedia.uri}/media/smarttheme/css/bootstrap.min.css"/>
<link rel="stylesheet"href="{$sitemedia.uri}/media/smarttheme/css/bootstrap-responsive.min.css"/>
<link rel="stylesheet" href="/media/smarttheme/css/fonts.css" />
<link rel="stylesheet" href="{$sitemedia.uri}/media/smarttheme/css/ace.min.css" />
<link rel="stylesheet" href="{$sitemedia.uri}/media/smarttheme/css/fonticons.min.css" />
<!--[if IE 7]>
<link rel="stylesheet" href="{$sitemedia.uri}/media/smarttheme/css/fixed/font-awesome-ie7.min.css" />
<![endif]-->

<link rel="stylesheet" href="{$sitemedia.uri}/media/smarttheme/css/ace-responsive.min.css" />
<link rel="stylesheet" href="{$sitemedia.uri}/media/smarttheme/css/ace-skins.min.css" />
<!--[if lt IE 9]>
<link rel="stylesheet" href="{$sitemedia.uri}/media/smarttheme/css/fixed/ace-ie.min.css" />
<![endif]-->
{if isset($media.styles)}
{foreach $media.styles as $style}<link href="/media/smarttheme/css/{$style}" rel="stylesheet" type="text/css" />{/foreach}    
{/if} 