<div class="page-header">
    <div class="icon">
        <span class="ico-arrow-right"></span>
    </div>
    <h1>织机状态 {*<small>METRO STYLE ADMIN PANEL</small>*}</h1>    
</div>
<div class="row-fluid">
    <div class="span12">
        {include file="loomstatus/index_status.tpl"}
        {include file="loomstatus/index_detail.tpl"}
    </div>
</div>  
{* --------------------------------- *}
<div id="statustips" style="display:none;">
    <div class="title">
        <div class="head blue"><div class="icon"><i class="ico-grid"></i></div><h2>#loomid# 织机状态</h2></div>
    </div>
    <div class="content">
        <div class="content block" style="position: relative; left: 0px; top: 0px;">
            <div class="data">
               <p>当前转速：#currpm#</p>
               <p>当前效率: #effect#</p>
               <p>运行时间：#runtime#</p>
            </div>
        </div>
    </div>
</div>