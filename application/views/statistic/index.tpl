<div class="page-header">
    <div class="icon">
        <span class="ico-arrow-right"></span>
    </div>
    <h1>生产统计 {*<small>METRO STYLE ADMIN PANEL</small>*}</h1>    
</div>
<div class="row-fluid">
    <div class="block">
        <div class="data tabbable">                    
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#tab1" style="font-weight: bold">织机效率</a></li>
                <li class=""><a data-toggle="tab" href="#tab2" type="yield" style="font-weight: bold">织机产量</a></li>
                <li class=""><a data-toggle="tab" href="#tab3" type="fault" style="font-weight: bold">织机故障率</a></li>

            </ul>
            <div class="tab-content">
                <div id="tab1" class="tab-pane active">                    
                    <p>产量排在前10位的织机产量和效率统计图(按月统计)</p>
                    <div id="top10_chart"></div>
                </div>
                <div id="tab2" class="tab-pane">
                    <p>织机产量统计图</p>
                    <div id="yield_chart"></div>
                </div>
                <div id="tab3" class="tab-pane">
                    <p>所以织机品均故障率（按月统计) </p>
                    <div id="avgfaultrate_chart" ></div>
                </div>                
            </div>
        </div>
    </div>
</div>
{*<div class="row-fluid">
    <div class="block">
        <div class="head">效率TOP10</div>
        <div class="data">
            
        </div>
        
    </div>
</div>*}