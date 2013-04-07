$(window).load(function() {
    fixBodyWidth();
    $("#loadercnt").hide();//hidden load image
    //$(".sidebar .navigation").addClass('bordered');  
    //$(".cNav[value='default']").attr('checked',true).parent('span').addClass('checked');
    //$(".cCont[value='']").attr('checked',true).parent('span').addClass('checked');
});

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