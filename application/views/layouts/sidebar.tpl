<div class="top">
    <a href="/loom/" class="logo"></a>
    <div class="search">
        <div class="input-prepend">
            <span class="add-on orange"><span class="icon-search icon-white"></span></span>
            <input type="text"/>                                                      
        </div>            
    </div>
</div>

<ul class="navigation bordered">
        {foreach $sidebarMenus.items as $menuRow }
            {if isset($menuRow.items) && is_array($menuRow.items)}
                {foreach $menuRow.items as $subRow}
                    <li><a href="{$subRow.url}">{$subRow.label}</a></li>
                {/foreach}
            {else}
                <li><a href="{$menuRow.url}" class="{$menuRow.class}">{$menuRow.label}</a>    
            {/if}
        {/foreach}
    <li>
        <a href="#" class="blgreen">Forms Stuff</a>
        <div class="open"></div>
        <ul>
            <li><a href="forms.html">Form Elements</a></li>
            <li><a href="validation.html">Validation</a></li>
            <li><a href="grid.html">Grid</a></li>
            <li><a href="editor.html">Editors</a></li>  
            <li><a href="wizard.html">Wizard</a></li>
        </ul>
    </li>
    <li><a href="statistic.html" class="blred">Statistic</a></li>                
    <li class="active">
        <a href="#" class="bldblue">Tables</a>
        <div class="open"></div>
        <ul>
            <li><a href="tables.html">Simple</a></li>
            <li class="active"><a href="tables_dynamic.html">Dynamic</a></li>                    
        </ul>
    </li>
    <li>
        <a href="#" class="blpurple">Samples</a>
        <div class="open"></div>
        <ul>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="invoice.html">Invoice</a></li>
            <li><a href="login.html">Login</a></li>
        </ul>                    
    </li>
    <li>
        <a href="#" class="blorange">Other</a>
        <div class="open"></div>
        <ul>
            <li><a href="files.html">File handling</a></li>
            <li><a href="images.html">Images</a></li>
            <li><a href="typography.html">Typography</a></li>
            <li><a href="404.html">Error 404</a></li>
        </ul>
    </li>
</ul>

<div class="widget">
    <div class="datepicker"></div>
</div>