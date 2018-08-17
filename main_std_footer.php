
       </div>

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	    <script src="https://code.highcharts.com/highcharts.js"></script>
	    <script src="https://code.highcharts.com/modules/data.js"></script>
	    <script src="https://code.highcharts.com/modules/exporting.js"></script>

	    <script>
	    
	        $(function () 
	        {
	            
	            $('#container').highcharts({
	                data: {
	                    table: 'datatable'
	                },
	                chart: {
	                    type: 'column'
	                },
	                title: {
	                    text: ''
	                },
	                yAxis: {
	                    allowDecimals: false,
	                    title: {
	                        text: 'Units'
	                    }
	                },
	                
	               
	            });
	        });
	    
	    </script>
	    
    </body>
</html>
