{foreach $sidebarMenus.items as $menuRow}
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
{/foreach}               
<li>
    <div class="user">
        <img src="/media/img/examples/users/dmitry_m.jpg" align="left"/>
        <a href="#" class="name">
            <span>Dmitry Ivaniuk</span>
            <span class="sm">Administrator</span>
        </a>
    </div>
    <div class="buttons">
        <div class="sbutton green navButton">
            <a href="#"><span class="ico-align-justify"></span></a>
        </div>
        <div class="sbutton blue">
            <a href="#"><span class="ico-cogs"></span></a>
            <div class="popup">
                <div class="arrow"></div>
                <div class="row-fluid">
                    <div class="row-form">
                        <div class="span12"><strong>SETTINGS</strong></div>
                    </div>                                    
                    <div class="row-form">
                        <div class="span4">Navigation:</div>
                        <div class="span8"><input type="radio" class="cNav" name="cNavButton" value="default"/> Default <input type="radio" class="cNav" name="cNavButton" value="bordered"/> Bordered</div>
                    </div>                                    
                    <div class="row-form">
                        <div class="span4">Content:</div>
                        <div class="span8"><input type="radio" class="cCont" name="cContent" value=""/> Responsive <input type="radio" class="cCont" name="cContent" value="fixed"/> Fixed</div>
                    </div>                                    
                </div>
            </div>
        </div>                        
    </div>
</li>