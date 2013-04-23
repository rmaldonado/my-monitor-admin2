$(window).load(function() {
    fixBodyWidth();
    $("#loadercnt").hide();//hidden load image
    bindRefreshEvents();
    //plotEffectChart();
    plotEffectChartH();
    //$(".sidebar .navigation").addClass('bordered');  
    //$(".cNav[value='default']").attr('checked',true).parent('span').addClass('checked');
    //$(".cCont[value='']").attr('checked',true).parent('span').addClass('checked');
});


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

function plotEffectChartH() {
    var visits = [[1, 1235], [2, 1245], [3, 1590], [4, 1420], [5,1713], [6,1921], [7,1869], [8, 1790], [9,2314], [10,2490], [11,2175], [12,1989]];
    var unique = [[1, 140], [2, 246], [3, 530], [4, 788], [5,832], [6,962], [7,1280], [8, 1299], [9,1410], [10,1569], [11,1492], [12,1350]];
    var sales = [[1, 50], [2, 100], [3, 140], [4, 190], [5,250], [6,360], [7,440], [8, 650], [9,750], [10,810], [11,980], [12,1102]];
    var hiconfig = {
        chart: {
            type: 'line'
        },
        title: {
            text: '织机效率趋势图'
        },
        yAxis: {
            title: {
                text: '效率 (单位：%)'
            }
        },
        credits: {
            enabled: false
        },
        legend: {
            enabled: false
        },
        lang: {
            printChart: '打印',
            downloadPNG: '导出图片',
            downloadJPEG: null,
            downloadPDF: null,
            downloadSVG: null,
            contextButtonTitle: '导出图片菜单'
        },
        navigation: {
            menuItemStyle: {
                padding: '0 8px',
                color: '#303030',
                fontSize:  '12px' 
            }       
        },
        series: [{
            name: '平均效率',
            data: [98.2, 96.6, 97.2, 99.1, 98.5, 97.0]
        }, {
            name: '最高效率',
            data: [99.2, 99.6, 99.3, 99.1, 99.5, 99.0]
        }, {
            name: '最低效率',
            data: [96.2, 95.6, 94.3, 95.1, 93.5, 93.9]
        }]
    };
    $('#main_chart').highcharts(hiconfig);
}

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