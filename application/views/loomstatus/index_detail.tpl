<div class="row-fluid">
    <div class="head blue">
        <div class="icon"><i class="icon-bar-chart"></i></div>
        <h2>详细信息</h2>
        <ul class="buttons">
            <li><a href="#myModal" role="button" data-toggle="modal">
                    <div class="icon">
                        <span class="icon-info-sign"></span></div>
                </a>
            </li>
        </ul>
    </div>
    
    <ul class="nav nav-tabs" id="myTab">
        <li class="active"><a data-toggle="tab" href="#home">生产情况</a></li>
        <li class=""><a data-toggle="tab" href="#profile">经纬纱信息</a></li>
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">织机信息 <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#dropdown1">按班次</a></li>
                <li><a data-toggle="tab" href="#dropdown2">按挡车工</a></li>
            </ul>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent" style="overflow:none;">
        <div id="home" class="tab-pane fade in active">
            <div class="row-fluid">

                 <div class="span7">                

                     <div class="block">

                         <div class="data-fluid">

                             <div class="row-form">
                                 <div class="span2">品名:</div>
                                 <div class="span4">
                                     <!--input type="text" class="validate[required] datepicker" id="datepick_1" placeholder="Placeholder example"-->
                                     <input type="text" class="input-medium" readonly="readonly" id="product_name" value="">
                                 </div>
                                 <div class="span2">产量:</div>
                                 <div class="span4">                                     
                                     <input type="text" class="input-medium" readonly="readonly" id="product_output" value="">
                                 </div>                                 
                             </div>
                             <div class="row-form">
                                 <div class="span2">并轴组别:</div>
                                 <div class="span4"><input type="text" class="input-medium" id="roll_group" value=""></div>
                                 <div class="span2">织轴号：</div>
                                 <div class="span4"><input type="text" class="input-medium" id="roll_no" value=""></div>
                             </div>
                             <div class="row-fluid">
                                 <table class="table" id="loom_num_status">
                                     <tr><td colspan="6"></td></tr>
                                     <tr>
                                         <td>运&nbsp;转</td>
                                         <td>纬&nbsp;停</td>
                                         <td>边丝停</td>
                                         <td>耳丝停</td>
                                         <td>其它停</td>
                                         <td>效&nbsp;率</td>
                                     </tr>
                                     <tr>
                                         <td><span style="min-width: 36px;" class="label label-success" id="loom_runsec"> </span></td>
                                         <td><span style="min-width: 36px;" class="label label-warning" id="loom_wbrknum"></span></td>
                                         <td><span style="min-width: 36px;" class="label label-important" id="loom_sbrknum"> </span></td>
                                         <td><span style="min-width: 36px;" class="label label-important" id="loom_tbrknum"> </span></td>
                                         <td><span style="min-width: 36px;" class="label label-important" id="loom_obrknum"> </span></td>
                                         <td><span style="min-width: 36px;" class="label label-info" id="loom_effect"> </span></td>                                     
                                     </tr>
                                 </table>                                        
                             </div>
                         </div>
                     </div>

                 </div>

                 <div class="span5">                

                     <div class="block">                               
                         <div class="data-fluid">
                             <div class="row-form">
                                 <h3>在织：<span id="run_num"></span>台；尽机：<span id="comp_num"></span>台；故障：<span id="fault_num"></span>台</h3>
                                 <h3>当前效率：<span id="effect_current"></span></h3>
                                 <h3>本班效率：<span id="effect_team"></span></h3>
                                 <h3>本周效率：<span id="effect_week"></span></h3>
                                 <h3>本月效率：<span id="effect_month"></span></h3>
                             </div>
                         </div>                
                     </div>

                 </div>            

             </div>
        </div>
        
        <div id="profile" class="tab-pane fade">          
            <div class="block">

                <div class="data-fluid">

                    <div class="row-form">
                        <div class="span1">经纱规格:</div>
                        <div class="span3"><input type="text" readonly="readonly" id="chaine_fspinfo"></div>
                        <div class="span1">经纱厂家:</div>
                        <div class="span3"><input type="text" readonly="readonly" id="chaine_ffactory"></div>
                        <div class="span1">经纱批号:</div>
                        <div class="span3"><input type="text" readonly="readonly" id="chaine_fsn"></div>
                    </div>
                    <div class="row-form">
                        <div class="span1">经纱密度:</div>
                        <div class="span3"><input type="text" readonly="readonly" id="chaine_fdensity"></div>
                        <div class="span1">经缩率:</div>
                        <div class="span3"><input type="text" readonly="readonly" id="chaine_fminirate"></div>
                        <div class="span1">总经根数:</div>
                        <div class="span3"><input type="text" readonly="readonly" id="chaine_fnumber"></div>
                    </div>

                    <div class="row-form">
                        <div class="span1">纬纱规格:</div>
                        <div class="span3"><input type="text" value="" id="weft_fspinfo"></div>
                        <div class="span1">纬纱厂家:</div>
                        <div class="span3"><input type="text" value="" id="weft_ffactory"></div>
                        <div class="span1">纬纱厂家:</div>
                        <div class="span3"><input type="text" value="" id="weft_fsn"></div>                        
                    </div>
                    <div class="row-form">
                        <div class="span1">纬密:</div>
                        <div class="span3"><input type="text" value="" id="weft_fdensity"></div>
                        <div class="span1">周期转速:</div>
                        <div class="span3"><input type="text" value="" id="weft_fcycle"></div>
                        <div class="span1">周期纬纱:</div>
                        <div class="span3"><input type="text" value="" id="weft_fnumber"></div>                        
                    </div>


                    {*<div class="row-form">
                        <table class="table">
                            <tr><td colspan="6"></td></tr>
                            <tr>
                                <td><span>运&nbsp;转</span></td>
                                <td>纬&nbsp;停</td>
                                <td>边丝停</td>
                                <td>耳丝停</td>
                                <td>其它停</td>
                                <td>效&nbsp;率</td>
                            </tr>
                            <tr>
                                <td><span style="min-width: 36px;" class="label label-success">32423 </span></td>
                                <td><span style="min-width: 36px;" class="label label-warning">2</span></td>
                                <td><span style="min-width: 36px;" class="label label-important">3 </span></td>
                                <td><span style="min-width: 36px;" class="label label-important">3 </span></td>
                                <td><span style="min-width: 36px;" class="label label-important">3 </span></td>
                                <td><span style="min-width: 36px;" class="label label-info">98% </span></td>                                     
                            </tr>
                        </table>                                        
                    </div>*}
                </div>
            </div>            
        </div>
        <div id="dropdown2" class="tab-pane fade">
          <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
        </div>
    </div>
</div>

<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
      <div class="block">
        <div class="head blue">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3>织机状态说明</h3>
        </div>
      </div>
  </div>
  <div class="modal-body">
    <h4>织机状态：停机 <a class="btn btn-danger" >0000</a></h4>
    <h4>织机状态：在织 <a class="btn btn-success" >0000</a></h4>
    <h4>织机状态：满停 <a class="btn btn-primary">0000</a></h4>
    <h4>织机状态：故障 <a class="btn btn-spark"  >0000</a></h4>
    <h4>织机状态：离线 <a class="btn disabled">0000</a> </h4>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">确定</button>    
  </div>
</div>