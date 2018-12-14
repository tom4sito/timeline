<!DOCTYPE html>
<html>
<head>
	<title>timeline 3</title>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" 
	        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" 
	        crossorigin="anonymous">
	</script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style type="text/css">

	p{
		font-size: 30px;
		color: #000;
	}

	.wrap {
     width: 95%;
     min-width: 900px;
	}

	#maincont {
		width: 160px;
	}

/*	#timelinecontainer {
		overflow-y: unset;
	}*/
	.year-head {
		cursor: pointer;
		/*opacity: 0.4;*/
	}

	.year-head-active {
		cursor:pointer;
	}

	.generic{
		color: #000;
		font-size: 30px;
	}

	.generic-active{
		color: #1a6fb9;
		font-size: 30px;
	}

	@media screen and (max-width: 420px) {
	  .yearimg {
	    width: 130px;
	  }
	  #year-content{
	  	padding-top: 80px;
	  }
	}

	.yearimg {
		/*display:none;*/
	}

	.imgclick {
		opacity: 0.4;
	}

	.hover-img{
		opacity: unset;
	}

	</style>
</head>
<body>
	<div id="timelinecontainer" class="row" style="margin-left: 10px;">
		<div id="maincont" class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
			<p id="ele1" class="year-head" tracker="0"><img class="imgclick" tracker="0" src="images/2001.png" width="60" heigth="60"></p>
			<p id="ele2" class="year-head" tracker="1"><img class="imgclick" tracker="1" src="images/2001.png" width="60" heigth="60"></p>
			<p id="ele3" class="year-head" tracker="2"><img class="imgclick" tracker="2" src="images/2001.png" width="60" heigth="60"></p>
			<p id="ele4" class="year-head" tracker="3"><img class="imgclick" tracker="3" src="images/2001.png" width="60" heigth="60"></p>
			<p id="ele5" class="year-head" tracker="4"><img class="imgclick" tracker="4" src="images/2001.png" width="60" heigth="60"></p>
			<p id="ele6" class="year-head" tracker="5"><img class="imgclick" tracker="5" src="images/2001.png" width="60" heigth="60"></p>
			<p id="ele7" class="year-head" tracker="6"><img class="imgclick" tracker="6" src="images/2001.png" width="60" heigth="60"></p>
			<p id="ele7" class="year-head" tracker="7"><img class="imgclick" tracker="7" src="images/2001.png" width="60" heigth="60"></p>
		</div>

		<div id="year-content" class="col-xs-6 col-sm-8 col-md-10 col-lg-10" >
			<img class="yearimg" src="" width="260" heigth="404">
		</div>

	</div>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
</script>

<script type="text/javascript">
	var yearTracker = -1;
	var scrollDirection = 0;
	var lastYearClicked = "";

	var browserType = browserVersion();
	var browserData = browserType.split(" ");

	var yearImgArray = ["img0.png", "img1.png", "img2.png", "img3.png", "img4.jpg", "img5.jpg", "img6.png", "img7.jpg"];

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
		document.getElementById("timelinecontainer").addEventListener("wheel", function(e){
			var maincont = this.children[0];
			var wheeldata = e.wheelDelta * -1;
			if(wheeldata > scrollDirection){
				if(yearTracker < 7){
					$(lastYearClicked).attr({"width":"60", "heigth":"60"});
					yearTracker += 1;
					var currElement = maincont.children[yearTracker];
					currElement = currElement.children[0];
					console.log("currElement: vvvvv")
					console.log(currElement);
					$(currElement).attr({"width":"100", "heigth":"100"});
					$(currElement).removeClass("imgclick");
					$(currElement).addClass("hoverlock");

					$(lastYearClicked).addClass("imgclick");
					$(lastYearClicked).attr({"width":"60", "heigth":"60"});
					$(lastYearClicked).removeClass("hoverlock");

					console.log("previousElement: vvvvv");
					console.log(lastYearClicked);
					lastYearClicked = currElement;

					
					// $(".yearimg").hide(function(){
					// 	$(".yearimg").attr("src", "images/" + yearImgArray[yearTracker]);
					// }).fadeIn();
					$(".yearimg").attr("src", "images/" + yearImgArray[yearTracker]);
					
				}			
			}
			else{
				if(yearTracker > 0){
					$(lastYearClicked).attr({"width":"60", "heigth":"60"});
					yearTracker -= 1;
					var currElement = maincont.children[yearTracker];
					currElement = currElement.children[0];
					console.log("currElement: vvvvv")
					console.log(currElement);

					$(currElement).attr({"width":"100", "heigth":"100"});
					$(currElement).removeClass("imgclick");
					$(currElement).addClass("hoverlock");

					$(lastYearClicked).addClass("imgclick");
					$(lastYearClicked).attr({"width":"60", "heigth":"60"});
					$(lastYearClicked).removeClass("hoverlock");

					console.log("previousElement: vvvvv");
					console.log(lastYearClicked);
					lastYearClicked = currElement;

					$(".yearimg").attr("src", "images/" + yearImgArray[yearTracker]);
				}			
			}
			console.log(yearTracker);
			event.preventDefault();
		});
	}

// mouse events ----------------------------------
	$(".imgclick").on("mouseover", function(){
		$(this).removeClass("imgclick");
	});

	$(".imgclick").on("mouseout", function(){
		if($(this).hasClass("hoverlock")){
		}
		else{
			$(this).addClass("imgclick");
		}
	});

	$(".imgclick").on("click", function(){
		if($(this).hasClass("hoverlock")){
		}
		else{
			$(this).removeClass("imgclick");
			$(this).addClass("hoverlock");
			$(this).attr({"width":"100", "heigth":"100"});

			$(lastYearClicked).addClass("imgclick");
			$(lastYearClicked).attr({"width":"60", "heigth":"60"});
			$(lastYearClicked).removeClass("hoverlock");

			lastYearClicked = $(this);

			yearTracker = parseInt($(this).attr("tracker"));
			$(".yearimg").attr("src", "images/" + yearImgArray[yearTracker]);
		}

	});

</script>
</body>
</html>