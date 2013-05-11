<link rel="icon" type="{$sitemedia.uri}/media/img/ico" href="favicon.ico"/>
<link href="{$sitemedia.uri}/media/css/bootstrap/bootstrap.src.css" rel="stylesheet" type="text/css" />
<link href="{$sitemedia.uri}/media/css/bootstrap/bootstrap-responsive.src.css" rel="stylesheet" type="text/css" />
<link href="/media/css/icons.css" rel="stylesheet" type="text/css" />{* firefox will throw cross domain error *}
<link href="{$sitemedia.uri}/media/css/stylesheets.css" rel="stylesheet" type="text/css" />
<link href="{$sitemedia.uri}/media/css/nav.css" rel="stylesheet" type="text/css" />
{if isset($media.styles)}
{foreach $media.styles as $style}<link href="/media/css/{$style}" rel="stylesheet" type="text/css" />{/foreach}    
{/if}    
<!--[if lte IE 7]>
    <link href="{$sitemedia.uri}/media/css/ie.css" rel="stylesheet" type="text/css" />
    <script type='text/javascript' src='{$sitemedia.uri}/media/js/plugins/other/lte-ie7.js'></script>
<![endif]-->
