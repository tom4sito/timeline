<!DOCTYPE html>
<html>
<head>
	<title>prototype</title>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" 
	        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" 
	        crossorigin="anonymous">
	</script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<style type="text/css">
		.current-year-container{
			margin-bottom: 10px;
		}

		.active-year{
			padding-left: 1.1% !important;
		}

		.current-year{
			padding-left: 2%;
			cursor: pointer;
			margin-bottom: 10px;
		}

		.not-active{
			opacity: 0.7;
		}

		.year-arrow{
			margin-right: 10px;
		}
		.unactive-year-arrow{
			height: 140px;
		}

		.unactive-year-img{
			height: 140px;
		}


	@media screen and (max-width: 460px) {
		.active-year-img{
			width:310px;
			height: 180px;
		}
		.active-year-arrow{
			height: 180px;
		}

		.unactive-year-img {
			width:168px;
			height: 96px;
			padding-bottom: 10px;
		}

		.unactive-year-arrow{
			height: 120px;
		}

	}
	</style>
</head>
<body>
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12" id="timeline-container">
			<div class="current-year not-active" tracker="0">
				<img src="images/2002_arrow_b.png" class="year-arrow unactive-year-arrow">
				<img src="images/2002_text.png" height="228" class="unactive-year-img">
			</div>
			<div class="current-year not-active" tracker="1">
				<img src="images/2008_arrow_b.png" class="year-arrow unactive-year-arrow">
				<img src="images/2008_text.png" height="228" class="unactive-year-img">
			</div>
			<div class="current-year not-active" tracker="2">
				<img src="images/2010_arrow_b.png" class="year-arrow unactive-year-arrow">
				<img src="images/2010_text.png" height="228" class="unactive-year-img">
			</div>
			<div class="current-year not-active" tracker="3">
				<img src="images/2011_arrow_b.png" class="year-arrow unactive-year-arrow">
				<img src="images/2011_text.png" height="228" class="unactive-year-img">
			</div>
			<div class="current-year not-active" tracker="4">
				<img src="images/2013_arrow_b.png" class="year-arrow unactive-year-arrow">
				<img src="images/2013_text.png" height="228" class="unactive-year-img">
			</div>
			<div class="current-year not-active" tracker="5">
				<img src="images/2014_arrow_b.png" class="year-arrow unactive-year-arrow">
				<img src="images/2014_text.png" height="228" class="unactive-year-img">
			</div>
			<div class="current-year not-active" tracker="6">
				<img src="images/2015_arrow_b.png" class="year-arrow unactive-year-arrow">
				<img src="images/2015_text.png" height="228" class="unactive-year-img">
			</div>
			<div class="current-year not-active" tracker="7">
				<img src="images/2017_arrow_b.png" class="year-arrow unactive-year-arrow">
				<img src="images/2017_text.png" height="228" class="unactive-year-img">
			</div>
			<div class="current-year not-active" tracker="8">
				<img src="images/2017_2_arrow_b.png" class="year-arrow unactive-year-arrow">
				<img src="images/2017_2_text.png" height="228" class="unactive-year-img">
			</div>
			<div class="current-year not-active" tracker="9">
				<img src="images/2018_arrow_b.png" class="year-arrow unactive-year-arrow">
				<img src="images/2018_text.png" height="228" class="unactive-year-img">
			</div>
			<div class="current-year not-active" tracker="10">
				<img src="images/2018_2_arrow_b.png" class="year-arrow unactive-year-arrow">
				<img src="images/2018_2_text.png" height="228" class="unactive-year-img">
			</div>
			<div class="current-year not-active" tracker="11">
				<img src="images/2018_3_arrow_b.png" class="year-arrow unactive-year-arrow">
				<img src="images/2018_3_text.png" height="228" class="unactive-year-img">
			</div>
			<div class="current-year not-active" tracker="12">
				<img src="images/2018_4_arrow_b.png" class="year-arrow unactive-year-arrow">
				<img src="images/2018_4_text.png" height="228" class="unactive-year-img">
			</div>
			<div class="current-year not-active" tracker="13">
				<img src="images/2019_arrow_b.png" class="year-arrow unactive-year-arrow">
				<img src="images/2019_text.png" height="228" class="unactive-year-img">
			</div>
			<div class="current-year not-active" tracker="14">
				<img src="images/2020_arrow_b.png" class="year-arrow unactive-year-arrow">
				<img src="images/2020_text.png" height="228" class="unactive-year-img">
			</div>
		</div>		
	</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
</script>

<script type="text/javascript" src="js/timeline.js"></script>
</body>
</html>
