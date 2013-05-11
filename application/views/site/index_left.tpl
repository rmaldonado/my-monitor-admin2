<div class="span7">

    <div class="block">
        <div class="head">
            <div class="icon"><span class="ico-chart-4"></span></div>
            <h2>织机效率趋势图</h2>
            <ul class="buttons">
                <li><a href="#" data="/loom/site/charteffect" class="ublock"><div class="icon"><span class="ico-undo"></span></div></a></li>
                <li><a href="#" class="cblock"><div class="icon"><span class="ico-sort"></span></div></a></li>
            </ul>
        </div>
        <div class="data">
        <div class="row-fluid">
            <div class="span3">
                <div class="stat">
                    <span class="cdblue">2,350</span>(台)<br/> 总织机
                </div>
            </div>
            <div class="span3">
                <div class="stat">
                    <span class="cblue">1,120</span>(台)<br/>运转
                </div>                                                                        
            </div>
            <div class="span3">
                <div class="stat">
                    <span class="corange">720</span>(台)<br/> 停机
                </div>                                                
            </div>
            <div class="span3">
                <div class="stat">
                    <span class="corange">720</span>(台)<br/> 停机
                </div>                                                
            </div>             
        </div> 
        </div>
        <div class="data">
            <div id="main_chart" style="height: 300px;"></div>                                
        </div>       
    </div>

    <div class="block">
        <div class="head orange">                                
            <h2>最近生产的产品</h2>
            <ul class="buttons">
                <li><a href="#" onClick="source('table_main'); return false;"><div class="icon"><span class="ico-info"></span></div></a></li>
                <li><a href="#" data="/loom/site/product" class="ublock"><div class="icon"><span class="ico-undo"></span></div></a></li>
                <li><a href="#" class="cblock"><div class="icon"><span class="ico-sort"></span></div></a></li>
            </ul>
        </div>
        <div class="data-fluid">
            <table cellpadding="0" cellspacing="0" width="100%" class="table lcnp">
                <thead>
                    <tr>
                        <th width="16"><input type="checkbox" class="checkall"/></th>                                        
                        <th>产品代码</th>
                        <th>产品名称</th>
                        <th>布种规格</th>
                        <th>幅宽(厘米)</th>
                        <th>满停长度(米)</th>
                        <th width="78">操作</th>
                    </tr>
                </thead>
                <tbody>
                {foreach $product as $row}    
                    <tr>
                        <td><input type="checkbox" name="checkbox"/></td>                                        
                        <td>{$row.code}</td>
                        <td>{$row.name}</td>
                        <td>{$row.spec}</td>  
                        <td>{$row.width}</td> 
                        <td>{$row.tlength}</td>
                        <td>
                            <a href="#" class="button green">
                                <div class="icon"><span class="ico-pencil"></span></div>
                            </a>
                            <a href="#" class="button red">
                                <div class="icon"><span class="ico-remove"></span></div>
                            </a>
                        </td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
        </div>                            
    </div>                        

</div>