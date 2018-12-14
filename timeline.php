<!DOCTYPE html>
<html>
<head>
	<title>timeline</title>
	<link rel="stylesheet" 
	      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" 
	      integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" 
	      crossorigin="anonymous">
	<link href="timelinev.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" 
	        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" 
	        crossorigin="anonymous">
	</script>
	<script src="jquery.timelinev.js"></script>
	<style type="text/css">
/*		img {
			border-radius: 150px;
			border-style: solid;
			border-width: 2px;
		}*/
	</style>
</head>
<body>
	<div class="xxx">
		<div id="timeline" class="row">
			<div class="timelineCont col-12">
				<div class="row">
					<div class="date col-5">
						<h2></h2>
					</div>

					<div class="text col-7">
						<p></p>
					</div>
				</div>
			</div>

			<div class="timelineCont col-12">
				<div class="row">
					<div class="date col-5">
						<h2>2002</h2>
					</div>

					<div class="text col-7">
						<p>
							<img src="images/ADDC-Transparent.png" width="200px" height="60px"><br>
							ADDC founded by Michael Arnouse
							Patented ID Card which securely held biographical/health records
						</p>
					</div>
				</div>
			</div>

			<div class="timelineCont col-12">
				<div class="row">
					<div class="date col-5">
						<h2>2008</h2>
					</div>

					<div class="text col-7">
						<p>
							<img src="images/timeline_images.jpg" width="145px" height="145px"><br>
							Included CPU design in the ID Card
						</p>
					</div>
				</div>
			</div>

			<div class="timelineCont col-12">
				<div class="row">
					<div class="date col-5">
						<h2>2010</h2>
					</div>

					<div class="text col-7">
						<p>
							<img src="images/timeline_CPU.jpg" width="145px" height="145px"><br>
							First working prototype completed
						</p>
					</div>
				</div>
			</div>

			<div class="timelineCont col-12">
				<div class="row">
					<div class="date col-5">
						<h2>2011</h2>
					</div>

					<div class="text col-7">
						<p>
							<img src="images/timeline_USDOD.jpg" width="145px" height="145px"><br>
							First sale to USDOD
						</p>
					</div>
				</div>
			</div>

			<div class="timelineCont col-12">
				<div class="row">
					<div class="date col-5">
						<h2>2013</h2>
					</div>

					<div class="text col-7">
						<p>
							<img src="images/BioDigitalPC_6.png" width="70px" height="120px"><br>
							Second generation card produced, Dual Core, 4GB DDR2
						</p>
					</div>
				</div>
			</div>

			<div class="timelineCont col-12">
				<div class="row">
					<div class="date col-5">
						<h2>2014</h2>
					</div>

					<div class="text col-7">
						<p>
							<img src="images/BioDigitalPC_8_Standing_Up.png" width="70px" height="120px"><br>
							Third generation card produced, AMD Quad Core
						</p>
					</div>
				</div>
			</div>

			<div class="timelineCont col-12">
				<div class="row">
					<div class="date col-5">
						<h2></h2>
					</div>

					<div class="text col-7">
						<p></p>
					</div>
				</div>
			</div>
		  ...

		</div>
	</div>
	<script type="text/javascript">
		$(function(){
		  $('#timeline').timelinev();
		});
	</script>
</body>
</html>