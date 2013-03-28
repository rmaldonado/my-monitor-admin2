    <script type='text/javascript' src='/media/js/plugins/jflot/jquery.flot.js'></script>    
    <script type='text/javascript' src='/media/js/plugins/jflot/jquery.flot.stack.js'></script>    
    <script type='text/javascript' src='/media/js/plugins/jflot/jquery.flot.pie.js'></script>
    <script type='text/javascript' src='/media/js/plugins/jflot/jquery.flot.resize.js'></script>
    <script type='text/javascript' src='/media/js/plugins/jflot/jquery.flot.navigate.js'></script>
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
        <div id="placeholder" style="width:600px;height:300px;"></div>
        <script>
            {literal}
		function sumf(f, t, m) {
			var res = 0;
			for (var i = 1; i < m; ++i) {
				res += f(i * i * t) / (i * i);
			}
			return res;
		}

		var d1 = [];
		for (var t = 1; t <= 8; t++) {
			d1.push([t, t]);
		}

		var data = [ d1 ],
			placeholder = $("#placeholder");

		var plot = $.plot(placeholder, data, {
			series: {
				lines: {
					show: true
				},
				shadowSize: 0
			},
			xaxis: {
				zoomRange: [1, 20],
				panRange: [0, 20]
			},
			yaxis: {
				zoomRange: [1, 20],
				panRange: [0, 20]
			},
			zoom: {
				interactive: true
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
            var d2 = [];
            
            for(var t = s; t <= e; t++) {
                d2.push([t, 3]);
            }
            newdata = [d2];
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