@extends('admin.layout.admin')
@section('ex-css')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
@endsection
@section('content')
    <h3>Admin</h3>
    <hr>
    <div>
		<canvas id="speedChart" width="500" height="300"></canvas>
	</div>
	Chart Type:
	<select id="type" class="btn btn-primary">
		<option value="date">date</option>
		<option value="month">month</option>
		<option value="year">year</option>
	</select>
	<button id="update" class="btn btn-primary" style="height: 29px;">update</button>
	<br>
	<br>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script>
	var order_date = <?php echo json_encode($order_date); ?>;
	var order_month = <?php echo json_encode($order_month); ?>;
	var order_year = <?php echo json_encode($order_year); ?>;
	var ctx = document.getElementById("speedChart").getContext('2d');
	Chart.defaults.global.defaultFontFamily = "Lato";
	Chart.defaults.global.defaultFontSize = 18;

	var date=[];
	var sales=[];
	for (i = 0; i < order_date.length; i++) { 
    	date[i]=order_date[i].date;
    	sales[i]=order_date[i].total;
	}

	var year=[];
	var sales1=[];
	for (i = 0; i < order_year.length; i++) { 
    	year[i]=order_year[i].year;
    	sales1[i]=order_year[i].total;
	}

	

	var month=[];
	var sales2=[];
	for (i = 0; i < order_month.length; i++) { 
    	month[i]=order_month[i].month;
    	sales2[i]=order_month[i].total;
	}
	var config = {
		type: 'bar',
		data: {
			labels: date,
			datasets: [{
				label: 'Sales(INR)',
				data: sales,
				type: 'bar',
				pointRadius: 0,
				fill: false,
				lineTension: 0,
				borderWidth: 2
			}]
		},
		options: {
			scales: {
				yAxes: [{
					scaleLabel: {
						display: true,
						labelString: 'Closing price ($)'
					}
				}]
			}
		}
	};
	window.myLine = new Chart(ctx, config);
	document.getElementById('update').addEventListener('click', function() {

		var chart = window.myLine;
		var type = document.getElementById('type').value;
		if(type == "date")
		{
			chart.config.data.labels = date;
			chart.config.data.datasets[0].data = sales;
			chart.destroy();
			window.myLine = new Chart(ctx, chart.config);
		}
		else if(type=="month")
		{
			chart.config.data.labels = month;
			chart.config.data.datasets[0].data = sales2;
			chart.destroy();
			window.myLine = new Chart(ctx, chart.config);
		}
		else
		{
			chart.config.data.labels = year;
			chart.config.data.datasets[0].data = sales1;
			chart.destroy();
			window.myLine = new Chart(ctx, chart.config);
		}
	});
</script>
@endsection()