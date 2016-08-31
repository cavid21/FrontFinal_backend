
//ilk acilisda preloaderin gelmesi. On yukleme
function preloader(){
	$(window).on('load', function(){
		$("#preloader").css({
			position: "fixed",
			top: "0",
			left: "0",
			right: "0",
			bottom: "0",
			backgroundColor: "white",
			width: "100%"
		});
		$("#preloader div").css({
			width: "40px",
			height: "40px",
			borderTop: "3px solid #1AC6FF",
			borderRadius: "50%",
		})
		$("#preloader").fadeOut();
	});
}
preloader();


//dropdown menu. Yuxarda navbarda extranin acisilis baglanisi
function homeExtra(){
	$(".drop ul").hide();
	$(".drop").mouseenter(function() {
		$(".drop ul").slideDown();	
		$(".drop .extra").css({
			borderTop: "4px solid #1AC6FF",
			backgroundColor: "#000"
		});

		$(".drop .homePages").hide();
		$(".drop .blog").hide();
		$(".drop .ecommerce").hide();
		$(".drop li").eq(0).mouseenter(function() {
			$(".drop .homePages").show(300);
		});
		$(".drop li").eq(0).mouseleave(function() {
			$(".drop .homePages").hide(300);
		});
		$(".drop li").eq(9).mouseenter(function() {
			$(".drop .blog").show(300);
		});
		$(".drop li").eq(9).mouseleave(function() {
			$(".drop .blog").hide(300);
		});
		$(".drop li").eq(12).mouseenter(function() {
			$(".drop .ecommerce").show(300);
		});
		$(".drop li").eq(12).mouseleave(function() {
			$(".drop .ecommerce").hide(300);
		});
	});
	$(".drop").mouseleave(function() {
		$(".drop ul").slideUp();
		$(".drop .extra").css({
			borderTop: "",
			backgroundColor: "transparent"
		});
	});

}
homeExtra();

//Home sectionunda ortadaki esas hissenin animasiyasi
function home(){
	$("#home .content").addClass("hideAnimation");
	setTimeout(function(){
		$('#home .content').removeClass("hideAnimation");
		$('#home .content').addClass("animationShow");
	}, 800);
}
home();

//about pricesTwo sectionlarinda logo yazilarinin animasiya seklinde yuxardan asagiya dusmesi ucun
function logos(){
	$('#about .logo img').addClass("animationUpY");
	$('#pricesTwo .logo img').addClass("animationUpY");
	$(window).scroll(function() {
		scroll = $(this).scrollTop();
		if(scroll > $('#about .logo').offset().top - $(window).height() / 1.3){
			$('#about .logo img').each(function(i){
				setTimeout(function(){
					$('#about .logo img').removeClass("animationUpY");
					$('#about .logo img').addClass("animationShow");
				}, 150*(i+1));
			});
		}

		if(scroll > $('#pricesTwo .logo').offset().top - $(window).height() / 1.3){
			$('#pricesTwo .logo img').each(function(i){
				setTimeout(function(){
					$('#pricesTwo .logo img').removeClass("animationUpY");
					$('#pricesTwo .logo img').addClass("animationShow");
				}, 150*(i+1));
			});
		}
	});
}
logos();


//table butonlarina vuranda goruntunun deyismesi ucun
function tabShow(){
	$("#about .tabs button").eq(0).css({
		backgroundColor: '#1AC6FF',
		color: '#fff'
	});
	$("#about .tabs button").eq(0).click(function(){
		$(this).css({
			backgroundColor: '#1AC6FF',
			color: '#fff'
		});
		$("#about .tabs button").eq(1).css({
			backgroundColor: '',
			color: ''
		});
		$("#about .tabs button").eq(2).css({
			backgroundColor: '',
			color: ''
		});
	});
	$("#about .tabs button").eq(1).click(function(){
		$(this).css({
			backgroundColor: '#1AC6FF',
			color: '#fff'
		});
		$("#about .tabs button").eq(0).css({
			backgroundColor: '',
			color: ''
		});
		$("#about .tabs button").eq(2).css({
			backgroundColor: '',
			color: ''
		});

		// about sectionunda ikinci table -in animasiyali sekilde gelmesi
		function animationSecondTab(){
			$("#about .secondTab .animeLeft").addClass("animationLeftX");
			$("#about .secondTab .animeRight").addClass("animationRightX");
			$(window).scroll(function(){
				scroll = $(this).scrollTop();
				$('#about .secondTab .animeLeft').each(function(i){
					if(scroll > $("#about .secondTab").eq(i).offset().top - $(window).height() / 1.4){
						setTimeout(function(){
							$('#about .secondTab .animeLeft').eq(i).removeClass("animationLeftX");
							$('#about .secondTab .animeLeft').eq(i).addClass("animationShow");
						}, 150*(i+1));
					}
				});
				$('#about .secondTab .animeLeft').each(function(i){
					if(scroll > $("#about .secondTab").eq(i).offset().top - $(window).height() / 1.4){
						setTimeout(function(){
							$('#about .secondTab .animeRight').eq(i).removeClass("animationRightX");
							$('#about .secondTab .animeRight').eq(i).addClass("animationShow");
						}, 150*(i+1));
					}
				});
			});
		}
		animationSecondTab();


		//ikinci butona click olunanda olacaq animasiya ucun
		// function clickAnimeSecondTab(){
		// 	$('#about .secondTab').each(function(i) {
		// 		$('#about .secondTab .animeLeft').eq(i).removeClass("animationShow");
		// 		$('#about .secondTab .animeRight').eq(i).removeClass("animationShow");
		// 		$('#about .secondTab .animeLeft').eq(i).addClass("animationLeftX");
		// 		$('#about .secondTab .animeRight').eq(i).addClass("animationRightX");
		// 		setTimeout(function(){
		// 			$('#about .secondTab .animeLeft').eq(i).removeClass("animationLeftX");
		// 			$('#about .secondTab .animeRight').eq(i).removeClass("animationRightX");
		// 			$('#about .secondTab .animeLeft').eq(i).addClass("animationShow");
		// 			$('#about .secondTab .animeRight').eq(i).addClass("animationShow");
		// 		}, 150*(1+1));
		// 	});
		// }
		// clickAnimeSecondTab();

	});
	$("#about .tabs button").eq(2).click(function(){
		$(this).css({
			backgroundColor: '#1AC6FF',
			color: '#fff'
		});
		$("#about .tabs button").eq(0).css({
			backgroundColor: '',
			color: ''
		});
		$("#about .tabs button").eq(1).css({
			backgroundColor: '',
			color: ''
		});
		function animationThirdTab(){
			$("#about .thirdTab .animeLeft").addClass("animationLeftX");
			$("#about .thirdTab .animeRight").addClass("animationRightX");
			$(window).scroll(function(){
				scroll = $(this).scrollTop();
				$('#about .thirdTab .animeLeft').each(function(i){
					if(scroll > $("#about .thirdTab").eq(i).offset().top - $(window).height() / 1.4){
						setTimeout(function(){
							$('#about .thirdTab .animeLeft').eq(i).removeClass("animationLeftX");
							$('#about .thirdTab .animeLeft').eq(i).addClass("animationShow");
						}, 150*(i+1));
					}
				});
				$('#about .thirdTab .animeLeft').each(function(i){
					if(scroll > $("#about .thirdTab").eq(i).offset().top - $(window).height() / 1.4){
						setTimeout(function(){
							$('#about .thirdTab .animeRight').eq(i).removeClass("animationRightX");
							$('#about .thirdTab .animeRight').eq(i).addClass("animationShow");
						}, 150*(i+1));
					}
				});
			});
		}
		animationThirdTab();

		//ucuncu butona click olunanda olacaq animasiya ucun
		// function clickAnimeThirdTab(){
		// 	$('#about .thirdTab').each(function(i) {
		// 		$('#about .thirdTab .animeLeft').eq(i).removeClass("animationShow");
		// 		$('#about .thirdTab .animeRight').eq(i).removeClass("animationShow");
		// 		$('#about .thirdTab .animeLeft').eq(i).addClass("animationLeftX");
		// 		$('#about .thirdTab .animeRight').eq(i).addClass("animationRightX");
		// 		setTimeout(function(){
		// 			$('#about .thirdTab .animeLeft').eq(i).removeClass("animationLeftX");
		// 			$('#about .thirdTab .animeRight').eq(i).removeClass("animationRightX");
		// 			$('#about .thirdTab .animeLeft').eq(i).addClass("animationShow");
		// 			$('#about .thirdTab .animeRight').eq(i).addClass("animationShow");
		// 		}, 150*(1+1));
		// 	});
		// }
		// clickAnimeThirdTab();

		//ucuncu table butonun click olunanda 3 EASY STEPS yazisinin altindagi p tagi ucun
		function easyanime(){
			$('#about .p').addClass('hideAnimation');
			setTimeout(function(){
				$('#about .p').removeClass("hideAnimation");
				$('#about .p').addClass("animationShow");
			}, 800);
		}
		easyanime();

		//altindaki columlar ucun
		function columnAnime(){
			$('#about .company').addClass('animationUpY70px');
			$(window).scroll(function(){
				scroll = $(this).scrollTop();
				if(scroll > $('#about .company').offset().top - $(window).height() / 1.3){
					$('#about .company').each(function(i){
						setTimeout(function(){
							$('#about .company').removeClass("animationUpY70px");
							$('#about .company').addClass("animationShow");
						}, 150*(i+1));
					});
				}
			});
		}
		columnAnime();
	});
	$("#about .secondTab").hide();
	$("#about .thirdTab").hide();
	$("#about .tabs button").eq(0).on("click",function(){
		$("#about .firstTab").show();
		$("#about .secondTab").hide();
		$("#about .thirdTab").hide();
	});
	$("#about .tabs button").eq(1).on("click", function(){
		$("#about .firstTab").hide();
		$("#about .secondTab").show();
		$("#about .thirdTab").hide();
	});
	$("#about .tabs button").eq(2).on("click", function(){
		$("#about .firstTab").hide();
		$("#about .secondTab").hide();
		$("#about .thirdTab").show();
	});
}
tabShow();

// about sectionunda ucuncu table -in animasiyali sekilde gelmesi
function animationFirstTab(){
	$("#about .firstTab .animeLeft").addClass("animationLeftX");
	$("#about .firstTab .animeRight").addClass("animationRightX");
	$(window).scroll(function(){
		scroll = $(this).scrollTop();
		$('#about .firstTab .animeLeft').each(function(i){
			if(scroll > $("#about .firstTab").eq(i).offset().top - $(window).height() / 1.4){
				setTimeout(function(){
					$('#about .firstTab .animeLeft').eq(i).removeClass("animationLeftX");
					$('#about .firstTab .animeLeft').eq(i).addClass("animationShow");
				}, 150*(i+1));
			}
		});
		$('#about .firstTab .animeLeft').each(function(i){
			if(scroll > $("#about .firstTab").eq(i).offset().top - $(window).height() / 1.4){
				setTimeout(function(){
					$('#about .firstTab .animeRight').eq(i).removeClass("animationRightX");
					$('#about .firstTab .animeRight').eq(i).addClass("animationShow");
				}, 150*(i+1));
			}
		});
	});
}
animationFirstTab();



function features(){
	$("#features img").eq(1).hide();
	$("#features img").eq(2).hide();
	$("#features .button").eq(0).children().css("color","#fff");

	$("#features .button").eq(0).css({
			backgroundColor: "#1AC6FF",
			cursor: "pointer"
		}).click(function(){
		$("#features img").eq(0).show();
		$("#features img").eq(1).hide();
		$("#features img").eq(2).hide();
		$("#features .button").eq(0).css("background-color", "#1AC6FF");
		$("#features .button").eq(1).css("background-color", "");
		$("#features .button").eq(2).css("background-color", "");
		$("#features .button").eq(0).children().css("color","#fff");
		$("#features .button").eq(1).children().css("color","");
		$("#features .button").eq(2).children().css("color","");
		//buttona click olunanda animasiya effektinin verilmesi ucun
		function clickAnime1(){
			$('#features img').eq(0).removeClass("animationShow");
			$('#features img').eq(0).addClass('animationRightX100px');
			setTimeout(function(){
				$('#features img').eq(0).removeClass("animationRightX100px");
				$('#features img').eq(0).addClass("animationShow");
			}, 150*(1+1));
		}
		clickAnime1();
	});
	$("#features .button").eq(1).css({
			cursor: "pointer"
		}).click(function(){
		$("#features img").eq(0).hide();
		$("#features img").eq(1).show();
		$("#features img").eq(2).hide();
		$("#features .button").eq(0).css("background-color", "");
		$("#features .button").eq(1).css("background-color", "#1AC6FF");
		$("#features .button").eq(2).css("background-color", "");
		$("#features .button").eq(0).children().css("color","");
		$("#features .button").eq(1).children().css("color","#fff");
		$("#features .button").eq(2).children().css("color","");
		//buttona click olunanda animasiya effektinin verilmesi ucun
		function clickAnime2(){
			$('#features img').eq(1).removeClass("animationShow");
			$('#features img').eq(1).addClass('animationRightX100px');
			setTimeout(function(){
				$('#features img').eq(1).removeClass("animationRightX100px");
				$('#features img').eq(1).addClass("animationShow");
			}, 150*(1+1));
		}
		clickAnime2();
	});
	$("#features .button").eq(2).css({
			cursor: "pointer"
		}).click(function(){
		$("#features img").eq(0).hide();
		$("#features img").eq(1).hide();
		$("#features img").eq(2).show();
		$("#features .button").eq(0).css("background-color", "");
		$("#features .button").eq(1).css("background-color", "");
		$("#features .button").eq(2).css("background-color", "#1AC6FF");
		$("#features .button").eq(0).children().css("color","");
		$("#features .button").eq(1).children().css("color","");
		$("#features .button").eq(2).children().css("color","#fff");
		//buttona click olunanda animasiya effektinin verilmesi ucun
		function clickAnime3(){
			$('#features img').eq(2).removeClass("animationShow");
			$('#features img').eq(2).addClass('animationRightX100px');
			setTimeout(function(){
				$('#features img').eq(2).removeClass("animationRightX100px");
				$('#features img').eq(2).addClass("animationShow");
			}, 150*(1+1));
		}
		clickAnime3();
	});
}
features();

//features sectionunda sekillerin animasiyali kecisi ucun
function featuresAnime(){
	$('#features img').addClass('animationRightX100px');
	$(window).scroll(function(){
		scroll = $(this).scrollTop();
		if(scroll > $('#features img').offset().top - $(window).height() / 1.3){
			$('#features img').each(function(i){
				setTimeout(function(){
					$('#features img').removeClass("animationRightX100px");
					$('#features img').addClass("animationShow");
				}, 150*(i+1));
			});
		}
	});
}
featuresAnime();


//features sectionunda iconlarin effektli sekilde gelmesi
function iconsAnimeOne(){
	$('#features .one').addClass("animationRightX");
	$(window).scroll(function(){
		scroll = $(this).scrollTop();
		if(scroll > $('#features .one').offset().top - $(window).height() / 1.5){
			$('#features .one').each(function(i){
				setTimeout(function(){
					$('#features .one').removeClass("animationRightX100px");
					$('#features .one').addClass("animationShow");
				}, 150*(i+1));
			});
		}
		
	});
}
iconsAnimeOne();

function iconsAnimeTwo(){
	$('#features .two').addClass("animationLeftX");
	$(window).scroll(function(){
		scroll = $(this).scrollTop();
		if(scroll > $('#features .two').offset().top - $(window).height() / 1.5){
			$('#features .two').each(function(i){
				setTimeout(function(){
					$('#features .two').removeClass("animationRLeftX100px");
					$('#features .two').addClass("animationShow");
				}, 150*(i+1));
			});
		}
		
	});
}
iconsAnimeTwo();

//prices sectionunda animasiya
function pricesAnime(){
	$("#prices .animeLeft").addClass("animationLeftX");
	$("#prices .animeRight").addClass("animationRightX");
	$(window).scroll(function(){
		scroll = $(this).scrollTop();
		$('#prices .animeLeft').each(function(){
			if(scroll > $("#prices .animeLeft").offset().top - $(window).height() / 1.4){
				setTimeout(function(){
					$('#prices .animeLeft').removeClass("animationLeftX");
					$('#prices .animeLeft').addClass("animationShow");
				}, 150*(0+1));
			}
		});
		$('#prices .animeLeft').each(function(){
			if(scroll > $("#prices .animeRight").offset().top - $(window).height() / 1.4){
				setTimeout(function(){
					$('#prices .animeRight').removeClass("animationRightX");
					$('#prices .animeRight').addClass("animationShow");
				}, 150*(0+1));
			}
		});
	});
}
pricesAnime();

function columnsAnime(){
	$('#pricesTwo .animeUP').addClass("animationUpY100px");
	$(window).scroll(function() {
		scroll = $(this).scrollTop();
		if(scroll > $('#pricesTwo .animeUP').offset().top - $(window).height() / 1.3){
			$('#pricesTwo .animeUP').each(function(i){
				setTimeout(function(){
					$('#pricesTwo .animeUP').removeClass("animationUpY100px");
					$('#pricesTwo .animeUP').addClass("animationShow");
				}, 150*(i+1));
			});
		}
	});
}
columnsAnime();

function columnsAnime2_and_Clients(){
	$('#pricesTwo .smallText').addClass("animationDownY100px");
	$('#team .container').addClass("animationDownY100px");
	$('#profile .profile').addClass("animationDownY100px");
	$(window).scroll(function() {
		scroll = $(this).scrollTop();
		if(scroll > $('#pricesTwo .smallText').offset().top - $(window).height() / 1.3){
			$('#pricesTwo .smallText').each(function(i){
				setTimeout(function(){
					$('#pricesTwo .smallText').removeClass("animationDownY100px");
					$('#pricesTwo .smallText').addClass("animationShow");
				}, 150*(i+1));
			});
		}

		if(scroll > $('#team .container').offset().top - $(window).height() / 1.3){
			$('#team .container').each(function(i){
				setTimeout(function(){
					$('#team .container').removeClass("animationDownY100px");
					$('#team .container').addClass("animationShow");
				}, 150*(i+1));
			});
		}

		if(scroll > $('#profile .profile').offset().top - $(window).height() / 1.3){
			$('#profile .profile').each(function(i){
				setTimeout(function(){
					$('#profile .profile').removeClass("animationDownY100px");
					$('#profile .profile').addClass("animationShow");
				}, 150*(i+1));
			});
		}
	});
}
columnsAnime2_and_Clients();

function profile(){
	$("#team p").eq(0).hide();
	$("#team p").eq(1).show();
	$("#team p").eq(2).hide();
	$("#profile .profilDate").eq(1).css({
		"opacity": "1"
	});
	$("#profile .profilDate h5").eq(1).css({
		color: "#1AC6FF"
	});
	$("#profile .profilDate span").eq(1).css({
		color: "#1AC6FF"
	});

	//ilkin click olunacaq butonlarin alt xetleri
	$("#profile .profilDate").eq(0).css({
		borderBottom: "1px solid #DDDDDD"
	});
	$("#profile .profilDate").eq(1).css({
		borderBottom: "1px solid #1AC6FF"
	});
	$("#profile .profilDate").eq(2).css({
		borderBottom: "1px solid #DDDDDD"
	});

	//click olunma prosesi
	$("#profile .profilDate").eq(0).click(function(){
		//Textlerin gorsenmesi ucun
		$("#team p").eq(0).show();
		$("#team p").eq(1).hide();
		$("#team p").eq(2).hide();
		//uzerlerine click edilende aktiv olmasi ucun ve icinde olan h5 ve spanin rengini deyismesi ucun
		$("#profile .profilDate").eq(0).css({
			"opacity": "1"
		});
		$("#profile .profilDate h5").eq(0).css({
			color: "#1AC6FF"
		});
		$("#profile .profilDate span").eq(0).css({
			color: "#1AC6FF"
		});

		$("#profile .profilDate").eq(1).css({
			"opacity": ""
		});
		$("#profile .profilDate h5").eq(1).css({
			color: ""
		});
		$("#profile .profilDate span").eq(1).css({
			color: ""
		});

		$("#profile .profilDate").eq(2).css({
			"opacity": ""
		});
		$("#profile .profilDate h5").eq(2).css({
			color: ""
		});
		$("#profile .profilDate span").eq(2).css({
			color: ""
		});
		//altindaki xettin aktiv olmasi ucun
		$("#profile .profilDate").eq(0).css({
			borderBottom: "1px solid #1AC6FF"
		});
		$("#profile .profilDate").eq(1).css({
			borderBottom: "1px solid #DDDDDD"
		});
		$("#profile .profilDate").eq(2).css({
			borderBottom: "1px solid #DDDDDD"
		});
	});
	$("#profile .profilDate").eq(1).click(function(){
		//Textlerin gorsenmesi ucun
		$("#team p").eq(0).hide();
		$("#team p").eq(1).show();
		$("#team p").eq(2).hide();
		//uzerlerine click edilende aktiv olmasi ucun ve icinde olan h5 ve spanin rengini deyismesi ucun
		$("#profile .profilDate").eq(0).css({
			"opacity": ""
		});
		$("#profile .profilDate h5").eq(0).css({
			color: ""
		});
		$("#profile .profilDate span").eq(0).css({
			color: ""
		});

		$("#profile .profilDate").eq(1).css({
			"opacity": "1"
		});
		$("#profile .profilDate h5").eq(1).css({
			color: "#1AC6FF"
		});
		$("#profile .profilDate span").eq(1).css({
			color: "#1AC6FF"
		});
		
		$("#profile .profilDate").eq(2).css({
			"opacity": ""
		});
		$("#profile .profilDate h5").eq(2).css({
			color: ""
		});
		$("#profile .profilDate span").eq(2).css({
			color: ""
		});
		//altindaki xettin aktiv olmasi ucun
		$("#profile .profilDate").eq(0).css({
			borderBottom: "1px solid #DDDDDD"
		});
		$("#profile .profilDate").eq(1).css({
			borderBottom: "1px solid #1AC6FF"
		});
		$("#profile .profilDate").eq(2).css({
			borderBottom: "1px solid #DDDDDD"
		});
	});
	$("#profile .profilDate").eq(2).click(function(){
		$("#team p").eq(0).hide();
		$("#team p").eq(1).hide();
		$("#team p").eq(2).show();
		$("#profile .profilDate").eq(0).css({
			"opacity": ""
		});
		$("#profile .profilDate h5").eq(0).css({
			color: ""
		});
		$("#profile .profilDate span").eq(0).css({
			color: ""
		});

		$("#profile .profilDate").eq(1).css({
			"opacity": ""
		});
		$("#profile .profilDate h5").eq(1).css({
			color: ""
		});
		$("#profile .profilDate span").eq(1).css({
			color: ""
		});
		
		$("#profile .profilDate").eq(2).css({
			"opacity": "1"
		});
		$("#profile .profilDate h5").eq(2).css({
			color: "#1AC6FF"
		});
		$("#profile .profilDate span").eq(2).css({
			color: "#1AC6FF"
		});
		//altindaki xettin aktiv olmasi ucun
		$("#profile .profilDate").eq(0).css({
			borderBottom: "1px solid #DDDDDD"
		});
		$("#profile .profilDate").eq(1).css({
			borderBottom: "1px solid #DDDDDD"
		});
		$("#profile .profilDate").eq(2).css({
			borderBottom: "1px solid #1AC6FF"
		});
	});
	//click olunma prosesi
}
profile();

function peopleAnime(){
	$('#profile .people').addClass("animationUpY70px");
	$(window).scroll(function() {
		scroll = $(this).scrollTop();
		if(scroll > $('#profile .people').offset().top - $(window).height() / 1.3){
			$('#profile .people').each(function(i){
				setTimeout(function(){
					$('#profile .people').removeClass("animationUpY70px");
					$('#profile .people').addClass("animationShow");
				}, 150*(i+1));
			});
		}
	});
}
peopleAnime();

function people(){
	$("#profile .opacity .icons div").hide();
	$("#profile .opacity img").eq(0).mouseenter(function() {
		$("#profile .opacity .icons").eq(0).children("div").show();
	});
	$("#profile .opacity .icons div").hide();
	$("#profile .opacity img").eq(1).mouseenter(function() {
		$("#profile .opacity .icons").eq(1).children("div").show();
	});
	$("#profile .opacity .icons div").hide();
	$("#profile .opacity img").eq(2).mouseenter(function() {
		$("#profile .opacity .icons").eq(2).children("div").show();
	});
	$("#profile .opacity .icons div").hide();
	$("#profile .opacity img").eq(3).mouseenter(function() {
		$("#profile .opacity .icons").eq(3).children("div").show();
	});
	$("#profile .opacity img").mouseleave(function() {
		$("#profile .opacity .icons div").hide();
	});
}
people();