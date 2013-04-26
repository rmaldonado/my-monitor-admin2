function fixBodyWidth(){
    
    fixItemsWidth('.input-prepend', ['.add-on','button'], 'input');
    fixItemsWidth('.input-append',  ['.add-on','button'], 'input');     
    var bodySelecter = '.wrapper > .body';
    
    if ($(bodySelecter).height() < window.innerHeight)
        $(bodySelecter).height(window.innerHeight+10);        
    else
        $(bodySelecter).removeAttr('style');
}

function fixItemsWidth(block, what, to) { 
    $(block).each(function(){        
        var iWidth = $(this).width();        
        if(what.length > 0){            
            for(var i=0; i < what.length; i++){
                $(this).find(what[i]).each(function(){
                    iWidth -= $(this).width()+(parseInt($(this).css('padding-left')) * 2);
                });
            }
            $(this).find(to).width(iWidth-14);            
        }
    });    
    
}

function addLoader(block){
    var bW = $(block).width();
    var bH = $(block).height();    
    $(block).append('<div class="loader" style="width: '+bW+'px; height: '+bH+'px;"><img src="/media/img/loader.gif"/></div>');
}
function removeLoader(block){
    $(block).find('.loader').remove();
}

function bindRefreshEvents() {
    //ublock
    $(".ublock").click(function(){
        var block = $(this).parents('[class^=block]');
        var srcurl = $(this).attr('data');
        srcurl = srcurl === undefined ? '/loom/site/missed' : srcurl;
        $.ajax({
                url: srcurl,
                beforeSend: function ( xhr ) {
                    //xhr.overrideMimeType("text/plain; charset=x-user-defined");
                    addLoader(block);
                }
            })
            .done(function(e) {
                removeLoader(block);
            })
            .fail(function(e) {
                window.alert(e);
            });
        ///////////////////////////
        return false;
    });
    
    $(".cblock").click(function(){
        var block = $(this).parents('.block').find("[class^=data]");
        if(block.is(':visible')){
            block.fadeOut();            
        }else{
            block.fadeIn();            
        }

        return false;
    });
    
}