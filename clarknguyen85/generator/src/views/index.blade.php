<html>
	<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	</head>



<body>
	<!--content-->

	<div class="container-fluid">

		<div class="page-header">
			<h1>Generator</h1>
			<p class="lead">Basic grid layouts to get you familiar with building within the Bootstrap grid system.</p>
		</div>

		<h3>Validation</h3>
		<p>Generate validation rules</p>
		<div class="row">
			<div class="col-md-4">
				<input type="text" class="form-control" />
			</div>
			<div class="col-md-8">
				<div class="validation_type">
					<label><input type="checkbox" class="form-control" />Required</label>
				</div>
				<div class="validation_type">
					<label><input type="checkbox" class="form-control" />Unique</label>
				</div>
			</div>
		</div>

		<div id="rules_output">

		</div>

    </div> <!-- /container -->

	


	<!--scripts-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript">
	if( !window.jQuery )
	{
		var script = document.createElement('script');
		script.type = "text/javascript";
		script.src = "https://code.jquery.com/jquery-1.12.4.min.js";
		document.getElementsByTagName('head')[0].appendChild(script);
	}
	window.onload = function() 
	{
		{!! $jsContent !!}
	}
	</script>
</body>
</html>