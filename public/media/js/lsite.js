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
            text: 'ddddd'
        },
        series: [{
            name: '按天统计',
            data: [1235, 1245, 1590]
        }]
    };
    $('#main_chart').highcharts(hiconfig);
}

function plotEffectChart() {
    var visits = [[1, 1235], [2, 1245], [3, 1590], [4, 1420], [5,1713], [6,1921], [7,1869], [8, 1790], [9,2314], [10,2490], [11,2175], [12,1989]];
    var unique = [[1, 140], [2, 246], [3, 530], [4, 788], [5,832], [6,962], [7,1280], [8, 1299], [9,1410], [10,1569], [11,1492], [12,1350]];
    var sales = [[1, 50], [2, 100], [3, 140], [4, 190], [5,250], [6,360], [7,440], [8, 650], [9,750], [10,810], [11,980], [12,1102]];
    var showTooltip = function (x, y, contents) {
        $('<div class="ct">' + contents + '</div>').css( {
            position: 'absolute',
            display: 'none',
            top: y,
            left: x + 10,
            border: '1px solid #000',
            padding: '3px',
            opacity: '0.7',
            'background-color': '#000',            
            color: '#fff'            
        }).appendTo("body").fadeIn(200);
    };
    
    var plotobj = $.plot($("#main_chart"), [ 
                { data: visits, label: "在线织机"}, 
                { data: unique, label: "离线织机"}, 
                {data: sales, label: "故障织机"} 
            ], {
                series: {lines: { show: true }, points: { show: true }},
                grid: { hoverable: true, clickable: true },
                yaxis: { min: 1, max: 3000, tickLength: 0 },
                xaxis: { labelWidth: 30, tickLength: 0 }
        });
        
        $("#main_chart").bind("plothover", function (event, pos, item) {
        
        $("#x").text(pos.x.toFixed(2));
        $("#y").text(pos.y.toFixed(2));

        if (item) {
            if (previousPoint != item.dataIndex) {
                previousPoint = item.dataIndex;

                $(".ct").remove();
                var x = item.datapoint[0].toFixed(2),
                    y = item.datapoint[1].toFixed(2);

                showTooltip(item.pageX, item.pageY,
                            item.series.label + " of " + Math.round(x) + " = " + Math.round(y));
            }
        }else {
            $(".ct").remove();
            previousPoint = null;            
        }

    });        
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