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
{foreach $looms.info as $row}{foreach $row as $col}
               <div class="btn {if $col.st == 'run'}  btn-success rbtn 
                    {else if $col.st == 'low'} btn-spark rbtn-et
                    {else} rbtn-et{/if}">{$col.sid}</div>
{/foreach}{/foreach}
            </div>
        </div>
    </div>
</div>