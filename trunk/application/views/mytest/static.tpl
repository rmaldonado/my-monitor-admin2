<style>
.show-grid [class*="span"] {
    background-color: #EEEEEE;
    border-radius: 3px 3px 3px 3px;
    line-height: 40px;
    min-height: 40px;

    text-align: center;
}
/*.alert .close {
    opacity: 1;
    -text-shadow: 0 1px 0 #FFFFFF;
    text-decoration: none;
}
.alert .close .icon {
    
    border: 1px solid #FFFFFF;
    border-radius: 50% 50% 50% 50%;
    height: 22px;
    line-height: 24px;
    margin: 7px;
    text-align: center;
    width: 22px;
    
}

.alert .close .icon [class ^= 'ico-'] {
    color: #FFFFFF;
    font-size: 16px;
    line-height: 24px;
    text-decoration: none;
    -opacity: 1;
    -text-shadow: 0 1px 0 #FFFFFF;
}*/
  .show-grid [class *= "rbtn"] {
    
    margin:12px 12px 12px 12px;
    border-radius: 4px 4px 4px 4px;
    font-size: 16px; 
    border-width:2px;
    border-style:solid;    
  }
  .show-grid .checked {
      border: 1px solid #f00;
  }
	#selectable .ui-selecting { background: #FECA40; }
	#selectable .ui-selected { 
       /* background: #F39814; color: white; */
       border: 2px solid #f00;

    }
	.ui-selectings { 
       /* background: #F39814; color: white; */
       border: 1px;
    }    
	#selectable { list-style-type: none; margin: 0; padding: 0;  }
	#selectable li { 
        border:1px;
        margin: 6px 6px 6px 6px; 
        padding: 4px 12px; 
        float: left;  
        font-size: 16px; 
        text-align: center; 
        border-radius: 4px 4px 4px 4px;
    }
    .ui-selectable .ui-state-default .loomsn {
        padding: 4px;
        cursor:pointer;
    }
</style>    
<div class="row-fluid">
    <div class="span12">
        <div class="block">
            <div class="head orange"><h2>test</h2></div>

                <div class="alert alert-block alert-error fade in">
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
                 </div>

            <div class="span11 container">
                <div class="row show-grid" id="loomstatus">

                {foreach $looms.info as $row}
                    {foreach $row as $col}
                        <div class="btn disabled rbtn">{$col.sid}</div>
                    {/foreach}
                {/foreach}
                </div>
            </div>                       


        </div>
                
        <div class="block">
            <div class="head blue">
                <div class="icon"><i class="ico-layout-9"></i></div>
                <h2>详细信息</h2>
                <ul class="buttons">
                    <li><a href="#" onClick="source('table_sort'); return false;"><div class="icon"><span class="ico-info"></span></div></a></li>
                </ul>
            </div>   
            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                <li class=""><a data-toggle="tab" href="#profile">Profile</a></li>
                <li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a data-toggle="tab" href="#dropdown1">@fat</a></li>
                    <li><a data-toggle="tab" href="#dropdown2">@mdo</a></li>
                  </ul>
                </li>
            </ul>
            
            <div class="tab-content" id="myTabContent">
                <div id="home" class="tab-pane fade in active">
                    <p id="mytimer"></p>
                    <p id="loomcnt"></p>
                  <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                </div>
                <div id="profile" class="tab-pane fade">
                  <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                </div>
                <div id="dropdown1" class="tab-pane fade">
                  <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                </div>
                <div id="dropdown2" class="tab-pane fade">
                  <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
                </div>
            </div>            
            
        </div>
                
        <div class="block">
            <div class="head blue">
                <div class="icon"><i class="ico-layout-9"></i></div>
                <h2>Default table sorting</h2>
                <ul class="buttons">
                    <li><a href="#" onClick="source('table_sort'); return false;"><div class="icon"><span class="ico-info"></span></div></a></li>
                </ul>
            </div>                
            <div class="data-fluid">

                    <table class="table dtable lcnp" cellpadding="0" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th><input type="checkbox" class="checkall"/></th>
                                <th width="20%"><span>Name</span></th>
                                <th>Product</th>
                                <th width="20%">Status</th>
                                <th width="20%">Date</th>
                                <th width="80" class="TAC">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="checkbox" name="order[]" value="528"/></td>
                                <td><a href="#"><span>Dmitry Ivaniuk</span></a></td>
                                <td>Product #212</td>
                                <td><span class="label label-important">New</span></td>
                                <td>24/11/2012</td>
                                <td>
                                    <a href="#" class="button green">
                                        <div class="icon"><span class="ico-pencil"></span></div>
                                    </a>
                                    <a href="#" class="button red">
                                        <div class="icon"><span class="ico-remove"></span></div>
                                    </a>                                              
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="order[]" value="527"/></td>
                                <td><a href="#">John Doe</a></td>
                                <td>Product #132</td>
                                <td><span class="label label-important">New</span></td>
                                <td>24/11/2012</td>
                                <td>
                                    <a href="#" class="button green">
                                        <div class="icon"><span class="ico-pencil"></span></div>
                                    </a>
                                    <a href="#" class="button red">
                                        <div class="icon"><span class="ico-remove"></span></div>
                                    </a>                                              
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="order[]" value="526"/></td>
                                <td><a href="#">Alex Fruz</a></td>
                                <td>Product #53</td>
                                <td><span class="label label-important">New</span></td>
                                <td>23/11/2012</td>
                                <td>
                                    <a href="#" class="button green">
                                        <div class="icon"><span class="ico-pencil"></span></div>
                                    </a>
                                    <a href="#" class="button red">
                                        <div class="icon"><span class="ico-remove"></span></div>
                                    </a>                                              
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="order[]" value="525"/></td>
                                <td><a href="#">Olga Yukhimchuk</a></td>
                                <td>Product #874</td>
                                <td><span class="label label-info">Pending</span></td>
                                <td>23/11/2012</td>
                                <td>
                                    <a href="#" class="button green">
                                        <div class="icon"><span class="ico-pencil"></span></div>
                                    </a>
                                    <a href="#" class="button red">
                                        <div class="icon"><span class="ico-remove"></span></div>
                                    </a>                                              
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="order[]" value="524"/></td>
                                <td><a href="#">Angelina Rose</a></td>
                                <td>Product #533</td>
                                <td><span class="label label-info">Pending</span></td>
                                <td>23/11/2012</td>
                                <td>
                                    <a href="#" class="button green">
                                        <div class="icon"><span class="ico-pencil"></span></div>
                                    </a>
                                    <a href="#" class="button red">
                                        <div class="icon"><span class="ico-remove"></span></div>
                                    </a>                                              
                                </td>
                            </tr>                            
                        </tbody>
                    </table>                    
                </div> 
        </div>
        <div class="block">
            <div class="head orange">
                <div class="icon"><span class="ico-layout-9"></span></div>
                <h2>Table sorting</h2>
                <ul class="buttons">
                    <li><a href="#" onClick="source('table_sort_custom'); return false;"><div class="icon"><span class="ico-info"></span></div></a></li>
                </ul>                            
            </div>                
                <div class="data-fluid">
                    <table class="table fTable lcnp" cellpadding="0" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th><input type="checkbox" class="checkall"/></th>
                                <th width="20%">Name</th>
                                <th>Product</th>
                                <th width="20%">Status</th>
                                <th width="20%">Date</th>
                                <th width="80" class="TAC">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="checkbox" name="order[]" value="528"/></td>
                                <td><a href="#">Dmitry Ivaniuk</a></td>
                                <td>Product #212</td>
                                <td><span class="label label-important">New</span></td>
                                <td>24/11/2012</td>
                                <td>
                                    <a href="#" class="button green">
                                        <div class="icon"><span class="ico-pencil"></span></div>
                                    </a>
                                    <a href="#" class="button red">
                                        <div class="icon"><span class="ico-remove"></span></div>
                                    </a>                                              
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="order[]" value="527"/></td>
                                <td><a href="#">John Doe</a></td>
                                <td>Product #132</td>
                                <td><span class="label label-important">New</span></td>
                                <td>24/11/2012</td>
                                <td>
                                    <a href="#" class="button green">
                                        <div class="icon"><span class="ico-pencil"></span></div>
                                    </a>
                                    <a href="#" class="button red">
                                        <div class="icon"><span class="ico-remove"></span></div>
                                    </a>                                              
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="order[]" value="526"/></td>
                                <td><a href="#">Alex Fruz</a></td>
                                <td>Product #53</td>
                                <td><span class="label label-important">New</span></td>
                                <td>23/11/2012</td>
                                <td>
                                    <a href="#" class="button green">
                                        <div class="icon"><span class="ico-pencil"></span></div>
                                    </a>
                                    <a href="#" class="button red">
                                        <div class="icon"><span class="ico-remove"></span></div>
                                    </a>                                              
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="order[]" value="525"/></td>
                                <td><a href="#">Olga Yukhimchuk</a></td>
                                <td>Product #874</td>
                                <td><span class="label label-info">Pending</span></td>
                                <td>23/11/2012</td>
                                <td>
                                    <a href="#" class="button green">
                                        <div class="icon"><span class="ico-pencil"></span></div>
                                    </a>
                                    <a href="#" class="button red">
                                        <div class="icon"><span class="ico-remove"></span></div>
                                    </a>                                              
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="order[]" value="524"/></td>
                                <td><a href="#">Angelina Rose</a></td>
                                <td>Product #533</td>
                                <td><span class="label label-info">Pending</span></td>
                                <td>23/11/2012</td>
                                <td>
                                    <a href="#" class="button green">
                                        <div class="icon"><span class="ico-pencil"></span></div>
                                    </a>
                                    <a href="#" class="button red">
                                        <div class="icon"><span class="ico-remove"></span></div>
                                    </a>                                              
                                </td>
                            </tr> 
                            <tr>
                                <td><input type="checkbox" name="order[]" value="600"/></td>
                                <td><a href="#">Alexandra Belova</a></td>
                                <td>Product #898</td>
                                <td><span class="label label-success">Delivered</span></td>
                                <td>21/11/2012</td>
                                <td>
                                    <a href="#" class="button green">
                                        <div class="icon"><span class="ico-pencil"></span></div>
                                    </a>
                                    <a href="#" class="button red">
                                        <div class="icon"><span class="ico-remove"></span></div>
                                    </a>                                              
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="order[]" value="601"/></td>
                                <td><a href="#">Ivanov Ivan</a></td>
                                <td>Product #900</td>
                                <td><span class="label label-success">Delivered</span></td>
                                <td>21/11/2012</td>
                                <td>
                                    <a href="#" class="button green">
                                        <div class="icon"><span class="ico-pencil"></span></div>
                                    </a>
                                    <a href="#" class="button red">
                                        <div class="icon"><span class="ico-remove"></span></div>
                                    </a>                                              
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="order[]" value="602"/></td>
                                <td><a href="#">Eugune Noise</a></td>
                                <td>Product #231</td>
                                <td><span class="label label-success">Delivered</span></td>
                                <td>20/11/2012</td>
                                <td>
                                    <a href="#" class="button green">
                                        <div class="icon"><span class="ico-pencil"></span></div>
                                    </a>
                                    <a href="#" class="button red">
                                        <div class="icon"><span class="ico-remove"></span></div>
                                    </a>                                              
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="order[]" value="603"/></td>
                                <td><a href="#">Anatoly Yukhim</a></td>
                                <td>Product #874</td>
                                <td><span class="label label-success">Delivered</span></td>
                                <td>20/11/2012</td>
                                <td>
                                    <a href="#" class="button green">
                                        <div class="icon"><span class="ico-pencil"></span></div>
                                    </a>
                                    <a href="#" class="button red">
                                        <div class="icon"><span class="ico-remove"></span></div>
                                    </a>                                              
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="order[]" value="604"/></td>
                                <td><a href="#">Vasily Ivaniuk</a></td>
                                <td>Product #355</td>
                                <td><span class="label label-success">Delivered</span></td>
                                <td>19/11/2012</td>
                                <td>
                                    <a href="#" class="button green">
                                        <div class="icon"><span class="ico-pencil"></span></div>
                                    </a>
                                    <a href="#" class="button red">
                                        <div class="icon"><span class="ico-remove"></span></div>
                                    </a>                                              
                                </td>
                            </tr>                                 
                        </tbody>
                    </table>                    
                </div> 
        </div>
        <div class="block">
            <div class="head dblue">
                <div class="icon"><span class="ico-layout-9"></span></div>
                <h2>Table sorting pagination</h2>
                <ul class="buttons">
                    <li><a href="#" onClick="source('table_sort_pagination'); return false;"><div class="icon"><span class="ico-info"></span></div></a></li>
                </ul>                                                        
            </div>                
                <div class="data-fluid">
                    <table class="table fpTable lcnp" cellpadding="0" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th><input type="checkbox" class="checkall"/></th>
                                <th width="20%">Name</th>
                                <th>Product</th>
                                <th width="20%">Status</th>
                                <th width="20%">Date</th>
                                <th width="80" class="TAC">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="checkbox" name="order[]" value="528"/></td>
                                <td><a href="#">Dmitry Ivaniuk</a></td>
                                <td>Product #212</td>
                                <td><span class="label label-important">New</span></td>
                                <td>24/11/2012</td>
                                <td>
                                    <a href="#" class="button green">
                                        <div class="icon"><span class="ico-pencil"></span></div>
                                    </a>
                                    <a href="#" class="button red">
                                        <div class="icon"><span class="ico-remove"></span></div>
                                    </a>                                              
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="order[]" value="527"/></td>
                                <td><a href="#">John Doe</a></td>
                                <td>Product #132</td>
                                <td><span class="label label-important">New</span></td>
                                <td>24/11/2012</td>
                                <td>
                                    <a href="#" class="button green">
                                        <div class="icon"><span class="ico-pencil"></span></div>
                                    </a>
                                    <a href="#" class="button red">
                                        <div class="icon"><span class="ico-remove"></span></div>
                                    </a>                                              
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="order[]" value="526"/></td>
                                <td><a href="#">Alex Fruz</a></td>
                                <td>Product #53</td>
                                <td><span class="label label-important">New</span></td>
                                <td>23/11/2012</td>
                                <td>
                                    <a href="#" class="button green">
                                        <div class="icon"><span class="ico-pencil"></span></div>
                                    </a>
                                    <a href="#" class="button red">
                                        <div class="icon"><span class="ico-remove"></span></div>
                                    </a>                                              
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="order[]" value="525"/></td>
                                <td><a href="#">Olga Yukhimchuk</a></td>
                                <td>Product #874</td>
                                <td><span class="label label-info">Pending</span></td>
                                <td>23/11/2012</td>
                                <td>
                                    <a href="#" class="button green">
                                        <div class="icon"><span class="ico-pencil"></span></div>
                                    </a>
                                    <a href="#" class="button red">
                                        <div class="icon"><span class="ico-remove"></span></div>
                                    </a>                                              
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="order[]" value="524"/></td>
                                <td><a href="#">Angelina Rose</a></td>
                                <td>Product #533</td>
                                <td><span class="label label-info">Pending</span></td>
                                <td>23/11/2012</td>
                                <td>
                                    <a href="#" class="button green">
                                        <div class="icon"><span class="ico-pencil"></span></div>
                                    </a>
                                    <a href="#" class="button red">
                                        <div class="icon"><span class="ico-remove"></span></div>
                                    </a>                                              
                                </td>
                            </tr> 
                            <tr>
                                <td><input type="checkbox" name="order[]" value="600"/></td>
                                <td><a href="#">Alexandra Belova</a></td>
                                <td>Product #898</td>
                                <td><span class="label label-success">Delivered</span></td>
                                <td>21/11/2012</td>
                                <td>
                                    <a href="#" class="button green">
                                        <div class="icon"><span class="ico-pencil"></span></div>
                                    </a>
                                    <a href="#" class="button red">
                                        <div class="icon"><span class="ico-remove"></span></div>
                                    </a>                                              
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="order[]" value="601"/></td>
                                <td><a href="#">Ivanov Ivan</a></td>
                                <td>Product #900</td>
                                <td><span class="label label-success">Delivered</span></td>
                                <td>21/11/2012</td>
                                <td>
                                    <a href="#" class="button green">
                                        <div class="icon"><span class="ico-pencil"></span></div>
                                    </a>
                                    <a href="#" class="button red">
                                        <div class="icon"><span class="ico-remove"></span></div>
                                    </a>                                              
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="order[]" value="602"/></td>
                                <td><a href="#">Eugune Noise</a></td>
                                <td>Product #231</td>
                                <td><span class="label label-success">Delivered</span></td>
                                <td>20/11/2012</td>
                                <td>
                                    <a href="#" class="button green">
                                        <div class="icon"><span class="ico-pencil"></span></div>
                                    </a>
                                    <a href="#" class="button red">
                                        <div class="icon"><span class="ico-remove"></span></div>
                                    </a>                                              
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="order[]" value="603"/></td>
                                <td><a href="#">Anatoly Yukhim</a></td>
                                <td>Product #874</td>
                                <td><span class="label label-success">Delivered</span></td>
                                <td>20/11/2012</td>
                                <td>
                                    <a href="#" class="button green">
                                        <div class="icon"><span class="ico-pencil"></span></div>
                                    </a>
                                    <a href="#" class="button red">
                                        <div class="icon"><span class="ico-remove"></span></div>
                                    </a>                                              
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="order[]" value="604"/></td>
                                <td><a href="#">Vasily Ivaniuk</a></td>
                                <td>Product #355</td>
                                <td><span class="label label-success">Delivered</span></td>
                                <td>19/11/2012</td>
                                <td>
                                    <a href="#" class="button green">
                                        <div class="icon"><span class="ico-pencil"></span></div>
                                    </a>
                                    <a href="#" class="button red">
                                        <div class="icon"><span class="ico-remove"></span></div>
                                    </a>                                              
                                </td>
                            </tr>                                 
                        </tbody>
                    </table>                    
                </div> 
        </div>
        <div class="block">
            <div class="head purple">
                <div class="icon"><span class="ico-layout-9"></span></div>
                <h2>AJAX Data load</h2>
                <ul class="buttons">
                    <li><a href="#" onClick="source('table_sort_ajax'); return false;"><div class="icon"><span class="ico-info"></span></div></a></li>
                </ul>                                                        
            </div>                
                <div class="data-fluid">
                    <table class="table aTable" cellpadding="0" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="20%">Rendering engine</th>
                                <th width="25%">Browser</th>
                                <th width="25%">Platform(s)</th>
                                <th width="15%">Engine version</th>
                                <th width="15%">CSS grade</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>                    
                </div> 
        </div>
    </div>
</div>  
{* --------------------------------- *}
<div id="statustips" style="display:none;">
    <div id="sWidget_4" class="block" style="position: relative; left: 0px; top: 0px;">

        <div class="data">
            Sed leo orci, placerat consectetur gravida a, varius in purus. Cras scelerisque lorem a lorem rutrum molestie. Nulla tincidunt diam at orci ultrices eleifend. Vestibulum metus elit, mollis sed blandit non, adipiscing ornare magna. Suspendisse eget tincidunt enim. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec vel lobortis felis.
        </div>
    </div>
</div>