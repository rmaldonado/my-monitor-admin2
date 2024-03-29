<style>
    .highcharts-button {
            display:none;
        }
</style>    
<div id="page-content" class="clearfix">
    {*
    <div class="page-header position-relative">
    <h1>概览 <small><i class="icon-double-angle-right"></i> 汇总 & 统计</small></h1>
    </div>
    *}


    <div class="row-fluid">
        {*
        <div class="alert alert-block alert-success">
        <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
        <i class="icon-ok green"></i> Welcome to <strong class="green">Ace <small>(v1)</small></strong>,
        the lightweight, feature-rich, easy to use and well-documented admin template.
        </div>
        *}


        <div class="space-6"></div>
        <div class="row-fluid">


            <div class="span7 infobox-container">

                <div class="infobox infobox-green">
                    <div class="infobox-icon"><i class="icon-bar-chart"></i></div>
                    <div class="infobox-data">
                        <span class="infobox-data-number" id="loom_effect_month"></span>
                        <span class="infobox-content">本月效率</span>
                    </div>
                    <div class="stat stat-success">8%</div>
                </div>


                <div class="infobox infobox-purple">
                    <div class="infobox-icon"><i class="icon-bar-chart"></i></div>
                    <div class="infobox-data">
                        <span class="infobox-data-number" id="loom_effect_day"></span>
                        <span class="infobox-content">本日效率</span>
                    </div>
                    {*<div class="badge badge-success"></div>*}
                </div>
                
                <div class="infobox infobox-orange2">
                    <div class="infobox-icon"><i class="icon-bar-chart"></i></div>
                    <div class="infobox-data">
                        <span class="infobox-data-number">--</span>
                        <span class="infobox-content">本班效率</span>
                    </div>
                    <div class="stat stat-important">4%</div>
                </div>
{* -------------------------------------- *}
                <div class="infobox infobox-blue">
                    <div class="infobox-icon"><i class="icon-cogs"></i></div>
                    <div class="infobox-data">
                        <span class="infobox-data-number" id="loom_rpm_month"></span>
                        <span class="infobox-content">本月平均转速(转/分)</span>
                    </div>
                    <div class="stat stat-success">8%</div>
                </div>
                <div class="infobox infobox-blue">
                    <div class="infobox-icon"><i class="icon-cogs"></i></div>
                    <div class="infobox-data">
                        <span class="infobox-data-number" id="loom_rpm_day"></span>
                        <span class="infobox-content">本日平均转速(转/分)</span>
                    </div>
                    <div class="stat stat-success">8%</div>
                </div>
                
                <div class="infobox infobox-blue">
                    <div class="infobox-icon"><i class="icon-cogs"></i></div>
                    <div class="infobox-data">
                        <span class="infobox-data-number">--</span>
                        <span class="infobox-content">本班平均转速(转/分)</span>
                    </div>
                    <div class="stat stat-success">8%</div>
                </div>
{* -------------------------------------- *}              


                <div class="infobox infobox-red">
                    <div class="infobox-chart">
                        <span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
                    </div>
                    <div class="infobox-data">
                        <span class="infobox-data-number" id="loom_output_day">--</span>
                        <span class="infobox-content">今日产量(单位：米)</span>
                    </div>
                </div>



                <div class="infobox infobox-orange2">
                    <div class="infobox-chart">
                        <span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
                    </div>
                    <div class="infobox-data">
                        <span class="infobox-data-number" id="loom_output_month">--</span>
                        <span class="infobox-content">本月产量(单位：米)</span>
                    </div>
                    <div class="badge badge-success">7.2% <i class="icon-arrow-up"></i></div>
                </div>


                <div class="infobox infobox-blue2">
                    <div class="infobox-chart">
                        <span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
                    </div>

                    <div class="infobox-data">
                        <span class="infobox-text">--</span>
                        <span class="infobox-content"><span class="approx">~</span>总产量(单位：米)</span>
                    </div>
                </div>


                <div class="space-6"></div>


                <div class="infobox infobox-small infobox-dark infobox-blue2">

                    <div class="infobox-data">
                        <span class="infobox-content" style="font-size:24px;"><b id="loom_total_num"></b></span>
                        <br />
                        <span class="infobox-content">全部织机</span>
                    </div>
                </div>

                <div class="infobox infobox-small infobox-dark infobox-green">
                    <div class="infobox-data">
                        <span class="infobox-content" style="font-size:24px;"><b id="loom_run_num"></b></span>
                        <br />
                        <span class="infobox-content">运转织机</span>
                    </div>
                </div>

                <div class="infobox infobox-small infobox-dark infobox-red">
                    <div class="infobox-data">
                        <span class="infobox-content" style="font-size:24px;"><b id="loom_fault_num">32</b></span>
                        <br />
                        <span class="infobox-content">停台</span>
                    </div>
                </div>

                <div class="infobox infobox-small infobox-dark infobox-orange2">
                    <div class="infobox-data">
                        <span class="infobox-content" style="font-size:24px;"><b id="loom_stop_num"></b></span>
                        <br />
                        <span class="infobox-content">离线</span>
                    </div>
                </div>

            </div>


            <div class="vspace"></div>


            <div class="span5">
                <div class="widget-box">
                    <div class="widget-header widget-header-flat widget-header-small sptheme">
                        <h5><i class="icon-bar-chart"></i>分车间产量统计</h5>
                        <div class="widget-toolbar no-border">
                            <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown">本周 
                                <i class="icon-angle-down icon-on-right"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-info pull-right dropdown-caret">
                                <li class="active"><a href="#">本周</a></li>
                                <li><a href="#">上一周</a></li>
                                <li><a href="#">本月</a></li>
                                <li><a href="#">上一月</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="widget-body">
                        <div class="widget-main">
                            <div id="piechart-placeholder"></div>

                            <div class="hr hr8 hr-double"></div>

                            <div class="clearfix">
                                <div class="grid2">
                                    <h4 class="bigger ">一车间最高：1,255</h4>
                                </div>

                                <div class="grid2">
                                    <h4 class="bigger ">二车间最低：941</h4>
                                </div>
                            </div>
                        </div><!--/widget-main-->
                    </div><!--/widget-body-->
                </div><!--/widget-box-->


            </div><!--/span-->


        </div><!--/row-->

{*
        <div class="hr hr32 hr-dotted"></div>


        <div class="row-fluid">


            <div class="span5">
                <div class="widget-box transparent">
                    <div class="widget-header widget-header-flat">
                        <h4 class="lighter"><i class="icon-star orange"></i>产品列表</h4>
                        <div class="widget-toolbar">
                            <a href="#" data-action="collapse"><i class="icon-chevron-up"></i></a>
                        </div>
                    </div>

                    <div class="widget-body">
                        <div class="widget-main no-padding">
                            <table id="table_bug_report" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th><i class="icon-caret-right blue"></i>产品名称</th>
                                        <th><i class="icon-caret-right blue"></i>产量</th>
                                        <th class="hidden-phone"><i class="icon-caret-right blue"></i>状态</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="">internet.com</td>
                                        <td>
                                            <small><s class="red">$29.99</s></small>
                                            <b class="green">$19.99</b>
                                        </td>
                                        <td class="hidden-phone"><span class="label label-info arrowed-right arrowed-in">on sale</span></td>
                                    </tr>

                                    <tr>
                                        <td class="">online.com</td>
                                        <td>
                                            <b class="blue">$16.45</b>
                                        </td>
                                        <td class="hidden-phone"><span class="label label-success arrowed-in arrowed-in-right">approved</span></td>
                                    </tr>

                                    <tr>
                                        <td class="">newnet.com</td>
                                        <td>
                                            <b class="blue">$15.00</b>
                                        </td>
                                        <td class="hidden-phone"><span class="label label-important arrowed">pending</span></td>
                                    </tr>
                                    <tr>
                                        <td class="">web.com</td>
                                        <td>
                                            <small><s class="red">$19.95</s></small>
                                            <b class="green">$14.99</b>
                                        </td>
                                        <td class="hidden-phone"><span class="label arrowed"><s>out of stock</s></span></td>
                                    </tr>

                                    <tr>
                                        <td class="">domain.com</td>
                                        <td>
                                            <b class="blue">$12.00</b>
                                        </td>
                                        <td class="hidden-phone"><span class="label label-warning arrowed arrowed-right">SOLD</span></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div><!--/widget-main-->
                    </div><!--/widget-body-->
                </div><!--/widget-box-->
            </div>



            <div class="span7">
                <div class="widget-box transparent">
                    <div class="widget-header widget-header-flat">
                        <h4 class="lighter"><i class="icon-signal"></i> 织机效率趋势图</h4>
                        <div class="widget-toolbar">
                            <a href="#" data-action="collapse"><i class="icon-chevron-up"></i></a>
                        </div>
                    </div>

                    <div class="widget-body">
                        <div class="widget-main padding-5">
                            <div id="sales-charts"></div>
                        </div><!--/widget-main-->
                    </div><!--/widget-body-->
                </div><!--/widget-box-->
            </div>

        </div>



        <div class="hr hr32 hr-dotted"></div>



        <div class="row-fluid">

            <div class="span6">
                <div class="widget-box transparent">

                    <div class="widget-header">
                        <h4 class="lighter smaller"><i class="icon-rss orange"></i>RECENT</h4>
                        <div class="widget-toolbar no-border">
                            <ul class="nav nav-tabs" id="recent-tab">
                                <li class="active"><a data-toggle="tab" href="#task-tab">Tasks</a></li>
                                <li><a data-toggle="tab" href="#member-tab">Members</a></li>
                                <li><a data-toggle="tab" href="#comment-tab">Comments</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="widget-body">
                        <div class="widget-main padding-5">
                            <div class="tab-content padding-8">
                                <div id="task-tab" class="tab-pane active">
                                    <h4 class="smaller lighter green"><i class="icon-list"></i> Sortable Lists</h4>
                                    <ul id="tasks" class="item-list">
                                        <li class="item-orange clearfix">
                                            <label class="inline"><input type="checkbox" /><span class="lbl"> Answering customer questions</span></label>
                                            <div class="pull-right easy-pie-chart percentage" data-size="30" data-color="#ECCB71" data-percent="42">
                                                <span class="percent">42</span>%
                                            </div>
                                        </li>
                                        <li class="item-red clearfix">
                                            <label class="inline"><input type="checkbox" /><span class="lbl"> Fixing bugs</span></label>
                                            <div class="pull-right">
                                                <div class="btn-group">
                                                    <button class="btn btn-mini btn-info"><i class="icon-edit"></i></button>
                                                    <button class="btn btn-mini btn-danger "><i class="icon-trash"></i></button>
                                                    <button class="btn btn-mini btn-yellow"><i class="icon-flag"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item-default clearfix">
                                            <label class="inline"><input type="checkbox" /><span class="lbl"> Adding new features</span></label>
                                            <div class="inline pull-right position-relative">
                                                <button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-angle-down icon-only"></i></button>
                                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-closer">
                                                    <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Mark&nbsp;as&nbsp;done" data-placement="left"><span class="green"><i class="icon-ok"></i></span></a></li>
                                                    <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="item-blue">
                                            <label class="inline"><input type="checkbox" /><span class="lbl"> Upgrading scripts used in template</span></label>
                                        </li>
                                        <li class="item-grey">
                                            <label class="inline"><input type="checkbox" /><span class="lbl"> Adding new skins</span></label>
                                        </li>
                                        <li class="item-green">
                                            <label class="inline"><input type="checkbox" /><span class="lbl"> Updating server software up</span></label>
                                        </li>
                                        <li class="item-pink">
                                            <label class="inline"><input type="checkbox" /><span class="lbl"> Cleaning up</span></label>
                                        </li>
                                    </ul>
                                </div>



                                <div id="member-tab" class="tab-pane">
                                    <div class="clearfix">
                                        <div class="itemdiv memberdiv">
                                            <div class="user">
                                                <img alt="Bob's avatar" src="smarttheme/img/user.jpg" />
                                            </div>

                                            <div class="body">
                                                <div class="name"><a href="#">Bob Doe</a></div>
                                                <div class="time"><i class="icon-time"></i> <span class="green">20 min</span></div>
                                                <div>
                                                    <span class="label label-warning">pending</span>
                                                    <div class="inline position-relative">
                                                        <button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-angle-down icon-only"></i></button>
                                                        <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                            <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Approve" data-placement="right"><span class="green"><i class="icon-ok"></i></span></a></li>
                                                            <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject" data-placement="right"><span class="orange"><i class="icon-remove"></i></span> </a></li>
                                                            <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="right"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="itemdiv memberdiv">
                                            <div class="user">
                                                <img alt="Joe's Avatar" src="smarttheme/img/avatar2.png" />
                                            </div>

                                            <div class="body">
                                                <div class="name"><a href="#">Joe Doe</a></div>
                                                <div class="time"><i class="icon-time"></i> <span class="green">1 hour</span></div>
                                                <div>
                                                    <span class="label label-warning">pending</span>
                                                    <div class="inline position-relative">
                                                        <button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-angle-down icon-only"></i></button>
                                                        <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                            <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Approve" data-placement="left"><span class="green"><i class="icon-ok"></i></span></a></li>
                                                            <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject" data-placement="left"><span class="orange"><i class="icon-remove"></i></span> </a></li>
                                                            <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="itemdiv memberdiv">
                                            <div class="user">
                                                <img alt="Jim's Avatar" src="smarttheme/img/avatar.png" />
                                            </div>

                                            <div class="body">
                                                <div class="name"><a href="#">Jim Doe</a></div>
                                                <div class="time"><i class="icon-time"></i> <span class="green">2 hour</span></div>
                                                <div>
                                                    <span class="label label-warning">pending</span>
                                                    <div class="inline position-relative">
                                                        <button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-angle-down icon-only"></i></button>
                                                        <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                            <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Approve" data-placement="right"><span class="green"><i class="icon-ok"></i></span></a></li>
                                                            <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject" data-placement="right"><span class="orange"><i class="icon-remove"></i></span> </a></li>
                                                            <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="right"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="itemdiv memberdiv">
                                            <div class="user">
                                                <img alt="Alex's Avatar" src="smarttheme/img/avatar2.png" />
                                            </div>

                                            <div class="body">
                                                <div class="name"><a href="#">Alex Doe</a></div>
                                                <div class="time"><i class="icon-time"></i> <span class="green">3 hour</span></div>
                                                <div class="label label-important">blocked</div>
                                            </div>
                                        </div>


                                        <div class="itemdiv memberdiv">
                                            <div class="user">
                                                <img alt="Bob's Avatar" src="smarttheme/img/avatar2.png" />
                                            </div>

                                            <div class="body">
                                                <div class="name"><a href="#">Bob Doe</a></div>
                                                <div class="time"><i class="icon-time"></i> <span class="green">6 hour</span> </div>
                                                <div class="label label-success arrowed-in">approved</div>
                                            </div>
                                        </div>


                                        <div class="itemdiv memberdiv">
                                            <div class="user">
                                                <img alt="Susan's Avatar" src="smarttheme/img/avatar3.png" />
                                            </div>

                                            <div class="body">
                                                <div class="name"><a href="#">Susan</a></div>
                                                <div class="time"><i class="icon-time"></i> <span class="green">yesterday</span></div>
                                                <div class="label label-success arrowed-in">approved</div>
                                            </div>
                                        </div>


                                        <div class="itemdiv memberdiv">
                                            <div class="user">
                                                <img alt="Phil's Avatar" src="smarttheme/img/avatar4.png" />
                                            </div>

                                            <div class="body">
                                                <div class="name"><a href="#">Phil Doe</a></div>
                                                <div class="time"><i class="icon-time"></i> <span class="green">2 days ago</span></div>
                                                <div class="label label-info arrowed-in  arrowed-in-right">online</div>
                                            </div>
                                        </div>


                                        <div class="itemdiv memberdiv">
                                            <div class="user">
                                                <img alt="Alexa's Avatar" src="smarttheme/img/avatar1.png" />
                                            </div>

                                            <div class="body">
                                                <div class="name"><a href="#">Alexa Doe</a></div>
                                                <div class="time"><i class="icon-time"></i> <span class="green">3 days ago</span></div>
                                                <div class="label label-success arrowed-in">approved</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="center">
                                        <i class="icon-group icon-2x green"></i> &nbsp; <a href="#">See all members &nbsp; <i class="icon-arrow-right"></i></a>
                                    </div>
                                    <div class="hr hr-double hr8"></div>

                                </div><!-- member-tab -->



                                <div id="comment-tab" class="tab-pane">
                                    <div class="comments">
                                        <div class="itemdiv commentdiv">
                                            <div class="user">
                                                <img alt="Bob's Avatar" src="smarttheme/img/avatar.png" />
                                            </div>

                                            <div class="body">
                                                <div class="name"><a href="#">Bob Doe</a></div>
                                                <div class="time"><i class="icon-time"></i> <span class="green">6 min</span></div>
                                                <div class="text">
                                                    <i class="icon-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
                                                </div>
                                            </div>

                                            <div class="tools">
                                                <div class="inline position-relative">
                                                    <button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-angle-down icon-only"></i></button>
                                                    <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                        <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Approve" data-placement="left"><span class="green"><i class="icon-ok"></i></span></a></li>
                                                        <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject" data-placement="left"><span class="orange"><i class="icon-remove"></i></span> </a></li>
                                                        <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="itemdiv commentdiv">
                                            <div class="user">
                                                <img alt="Jennifer's Avatar" src="smarttheme/img/avatar1.png" />
                                            </div>

                                            <div class="body">
                                                <div class="name"><a href="#">Jennifer</a></div>
                                                <div class="time"><i class="icon-time"></i> <span class="blue">15 min</span></div>
                                                <div class="text">
                                                    <i class="icon-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip; 
                                                </div>
                                            </div>

                                            <div class="tools">
                                                <a href="#" class="btn btn-minier btn-info"><i class="icon-only icon-pencil"></i></a>
                                                <a href="#" class="btn btn-minier btn-danger"><i class="icon-only icon-trash"></i></a>
                                            </div>
                                        </div>


                                        <div class="itemdiv commentdiv">
                                            <div class="user">
                                                <img alt="Joe's Avatar" src="smarttheme/img/avatar2.png" />
                                            </div>

                                            <div class="body">
                                                <div class="name"><a href="#">Joe</a></div>
                                                <div class="time"><i class="icon-time"></i> <span class="orange">22 min</span></div>
                                                <div class="text">
                                                    <i class="icon-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
                                                </div>
                                            </div>

                                            <div class="tools">
                                                <a href="#" class="btn btn-minier btn-info"><i class="icon-only icon-pencil"></i></a>
                                                <a href="#" class="btn btn-minier btn-danger"><i class="icon-only icon-trash"></i></a>
                                            </div>
                                        </div>


                                        <div class="itemdiv commentdiv">
                                            <div class="user">
                                                <img alt="Rita's Avatar" src="smarttheme/img/avatar3.png" />
                                            </div>

                                            <div class="body">
                                                <div class="name"><a href="#">Rita</a></div>
                                                <div class="time"><i class="icon-time"></i> <span class="red">50 min</span></div>
                                                <div class="text">
                                                    <i class="icon-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
                                                </div>
                                            </div>

                                            <div class="tools">
                                                <a href="#" class="btn btn-minier btn-info"><i class="icon-only icon-pencil"></i></a>
                                                <a href="#" class="btn btn-minier btn-danger"><i class="icon-only icon-trash"></i></a>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="hr hr8"></div>
                                    <div class="center">
                                        <i class="icon-comments-alt icon-2x green"></i> &nbsp; <a href="#">See all comments &nbsp; <i class="icon-arrow-right"></i></a>
                                    </div>
                                    <div class="hr hr-double hr8"></div>

                                </div>
                            </div>
                        </div><!--/widget-main-->
                    </div><!--/widget-body-->


                </div><!--/widget-box-->
            </div><!--/span-->

            <div class="span6">
                <div class="widget-box ">

                    <div class="widget-header">
                        <h4 class="lighter smaller"><i class="icon-comment blue"></i>Conversation</h4>
                    </div>

                    <div class="widget-body">
                        <div class="widget-main no-padding">

                            <div class="dialogs">
                                <div class="itemdiv dialogdiv">
                                    <div class="user">
                                        <img alt="Alexa's Avatar" src="smarttheme/img/avatar1.png" />
                                    </div>

                                    <div class="body">
                                        <div class="time"><i class="icon-time"></i> <span class="green">4 sec</span></div>
                                        <div class="name"><a href="#">Alexa</a></div>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. </div>

                                        <div class="tools">
                                            <a href="#" class="btn btn-minier btn-info"><i class="icon-only icon-share-alt"></i></a>
                                        </div>
                                    </div>
                                </div>


                                <div class="itemdiv dialogdiv">
                                    <div class="user">
                                        <img alt="John's Avatar" src="smarttheme/img/avatar.png" />
                                    </div>

                                    <div class="body">
                                        <div class="time"><i class="icon-time"></i> <span class="blue">38 sec</span></div>
                                        <div class="name"><a href="#">John</a></div>
                                        <div class="text">Raw denim you probably haven't heard of them jean shorts Austin.</div>

                                        <div class="tools">
                                            <a href="#" class="btn btn-minier btn-info"><i class="icon-only icon-share-alt"></i></a>
                                        </div>
                                    </div>
                                </div>


                                <div class="itemdiv dialogdiv">
                                    <div class="user">
                                        <img alt="Bob's avatar" src="smarttheme/img/user.jpg" />
                                    </div>

                                    <div class="body">
                                        <div class="time"><i class="icon-time"></i> <span class="orange">2 min</span></div>
                                        <div class="name"><a href="#">Bob</a> <span class="label label-info arrowed arrowed-in-right">admin</span></div>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. </div>

                                        <div class="tools">
                                            <a href="#" class="btn btn-minier btn-info"><i class="icon-only icon-share-alt"></i></a>
                                        </div>
                                    </div>
                                </div>


                                <div class="itemdiv dialogdiv">
                                    <div class="user">
                                        <img alt="Jim's Avatar" src="smarttheme/img/avatar4.png" />
                                    </div>

                                    <div class="body">
                                        <div class="time"><i class="icon-time"></i> <span class="muted">3 min</span></div>
                                        <div class="name"><a href="#">Jim</a></div>
                                        <div class="text">Raw denim you probably haven't heard of them jean shorts Austin.</div>

                                        <div class="tools">
                                            <a href="#" class="btn btn-minier btn-info"><i class="icon-only icon-share-alt"></i></a>
                                        </div>
                                    </div>
                                </div>


                                <div class="itemdiv dialogdiv">
                                    <div class="user">
                                        <img alt="Alexa's Avatar" src="smarttheme/img/avatar1.png" />
                                    </div>

                                    <div class="body">
                                        <div class="time"><i class="icon-time"></i> <span class="green">4 min</span></div>
                                        <div class="name"><a href="#">Alexa</a></div>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>

                                        <div class="tools">
                                            <a href="#" class="btn btn-minier btn-info"><i class="icon-only icon-share-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <form>
                                <div class="form-actions input-append">
                                    <input placeholder="Type your message here ..." type="text" class="width-75" name="message" />
                                    <button class="btn btn-small btn-info no-radius" onclick="return false;"><i class="icon-share-alt"></i> <span class="hidden-phone">Send</span></button>
                                </div>
                            </form>

                        </div><!--/widget-main-->
                    </div><!--/widget-body-->

                </div><!--/widget-box-->
            </div><!--/span-->

        </div><!--/row-->


*}




        <!-- PAGE CONTENT ENDS HERE -->
    </div><!--/row-->

</div><!--/#page-content-->