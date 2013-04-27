$("#myalert").addClass('alert fade in');//.alert("close");
$('#myalert >.msg').html('sdfsdfsf<br/>sdfsdfs');

$(document).bind( "keydown", function(event) {
    if (event.keyCode === 37) {
        //window.alert('sdfsdf');
        //var obj = $( "#selectable" ).selectable();
        //obj.find('.ui-selected').next().select();
        //obj.trigger('click');
        //$("#selectable li:first").trigger('start').trigger('selecting').trigger('selected'); 
        //$("#selectable .ui-selected").trigger('selectablestop');
        //window.alert(obj.find('.ui-selected').next().html());
    }
});



         
$(function() {
    var loomsObj = $('#loomstatus').find('.rbtn');
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
        title: '<div class="head blue"><div class="icon"><i class="ico-grid"></i></div><h2>Sample block</h2></div>',
        content: function() {
            return $('#statustips').html();
        },
        delay: 400
    });/*.mouseenter(function(event){
        $(this).popover('show');
    }).mouseleave(function(event){
        $(this).popover('hide');
    });*/
    
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
            //jQuery.Event.prototype.preobj = event.target;
        }
        $(event.target).addClass('checked');
        jQuery.Event.prototype.preobj = event.target;
        //window.Event.preobj = event.target;
    });




});



