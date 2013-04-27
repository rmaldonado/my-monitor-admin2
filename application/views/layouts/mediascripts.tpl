{assign var="jssuffix" value=$sitemedia.jssuffix}
<script type='text/javascript' src='{$sitemedia.uri}/media/js/plugins/jquery/jquery-1.9.1.min.js'></script>
<script type='text/javascript' src='{$sitemedia.uri}/media/js/plugins/jquery/jquery-ui-1.10.1.custom.min.js'></script>
<script type='text/javascript' src='{$sitemedia.uri}/media/js/plugins/jquery/jquery-migrate-1.1.1.min.js'></script>
<script type='text/javascript' src='{$sitemedia.uri}/media/js/plugins/jquery/globalize.js'></script>
<script type='text/javascript' src='{$sitemedia.uri}/media/js/plugins/other/excanvas.js'></script>

<script type='text/javascript' src='{$sitemedia.uri}/media/js/plugins/jflot/jquery.flot.js'></script>    
<script type='text/javascript' src='{$sitemedia.uri}/media/js/plugins/jflot/jquery.flot.stack.js'></script>    
<script type='text/javascript' src='{$sitemedia.uri}/media/js/plugins/jflot/jquery.flot.pie.js'></script>
<script type='text/javascript' src='{$sitemedia.uri}/media/js/plugins/jflot/jquery.flot.resize.js'></script>
<script type='text/javascript' src='{$sitemedia.uri}/media/js/plugins/other/jquery.mousewheel.min.js'></script>

<script type='text/javascript' src='{$sitemedia.uri}/media/js/plugins/bootstrap/bootstrap.{$jssuffix}.js'></script>            

<script type='text/javascript' src='{$sitemedia.uri}/media/js/plugins/cookies/jquery.cookies.2.2.0.min.js'></script>
 <script type='text/javascript' src='{$sitemedia.uri}/media/js/plugins/sparklines/jquery.sparkline.min.js'></script>
<script type='text/javascript' src='{$sitemedia.uri}/media/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'></script>
<script type='text/javascript' src="{$sitemedia.uri}/media/js/plugins/uniform/jquery.uniform.min.js"></script>

<script type='text/javascript' src='{$sitemedia.uri}/media/js/plugins/datatables/jtables.{$jssuffix}.js'></script>
<script type='text/javascript' src='{$sitemedia.uri}/media/js/plugins/datatables/jkeytable.{$jssuffix}.js'></script>

<script type='text/javascript' src='{$sitemedia.uri}/media/js/plugins/shbrush/XRegExp.js'></script>
<script type='text/javascript' src='{$sitemedia.uri}/media/js/plugins/shbrush/shCore.js'></script>
<script type='text/javascript' src='{$sitemedia.uri}/media/js/plugins/shbrush/shBrushXml.js'></script>
<script type='text/javascript' src='{$sitemedia.uri}/media/js/plugins/shbrush/shBrushJScript.js'></script>
<script type='text/javascript' src='{$sitemedia.uri}/media/js/plugins/shbrush/shBrushCss.js'></script>    

<script type='text/javascript' src='{$sitemedia.uri}/media/js/plugins/hichart/highcharts.{$jssuffix}.js'></script>
<script type='text/javascript' src="{$sitemedia.uri}/media/js/plugins/hichart/modules/exporting.js"></script>

<script type='text/javascript' src="/media/js/common.js"></script>
<script type='text/javascript'>    
    fixBodyWidth();
    $("#loadercnt").hide();//hidden load image
    bindRefreshEvents();
</script>
{if isset($media.scripts)}
{foreach $media.scripts as $script}<script type='text/javascript' src='/media/js/{$script}'></script>{/foreach}   
{/if}