<div id="navigation">
    <div class="container-fluid">
        <div class="user">
            <ul class="icon-nav">
                    <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#" title="织机状态事件">
                                <i class="ico-envelope-alt"></i>
                                <span class="label label-lightred">3</span>
                            </a>
                            <ul class="dropdown-menu pull-right message-ul">
                                    <li>
                                            <a href="#">
                                                    <img alt="" src="img/demo/user-1.jpg">
                                                    <div class="details">
                                                            <div class="name">织机 0032下布</div>
                                                            <div class="message">
                                                                    时间：2013-05-08 12:32:22
                                                            </div>
                                                    </div>
                                            </a>
                                    </li>
                                    <li>
                                            <a href="#">
                                                    <img alt="" src="img/demo/user-2.jpg">
                                                    <div class="details">
                                                            <div class="name">织机0234经丝断停</div>
                                                            <div class="message">
                                                                    时间：2013-05-08 14:32:22
                                                            </div>
                                                    </div>
                                                    <div class="count">
                                                            <i class="icon-comment"></i>
                                                            <span>3</span>
                                                    </div>
                                            </a>
                                    </li>
                                    <li>
                                            <a href="#">
                                                    <img alt="" src="img/demo/user-3.jpg">
                                                    <div class="details">
                                                            <div class="name">织机 0233 满停</div>
                                                            <div class="message">
                                                                    时间：2013-05-08 17:32:22
                                                            </div>
                                                    </div>
                                            </a>
                                    </li>
                                    <li>
                                        <a class="more-messages" href="#">
                                            事件记录中心 
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </li>
                            </ul>
                    </li>
                    <li class="dropdown sett">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#" title="报表及下载"><i class="ico-cog"></i></a>
                            
                            <ul class="dropdown-menu pull-right theme-settings">
                                    <li>
                                            <span>报表下载</span>
                                            <div class="version-toggle">
                                                    <a class="set-fixed" href="#">员工刷卡记录</a>
                                                    <a class="active set-fluid" href="#">员工产量记录</a>
                                            </div>
                                    </li>
                                    <li>
                                            <span>故障统计</span>
                                            <div class="topbar-toggle">
                                                    <a class="set-topbar-fixed" href="#">停机次数</a>
                                                    <a class="active set-topbar-default" href="#">停机时间</a>
                                            </div>
                                    </li>
                            </ul>
                    </li>
                    <li class="dropdown sett sbutton navButton">
                         <a href="#" title="显示下拉菜单"><i class="ico-align-justify"></i></a>
                    </li>
            </ul>

            <div class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">{$userinfo.fscname}
                        <img src="/media/img/examples/users/dmitry_m.jpg" style="margin:1px 12px;"/>
                    </a>
                        
                    <ul class="dropdown-menu pull-right">
                            <li>
                                    <a href="#">修改资料</a>
                            </li>
                            <li>
                                    <a href="#">系统设置</a>
                            </li>
                            <li>
                                    <a href="/loom/luser/logout">退出系统</a>
                            </li>
                    </ul>
            </div>         
        </div>
    </div>
</div>
{*foreach $sidebarMenus.items as $menuRow}
    <li>
        <a href="{$menuRow.url}" class="button {$menuRow.acss}">
            {if isset($menuRow.items) && is_array($menuRow.items)}<div class="arrow"></div>{/if}
            <div class="icon">
                <span class="{$menuRow.tcss}"></span>
            </div>                    
            <div class="name">{$menuRow.label}</div>
        </a>
    </li>    
    {if isset($menuRow.items) && is_array($menuRow.items)}
        <ul class="sub">
        {foreach $menuRow.items as $subRow}
            <li><a href="{$subRow.url}">{$subRow.label}</a></li>
        {/foreach}
        </ul>
    {/if}
{/foreach*}
