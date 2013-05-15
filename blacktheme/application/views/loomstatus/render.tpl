<div class="row-fluid">
    <div class="page-header">
        <h2>sdf</h2>
    </div>
    <style>
       table.KeyTable td.focus {
            border: 2px solid #3366FF;
        }
    </style>
    <div class="span12" id="innerbody">
        <div class="block">
            <div class="data-fluid" >
                <table class="table dtable lcnp KeyTable" id="innertable" cellspacing="0" cellpadding="0" border="0">
                    <thead style="display:none;">
                        <tr>
                            <th>sdfs</th><th>sdfs</th><th>sdfs</th><th>sdfs</th><th>sdfs</th><th>sdfs</th><th>sdfs</th><th>sdfs</th>
                            <th>sdfs</th><th>sdfs</th><th>sdfs</th><th>sdfs</th><th>sdfs</th><th>sdfs</th><th>sdfs</th><th>sdfs</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><div>sd</div></td><td><div>sd</div></td><td><div>sd</div></td><td><div>sd</div></td><td><div>sd</div></td><td><div>sd</div></td><td><div>sd</div></td><td><div>sd</div></td>
                            <td><div>sd</div></td><td><div>sd</div></td><td><div>sd</div></td><td><div>sd</div></td><td><div>sd</div></td><td><div>sd</div></td><td><div>sd</div></td><td><div>sd</div></td>
                        </tr>
                        <tr>
                            <td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td>
                            <td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td>
                        </tr>
                        <tr>
                            <td>dd</td><td>dd</td><td>dd</td><td>321</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td>
                            <td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td>
                        </tr>
                        <tr>
                            <td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td>
                            <td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td>
                        </tr>
                        <tr>
                            <td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td>
                            <td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td>
                        </tr>
                        <tr>
                            <td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td>
                            <td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td><td>dd</td>
                        </tr>                        
                    </tbody>
                </table>
            </div>
        </div>    
    </div> 
</div>    
<script type='text/javascript' src='/media/js/plugins/datatables/keytable.js'></script>
<script>
    $(document).ready(function() {
        var innerHeight = $('html').height();
        var navHeight = $('.navigation').height();
        $('#innerbody').css('height', innerHeight - navHeight);
        var oTable = $('#innertable').dataTable({
            "bProcessing"   : true,
            "bSort"         : false
        });
        new KeyTable( {
                "table": $('#innertable')[0],
                "datatable": oTable
            } );
    });
    
</script>    