<style>
.show-grid [class*="span"] {
    background-color: #EEEEEE;
    border-radius: 3px 3px 3px 3px;
    line-height: 40px;
    min-height: 40px;
    text-align: center;
}
.alert .close {
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
}
  .show-grid [class*="span"] {
    margin-bottom: 5px;
  }
	#feedback { font-size: 1.4em; }
	#selectable .ui-selecting { background: #FECA40; }
	#selectable .ui-selected { 
       /* background: #F39814; color: white; */
       border: 1px solid #f00;
    }
	#selectable { list-style-type: none; margin: 0; padding: 0;  }
	#selectable li { margin: 6px; padding: 1px; float: left; width: 80px; height: 60px; font-size: 16px; text-align: center; }
    .ui-selectable .ui-state-default .loomsn {

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

     <div class="container">
    <div class="row show-grid">
      <div class="span4">Span 4</div>
      <div class="span8">Span 8</div>
    </div>
</div>                       
  <div class="row-fluid">          
<ol id="selectable" class="ui-selectable">
    {foreach $looms.info as $row}
        {foreach $row as $col}
    <li class=" ui-state-default " ><div class="loomsn">{$col.sid} </div></li>
    {/foreach}
    {/foreach}
	{*<li class="ui-state-default">2</li>
	<li class="ui-state-default">3</li>
	<li class="ui-state-default">4</li>
	<li class="ui-state-default">5</li>
	<li class="ui-state-default">6</li>
	<li class="ui-state-default">7</li>
	<li class="ui-state-default">8</li>
	<li class="ui-state-default">9</li>
	<li class="ui-state-default">10</li>
	<li class="ui-state-default">11</li>
	<li class="ui-state-default">12</li>*}
</ol>
      </div>
                <table class="table dtable lcnp" cellpadding="0" cellspacing="0" width="100%">
                    <tbody>
                        {foreach $looms.info as $row}
                        <tr>
                            {foreach $row as $col}
                            <td>
                                <button class="btn btn-success" href="#">{$col.sid}</button>
                            </td>          
                            {/foreach}
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
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