    <script type='text/javascript' src='/media/js/plugins/jflot/jquery.flot.js'></script>    
    <script type='text/javascript' src='/media/js/plugins/jflot/jquery.flot.stack.js'></script>    
    <script type='text/javascript' src='/media/js/plugins/jflot/jquery.flot.pie.js'></script>
    <script type='text/javascript' src='/media/js/plugins/jflot/jquery.flot.resize.js'></script>
    <script type='text/javascript' src='/media/js/plugins/jflot/jquery.flot.navigate.js'></script>

<div class="page-header">
    <div class="icon">
        <span class="ico-arrow-right"></span>
    </div>
    <h2>JPlot test</h2>
</div>
    
<div class="row-fluid">
    <div class="span12">
        <div id="plotdiv" style="height:300px;"></div>
        
        <script>

        </script>
            
    </div>
</div> 
<div class="row-fluid">
    <div class="span12">
        <div id="message"></div>
        <div id="placeholder" style="width:auto;height:600px;"></div>
        <script>
            {literal}
		function sumf(f, t, m) {
			var res = 0;
			for (var i = 1; i < m; ++i) {
				res += f(i * i * t) / (i * i);
			}
			return res;
		}

		var maxNum = 24;
        var data = [];
        for (var j = 1; j < maxNum; j++) {
            var dt = [];
            for (var t= 1; t < maxNum; t++) {
                dt.push([t, j]);
            }
            data.push(dt);
        }
        var ticksRow = [];
        for (var j = 0; j < 200; j++) {
            ticksRow.push([j, "row" + j]);
        }
			placeholder = $("#placeholder");

		var plot = $.plot(placeholder, data, {
			series: {
				lines: {
					show: false
				},
                points: {
                    show : true,
                    radius: 10
                },
				shadowSize: 0
			},
			xaxis: {
				//zoomRange: [10, 10],
				panRange: [0, 100],
                tickDecimals: 2,
                ticks: ticksRow
			},
			yaxis: {
				zoomRange: [10, 10],
				panRange: [0, 100]
			},
			zoom: {
				interactive: false
			},
			pan: {
				interactive: true
			}
		});
        placeholder.bind("plotpan", function (event, plot) {
			var axes = plot.getAxes();
            var s = parseInt(axes.xaxis.min.toFixed(0));
            var e = parseInt(axes.xaxis.max.toFixed(0));
            var newdata;
            
            for (var j = 1; j < maxNum; j++) {
                var dt = [];
                for(var t = s; t <= e; t++) {
                    dt.push([t, j]);
                }
                newdata.push(dt);
            }
            
            //newdata = [d2];
            plot.setData(newdata);
            plot.draw();
            
			$("#message").html("Panning to x: "  + axes.xaxis.min.toFixed(2)
			+ " &ndash; " + axes.xaxis.max.toFixed(2)
			+ " and y: " + axes.yaxis.min.toFixed(2)
			+ " &ndash; " + axes.yaxis.max.toFixed(2));
		});
        {/literal}
        </script>
    </div>
</div>    