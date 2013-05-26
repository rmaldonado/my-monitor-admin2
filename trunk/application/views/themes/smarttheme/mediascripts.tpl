<script src="{$sitemedia.uri}/media/smarttheme/js/lib/jquery/jquery.min.js"></script>	
<script src="{$sitemedia.uri}/media/smarttheme/js/bootstrap.min.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="{$sitemedia.uri}/media/smarttheme/js/excanvas.min.js"></script>
<![endif]-->
<script type="text/javascript" src="{$sitemedia.uri}/media/smarttheme/js/lib/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="{$sitemedia.uri}/media/smarttheme/js/lib/jquery/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript" src="{$sitemedia.uri}/media/smarttheme/js/lib/jquery/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="{$sitemedia.uri}/media/smarttheme/js/lib/jquery/jquery.easy-pie-chart.min.js"></script>
<script type="text/javascript" src="{$sitemedia.uri}/media/smarttheme/js/lib/jquery/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="{$sitemedia.uri}/media/smarttheme/js/lib/jquery/jquery.flot.min.js"></script>
<script type="text/javascript" src="{$sitemedia.uri}/media/smarttheme/js/lib/jquery/jquery.flot.pie.min.js"></script>
<script type="text/javascript" src="{$sitemedia.uri}/media/smarttheme/js/lib/jquery/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="{$sitemedia.uri}/media/smarttheme/js/lib/jquery/jquery.timer.src.js"></script>

<script type='text/javascript' src='{$sitemedia.uri}/media/smarttheme/js/lib/hichart/highcharts.src.js'></script>
<script type='text/javascript' src="{$sitemedia.uri}/media/smarttheme/js/lib/hichart/modules/exporting.js"></script>

<script src="{$sitemedia.uri}/media/smarttheme/js/ace-elements.min.js"></script>
<script src="{$sitemedia.uri}/media/smarttheme/js/ace.min.js"></script>
{if isset($media.scripts)}
{foreach $media.scripts as $script}<script type='text/javascript' src='{$sitemedia.uri}/media/smarttheme/js/{$script}'></script>{/foreach}   
{/if}