$(function() {
    var loomsObj = $('#loomstatus').find('.rbtn');
    var loomRealurl = '/loom/loomstatus/updatest';
    var curloomdata = {
        id: 0
    };
    var loomdatas = {};
    $('.rbtn').popover({
        html  : true,
        trigger: 'hover',
        color : "yellow",
        placement: function(tip, element) {
            var offset = $(element).offset();
            var height = $(document).outerHeight();
            var width = $(document).outerWidth();
            var vert = 0.5 * height - offset.top;
            var vertPlacement = vert > 0 ? 'bottom' : 'top';
            var horiz = 0.5 * width - offset.left;
            var horizPlacement = horiz > 0 ? 'right' : 'left';
            var placement = Math.abs(horiz) > Math.abs(vert) ?  horizPlacement : vertPlacement;
            return placement;
        },
        title:    function() { 
            var html = $('#statustips>.title').html();
            var pt = /#([a-zA-Z0-9_]+)#/ig;
            var data = {
                loomid: curloomdata.id
            };
            //window.alert(outdata.dd);
            return html.replace(pt, function(word) {
                return data[word.replace(/#/g, '')];
            });
        },
        content: function() {
            var html = $('#statustips>.content').html();
            var loomid = curloomdata.id;
            var iteminfo = loomdatas[loomid] ? loomdatas[loomid] : {
                rpm         : '-',
                effect      : '-',
                'runtime'   : '-'
            };
            var data = {
                currpm  : iteminfo.rpm,
                effect  : iteminfo.effect,
                runtime : iteminfo.runtime
            };
            var pt = /#([a-zA-Z0-9_]+)#/ig;
            return html.replace(pt, function(word) {                
                return data[word.replace(/#/g, '')];
            });
        },
        delay: 400
    }).mouseenter(function(event){        
        curloomdata.id = $(event.target).html();
    }).mouseleave(function(event){
        //$(this).popover('hide');
    });
    
    $('#loomstatus').timer({
        delay:1000,
        repeat: true,
        autostart:true,
        trigger: 'manual',
        callback: function(index) {
            var sturl = loomRealurl;
            $.get(sturl, {}, function(json) {
                loomdatas = json;
                /*
                $('.rbtn').each(function(item) {
                    loomdatas['A015'] = {
                        'rpm' : 600,
                        'effect' : '98.56%',
                        'runtime' : 23423
                    };
                });*/
            }, 'json');
            var num = parseInt(Math.random() * 10);            
            $(loomsObj[index-1]).removeClass('disabled');
            if (num / 2 === 0) {
                $(loomsObj[index-1]).addClass('btn-warning');
            }
            //window.alert(loomsObj[index]);
        }
    });
    
    $('.rbtn').bind('click', function(event) {
        if(event.preobj !== undefined) {
            $(event.preobj).removeClass('checked');
        }
        $(event.target).addClass('checked');
        jQuery.Event.prototype.preobj = event.target;
        //window.Event.preobj = event.target;
    });
    
    $('.btninfo').bind('click', function(event) {
       //href="#myModal" role="button" class="btn" data-toggle="modal" 
    });
    
    $('#datepick_1').datepicker({
        dateFormat: 'yyyy-mm-dd',
        onSelect: function(date){
             
        }
    });
});

