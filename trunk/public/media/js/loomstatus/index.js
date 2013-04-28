$(function() {
    var loomsObj = $('#loomstatus').find('.rbtn');
    var outdata = {
        dd: 'sdfsfs'
    };
    $('.rbtn').popover({
        html  : true,
        trigger: 'hover',
        color : "yellow",
        placement: function(tip, element) {
            var offset = $(element).offset();
            height = $(document).outerHeight();
            width = $(document).outerWidth();
            vert = 0.5 * height - offset.top;
            vertPlacement = vert > 0 ? 'bottom' : 'top';
            horiz = 0.5 * width - offset.left;
            horizPlacement = horiz > 0 ? 'right' : 'left';
            placement = Math.abs(horiz) > Math.abs(vert) ?  horizPlacement : vertPlacement;
            return placement;
        },
        title:    function() { 
            var html = $('#statustips>.title').html();
            var pt = /#([a-zA-Z0-9_]+)#/ig;
            var data = {
                loomid: outdata.dd
            };
            //window.alert(outdata.dd);
            return html.replace(pt, function(word) {
                return data[word.replace(/#/g, '')];
                //return data[word.replace(/#/g)];
            });
        },
        content: function() {
            var html = $('#statustips>.content').html();
            var data = {
                currpm: 600,
                effect: '98.6%',
                runtime: 34243
            };
            var pt = /#([a-zA-Z0-9_]+)#/ig;
            return html.replace(pt, function(word) {                
                return data[word.replace(/#/g, '')];
            });
        },
        delay: 400
    }).mouseenter(function(event){
        outdata.dd = $(event.target).html();
        //$(this).popover('show');
    }).mouseleave(function(event){
        //$(this).popover('hide');
    });
    
    $('#loomstatus').timer({
        delay:1000,
        repeat: 171,
        autostart:false,
        trigger: 'manual',
        callback: function(index) {
            //window.alert(loomsObj.length());
            var num = parseInt(Math.random() * 10);            
            $(loomsObj[index-1]).removeClass('disabled');
            if (num / 2 === 0) {
                $(loomsObj[index-1]).addClass('btn-warning');
            }
            //window.alert(loomsObj[index]);
        }
    });
    
    $('#mytimer').timer({
		delay: 1000,
		repeat: 15,
		autostart: true,
		callback: function( index ) {
			html = "My timer has fired " + index + " times&lt;br /&gt;";
			html += "Current client date time is: " + new Date();
			$(this).html(html);
		}
	});
    
    $('.rbtn').bind('click', function(event) {
        
        if(event.preobj !== undefined) {
            $(event.preobj).removeClass('checked');
        }
        //$(event.target).addClass('checked');
        jQuery.Event.prototype.preobj = event.target;
        //window.Event.preobj = event.target;
    });
});

