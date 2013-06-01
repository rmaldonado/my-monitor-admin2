$(function() {

     window.__update = function() {
        $.get('/loom/site/summary', {}, function (data) {
            if (data) {
                $('#loom_total_num').html(data['total_num']);
                $('#loom_run_num').html(data['run_num']);
                $('#loom_fault_num').html(data['fault_num']);
                $('#loom_stop_num').html(data['stop_num']);
                $('#loom_effect_month').html(data['effect_month']);
                $('#loom_effect_day').html(data['effect_day']);
                $('#loom_rpm_month').html(data['rpm_month']);
                $('#loom_rpm_day').html(data['rpm_day']);
            };
        }, 'json');
    }


    __update();
    setInterval('__update()', 30000);


    $('.dialogs,.comments').slimScroll({
        height: '300px'
    });

    $('#tasks').sortable();
    $('#tasks').disableSelection();
    $('#tasks input:checkbox').removeAttr('checked').on('click', function() {
        if (this.checked)
            $(this).closest('li').addClass('selected');
        else
            $(this).closest('li').removeClass('selected');
    });

    var oldie = $.browser.msie && $.browser.version < 9;
    $('.easy-pie-chart.percentage').each(function() {
        var $box = $(this).closest('.infobox');
        var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
        var trackColor = barColor === 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
        var size = parseInt($(this).data('size')) || 50;
        $(this).easyPieChart({
            barColor: barColor,
            trackColor: trackColor,
            scaleColor: false,
            lineCap: 'butt',
            lineWidth: parseInt(size / 10),
            animate: oldie ? false : 1000,
            size: size
        });
    });

    $('.sparkline').each(function() {
        var $box = $(this).closest('.infobox');
        var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
        $(this).sparkline('html', {tagValuesAttribute: 'data-values', type: 'bar', barColor: barColor, chartRangeMin: $(this).data('min') || 0});
    });





    var data = [
        {label: "第一车间", data: 438.7, color: "#68BC31"},
        {label: "第二车间", data: 524.5, color: "#2091CF"},
        {label: "第三车间", data: 468.2, color: "#AF4E96"},
        {label: "第四车间", data: 418.6, color: "#DA5430"},
        {label: "第五车间", data: 510, color: "#FEE074"}
    ];
    var placeholder = $('#piechart-placeholder').css({'width': '95%', 'min-height': '200px'});
    $.plot(placeholder, data, {
        series: {
            pie: {
                show: true,
                tilt: 0.8,
                highlight: {
                    opacity: 0.25
                },
                stroke: {
                    color: '#fff',
                    width: 2
                },
                startAngle: 2

            }
        },
        legend: {
            show: true,
            position: "ne",
            labelBoxBorderColor: null,
            margin: [-30, 15]
        }
        ,
        grid: {
            hoverable: true,
            clickable: true
        },
        tooltip: true, //activate tooltip
        tooltipOpts: {
            content: "%s : %y.1",
            shifts: {
                x: -30,
                y: -50
            }
        }

    });


    var $tooltip = $("<div class='tooltip top in' style='display:none;'><div class='tooltip-inner'></div></div>").appendTo('body');
    placeholder.data('tooltip', $tooltip);
    var previousPoint = null;

    placeholder.on('plothover', function(event, pos, item) {
        if (item) {
            if (previousPoint !== item.seriesIndex) {
                previousPoint = item.seriesIndex;
                var tip = item.series['label'] + " : " + item.series['percent'] + '%';
                $(this).data('tooltip').show().children(0).text(tip);
            }
            $(this).data('tooltip').css({top: pos.pageY + 10, left: pos.pageX + 10});
        } else {
            $(this).data('tooltip').hide();
            previousPoint = null;
        }

    });






    var d1 = [];
    for (var i = 0; i < Math.PI * 2; i += 0.5) {
        d1.push([i, Math.sin(i)]);
    }

    var d2 = [];
    for (var i = 0; i < Math.PI * 2; i += 0.5) {
        d2.push([i, Math.cos(i)]);
    }

    var d3 = [];
    for (var i = 0; i < Math.PI * 2; i += 0.2) {
        d3.push([i, Math.tan(i)]);
    }


    var sales_charts = $('#sales-charts').css({'width': '100%', 'height': '240px'});
    $.plot("#sales-charts", [
        {label: "Domains", data: d1},
        {label: "Hosting", data: d2},
        {label: "Services", data: d3}
    ], {
        hoverable: true,
        shadowSize: 0,
        series: {
            lines: {show: true},
            points: {show: true}
        },
        xaxis: {
            tickLength: 0
        },
        yaxis: {
            ticks: 10,
            min: -2,
            max: 2,
            tickDecimals: 3
        },
        grid: {
            backgroundColor: {colors: ["#fff", "#fff"]},
            borderWidth: 1,
            borderColor: '#555'
        }
    });


    $('[data-rel="tooltip"]').tooltip();
});