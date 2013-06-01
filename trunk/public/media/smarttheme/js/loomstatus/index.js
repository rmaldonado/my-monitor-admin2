$(function() {
    var loomsObj = $('#loomstatus').find('.rbtn');
    var loomRealurl = '/loom/loomstatus/updatest';
    var curloomdata = {
        id: 0,
        name: ''
    };
    var loomsdata = {};
    var total_num = 0;
    var run_num = 0;
    var fault_num = 0;
    var comp_num = 0;
    var stop_num = 0;
    $('[rel=popover]').popover({
        html  : true,
        trigger: 'hover',
        color : "yellow",
        //selector: '[rel=popover]',
        placement: function(tip, element) {
            var offset = $(element).offset();
            var height = $(document).outerHeight();
            var width = $(document).outerWidth();
            var vert = 0.5 * height - offset.top;
            var vertPlacement = vert > 0 ? 'bottom' : 'top';
            var horiz = 0.5 * width - offset.left;
            var horizPlacement = horiz > 0 ? 'right' : 'left';
            var placement = Math.abs(horiz) > Math.abs(vert) ?  horizPlacement : vertPlacement;
            console.log(placement);
            return placement;
        },
        title: function() { 
            var html = $('#statustips>.title').html();
            var pt = /#([a-zA-Z0-9_]+)#/ig;
            var data = {
                loomid: curloomdata.name
            };
            //window.alert('outdata.dd');
            return html.replace(pt, function(word) {
                return data[word.replace(/#/g, '')];
            });
        },
        content: function() {
            var html = $('#statustips>.content').html();
            var loomid = curloomdata.id;
            var iteminfo = loomsdata[loomid] ? loomsdata[loomid] : {
                frpmnum         : '-',
                effect      : '-',
                fpowersec   : 0,
                frunsec     : 0
            };
            //console.log(iteminfo);
            var data = {
                currpm  : iteminfo.frpmnum,
                effect  : (iteminfo.fpowersec == 0 ? '-' : (iteminfo.frunsec/iteminfo.fpowersec).toFixed(2)),
                runtime : iteminfo.frunsec
            };
            var pt = /#([a-zA-Z0-9_]+)#/ig;
            return html.replace(pt, function(word) {                
                return data[word.replace(/#/g, '')];
            });
        },
        delay: 400
    }).mouseenter(function(event){        
        curloomdata.id = $(event.target).attr('id');
        curloomdata.name = $(event.target).html();
    }).mouseleave(function(event){
        //$(this).popover('hide');
    });
    

    var __callback = function(index) {
            var sturl = loomRealurl;
            $.get(sturl, {}, function(json) {
                //console.log(json);
                loomdatas = json;
                run_num = 0;
                fault_num = 0;
                stop_num = 0;
                comp_num = 0;
                for (var i=0; i<json.length; i++) {
                    var data = json[i];
                    var _id = 'l_'+data['frepeatid']+'_'+data['flcardid'];
                    loomsdata[_id] = data;

                    var o = $('#'+_id);
                    //console.log(o);

                    if (o[0]) {
                        //console.log(data['frstatus'], typeof data['frstatus']);
                        switch (parseInt(data['frstatus'], 10)) {
                            case 1:
                            case 2:
                            case 4:
                            case 8:
                                o.removeClass('btn-success');
                                o.addClass('btn-warning');
                                fault_num++;
                                break;
                            case 32:
                                o.removeClass('btn-warning');
                                o.addClass('rbtn btn-success');
                                //o.attr('data-content', 'rbtn btn-success');
                                run_num++;
                                break;
                            case 201:
                                o.removeClass('btn-warning btn-success');
                                o.addClass('rbtn btn-purple');
                                comp_num++;
                                break;
                            default:
                                o.removeClass('btn-warning btn-success');
                                stop_num++;
                        }
                    };

                }


                $('#run_num').html(run_num);
                $('#comp_num').html(comp_num);
                $('#fault_num').html(fault_num);
                $('#stop_num').html(stop_num);


                /*
                $('.rbtn').each(function(item) {
                    loomdatas['A015'] = {
                        'rpm' : 600,
                        'effect' : '98.56%',
                        'runtime' : 23423
                    };
                });*/
            }, 'json');
            //var num = parseInt(Math.random() * 10);            
            //$(loomsObj[index-1]).removeClass('disabled');
            //if (num / 2 === 0) {
            //    $(loomsObj[index-1]).addClass('btn-warning');
            //}
            //window.alert(loomsObj[index]);
        }

    __callback();

    $('#loomstatus').timer({
        delay:5000,
        repeat: true,
        autostart:true,
        trigger: 'manual',
        callback: __callback
    });
    
    $('.rbtn').bind('click', function(event) {
        if(event.preobj !== undefined) {
            $(event.preobj).removeClass('checked');
        }
        $(event.target).addClass('checked');
        jQuery.Event.prototype.preobj = event.target;
        //window.Event.preobj = event.target;

        var $this = $(event.target);
        var id = $this.attr('id');
        //console.log('===',id);
        if (typeof loomsinfo[id] != 'undefined') {
            var info = loomsinfo[id];
            var roll = info['rollinfo'];
            if (roll) {
                var product = roll['fproduct'];
                var chaine = roll['fchaine'];
                var weft = roll['fweft'];
                $('#roll_group').val(roll['frollgrp']);
                $('#roll_no').val(roll['frollno']);

                $('#product_name').val(product['fproductnm']);

                $('#chaine_fspinfo').val(chaine['fspinfo']);
                $('#chaine_ffactory').val(chaine['ffactory']);
                $('#chaine_fsn').val(chaine['fsn']);
                $('#chaine_fdensity').val(chaine['fdensity']);
                $('#chaine_fminirate').val(chaine['fminirate']);
                $('#chaine_fnumber').val(chaine['fnumber']);    

                $('#weft_fspinfo').val(weft['fspinfo']);
                $('#weft_ffactory').val(weft['ffactory']);
                $('#weft_fsn').val(weft['fsn']);
                $('#weft_fdensity').val(weft['fdensity']);
                $('#weft_fcycle').val(weft['fcycle']);
                $('#weft_fnumber').val(weft['fnumber']);  


            } else {
                $("#home input").each(function () {
                    $(this).val("");
                });

                $("#profile input").each(function () {
                    $(this).val("");
                });
            }

            $('#effect_week').html(info['effect_week']);
            $('#effect_month').html(info['effect_month']);

        } else {
            $('#effect_week').html('');
            $('#effect_month').html('');   

            $("#home input").each(function () {
                    $(this).val("");
            });

            $("#profile input").each(function () {
                    $(this).val("");
            });                    
        }
        //console.log(loomsdata[id]);
        if (typeof loomsdata[id] != 'undefined') {
            var status = loomsdata[id];
            $('#loom_runsec').html(status['frunsec']);
            $('#loom_wbrknum').html(status['fwbrknum']);
            $('#loom_sbrknum').html(status['fsbrknum']);
            $('#loom_tbrknum').html(status['ftbrknum']);
            $('#loom_obrknum').html(status['fobrknum']);
            $('#loom_effect').html(status['frunsec']);

            $('#effect_current').html((status.fpowersec == 0 ? '-' : (((status.frunsec/status.fpowersec)*100).toFixed(2))+'%'));
        } else {
            $("#loom_num_status span.label").each(function () {
                $(this).html("");
            });

            $('#effect_current').html('-');
        }


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

