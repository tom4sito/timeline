<!DOCTYPE html>
<html>
<head>
	<title>timeline 2</title>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" 
	        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" 
	        crossorigin="anonymous">
	</script>
	<style type="text/css">

	p{
		font-size: 30px;
	}

	#maincont{
/*		height: 100px;
		background-color: red;*/
		/*overflow-y: scroll;*/
	}
	</style>
</head>
<body id="timecontainer">
	<div id="maincont">
		<p id="ele1">hello</p>
		<p id="ele2">2002</p>
		<p id="ele3">2004</p>
		<p id="ele4">2008</p>
		<p id="ele5">2010</p>
		<p id="ele6">2011</p>
		<p id="ele7">2013</p>
		<p>hello</p>
	</div>
	<div id="nextele">
		
	</div>


<script type="text/javascript">
	var yearTracker = -1;
	var scrollDirection = 0;

	var browserType = browserVersion();
	var browserData = browserType.split(" ");
	console.log(browserData);
	if(browserData[0].toLowerCase() == "firefox" && (parseInt(browserData[1]) > 30))
	{
		console.log("firefox: " + browserData[1]);
		scrollFirefox();
	}
	else{
		console.log("not firefox");
		scrollTest();
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
		document.getElementById("maincont").addEventListener("wheel", function(e){
			var wheeldata = e.wheelDelta * -1;
			if(wheeldata > scrollDirection){
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

	function scrollTest(){
		document.getElementById("maincont").addEventListener("wheel", function(e){
			var wheeldata = e.wheelDelta * -1;
			if(wheeldata > scrollDirection){
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


</script>
</body>
</html>