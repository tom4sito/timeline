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
			/*display: block;*/
/*			margin-left: auto;
			margin-right: auto;
			width: 40%;*/
			/*padding-left: 40%;*/
			margin-bottom: 10px;
		}

		.active-year {
			padding-left: 1.1% !important;
		}

		.current-year{
			padding-left: 2%;
			cursor: pointer;
			margin-bottom: 10px;
		}

		.not-active{
/*			padding-left: 2%;*/
			opacity: 0.7;
		}

		.year-arrow {
			margin-right: 10px;
		}
		.unactive-year-arrow{
			height: 140px;
		}

		.unactive-year-img{
			height: 140px;
			/*opacity: 0.6;*/
		}


	@media screen and (max-width: 460px) {
		.active-year-img{
			width:310px;
			height: 180px;
			/*padding-bottom: 10px;*/
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
		<button id="scrollTracker" style="margin-left:20px">scroll tracker</button>
		
	</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
</script>
<script type="text/javascript">
	var yearTracker = -1;
	var scrollDirection = 0;
	var lastYearSelected = "";
	var lastYearArrow = "";
	var lastYearImg = "";

	var browserType = browserVersion();
	var browserData = browserType.split(" ");

	var yearImgArray = ["img0.png", "img1.png", "img2.png", "img3.png", "img4.jpg", "img5.jpg", "img6.png", "img7.jpg"];

	var lastScroll = 0;
	var currentEvent = "";

	if(browserData[0].toLowerCase() == "firefox" && (parseInt(browserData[1]) > 30))
	{
		console.log("firefox: " + browserData[1]);
		scrollFirefox();
	}
	else{
		console.log("not firefox");
		scrollTestImage();
	}

	function browserVersion(){
		var ua= navigator.userAgent, tem, 
	    M= ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
	    if(/trident/i.test(M[1])){
	        tem=  /\brv[ :]+(\d+)/g.exec(ua) || [];
	        return 'IE '+(tem[1] || '');
	    }
	    if(M[1]=== 'Chrome'){
	        tem= ua.match(/\b(OPR|Edge)\/(\d+)/);
	        if(tem!= null) return tem.slice(1).join(' ').replace('OPR', 'Opera');
	    }
	    M= M[2]? [M[1], M[2]]: [navigator.appName, navigator.appVersion, '-?'];
	    if((tem= ua.match(/version\/(\d+)/i))!= null) M.splice(1, 1, tem[1]);
	    return M.join(' ');
	}

	function scrollFirefox(){
		document.getElementById("maincont").addEventListener("DOMMouseScroll", function(e){
			console.log(e.detail);
			if(e.detail > scrollDirection){
				if(yearTracker < 7){
					yearTracker += 1;
					var currElement = this.children[yearTracker];
					$(currElement).css({"color":"red", "font-size": "60px"});
					$(currElement).prev().css({"color":"black", "font-size": "30px"});
				}			
			}
			else{
				if(yearTracker > 0){
					yearTracker -= 1;
					var currElement = this.children[yearTracker];
					$(currElement).css({"color":"red", "font-size": "60px"});
					$(currElement).prev().css({"color":"black", "font-size": "30px"});
					$(currElement).next().css({"color":"black", "font-size": "30px"});	
				}			
			}
			console.log(yearTracker);
		});
	}

	function scrollNotFirefox(){
		document.getElementById("timelinecontainer").addEventListener("wheel", function(e){
			var maincont = this.children[0];
			var wheeldata = e.wheelDelta * -1;
			if(wheeldata > scrollDirection){
				if(yearTracker < 7){
					yearTracker += 1;
					var currElement = maincont.children[yearTracker];
					$(currElement).addClass("year-head-active");
					$(currElement).removeClass("generic");
					lastYearClicked = currElement;
					$(currElement).prev().removeClass("year-head-active");
					// $(".yearimg").hide(function(){
					// 	$(".yearimg").attr("src", "images/" + yearImgArray[yearTracker]);
					// }).fadeIn();
					$(".yearimg").attr("src", "images/" + yearImgArray[yearTracker]);
					
				}			
			}
			else{
				if(yearTracker > 0){
					yearTracker -= 1;
					var currElement = maincont.children[yearTracker];
					$(currElement).removeClass("generic");
					$(currElement).addClass("year-head-active");
					$(currElement).prev().removeClass("year-head-active");
					$(currElement).next().removeClass("year-head-active");
					lastYearClicked = currElement;
					$(".yearimg").attr("src", "images/" + yearImgArray[yearTracker]);
				}			
			}
			console.log(yearTracker);
			event.preventDefault();
		});
	}

	function scrollTestImage(){
		document.getElementById("timeline-container").addEventListener("wheel", function(e){
			var currentYearContainer = this.children;
			var wheeldata = e.wheelDelta * -1;
			if(wheeldata > scrollDirection){
				if(yearTracker < 14){
					if(lastYearSelected && $(lastYearSelected).hasClass("active-year") && (yearTracker != 14)){
						$(lastYearSelected).removeClass("active-year").addClass("not-active");
						$(lastYearSelected).removeClass("hover-lock");
						$(lastYearArrow).removeClass("active-year-arrow").addClass("unactive-year-arrow");
						$(lastYearImg).removeClass("active-year-img").addClass("unactive-year-img");
					}

					yearTracker += 1;
					var currentYear = currentYearContainer[yearTracker];
					var currentYearArrow = currentYear.children[0];
					var currentYearImg = currentYear.children[1];

					console.log($('html,body').animate({scrollTop: $(currentYear).offset().top - 200}, 100));

					// console.log($(currentYear).offset().top);

					$(currentYear).removeClass("not-active").addClass("active-year");
					$(currentYear).addClass("hover-lock");

					if($(currentYearArrow).hasClass("unactive-year-arrow")){
						$(currentYearArrow).removeClass("unactive-year-arrow").addClass("active-year-arrow");
					}

					if($(currentYearImg).hasClass("unactive-year-img")){
						$(currentYearImg).removeClass("unactive-year-img").addClass("active-year-img");
					}

					lastYearSelected = currentYear;
					lastYearArrow = currentYearArrow;
					lastYearImg = currentYearImg;
					console.log(yearTracker);
				}			
			}
			else{
				if(yearTracker > 0){
					if(lastYearSelected && $(lastYearSelected).hasClass("active-year")){
						$(lastYearSelected).removeClass("active-year").addClass("not-active");
						$(lastYearSelected).removeClass("hover-lock");
						$(lastYearArrow).removeClass("active-year-arrow").addClass("unactive-year-arrow");
						$(lastYearImg).removeClass("active-year-img").addClass("unactive-year-img");
					}
					yearTracker -= 1;
					var currentYear = currentYearContainer[yearTracker];
					var currentYearArrow = currentYear.children[0];
					var currentYearImg = currentYear.children[1];

					$('html,body').animate({scrollTop: $(currentYear).offset().top - 200}, 100);

					$(currentYear).removeClass("not-active").addClass("active-year");
					$(currentYear).addClass("hover-lock");

					if($(currentYearArrow).hasClass("unactive-year-arrow")){
						$(currentYearArrow).removeClass("unactive-year-arrow").addClass("active-year-arrow");
					}

					if($(currentYearImg).hasClass("unactive-year-img")){
						$(currentYearImg).removeClass("unactive-year-img").addClass("active-year-img");
					}

					lastYearSelected = currentYear;
					lastYearArrow = currentYearArrow;
					lastYearImg = currentYearImg;
				}			
			}
			// console.log(yearTracker);
			event.preventDefault();
		});
	}

// mouse events ----------------------------------
	$(".current-year").on("mouseover", function(){
		if(!$(this).hasClass("hover-lock")){
			$(this).removeClass('not-active');	
		}	
	});

	$(".current-year").on("mouseout", function(){
		if(!$(this).hasClass("hover-lock")){
			$(this).addClass('not-active');
		}	
	});

	$(".current-year").on('click', function(){
		if(lastYearSelected && $(lastYearSelected).hasClass("active-year")){
			$(lastYearSelected).removeClass("active-year").addClass("not-active");
			$(lastYearSelected).removeClass("hover-lock");
			$(lastYearArrow).removeClass("active-year-arrow").addClass("unactive-year-arrow");
			$(lastYearImg).removeClass("active-year-img").addClass("unactive-year-img");
		}

		var currentYear = $(this);
		var currentYearArrow = currentYear.children()[0];
		var currentYearImg = currentYear.children()[1];

		$('html,body').animate({scrollTop: $(currentYear).offset().top - 200}, 100);

		$(this).removeClass("not-active").addClass("active-year");
		$(this).addClass("hover-lock");

		if($(currentYearArrow).hasClass("unactive-year-arrow")){
			$(currentYearArrow).removeClass("unactive-year-arrow").addClass("active-year-arrow");
		}

		if($(currentYearImg).hasClass("unactive-year-img")){
			$(currentYearImg).removeClass("unactive-year-img").addClass("active-year-img");
		}
		lastYearSelected = currentYear;
		lastYearArrow = currentYearArrow;
		lastYearImg = currentYearImg;
		yearTracker = parseInt(currentYear.attr("tracker"));
	});

	$("#scrollTracker").on("click", function(){
		console.log("scroll top: " + $(this).scrollTop());
	});

</script>
</body>
</html>
