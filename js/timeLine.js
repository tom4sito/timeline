	var numOfTimeLineEvents = 14; //every time an event is added to the timeline this var must be increased by one
	var yearTracker = -1; //keeps track of the current year highlighted
	var scrollDirection = 0;
	var lastYearSelected = "";
	var lastYearArrow = "";
	var lastYearImg = "";

	var browserType = browserVersion();
	var browserData = browserType.split(" ");
	var isFireFox = false;

	var whichBrowserToScroll = ""; //stores the wheel event depending on the userbrowser
	if(browserData[0].toLowerCase() == "firefox" && (parseInt(browserData[1]) > 30)){
		whichBrowserToScroll = "DOMMouseScroll"; //wheel event compatible with FIREFOX
		isFireFox = true;
	}
	else if(browserData[0] == "IE"){
		whichBrowserToScroll = "mousewheel"; //wheel event compatible with INTERNET EXPLORER
	}
	else{
		whichBrowserToScroll = "wheel"; ////wheel event compatible with all other browsers
	}

	var lastScroll = 0;
	var currentEvent = "";

	// main scrolling function that rolls years up and down
	scrollTest();

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

	function scrollTest(){
		document.getElementById("timeline-container").addEventListener(whichBrowserToScroll, function(e){
			var currentYearContainer = this.children;

			var wheeldata = 0;
			// sets wheel data depending on user browser
			if(isFireFox){
				wheeldata = e.detail;
			}
			else{
				wheeldata = e.wheelDelta * -1;
			}
			
			if(wheeldata > scrollDirection){
				if(yearTracker < numOfTimeLineEvents){
					if(lastYearSelected && $(lastYearSelected).hasClass("active-year") && (yearTracker != numOfTimeLineEvents)){
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