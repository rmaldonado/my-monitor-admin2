var faultChartOptions = {};
var faultChartObject = null;
var yieldChartOptions = {};
var yieldChartObject = null;

$(function() {
    $('#top10_chart').highcharts({
        chart: {
            type: 'spline'
                    //marginRight: 130,
                    //marginBottom: -25
        },
        title: {
            text: '产量前五位的织机效率',
            x: -20 //center
        },
        xAxis: {
            categories: ['一月', '二月', '三月', '四月', '五月', '六月',
                '七月', '八月', '九月', '十月', '十一月', '十二月']
        },
        yAxis: [{
                title: {
                    text: '织机效率 (%)'
                },
                plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080'
                    }]
            }, {
                title: {
                    text: '织机产量(码)'
                },
                style: {
                    color: '#4572A7'
                },
                opposite: true
            }],
        tooltip: {
        },
        credits: {
            enabled: false
        },
        legend: {
            //layout: '#bottom'
            //align: 'right',
            //verticalAlign: 'top',
            //x: -10,
            //y: 100,
            //borderWidth: 0
        },
        series: [{
                name: 'A032',
                yAxis: 1,
                color: '#FFAA31',
                type: 'column',
                data: [742343, 392343, 642343, 792343, 902343, 342343, 342343, 342343, 342343, 342343, 342343, 342343]
            }, {
                name: 'A032',
                yAxis: 0,
                data: [97.0, 96.9, 89.5, 94.5, 88.2, 91.5, 95.2, 96.5, 93.3, 88.3, 93.9, 89.6]
            }, {
                name: 'A005',
                yAxis: 0,
                data: [90.2, 90.8, 95.7, 91.3, 87.0, 92.0, 94.8, 84.1, 90.1, 94.1, 88.6, 82.5]
            }, {
                name: 'A009',
                yAxis: 0,
                data: [90.9, 90.6, 93.5, 98.4, 93.5, 97.0, 98.6, 87.9, 94.3, 99.0, 93.9, 91.0]
            }, {
                name: 'A067',
                yAxis: 0,
                data: [93.9, 94.2, 95.7, 98.5, 91.9, 85.2, 87.0, 86.6, 94.2, 90.3, 96.6, 94.8]
            }]
    });
});
//平均故障率  
$(function() {
    faultChartOptions = {
        chart: {
            type: 'line',
            renderTo: 'avgfaultrate_chart',
            backgroundColor: {
                linearGradient: {x1: 0, y1: 0, x2: 1, y2: 1},
                stops: [
                    [0, 'rgb(255, 255, 255)'],
                    [1, 'rgb(240, 240, 255)']
                ]
            },
            //borderWidth: 2,
            plotBackgroundColor: 'rgba(255, 255, 255, .9)',
            plotShadow: true,
            plotBorderWidth: 1
        },
        credits: {
            enabled: false
        },
        title: {
            text: '分车间织机平均故障率统计图'
        },
        xAxis: {
            gridLineWidth: 1,
            lineColor: '#000',
            tickColor: '#000',
            categories: ['一月', '二月', '三月', '四月', '五月', '六月',
                '七月', '八月', '九月', '十月', '十一月', '十二月']
        },
        yAxis: {
            title: {
                text: '平均故障率 (%)'
            }
        },
        tooltip: {
            enabled: false,
            formatter: function() {
                return '<b>' + this.series.name + '</b><br/>' +
                        this.x + ': ' + this.y + '°C';
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: false
            }
        },
        series: [{
                name: '一车间',
                data: [7.0, 6.9, 9.5, 14.5, 8.4, 1.5, 5.2, 6.5, 3.3, 8.3, 3.9, 9.6]
            }, {
                name: '二车间',
                data: [3.9, 4.2, 5.7, 8.5, 1.9, 5.2, 7.0, 6.6, 4.2, 10.3, 6.6, 4.8]
            }]
    };
});
//产量统计
$(function() {
    var colors = Highcharts.getOptions().colors;
    //window.alert(colors.length);
    var categories = ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月'];
    var name = '总产量统计图(按月)';
    var data = [{
            y: 45655.11,
            color: colors[4],
            drilldown: {
                name: '一月产量',
                categories: ['第一周', '第二周', '第三周', '第四周'],
                data: [45655.11 * (0.9/4), 45655.11 * (0.2/4), 45655.11 * (1.1/4), 45655.11 * (0.8/4)],
                color: colors[4]
            }
        }, {
            y: 47821.63,
            color: colors[4],
            drilldown: {
                name: '二月产量',
                categories: ['第一周', '第二周', '第三周', '第四周'],
                data: [47821.63 * (0.85/4), 47821.63 * (1.05/4), 47821.63 * (1.05/4), 47821.63 * (1.05/4)],
                color: colors[4]
            }
        }, {
            y: 53211.94,
            color: colors[4],
            drilldown: {
                name: '三月产量',
                categories: ['第一周', '第二周', '第三周', '第四周'],
                data: [0.12, 0.19, 0.12, 0.36, 0.32, 9.91, 0.50, 0.22],
                color: colors[4]
            }
        }, {
            y: 58937.15,
            color: colors[4],
            drilldown: {
                name: '四月产量',
                categories: ['第一周', '第二周', '第三周', '第四周'],
                data: [4.55, 1.42, 0.23, 0.21, 0.20, 0.19, 0.14],
                color: colors[4]
            }
        }, {
            y: 49832.14,
            color: colors[4],
            drilldown: {
                name: '五月产量',
                categories: ['第一周', '第二周', '第三周', '第四周'],
                data: [0.12, 0.37, 1.65],
                color: colors[5]
            }
        }, {
            y: 50032.14,
            color: colors[4],
            drilldown: {
                name: '六月产量',
                categories: ['第一周', '第二周', '第三周', '第四周'],
                data: [0.12, 0.37, 1.65],
                color: colors[4]
            }
        }, {
            y: 36742.14,
            color: colors[4],
            drilldown: {
                name: '七月产量',
                categories: ['第一周', '第二周', '第三周', '第四周'],
                data: [0.12, 0.37, 1.65],
                color: colors[4]
            }
        }, {
            y: 49862.14,
            color: colors[4],
            drilldown: {
                name: '八月产量',
                categories: ['第一周', '第二周', '第三周', '第四周'],
                data: [0.12, 0.37, 1.65],
                color: colors[4]
            }
        }, {
            y: 53832.14,
            color: colors[4],
            drilldown: {
                name: '九月产量',
                categories: ['第一周', '第二周', '第三周', '第四周'],
                data: [0.12, 0.37, 1.65],
                color: colors[4]
            }
        }, {
            y: 49832.14,
            color: colors[4],
            drilldown: {
                name: '十月产量',
                categories: ['第一周', '第二周', '第三周', '第四周'],
                data: [0.12, 0.37, 1.65],
                color: colors[4]
            }
        }, {
            y: 58192.14,
            color: colors[4],
            drilldown: {
                name: '十一月产量',
                categories: ['第一周', '第二周', '第三周', '第四周'],
                data: [0.12, 0.37, 1.65],
                color: colors[4]
            }
        }, {
            y: 41392.14,
            color: colors[4],
            drilldown: {
                name: '十二月产量',
                categories: ['第一周', '第二周', '第三周', '第四周'],
                data: [0.12, 0.37, 1.65],
                color: colors[4]
            }
    }];

    function setChart(name, categories, data, color) {
        var chartObj = $('#yield_chart').highcharts();
        chartObj.xAxis[0].setCategories(categories, false);
        chartObj.series[0].remove(false);
        chartObj.addSeries({
            name: name,
            data: data,
            color: color || 'white'
        }, false);
        chartObj.redraw();
    }

    yieldChartOptions = {
        chart: {
            type: 'column',
            renderTo: 'yield_chart'
        },
        title: {
            text: '2012年按月产量趋势图'
        },
        xAxis: {
            categories: categories
        },
        yAxis: {
            title: {
                text: '总产量(单位：码)'
            }
        },
        plotOptions: {
            column: {
                cursor: 'pointer',
                point: {
                    events: {
                        click: function() {
                            var drilldown = this.drilldown;
                            if (drilldown) { // drill down
                                setChart(drilldown.name, drilldown.categories, drilldown.data, drilldown.color);
                            } else { // restore
                                setChart(name, categories, data);
                            }
                        }
                    }
                },
                dataLabels: {
                    enabled: true,
                    color: colors[0],
                    style: {
                        fontWeight: 'bold'
                    },
                    formatter: function() {
                        return this.y;
                    }
                }
            }
        },
        tooltip: {
            formatter: function() {
                var point = this.point,
                        s = this.x + ':<h5><b>' + this.y + '</b></h5><br/>';
                if (point.drilldown) {
                    s += '点击查看' + point.category + '各个周的产量 ';
                } else {
                    s += '点击返回按月产量趋势图';
                }
                return s;
            }
        },
        series: [{
                name: name,
                data: data,
                color: 'white'
            }],
        exporting: {
            enabled: false
        }
    };
    //).highcharts(); // return chart
});

$(function() {
    $('a[data-toggle="tab"]').on('shown', function(event) {
        var targetType = $(event.target).attr('type');
        if (targetType === 'fault') {
            if (faultChartObject === null) {
                faultChartObject = new Highcharts.Chart(faultChartOptions);
            }
        } 
        else if (targetType === 'yield') {
            if (yieldChartObject === null) {
                yieldChartObject = new Highcharts.Chart(yieldChartOptions);               
            }
        }
    });
});