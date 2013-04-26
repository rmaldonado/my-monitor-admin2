$("#myalert").addClass('alert fade in');//.alert("close");
$('#myalert >.msg').html('sdfsdfsf<br/>sdfsdfs');

$(document).bind( "keydown", function(event) {
    if (event.keyCode === 37) {
        //window.alert('sdfsdf');
        var obj = $( "#selectable" ).selectable();
        //obj.find('.ui-selected').next().select();
        //obj.trigger('click');
        //$("#selectable li:first").trigger('start').trigger('selecting').trigger('selected'); 
        //$("#selectable .ui-selected").trigger('selectablestop');
        //window.alert(obj.find('.ui-selected').next().html());
    }
});



         
$(function() {
    $(window).keydown( function(e){
      if(!e.shiftKey){
          window.alert('sdfsdf');
         $("#selectable").selectable({
            start: function(st) {
                st.stopPropagation();
              //your code here
            }
         });
      }
    });    
    
    $( "#selectable" ).selectable({
        selected: function( event, ui ) {
            window.alert(typeof(ui));
        }
    });

});



