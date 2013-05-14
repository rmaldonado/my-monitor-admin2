<div id="sidebar" class="sptheme">
    <div id="sidebar-shortcuts">
        <div id="sidebar-shortcuts-large">
            <a href="#"><button class="btn btn-small btn-success"><i class="icon-signal"></i></button></a>
            <button class="btn btn-small btn-info"><i class="icon-pencil"></i></button>
            <button class="btn btn-small btn-warning"><i class="icon-group"></i></button>
            <button class="btn btn-small btn-danger"><i class="icon-cogs"></i></button>
        </div>
        <div id="sidebar-shortcuts-mini">
            <a href="#"><span class="btn btn-success"></span></a>
            <span class="btn btn-info"></span>
            <span class="btn btn-warning"></span>
            <span class="btn btn-danger"></span>
        </div>
    </div> <!-- #sidebar-shortcuts -->

    <ul class="nav nav-list">

        {foreach $sidebarMenus.items as $menuRow}
            <li {if $currentURI === $menuRow.url}class="active"{/if}>
            {if isset($menuRow.items) && is_array($menuRow.items)}
                <a href="#" class="dropdown-toggle">
                    <i class="{$menuRow.class}"></i><span>{$menuRow.label}</span>
                    <b class="arrow icon-angle-down"></b>
                </a>
                <ul class="submenu" {if $currentURI === $menuRow.url}style="display: block;"{/if}>
                {foreach $menuRow.items as $subRow}
                    <li><a href="{$subRow.url}"><i class="icon-double-angle-right"></i><span>{$subRow.label}</span></a></li>
                {/foreach}
                </ul>    
            {else}
                <a href="{$menuRow.url}" ><i class="{$menuRow.class}"></i><span>{$menuRow.label}</span></a>
            {/if}
            </li>
        {/foreach}
        
    </ul>

    <div id="sidebar-collapse">
        <i class="icon-double-angle-left"></i>
    </div>
</div>
