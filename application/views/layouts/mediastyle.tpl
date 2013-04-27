<link rel="icon" type="/media/img/ico" href="favicon.ico"/>
<link href="/media/css/stylesheets.css" rel="stylesheet" type="text/css" />
{if isset($media.styles)}
{foreach $media.styles as $style}<link href="/media/css/{$style}" rel="stylesheet" type="text/css" />{/foreach}    
{/if}    
<!--[if lte IE 7]>
    <link href="/media/css/ie.css" rel="stylesheet" type="text/css" />
    <script type='text/javascript' src='/media/js/plugins/other/lte-ie7.js'></script>
<![endif]-->  