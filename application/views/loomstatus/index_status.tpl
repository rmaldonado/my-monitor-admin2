<div class="block">
{*<div class="alert alert-block alert-error fade in">
    <button class="close " data-dismiss="alert" type="button">
        <div class="icon">
            <span class="ico-remove"></span>
        </div>
    </button>
    <p >dsfsdfsd</p>
    <p >dsda sdfe sfsdfsd</p>
 </div>

 <div id="myalert">
     <button class="close" data-dismiss="alert" type="button">×</button>
     <div class="msg"></div>
 </div>*}
    <div class="row-fluid">
        <div class="span12 container">
            <div class="rows show-grid" id="loomstatus">
{foreach $looms.info as $row}{*foreach $row as $col*}
               <div id="l_{$row.frepeaterid}_{$row.flcardid}" rel="popover" class="btn btn-small rbtn rbtn-et {*if $col.st == 'run'}  btn-success rbtn 
                    {else if $col.st == 'low'} btn-spark rbtn-et
                    {else} rbtn-et{/if*}">{$row.floomname}</div>
{*/foreach*}{/foreach}
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var tmp = {$looms.json};
    var loomsinfo = {};
    for (var i = 0; i < tmp.length; i++) {
        var l = tmp[i];
        var _id = 'l_'+l['frepeaterid']+'_'+l['flcardid'];
        loomsinfo[_id] = l;
    };
</script>