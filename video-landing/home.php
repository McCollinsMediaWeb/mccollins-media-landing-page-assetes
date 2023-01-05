<?php /* Template Name: Home Page */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="google-site-verification" content="ReLKuA2xqDqRxLMeFXnxMS8PhGDZqXK50awUSfP6Dwo">


<title>McCollins Media: Film &amp; Video Production Company in Dubai</title>

<meta name="author" content="McCollins Media Production">

<meta name="keywords" content=" ">
<meta name="description" content="McCollins Media is an award winning video production, film production and
corporate video production company based in UAE, Pakistan and Portugal">

<link rel="canonical" href="https://www.mccollinsmedia.com/">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css" integrity="sha384-z4tVnCr80ZcL0iufVdGQSUzNvJsKjEtqYZjiQrrYKlpGow+btDHDfQWkFjoaz/Zr" crossorigin="anonymous">
<meta property="og:url" content="https://www.mccollinsmedia.com/">
<meta property="og:type" content="website">
<meta property="og:site_name" content="McCollins Media: Film &amp; Video Production Company in Dubai">
<meta property="og:image" content="https://www.mccollinsmedia.com/assets/images/favicon.png">
<meta property="og:description" content="McCollins Media is an award winning video production, film production and
corporate video production company based in UAE, Pakistan and Portugal">

<meta property="twitter:title" content="McCollins Media: Film &amp; Video Production Company in Dubai">
<meta property="twitter:description" content="McCollins Media is an award winning video production, film production and
corporate video production company based in UAE, Pakistan and Portugal">

<!-- Favicon and touch icons -->
<link rel="shortcut icon" type="image/x-icon" href="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//favicons/images-favicon.png">
<link rel="apple-touch-icon" href="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//favicons/images-favicon.png">
<link rel="shortcut icon" type="image/x-icon" href="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//favicons/images-favicon.png">
<link rel="shortcut icon" type="image/x-icon" href="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//favicons/images-favicon.ico">
<meta name="robots" content="index,follow">
<!-- Favicon and touch icons -->


<!-- Google online fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"><link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Template CSS -->
<link rel="stylesheet" href="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//css/css-style.css">
<link rel="stylesheet" href="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//css/css-screen.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//css/assets-swiper-bundle.min.css">
<link rel="stylesheet" href="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//css/filter-filter.css">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<script src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//js/js-sweetalert.min.js"></script>
<script src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//js/js-jquery-3.5.1.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Swiper JS -->
<script src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//js/3286-assets-swiper-bundle.min.js"></script>

<script>
    var setBAutoHeight = function(){
        if($(".set-box-height-1").length > 0){
            var max_height = 250;
            $(".set-box-height-1").each(function(){
                if(max_height < $(this).height()){
                    max_height = $(this).height();
                }
            });
            $(".set-box-height-1").each(function(){
                $(this).css("height", max_height + 10);
            });
        }
        if($(".set-box-height-2").length > 0){
            var max_height = 250;
            $(".set-box-height-2").each(function(){
                if(max_height < $(this).height()){
                    max_height = $(this).height();
                }
            });
            $(".set-box-height-2").each(function(){
                $(this).css("height", max_height + 10);
            });
        }
        if($(".set-box-height-3").length > 0){
            var max_height = 250;
            $(".set-box-height-3").each(function(){
                if(max_height < $(this).height()){
                    max_height = $(this).height();
                }
            });
            $(".set-box-height-3").each(function(){
                $(this).css("height", max_height + 10);
            });
        }
    }
    $(document).ready(function(){
        $('.nav-bar .toggle').click(function(){
            $('.nav-bar').toggleClass('active');
        });
    });
    $(window).scroll(function(){
        if ($(window).scrollTop() >= 200) {
            $('.header').addClass('fixed-header');
        }
        else {
            $('.header').removeClass('fixed-header');
        }
        $('.nav-bar').removeClass("active");
    });
    $(window).on('load', function(){
        setBAutoHeight();
    });
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-598446608/KN9DCMKhhqYDEJCkrp0C',
      'event_callback': callback
  });
  return false;
}
</script>
<!-- Demo styles -->
<style>
.swiper-container {
	width: 100%;
	height: 100%;
}

.swiper-slide {
	text-align: center;
	font-size: 18px;
	background: #fff;

	/* Center slide text vertically */
	display: -webkit-box;
	display: -ms-flexbox;
	display: -webkit-flex;
	display: flex;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	-webkit-justify-content: center;
	justify-content: center;
	-webkit-box-align: center;
	-ms-flex-align: center;
	-webkit-align-items: center;
	align-items: center;
}

.banner-slide{
	background: rgba(255,255,255,0) !important;
}

.sidenavBg{
	height: 100%;
    width: 100%;
    position: fixed;
    z-index: 999999;
    top: 0;
    right: 300px;
    background-color: rgba(0,0,0,0.2);
	display: none;
}
</style><script>
$(document).ready(function() {
	$(".coverVid, .bottomDef").click(function(){
		if($(".coverVid").prop("muted")){
			$(".coverVid").prop("muted", false);
			$(".toggleAudio").removeClass("ffa-volume-off");
			$(".toggleAudio").addClass("fa-volume-up");
			$(".vidCap").hide();
		} else {
			$(".coverVid").prop("muted", true);
			$(".toggleAudio").removeClass("fa-volume-up");
			$(".toggleAudio").addClass("fa-volume-off");
			$(".vidCap").show();
		}
	});
	
	$(".coverVid2").click(function(){
		if($(".coverVid2").prop('muted')){
			$(".coverVid2").prop('muted', false);
		} else {
			$(".coverVid2").prop('muted', true);
		}
	});
	
	$(".singleDiv").hover(function(){
		var divColor = $(this).data("color");
		$(this).addClass("shadow");
		$(this).css("background-color", divColor);
		$(this).css("cursor", "pointer");
	}, function(){
		$(this).removeClass("shadow");
		$(this).css("background-color", "rgba(0,0,0,0)");
		$(this).css("cursor", "none");
	});
});
</script>
<style type="text/css">
	@media only screen and (max-width: 700px) {
		.p-5.Pad0 {
					padding: 0 !important;
		}
		
	}
	
</style>
</head>

<body>
<header class="header">
    <div class="logo-block"> <a href="mccollinsmedia.com"> <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/mclogo-1.png" class="img-responsive logo-object"> </a> </div>
    <nav class="nav-bar">
        <div class="nav-menu">
            <div class="nav-wrapper">
                <ul id="menu-main-menu" class="menu">
                    <li class="menu-item"><a href="mccollinsmedia.com">Home</a></li>
                    <li class="menu-item"><a href="about-us.html">About</a></li>
                    <li class="menu-item"><a href="services.html">Services</a></li>
                    <li class="menu-item"><a href="our-blogs.html">Blog</a></li>
                    <li class="menu-item"><a href="our-work.html">Works</a></li>
                    <li class="menu-item"><a href="contact-us.html">Contact</a></li>
                </ul>
                <div class="lead-links">
                    <a href="mailto:hey@mccollinsmedia.com">
                        <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-menu-mail.svg" class="menu-prefixicon">
                        hey@mccollinsmedia.com
                    </a>
                    <a href="tel:+971551171248">
                        <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-menu-land.svg" class="menu-prefixicon">
                        +971 55 117 1248
                    </a>
                </div>
                <ul class="foot-social">
                    <li><a href="https://www.youtube.com/channel/UCis7EkkO95RtbiQz0Qeivkg" target="_blank"><img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-youtube.svg"></a></li>
                    <li><a href="https://vimeo.com/mccollinsmediaproductions" target="_blank"><img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-vimeo.svg"></a></li>
                    <li><a href="https://www.facebook.com/mccollinsmediaproductions" target="_blank"><img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-facebook.svg"></a></li>
                    <li><a href="https://www.instagram.com/mccollinsmediaproductions/" target="_blank"><img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-instagram.svg"></a></li>

                </ul>
            </div>
        </div>
        <div class="nav-toggle">
            <div class="toggle"> <span class="cd-nav-icon"></span>
                <svg x="0px" y="0px" width="54px" height="54px" viewbox="0 0 54 54">
                    <circle fill="transparent" stroke="#FFFFFF" stroke-width="2" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
                </svg>
            </div>
        </div>
    </nav>
</header>

<section class="qef">
	<div class="quickEnqContainer">
		<button type="button" class="enqBtn">QUICK ENQUIRY</button>
		<div class="p-4 quickEnq">
			<h3 class="text-center">Quick Enquiry</h3>
			<form action="" method="POST">
				<div class="mb-3">
					<input type="text" class="form-control mt-1" id="w3lName2" placeholder="Name">
					<input type="hidden" id="w3lcontactIP2" value="199.167.201.103">
					<input type="hidden" id="w3lPageURL2" value="https://www.mccollinsmedia.com/">
					<input type="hidden" id="w3lhidden2">
				</div>
				<div class="mb-3">
					<input type="email" class="form-control mt-1" id="w3lSender2" placeholder="Email">
				</div>
				<div class="mb-3">
					<input type="text" class="form-control mt-1" id="w3lPhone2" onkeyup="numbersOnly(this)" placeholder="Phone Number">
				</div>
				<div class="mb-3">
					<textarea rows="4" noresize class="form-control mt-1" id="w3lMessage2" placeholder="Message"></textarea>
				</div>
				<button type="submit" class="btn btn-block btn-danger sendEnquiryForm">Submit</button>
			</form>
		</div>
	</div>
</section>
<script>
	$(document).ready(function(){
		
		$(".sendEnquiryForm").click(function(e){
			e.preventDefault();
			gtag_report_conversion();
			var hiddenInput2 = $("#w3lhidden2").val();
			var contIP2 = $("#w3lcontactIP2").val();
			var w3lPageURL2 = $("#w3lPageURL2").val();
			
			var contName2 = $("#w3lName2").val();
			var contEmail2 = $("#w3lSender2").val();
			var contPhone2 = $("#w3lPhone2").val();
			var contMsg2 = $("#w3lMessage2").val();
			
			if(contName2 == "" || contEmail2 == "" || contPhone2 == "" || contMsg2 == ""){
				swal({
					title: "Please Fill All Necessary Fields, Thanks!",
					text: "Thanks for Using McCollins Media!",
					icon: "warning",
					button: "Continue!",
				});
			}else if(hiddenInput2 != ""){
				
			}else if(IsEmail(contEmail2)==false){
				swal({
					title: "Please Provide A Valid Email Address!",
					text: "Thanks for Using McCollins Media!",
					icon: "warning",
					button: "Continue!",
				});
				return false;
			}else{
				$.ajax({
					method:"POST",
					url:"quickEnquiryData.php",
					data:{contactName2:contName2, contactEmail2:contEmail2, contactPhone2:contPhone2, contactMessage2:contMsg2, contactIP2:contIP2, send_w3lPageURL2:w3lPageURL2},
					success:function(response){
						if(response == "success"){
							swal({
								title: "Thanks For The Message, We Will Respond To You Soon!",
								text: "Thanks for Using McCollins Media!",
								icon: "success",
								button: "Continue!",
							});
							$("#w3lName2").val("");
							$("#w3lSender2").val("");
							$("#w3lPhone2").val("");
							$("#w3lMessage2").val("");
						}else{
							swal({
								title: "There Seem To Be A Problem, Please Try Again Later!",
								text: "Thanks for Using McCollins Media!",
								icon: "success",
								button: "Continue!",
							});
						}
					}
				});
			}
			
		});
		
		function IsEmail(email){
			var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if(!regex.test(email)) {
				return false;
			}else{
				return true;
			}
		}
		
	});
</script>
<section class="mb-0 pb-0">
	<div class="nu_relCont">
	    <div class="videoContPC videoContainer">
            <div class="overlay"></div>
            <video style="max-height:100vh;object-fit:cover;" title="Film Production Company Dubai" autoplay loop muted playsinline preload="auto" alt="McCollins Media Production" style="width: 100%;" class="video-fluid coverVid">
			<source src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/main-banner.mp4" type="video/mp4" media="screen"></source>
			Your browser does not support HTML5 video.
		</video>
        </div>
		<div class="videoContMob">
            <video title="Film Production Company Dubai" autoplay loop muted playsinline preload="auto" alt="McCollins Media Production" style="width: 100%;" class="video-fluid coverVid">
			<source src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/main-banner-mobile.mp4" type="video/mp4" media="screen"></source>
			Your browser does not support HTML5 video.
		</video>
        </div>
		<div class="bottomDef forPC">
			<div class="container-fluid text-white">
				<div class="row">
					<div class="col-12 col-lg-6 col-md-8">
						<div class="py-2">
							<h1><b>The standard Lorem Ipsum passage - used since the 1500s
							</b></h1>
							<p class="mb-2" style="font-size:16px;line-height:1.5;text-align:justify;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							</p>
							<div class="d-flex flex-row" style="font-size:25px;">
								<div class="pe-2"><a href="https://www.youtube.com/c/mccollinsmediaProductions/videos" target="_blank"><i class="fab fa-youtube text-white"></i></a></div>
<div class="px-2"><a href="https://vimeo.com/mccollinsmediaproductions" target="_blank"><i class="fab fa-vimeo text-white"></i></a></div>
<div class="px-2"><a href="https://www.facebook.com/mccollinsmediaproductions" target="_blank"><i class="fab fa-facebook-square text-white"></i></a></div>
<div class="px-2"><a href="https://www.instagram.com/mccollinsmediaproductions/" target="_blank"><i class="fab fa-instagram text-white"></i></a></div>			
								<div class="px-2"><a href="mccollinsmedia.com"><i class="fa fa-volume-off text-white  toggleAudio"></i></a></div>	
							</div>
							<p class="mb-3"><a class="mt-3 btn btn-lg btn-primary" style="font-size:16px;" href="contact-us.html">contact us</a></p>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		
			</div>
</section>
<section class="mb-5 section2">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-lg-6 my-auto">
				<div class="p-5 Pad0">
					<h1 class="mb-3"><span class="fw-bold" style="color: #e6252e;font-size:30px;">NETFLIX </span><span style="font-size:20px;">picked film&rsquo;s UAE Producers:</span> <br>  <b style="font-family: 'Bree Serif', serif;"> #1 Lorem ipsum dolor sit amet
					</b></h1>
					<p class="">
					    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
					<p class=" forPC">
					    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
				</div>
			</div>
			<div class="col-12 col-lg-6 my-auto">
				<div class="imgCont">
					<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/amazone2.jpg" class="img-fluid" alt="">
					<div class="posterOverlay">
						<i class="fa fa-youtube-play  pgImg"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="">
	<div class="container-fluid">
		<div class="row">
			
			<div class="col-6 col-lg-3 col-md-3 border servCon px-0">
				<div class="nu_relCont servConBG" style="background-image: url(https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/video-production-company-dubai-2.jpg);">
					<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-video-production-company-dubai-5.png" class="img-fluid" alt="McCollins Media">
					<div class="centered" style="top:50%;">
						<center>
							<h3>112</h3>
							<p>What is Lorem Ipsum?
							</p>
						</center>
					</div>
				</div>
			</div>
			
			<div class="col-6 col-lg-3 col-md-3 border servCon px-0">
				<div class="nu_relCont servConBG" style="background-image: url(https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/video-production-company-dubai-3.jpg);">
					<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-video-production-company-dubai-5.png" class="img-fluid" alt="McCollins Media">
					<div class="centered" style="top:50%;">
						<center>
							<h3>10+</h3>
							<p>What is Lorem Ipsum?
							</p>
						</center>
					</div>
				</div>
			</div>
			
			<div class="col-6 col-lg-3 col-md-3 border servCon px-0">
				<div class="nu_relCont servConBG" style="background-image: url(https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/video-production-company-dubai-4.jpg);">
					<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-video-production-company-dubai-5.png" class="img-fluid" alt="McCollins Media">
					<div class="centered" style="top:50%;">
						<center>
							<h3>320</h3>
							<p>What is Lorem Ipsum?
							</p>
						</center>
					</div>
				</div>
			</div>
			
			<div class="col-6 col-lg-3 col-md-3 border servCon px-0">
				<div class="nu_relCont servConBG" style="background-image: url(https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/video-production-company-dubai-1.jpg);">
					<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-video-production-company-dubai-5.png" class="img-fluid" alt="McCollins Media">
					<div class="centered" style="top:50%;">
						<center>
							<h3>125</h3>
							<p>What is Lorem Ipsum?
							</p>
						</center>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section><section class="py-1">
    <video class="sas-desktop-animation" title="Film Production Company Dubai" autoplay loop muted playsinline preload="auto" alt="McCollins Media Production" style="width: 100%;">
        <source src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/main-banner-2.mp4" type="video/mp4" media="screen"></source>
        Your browser does not support HTML5 video.
    </video>
    <video class="sas-mobile-animation" title="Film Production Company Dubai" autoplay loop muted playsinline preload="auto" alt="McCollins Media Production" style="width: 100%;">
        <source src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/main-banner-2.mp4" type="video/mp4" media="screen"></source>
        Your browser does not support HTML5 video.
    </video>
</section><section class="">
	<div class="container">
		<div class="row portClass">
			<div class="col-12 col-lg-12">
				<h1 class="h2Style text-center">The standard Lorem Ipsum passage
				</h1>
			</div>
			<div class="col-12 col-lg-12 text-center">
				<p class="para text-center forPC">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur
				</p>
				<p class="para text-center forMobile">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur


				</p>
				
			</div>
		</div>
	</div>
</section>
<section class="py-3 mb-3">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-lg-12">
				<div class="row g-3">
					                            <div class="col-4 col-lg-2">
                                <div class="imgCont hover_play">
                                    <a href="#" vididef="19" vidurl="https://www.youtube.com/embed/r0g52618F5c" vidtitl="TV Commercial" viddesc="  Director: Faisal Rasheed Khan
Producer: Fahad Shaikh
DOP: Rana Kamran
Editor: Asif Mumtaz
Music: Dixon Wilson Studios
Color Grading: Zairi Mohd -Big Foot BKK
Post: Posthouse
Production: McCollins Media Productions" class="vidPlayBtn">
                                        <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/video_images-1659813326.jpeg" class="img-fluid rounded imgSl" alt="film production company dubai">
                                        <!-- <div class="posterOverlay">
										<i class="fa fa-play-circle-o vidPlayBtn" vididef="19" vidurl="https://www.youtube.com/embed/r0g52618F5c" vidtitl="TV Commercial" vidDesc="  Director: Faisal Rasheed Khan
Producer: Fahad Shaikh
DOP: Rana Kamran
Editor: Asif Mumtaz
Music: Dixon Wilson Studios
Color Grading: Zairi Mohd -Big Foot BKK
Post: Posthouse
Production: McCollins Media Productions"></i>
									</div> -->
                                        <div class="overlay">
                                            <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-play-button.svg" class="portfolio-play" alt="">
                                        </div>
                                        <div class="poster-topRight">
                                            <p class="text-start forPC">TV Commercial</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
					                            <div class="col-4 col-lg-2">
                                <div class="imgCont hover_play">
                                    <a href="#" vididef="18" vidurl="https://player.vimeo.com/video/349027814" vidtitl="TV Commercial" viddesc="   Executive Producer: McCollins Media Productions
Director: Faisal Rasheed
Cinematographer: Wat Anuwat Sreprecha
Grading: The Post Bangkok
Client: Khaadi
Agency: JWT" class="vidPlayBtn">
                                        <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/video_images-1659813366.jpeg" class="img-fluid rounded imgSl" alt="film production company dubai">
                                        <!-- <div class="posterOverlay">
										<i class="fa fa-play-circle-o vidPlayBtn" vididef="18" vidurl="https://player.vimeo.com/video/349027814" vidtitl="TV Commercial" vidDesc="   Executive Producer: McCollins Media Productions
Director: Faisal Rasheed
Cinematographer: Wat Anuwat Sreprecha
Grading: The Post Bangkok
Client: Khaadi
Agency: JWT"></i>
									</div> -->
                                        <div class="overlay">
                                            <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-play-button.svg" class="portfolio-play" alt="">
                                        </div>
                                        <div class="poster-topRight">
                                            <p class="text-start forPC">TV Commercial</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
					                            <div class="col-4 col-lg-2">
                                <div class="imgCont hover_play">
                                    <a href="#" vididef="17" vidurl="https://www.youtube.com/embed/rtZJcqFCOJw" vidtitl="TV Series" viddesc=" Executive Producer: McCollins Media Productions
Director : Zeeshan Khan
Cinematographer: Imran Haroon
Grading: Serial Kolor Inc.
Client: National Foods Limited" class="vidPlayBtn">
                                        <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/video_images-1659813378.jpeg" class="img-fluid rounded imgSl" alt="film production company dubai">
                                        <!-- <div class="posterOverlay">
										<i class="fa fa-play-circle-o vidPlayBtn" vididef="17" vidurl="https://www.youtube.com/embed/rtZJcqFCOJw" vidtitl="TV Series" vidDesc=" Executive Producer: McCollins Media Productions
Director : Zeeshan Khan
Cinematographer: Imran Haroon
Grading: Serial Kolor Inc.
Client: National Foods Limited"></i>
									</div> -->
                                        <div class="overlay">
                                            <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-play-button.svg" class="portfolio-play" alt="">
                                        </div>
                                        <div class="poster-topRight">
                                            <p class="text-start forPC">TV Series</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
					                            <div class="col-4 col-lg-2">
                                <div class="imgCont hover_play">
                                    <a href="#" vididef="16" vidurl="https://player.vimeo.com/video/349030722" vidtitl="TV Commercial" viddesc=" Executive Producer : McCollins Media Productions
Director : Faisal Rasheed
Cinematographer: Rana Kamran 
Grading : The Post Bangkok
Client : Shell
Agency : JWT Grey" class="vidPlayBtn">
                                        <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/video_images-1659813388.jpeg" class="img-fluid rounded imgSl" alt="film production company dubai">
                                        <!-- <div class="posterOverlay">
										<i class="fa fa-play-circle-o vidPlayBtn" vididef="16" vidurl="https://player.vimeo.com/video/349030722" vidtitl="TV Commercial" vidDesc=" Executive Producer : McCollins Media Productions
Director : Faisal Rasheed
Cinematographer: Rana Kamran 
Grading : The Post Bangkok
Client : Shell
Agency : JWT Grey"></i>
									</div> -->
                                        <div class="overlay">
                                            <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-play-button.svg" class="portfolio-play" alt="">
                                        </div>
                                        <div class="poster-topRight">
                                            <p class="text-start forPC">TV Commercial</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
					                            <div class="col-4 col-lg-2">
                                <div class="imgCont hover_play">
                                    <a href="#" vididef="15" vidurl="https://www.youtube.com/embed/UEOW-SFw5Y4" vidtitl="Promo Video" viddesc=" Deyaar Bella Rose Project Video - Explainer Video - Promo Video - Real Estate" class="vidPlayBtn">
                                        <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/video_images-1659813441.jpeg" class="img-fluid rounded imgSl" alt="film production company dubai">
                                        <!-- <div class="posterOverlay">
										<i class="fa fa-play-circle-o vidPlayBtn" vididef="15" vidurl="https://www.youtube.com/embed/UEOW-SFw5Y4" vidtitl="Promo Video" vidDesc=" Deyaar Bella Rose Project Video - Explainer Video - Promo Video - Real Estate"></i>
									</div> -->
                                        <div class="overlay">
                                            <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-play-button.svg" class="portfolio-play" alt="">
                                        </div>
                                        <div class="poster-topRight">
                                            <p class="text-start forPC">Promo Video</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
					                            <div class="col-4 col-lg-2">
                                <div class="imgCont hover_play">
                                    <a href="#" vididef="14" vidurl="https://www.youtube.com/embed/7t800jEOw3U" vidtitl="Event Coverage" viddesc=" Siemens Healthineers AG is the parent company for several medical technology companies and is headquartered in Erlangen, Germany. The company held its annual exhibition at MEDLAB &amp; Arab Health in World Trade Centre 2019. McCollins Media covered a 6 days event as a media team for Siemens Healthineers for consecutive 3 years in a row." class="vidPlayBtn">
                                        <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/video_images-1659814186.jpeg" class="img-fluid rounded imgSl" alt="film production company dubai">
                                        <!-- <div class="posterOverlay">
										<i class="fa fa-play-circle-o vidPlayBtn" vididef="14" vidurl="https://www.youtube.com/embed/7t800jEOw3U" vidtitl="Event Coverage" vidDesc=" Siemens Healthineers AG is the parent company for several medical technology companies and is headquartered in Erlangen, Germany. The company held its annual exhibition at MEDLAB & Arab Health in World Trade Centre 2019. McCollins Media covered a 6 days event as a media team for Siemens Healthineers for consecutive 3 years in a row."></i>
									</div> -->
                                        <div class="overlay">
                                            <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-play-button.svg" class="portfolio-play" alt="">
                                        </div>
                                        <div class="poster-topRight">
                                            <p class="text-start forPC">Event Coverage</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
					                            <div class="col-4 col-lg-2">
                                <div class="imgCont hover_play">
                                    <a href="#" vididef="13" vidurl="https://www.youtube.com/embed/-UOIel4kWwk" vidtitl="Music Video" viddesc=" Produced by McCollins Media Productions" class="vidPlayBtn">
                                        <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/video_images-1659813507.jpeg" class="img-fluid rounded imgSl" alt="film production company dubai">
                                        <!-- <div class="posterOverlay">
										<i class="fa fa-play-circle-o vidPlayBtn" vididef="13" vidurl="https://www.youtube.com/embed/-UOIel4kWwk" vidtitl="Music Video" vidDesc=" Produced by McCollins Media Productions"></i>
									</div> -->
                                        <div class="overlay">
                                            <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-play-button.svg" class="portfolio-play" alt="">
                                        </div>
                                        <div class="poster-topRight">
                                            <p class="text-start forPC">Music Video</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
					                            <div class="col-4 col-lg-2">
                                <div class="imgCont hover_play">
                                    <a href="#" vididef="12" vidurl="https://www.youtube.com/embed/y-BxLCdMsTI" vidtitl="Corporate Video" viddesc=" UAE General Civil Aviation Authority (SZC Corporate Video) - 2016

About Client: GCAA is a leading, Safe, Secure, and Sustainable Aviation System. GCAA regulates and oversees aviation safety and environment, delivers ANS, and facilitates air connectivity through international collaboration in order to serve the general public and the civil aviation industry in a responsive and cost-effective manner.

Agency: Mastermind Advertising
Animation by: Mastermind Advertising" class="vidPlayBtn">
                                        <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/video_images-1659813524.jpeg" class="img-fluid rounded imgSl" alt="film production company dubai">
                                        <!-- <div class="posterOverlay">
										<i class="fa fa-play-circle-o vidPlayBtn" vididef="12" vidurl="https://www.youtube.com/embed/y-BxLCdMsTI" vidtitl="Corporate Video" vidDesc=" UAE General Civil Aviation Authority (SZC Corporate Video) - 2016

About Client: GCAA is a leading, Safe, Secure, and Sustainable Aviation System. GCAA regulates and oversees aviation safety and environment, delivers ANS, and facilitates air connectivity through international collaboration in order to serve the general public and the civil aviation industry in a responsive and cost-effective manner.

Agency: Mastermind Advertising
Animation by: Mastermind Advertising"></i>
									</div> -->
                                        <div class="overlay">
                                            <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-play-button.svg" class="portfolio-play" alt="">
                                        </div>
                                        <div class="poster-topRight">
                                            <p class="text-start forPC">Corporate Video</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
					                            <div class="col-4 col-lg-2">
                                <div class="imgCont hover_play">
                                    <a href="#" vididef="11" vidurl="https://www.youtube.com/embed/qfncm-1GE1w" vidtitl="Social Media Video" viddesc=" Three years ago, it was announced that Abu Dhabi would become the first Arab country to host a WorldSkills Competition. WorldSkills Abu Dhabi 2017 will be a celebration of excellence and a unique opportunity to share knowledge. The competition is also the latest stage in a journey that begins in a world that only a few now remember." class="vidPlayBtn">
                                        <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/video_images-1659813561.jpeg" class="img-fluid rounded imgSl" alt="film production company dubai">
                                        <!-- <div class="posterOverlay">
										<i class="fa fa-play-circle-o vidPlayBtn" vididef="11" vidurl="https://www.youtube.com/embed/qfncm-1GE1w" vidtitl="Social Media Video" vidDesc=" Three years ago, it was announced that Abu Dhabi would become the first Arab country to host a WorldSkills Competition. WorldSkills Abu Dhabi 2017 will be a celebration of excellence and a unique opportunity to share knowledge. The competition is also the latest stage in a journey that begins in a world that only a few now remember."></i>
									</div> -->
                                        <div class="overlay">
                                            <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-play-button.svg" class="portfolio-play" alt="">
                                        </div>
                                        <div class="poster-topRight">
                                            <p class="text-start forPC">Social Media Video</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
					                            <div class="col-4 col-lg-2">
                                <div class="imgCont hover_play">
                                    <a href="#" vididef="10" vidurl="https://www.youtube.com/embed/KZ1C_FqD-Gs" vidtitl="Event Coverage" viddesc=" Wadi Adventures, a whitewater rafting, kayaking, and surfing destination hosted the first-ever UAE leg of the International Rafting Federation's World Rafting Championship in cooperation with key partner Tamouh Investments Group. " class="vidPlayBtn">
                                        <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/video_images-1659813578.jpeg" class="img-fluid rounded imgSl" alt="film production company dubai">
                                        <!-- <div class="posterOverlay">
										<i class="fa fa-play-circle-o vidPlayBtn" vididef="10" vidurl="https://www.youtube.com/embed/KZ1C_FqD-Gs" vidtitl="Event Coverage" vidDesc=" Wadi Adventures, a whitewater rafting, kayaking, and surfing destination hosted the first-ever UAE leg of the International Rafting Federation's World Rafting Championship in cooperation with key partner Tamouh Investments Group. "></i>
									</div> -->
                                        <div class="overlay">
                                            <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-play-button.svg" class="portfolio-play" alt="">
                                        </div>
                                        <div class="poster-topRight">
                                            <p class="text-start forPC">Event Coverage</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
					                            <div class="col-4 col-lg-2">
                                <div class="imgCont hover_play">
                                    <a href="#" vididef="9" vidurl="https://www.youtube.com/embed/O51m4GbQfPQ" vidtitl="Web Commercial" viddesc=" Directed by: Fahad Shaikh
Produced by: McCollins Media
Agency: We Are-Asia" class="vidPlayBtn">
                                        <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/video_images-1659813600.jpeg" class="img-fluid rounded imgSl" alt="film production company dubai">
                                        <!-- <div class="posterOverlay">
										<i class="fa fa-play-circle-o vidPlayBtn" vididef="9" vidurl="https://www.youtube.com/embed/O51m4GbQfPQ" vidtitl="Web Commercial" vidDesc=" Directed by: Fahad Shaikh
Produced by: McCollins Media
Agency: We Are-Asia"></i>
									</div> -->
                                        <div class="overlay">
                                            <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-play-button.svg" class="portfolio-play" alt="">
                                        </div>
                                        <div class="poster-topRight">
                                            <p class="text-start forPC">Web Commercial</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
					                            <div class="col-4 col-lg-2">
                                <div class="imgCont hover_play">
                                    <a href="#" vididef="8" vidurl="https://www.youtube.com/embed/jBnh1bfIM4k" vidtitl="Corporate Commercial" viddesc=" PhotoGauge Web Video" class="vidPlayBtn">
                                        <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/video_images-1659814454.jpeg" class="img-fluid rounded imgSl" alt="film production company dubai">
                                        <!-- <div class="posterOverlay">
										<i class="fa fa-play-circle-o vidPlayBtn" vididef="8" vidurl="https://www.youtube.com/embed/jBnh1bfIM4k" vidtitl="Corporate Commercial" vidDesc=" PhotoGauge Web Video"></i>
									</div> -->
                                        <div class="overlay">
                                            <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-play-button.svg" class="portfolio-play" alt="">
                                        </div>
                                        <div class="poster-topRight">
                                            <p class="text-start forPC">Corporate Commercial</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
					                            <div class="col-4 col-lg-2">
                                <div class="imgCont hover_play">
                                    <a href="#" vididef="7" vidurl="https://www.youtube.com/embed/2vldhdlHZD0" vidtitl="TV Commercial" viddesc=" TV Commercial Production - National Desserts - Food Videos" class="vidPlayBtn">
                                        <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/video_images-1659813624.jpeg" class="img-fluid rounded imgSl" alt="film production company dubai">
                                        <!-- <div class="posterOverlay">
										<i class="fa fa-play-circle-o vidPlayBtn" vididef="7" vidurl="https://www.youtube.com/embed/2vldhdlHZD0" vidtitl="TV Commercial" vidDesc=" TV Commercial Production - National Desserts - Food Videos"></i>
									</div> -->
                                        <div class="overlay">
                                            <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-play-button.svg" class="portfolio-play" alt="">
                                        </div>
                                        <div class="poster-topRight">
                                            <p class="text-start forPC">TV Commercial</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
					                            <div class="col-4 col-lg-2">
                                <div class="imgCont hover_play">
                                    <a href="#" vididef="6" vidurl="https://www.youtube.com/embed/ctn6lsBS4_M" vidtitl="Corporate Commercial" viddesc=" On the year announced by the UAE authorities to name the year as Year of Zayed, this short film tells a compelling story of an individual who was inspired by the journey of Late Sheikh Zayed Bin Sultan Al Nahyan since his childhood. This inspiration has led him and millions of people around the world and especially in the UAE to change their fate." class="vidPlayBtn">
                                        <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/video_images-1659813633.jpeg" class="img-fluid rounded imgSl" alt="film production company dubai">
                                        <!-- <div class="posterOverlay">
										<i class="fa fa-play-circle-o vidPlayBtn" vididef="6" vidurl="https://www.youtube.com/embed/ctn6lsBS4_M" vidtitl="Corporate Commercial" vidDesc=" On the year announced by the UAE authorities to name the year as Year of Zayed, this short film tells a compelling story of an individual who was inspired by the journey of Late Sheikh Zayed Bin Sultan Al Nahyan since his childhood. This inspiration has led him and millions of people around the world and especially in the UAE to change their fate."></i>
									</div> -->
                                        <div class="overlay">
                                            <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-play-button.svg" class="portfolio-play" alt="">
                                        </div>
                                        <div class="poster-topRight">
                                            <p class="text-start forPC">Corporate Commercial</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
					                            <div class="col-4 col-lg-2">
                                <div class="imgCont hover_play">
                                    <a href="#" vididef="5" vidurl="https://www.youtube.com/embed/2lRpDtJqgCI" vidtitl="TV Commercial" viddesc=" This TV/Web Commercial " first love by emirates nbd is pure to its heart. on this valentines day wishing you your valentine for beautiful concept was praised many and loved thousands in the period of campaign. class="vidPlayBtn">
                                        <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/video_images-1659813640.jpeg" class="img-fluid rounded imgSl" alt="film production company dubai">
                                        <!-- <div class="posterOverlay">
										<i class="fa fa-play-circle-o vidPlayBtn" vididef="5" vidurl="https://www.youtube.com/embed/2lRpDtJqgCI" vidtitl="TV Commercial" vidDesc=" This TV/Web Commercial "First Love" by Emirates NBD is pure to its heart. On this valentines day, Emirates NBD wishing you your first valentine's for your first love "Mother". This beautiful concept was praised by many and loved by thousands in the period of the campaign."></i>
									</div> -->
                                        <div class="overlay">
                                            <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-play-button.svg" class="portfolio-play" alt="">
                                        </div>
                                        <div class="poster-topRight">
                                            <p class="text-start forPC">TV Commercial</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
					                            <div class="col-4 col-lg-2">
                                <div class="imgCont hover_play">
                                    <a href="#" vididef="4" vidurl="https://www.youtube.com/embed/hG4CK5sB99o" vidtitl="Documentary Film" viddesc="  A film about the journey to find a deeper meaning of the unknown, &ldquo;M1-K&Oslash;&rdquo; follows Mikolaj Zenliski, a Polish software engineer on his bicycle training in the middle of the desert, who could be blasting off to the Red Planet after getting through to the next stage of the Mars One project.

Fahad Shaikh (McCollins Media) has directed and produced this documentary film which was part of the Arab Film Studio Program by Image Nation Abu Dhabi. The film was shown in multiple international acclaimed film festivals which makes it one of a kind film coming out from the UAE." class="vidPlayBtn">
                                        <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/video_images-1659813647.jpeg" class="img-fluid rounded imgSl" alt="film production company dubai">
                                        <!-- <div class="posterOverlay">
										<i class="fa fa-play-circle-o vidPlayBtn" vididef="4" vidurl="https://www.youtube.com/embed/hG4CK5sB99o" vidtitl="Documentary Film" vidDesc="  A film about the journey to find a deeper meaning of the unknown, &ldquo;M1-K&Oslash;&rdquo; follows Mikolaj Zenliski, a Polish software engineer on his bicycle training in the middle of the desert, who could be blasting off to the Red Planet after getting through to the next stage of the Mars One project.

Fahad Shaikh (McCollins Media) has directed and produced this documentary film which was part of the Arab Film Studio Program by Image Nation Abu Dhabi. The film was shown in multiple international acclaimed film festivals which makes it one of a kind film coming out from the UAE."></i>
									</div> -->
                                        <div class="overlay">
                                            <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-play-button.svg" class="portfolio-play" alt="">
                                        </div>
                                        <div class="poster-topRight">
                                            <p class="text-start forPC">Documentary Film</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
					                            <div class="col-4 col-lg-2">
                                <div class="imgCont hover_play">
                                    <a href="#" vididef="3" vidurl="https://www.youtube.com/embed/KpYkGxoojIc" vidtitl="Feature Film" viddesc=" The lives of a gullible maid, a beautiful socialite, an ambitious investment banker, and a happy-go-lucky chauffeur become entwined in Dubai. Directed by Shazia Ali Khan

McCollins Media Productions has co-produced Pinky Memsaab that has garnered UK Asian Film Festival as the Best Film Audience Choice in 2018. The film was nationwide released in UAE, Pakistan and across GCC, and after a successful show-run, it is now streaming on Netflix. Raving reviews of the film is a true depiction of what we can achieve on home ground when it comes to producing Feature films in UAE and Pakistan." class="vidPlayBtn">
                                        <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/video_images-1659813655.jpeg" class="img-fluid rounded imgSl" alt="film production company dubai">
                                        <!-- <div class="posterOverlay">
										<i class="fa fa-play-circle-o vidPlayBtn" vididef="3" vidurl="https://www.youtube.com/embed/KpYkGxoojIc" vidtitl="Feature Film" vidDesc=" The lives of a gullible maid, a beautiful socialite, an ambitious investment banker, and a happy-go-lucky chauffeur become entwined in Dubai. Directed by Shazia Ali Khan

McCollins Media Productions has co-produced Pinky Memsaab that has garnered UK Asian Film Festival as the Best Film Audience Choice in 2018. The film was nationwide released in UAE, Pakistan and across GCC, and after a successful show-run, it is now streaming on Netflix. Raving reviews of the film is a true depiction of what we can achieve on home ground when it comes to producing Feature films in UAE and Pakistan."></i>
									</div> -->
                                        <div class="overlay">
                                            <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-play-button.svg" class="portfolio-play" alt="">
                                        </div>
                                        <div class="poster-topRight">
                                            <p class="text-start forPC">Feature Film</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
					                            <div class="col-4 col-lg-2">
                                <div class="imgCont hover_play">
                                    <a href="#" vididef="2" vidurl="https://www.youtube.com/embed/Dge_2QLtvWA" vidtitl="Corporate Video" viddesc="    ADWEA Sweihan Solar Power Project Corporate film produced by McCollins Media that showcases the significance, impact, and transformative potential of the World's Largest PV Solar Project. This will be in line with the vision and the plans of the team in charge of the UAE Energy Plan 2050." class="vidPlayBtn">
                                        <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/video_images-1659814269.jpeg" class="img-fluid rounded imgSl" alt="film production company dubai">
                                        <!-- <div class="posterOverlay">
										<i class="fa fa-play-circle-o vidPlayBtn" vididef="2" vidurl="https://www.youtube.com/embed/Dge_2QLtvWA" vidtitl="Corporate Video" vidDesc="    ADWEA Sweihan Solar Power Project Corporate film produced by McCollins Media that showcases the significance, impact, and transformative potential of the World's Largest PV Solar Project. This will be in line with the vision and the plans of the team in charge of the UAE Energy Plan 2050."></i>
									</div> -->
                                        <div class="overlay">
                                            <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-play-button.svg" class="portfolio-play" alt="">
                                        </div>
                                        <div class="poster-topRight">
                                            <p class="text-start forPC">Corporate Video</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
									</div>
			</div>
		</div>
	</div>
</section>
<div class="viewVideoBg">
	<div class="videoCont2 bg-black">
		<div class="container bg-black">
			
			<div class="row justify-content-center">
				<div class="col-12 col-lg-12">
					<div class="contVideo">
						<div class="row justify-content-center">
							<div class="col-12 col-lg-10 py-2">
								<span class="float-end closeVide"><i class="fa fa-times-circle text-white fs-4"></i></span>
							</div>
							<div class="col-12 col-lg-10">
								<iframe class="videoCont" frameborder="0" allowtransparency="true" src="" scrolling="no" width="100%" height="250%"></iframe>
								
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-12 mt-5 pt-5">
					<div class="row justify-content-center mt-5 pt-5">
						<div class="col-12 col-lg-10 mt-5 bg-black">
							<div class="text-white mb-3">
								<h5 class="videoTitle"></h5>
								<div class="text-justify pb-2 contContainer" style="font-size: 12px;overflow-y:scroll;height:200px;">
								    <p class="videoDescription"></p>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><script>
	$(".vidPlayBtn").click(function(){
		var vidUrl = $(this).attr("vidurl");
        var vididef = $(this).attr("vididef");
        var vidtitl = $(this).attr("vidtitl");
        var vidDesc = $(this).attr("vidDesc");
        $(".videoCont").attr("src",vidUrl);
        $(".videoTitle").html(vidtitl);
        $(".videoDescription").html(vidDesc);
		$(".viewVideoBg").css("left","0");
        return false;
	});
	$(".closeVide").click(function(){
		$(".viewVideoBg").css("left","-100%");
        $(".videoCont").attr("src", "");
        $(".videoTitle").html("");
        $(".videoDescription").html("");
	});
</script>
<section class="mb-5">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-lg-6 my-auto">
				<div class="p-5 Pad0">
					<h1 class="mb-3"><span class="fw-bold" style="color: #e6252e;font-size:30px;">NETFLIX </span><span style="font-size:20px;">picked film&rsquo;s UAE Producers:</span> <br>  <b style="font-family: 'Poppins', sans-serif;"> #1 Lorem ipsum dolor sit amet
					</b></h1>
					<p class="">
					    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
					<p class=" forPC">
					    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
				</div>
			</div>
			<div class="col-12 col-lg-6 my-auto">
				<div class="imgCont">
					<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/amazone1.jpg" class="img-fluid" alt="">
					<div class="posterOverlay">
						<i class="fa fa-youtube-play  pgImg"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="vidModBg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-10 pt-5">
				<div class="ratio ratio-16x9">
					<iframe src="https://www.youtube.com/embed/KpYkGxoojIc" title="YouTube video" autoplay="True" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
$(document).ready(function() {
	
	$(".vidModBg").click(function(){
		$(this).css("display","none");
	});
	
	$(".pgImg").click(function(){
		$(".vidModBg").css("display","block");
	});

});
</script>
<section class="">
	<div class="container-fluid">
		<div class="row">
						<div class="col-6 col-lg-4 col-md-4 mb-0 p-1">
				<div class="nu_relCont">
					<a href="sas-presentation-videos.html" class="catImg">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/subcat_images-1659814600.jpeg" class="img-fluid" alt="McCollins Media Production">
					</a>
				</div>
			</div>
						<div class="col-6 col-lg-4 col-md-4 mb-0 p-1">
				<div class="nu_relCont">
					<a href="sas-event-videos.html" class="catImg">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/subcat_images-1659814635.jpeg" class="img-fluid" alt="McCollins Media Production">
					</a>
				</div>
			</div>
						<div class="col-6 col-lg-4 col-md-4 mb-0 p-1">
				<div class="nu_relCont">
					<a href="sas-social-videos.html" class="catImg">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/subcat_images-1659814700.jpeg" class="img-fluid" alt="McCollins Media Production">
					</a>
				</div>
			</div>
						<div class="col-6 col-lg-4 col-md-4 mb-0 p-1">
				<div class="nu_relCont">
					<a href="sas-explainer-videos.html" class="catImg">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/subcat_images-1659814687.jpeg" class="img-fluid" alt="McCollins Media Production">
					</a>
				</div>
			</div>
						<div class="col-6 col-lg-4 col-md-4 mb-0 p-1">
				<div class="nu_relCont">
					<a href="sas-tv-commercial.html" class="catImg">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/subcat_images-1659814892.jpeg" class="img-fluid" alt="McCollins Media Production">
					</a>
				</div>
			</div>
						<div class="col-6 col-lg-4 col-md-4 mb-0 p-1">
				<div class="nu_relCont">
					<a href="sas-interview-videos.html" class="catImg">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/subcat_images-1659814720.jpeg" class="img-fluid" alt="McCollins Media Production">
					</a>
				</div>
			</div>
						<div class="col-6 col-lg-4 col-md-4 mb-0 p-1">
				<div class="nu_relCont">
					<a href="sas-feature-film.html" class="catImg">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/subcat_images-1659814806.jpeg" class="img-fluid" alt="McCollins Media Production">
					</a>
				</div>
			</div>
						<div class="col-6 col-lg-4 col-md-4 mb-0 p-1">
				<div class="nu_relCont">
					<a href="sas-youtube-ads.html" class="catImg">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/subcat_images-1659814707.jpeg" class="img-fluid" alt="McCollins Media Production">
					</a>
				</div>
			</div>
						<div class="col-6 col-lg-4 col-md-4 mb-0 p-1">
				<div class="nu_relCont">
					<a href="sas-corporate-video.html" class="catImg">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/subcat_images-1659814781.jpeg" class="img-fluid" alt="McCollins Media Production">
					</a>
				</div>
			</div>
						<div class="col-6 col-lg-4 col-md-4 mb-0 p-1">
				<div class="nu_relCont">
					<a href="sas-testimonial-videos.html" class="catImg">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/subcat_images-1659814729.jpeg" class="img-fluid" alt="McCollins Media Production">
					</a>
				</div>
			</div>
						<div class="col-6 col-lg-4 col-md-4 mb-0 p-1">
				<div class="nu_relCont">
					<a href="sas-food-and-recipe-videos.html" class="catImg">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/subcat_images-1659814800.jpeg" class="img-fluid" alt="McCollins Media Production">
					</a>
				</div>
			</div>
						<div class="col-6 col-lg-4 col-md-4 mb-0 p-1">
				<div class="nu_relCont">
					<a href="sas-music-videos.html" class="catImg">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/subcat_images-1659814663.jpeg" class="img-fluid" alt="McCollins Media Production">
					</a>
				</div>
			</div>
						
		</div>
	</div>
</section>
<section class="">
	<div class="container">
		<div class="row portClass py-5">
			<div class="col-12 col-lg-12 col-md-12">
				<h2 class="h2Style text-center">The standard Lorem Ipsum passage! </h2>
			</div>
			<div class="col-12 col-lg-12 col-md-12">
				<p class="para text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				<p class="para text-center forPC">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				
			</div>
		</div>
	</div>
</section>

<section class="py-3">
	<div class="container">
		<div class="row portClass py-5">
			<div class="col-12 col-lg-12 col-md-12">
				<p class="para para2 text-center mb-1">Finibus Bonorum et Malorum written by Cicero</p>
				<h1 class="h2Style text-center">Finibus Bonorum et Malorum</h1>
				
			</div>
			<div class="col-12 col-lg-12 col-md-12">
				<p class="para text-center">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
				</p>
				
			</div>
		</div>
	</div>
</section>
<section class="mb-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-12">
			    <div class="row g-3">
        			<div class="col-12 col-lg-4">
        			    <div class="card my-auto">
							<div class="card-body set-box-height-1 text-center">
								<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/tabs-film_edit.png" width="70" class="img-fluid" alt="Video Editing">
								<h5 class="card-title text-red"><b> Lorem Ipsum</b></h5>
								<div class="" style="font-size: 13px !important;font-weight: 400;line-height:1.5;">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
								</div>
								<p class="mb-0"><a class="mt-0 btn btn-lg btn-primary text-white" style="font-size:16px;" href="contact-us.html">Shoot Us</a></p>
							</div>
						</div>
        			</div>
        			<div class="col-12 col-lg-4">
        			    <div class="card my-auto">
							<div class="card-body set-box-height-1 text-center">
								<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/tabs-film_permit.png" width="70" class="img-fluid" alt="Video Editing">
								<h5 class="card-title text-red"><b>Lorem Ipsum</b></h5>
								<div class="" style="font-size: 13px !important;font-weight: 400;line-height:1.5;">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
								</div>
								<p class="mb-0"><a class="mt-0 btn btn-lg btn-primary text-white" style="font-size:16px;" href="contact-us.html">Reach Us</a></p>
							</div>
						</div>
        			</div>
        			<div class="col-12 col-lg-4">
        			    <div class="card my-auto">
							<div class="card-body set-box-height-1 text-center">
								<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/tabs-Videography.png" width="70" class="img-fluid" alt="Video Editing">
								<h5 class="card-title text-red"><b>Lorem Ipsum</b></h5>
								<div class="" style="font-size: 13px !important;font-weight: 400;line-height:1.5;">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
								</div>
								<p class="mb-0"><a class="mt-0 btn btn-lg btn-primary text-white" style="font-size:16px;" href="contact-us.html">Bug Us</a></p>
							</div>
						</div>
        			</div>
        			<div class="col-12 col-lg-4">
        			    <div class="card my-auto">
							<div class="card-body set-box-height-1 text-center">
								<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/tabs-script_writing.png" width="70" class="img-fluid" alt="Video Editing">
								<h5 class="card-title text-red"><b>Lerem Ipsum</b></h5>
								<div class="" style="font-size: 13px !important;font-weight: 400;line-height:1.5;">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
								</div>
								<p class="mb-0"><a class="mt-0 btn btn-lg btn-primary text-white" style="font-size:16px;" href="contact-us.html">Call Us</a></p>
							</div>
						</div>
        			</div>
        			<div class="col-12 col-lg-4">
        			    <div class="card my-auto">
							<div class="card-body set-box-height-1 text-center">
								<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/tabs-live_event.png" width="70" class="img-fluid" alt="Video Editing">
								<h5 class="card-title text-red"><b>Lorem Ipsum </b></h5>
								<div class="" style="font-size: 13px !important;font-weight: 400;line-height:1.5;">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
								</div>
								<p class="mb-0"><a class="mt-0 btn btn-lg btn-primary text-white" style="font-size:16px;" href="contact-us.html">Approach Us</a></p>
							</div>
						</div>
        			</div>
        			<div class="col-12 col-lg-4">
        			    <div class="card my-auto">
							<div class="card-body set-box-height-1 text-center">
								<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/tabs-studio_rental.png" width="70" class="img-fluid" alt="Video Editing">
								<h5 class="card-title text-red"><b>Lorem Ipsum</b></h5>
								<div class="" style="font-size: 13px !important;font-weight: 400;line-height:1.5;">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
								</div>
								<p class="mb-0"><a class="mt-0 btn btn-lg btn-primary text-white" style="font-size:16px;" href="contact-us.html">Hire Us</a></p>
							</div>
						</div>
        			</div>
        			
        		</div>
			</div>
		</div>
	</div>
</section>

<section class="mb-3">
	<div class="container">
		<div class="row portClass pb-3">
			<div class="col-12 col-lg-12 col-md-12">
				<p class="para para2 text-center">OUR SATISFIED CLIENTS</p>
			</div>
		</div>
		
		<div class="row">

			<!-- Swiper -->
			<div class="swiper-container swiper2">
				<div class="swiper-wrapper">
										<div class="swiper-slide">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/logos-1627717502.jpg" class="img-fluid" alt="Inverex" title="Inverex">
					</div>
										<div class="swiper-slide">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/logos-1627717607.jpg" class="img-fluid" alt="Atkearney" title="Atkearney">
					</div>
										<div class="swiper-slide">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/logos-1627717340.jpg" class="img-fluid" alt="The Gulf Hotel Bahrain" title="The Gulf Hotel Bahrain">
					</div>
										<div class="swiper-slide">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/logos-1627717564.jpg" class="img-fluid" alt="Deyaar" title="Deyaar">
					</div>
										<div class="swiper-slide">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/logos-1627717477.jpg" class="img-fluid" alt="Khaadi" title="Khaadi">
					</div>
										<div class="swiper-slide">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/logos-1627717530.jpg" class="img-fluid" alt="Homes R Us" title="Homes R Us">
					</div>
										<div class="swiper-slide">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/logos-1627717388.jpg" class="img-fluid" alt="Quetta" title="Quetta">
					</div>
										<div class="swiper-slide">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/logos-1627717457.jpg" class="img-fluid" alt="Lu" title="Lu">
					</div>
										<div class="swiper-slide">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/logos-1627717574.jpg" class="img-fluid" alt="Coded Minds" title="Coded Minds">
					</div>
										<div class="swiper-slide">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/logos-1627717434.jpg" class="img-fluid" alt="Mocciani" title="Mocciani">
					</div>
										<div class="swiper-slide">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/logos-1627717407.jpg" class="img-fluid" alt="Outfitters" title="Outfitters">
					</div>
										<div class="swiper-slide">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/logos-1627717450.jpg" class="img-fluid" alt="Master Chef" title="Master Chef">
					</div>
										<div class="swiper-slide">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/logos-1627717466.jpg" class="img-fluid" alt="LALS Group" title="LALS Group">
					</div>
										<div class="swiper-slide">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/logos-1627717589.jpg" class="img-fluid" alt="Carrier" title="Carrier">
					</div>
										<div class="swiper-slide">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/logos-1627717492.jpg" class="img-fluid" alt="IRTHI" title="IRTHI">
					</div>
										<div class="swiper-slide">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/logos-1627717621.jpg" class="img-fluid" alt="Asia" title="Asia">
					</div>
										<div class="swiper-slide">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/logos-1627717373.jpg" class="img-fluid" alt="Rakez" title="Rakez">
					</div>
										<div class="swiper-slide">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/logos-1627717401.jpg" class="img-fluid" alt="Pinky Memsaab" title="Pinky Memsaab">
					</div>
										<div class="swiper-slide">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/logos-1627717413.jpg" class="img-fluid" alt="National" title="National">
					</div>
										<div class="swiper-slide">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/logos-1627717419.jpg" class="img-fluid" alt="Mountain Dew" title="Mountain Dew">
					</div>
										<div class="swiper-slide">
						<img src="images/logos-1627717395.jpg" class="img-fluid" alt="Prescott" title="Prescott">
					</div>
										<div class="swiper-slide">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/logos-1627717442.jpg" class="img-fluid" alt="Mastermind" title="Mastermind">
					</div>
										<div class="swiper-slide">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/logos-1627717554.jpg" class="img-fluid" alt="EWEC" title="EWEC">
					</div>
										<div class="swiper-slide">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/logos-1627717522.jpg" class="img-fluid" alt="IBM Watson Health" title="IBM Watson Health">
					</div>
										<div class="swiper-slide">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/logos-1627717426.jpg" class="img-fluid" alt="Mondelez" title="Mondelez">
					</div>
										<div class="swiper-slide">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/logos-1627717599.jpg" class="img-fluid" alt="Cafu" title="Cafu">
					</div>
										<div class="swiper-slide">
						<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/logos-1627717513.jpg" class="img-fluid" alt="MKV Digital" title="MKV Digital">
					</div>
										<div class="swiper-slide">
						<img src="/https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/images/logos-1627717538.jpg" class="img-fluid" alt="Hilal" title="Hilal">
					</div>
									</div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
			</div>

		</div>
	</div>
</section>

<!-- Initialize Swiper -->
<script>
	var swiper = new Swiper('.swiper2', {
		slidesPerView: 2,
		spaceBetween: 5,
		centeredSlides: false,
		grabCursor: true,
		loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
		autoplay: {
			delay: 1500,
			disableOnInteraction: false,
		},
		breakpoints: {
			640: {
				slidesPerView: 2,
				spaceBetween: 10,
			},
			768: {
				slidesPerView: 5,
				spaceBetween: 40,
			},
			1024: {
				slidesPerView: 5,
				spaceBetween: 20,
			},
		}
	});
</script>

<style>
    .hideOnScroll{
        transition:all 0.3s ease 0s;
        animation:bounce 3s infinite;
        -webkit-animation:bounce 3s infinite;
        -moz-animation:bounce 3s infinite;
        -o-animation:bounce 3s infinite;
    }
    @keyframes bounce{0%,20%,50%,80%,100%{transform:translateY(0)}40%{transform:translateY(-30px)}60%{transform:translateY(-15px)}}
</style>

<div class="call_btn hideOnScroll">
    <a rel="nofollow" href="tel:+971551171248">
        <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-call-phone.png" onclick="gtag_report_conversion()" width="50">
    </a>
</div>

<!-- //WhatsApp -->
<div class="whatsapp hideOnScroll">
    <a href="https://api.whatsapp.com/send?phone=971551171248" target="_blank" rel="nofollow">
        <img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-whatsapp.svg" onclick="gtag_report_conversion()" width="50">
    </a>
</div>
<!-- //WhatsApp -->

<div class="sidenavBg"></div>

<footer class="myFooter pt-5">

    <section class="">
        <div class="container">

            <div class="row">
                
                <div class="col-12 col-lg-3 footer-nav mb-3">
                    <h5>Navigation</h5>
                    <div class="row g-1">
                        <p class="mb-1">
                        <span class="me-3 mb-3">
                            <a href="mccollinsmedia.com" style="color:#fff;text-decoration:none;">
Home
                            </a>
                        </span>
                        </p>
                        <p class="mb-1">
                        <span class="me-3 mb-3">
                            <a href="about-us.html" style="color:#fff;text-decoration:none;">
About
                            </a>
                        </span>
                        </p>
                        <p class="mb-1">
                        <span class="me-3 mb-3">
                            <a href="services.html" style="color:#fff;text-decoration:none;">
								Portfolio
                            </a>
                        </span>
                        </p>
                        <p class="mb-1">
                        <span class="me-3 mb-3">
                            <a href="our-work.html" style="color:#fff;text-decoration:none;">
Blogs
                            </a>
                        </span>
                        </p>
                        <p class="mb-1">
                        <span class="me-3 mb-3">
                            <a href="contact-us.html" style="color:#fff;text-decoration:none;">
Contact Us
                            </a>
                        </span>
                        </p>
						<p class="mb-1">
							<span class="me-3 mb-3">
								<a href="contact-us.html" style="color:#fff;text-decoration:none;">
	FAQ
								</a>
							</span>
							</p>
                    </div>
                </div>
                <div class="col-12 col-lg-3 footer-nav mb-3">
                    <h5>Navigation</h5>
                    <div class="row g-1">
                        <p class="mb-1">
                        <span class="me-3 mb-3">
                            <a href="mccollinsmedia.com" style="color:#fff;text-decoration:none;">
Home
                            </a>
                        </span>
                        </p>
                        <p class="mb-1">
                        <span class="me-3 mb-3">
                            <a href="about-us.html" style="color:#fff;text-decoration:none;">
About
                            </a>
                        </span>
                        </p>
                        <p class="mb-1">
                        <span class="me-3 mb-3">
                            <a href="services.html" style="color:#fff;text-decoration:none;">
								Portfolio
                            </a>
                        </span>
                        </p>
                        <p class="mb-1">
                        <span class="me-3 mb-3">
                            <a href="our-work.html" style="color:#fff;text-decoration:none;">
Blogs
                            </a>
                        </span>
                        </p>
                        <p class="mb-1">
                        <span class="me-3 mb-3">
                            <a href="contact-us.html" style="color:#fff;text-decoration:none;">
Contact Us
                            </a>
                        </span>
                        </p>
						<p class="mb-1">
							<span class="me-3 mb-3">
								<a href="contact-us.html" style="color:#fff;text-decoration:none;">
	FAQ
								</a>
							</span>
							</p>
                    </div>
                </div>
			<div class="col-12 col-lg-3 footer-nav mb-3">
				<h5>Our Services</h5>
				<div class="row g-1">
                    <p class="mb-1">
                        <span class="me-3 mb-3">
                            <a href="sas-feature-film.html" style="color:#fff;text-decoration:none;">
								Website Development
                            </a>
                        </span>
                    </p>
                    <p class="mb-1">
                        <span class="me-3 mb-3">
                            <a href="sas-documentary-film.html" style="color:#fff;text-decoration:none;">
								Social Media Marketing
                            </a>
                        </span>
                    </p>
                    <p class="mb-1">
                        <span class="me-3 mb-3">
                            <a href="sas-tv-commercial.html" style="color:#fff;text-decoration:none;">
								Performance Marketing
                            </a>
                        </span>
                    </p>
                    <p class="mb-1">
                        <span class="me-3 mb-3">
                            <a href="sas-corporate-video.html" style="color:#fff;text-decoration:none;">
								SEO and Analytics
                            </a>
                        </span>
                    </p>
                    <p class="mb-1">
                        <span class="me-3 mb-3">
                            <a href="sas-animated-videos.html" style="color:#fff;text-decoration:none;">
								Content Production
                            </a>
                        </span>
                    </p>
                    <p class="mb-1">
                        <span class="me-3 mb-3">
                            <a href="sas-event-videos.html" style="color:#fff;text-decoration:none;">
								Branding
                            </a>
                        </span>
                    </p>
                    
									</div>
			</div>

			<div class="col-12 col-lg-3 col-md-3 mb-3">
				<h5>GET IN TOUCH</h5>
				<ul class="list-unstyled text-small touch-list">
					<li class="footer-text"><a href="tel:+97144456848"><img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-footer-phone-icon.svg" class="menu-prefixicon"> +97144456848</a></li>
					<li class="footer-text"><a href="tel:+971559564135"><img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-footer-phone-icon.svg" class="menu-prefixicon"> +971559564135</a></li>
					<li class="footer-text"><a href="mailto:info@mccollinsmedia.com"><img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-footer-email-icon.svg" class="menu-prefixicon"> info@mccollinsmedia.com</a></li>
					<!--<img src="images/payment-logos.jpg" class="img-fluid" />-->
				</ul>
                <ul class="foot-social">
                    <li><a href="https://www.facebook.com/mccollinsmedia/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://api.whatsapp.com/send?phone=971559564135&text=I%20would%20like%20to%20know%20more%20about%20McCollins%20Media" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                    <li><a href="https://twitter.com/mccollinsmedia?lang=en" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/mccollinsmedia/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a></li>
					<li><a href="https://www.linkedin.com/company/mccollins-media/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="https://vm.tiktok.com/ZSJShjmYH/" target="_blank"><i class="fa fa-tiktok"></i></a></li>

                </ul>
                <script type="text/javascript" src="js/js-widget.js"></script> <div class="clutch-widget" data-url="https://widget.clutch.co" data-widget-type="2" data-height="45" data-nofollow="true" data-expandifr="true" data-clutchcompany-id="1819512"></div>
			</div>


            </div>





        </div>

    </section>

    <section class="py-4 bg-light">
        <div class="container">

            <div class="row text-center">
                <div class="col-lg-12 col-md-12">
                    <p class="text-center m-0 text-dark" style="font-size:14px;">&copy; Copyright <script type="text/javascript">
                            document.write(new Date().getFullYear())
                        </script>. All Rights Reserved</p>
                </div>
            </div>
        </div>

    </section>


    <!-- move top -->
    <button onclick="topFunction()" id="movetop" class="btn btn-lg btn-danger btnSound" title="Go to top">
        <span class="fa fa-angle-double-up"></span>
    </button>

    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>
    <!-- /move top -->
</footer>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//js/umd-popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//js/js-bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

<!-- script for teams1-->
<script>
    $(document).ready(function() {

        const audio = new Audio("button-sound.mp3");

        $(".btnSound").click(function() {
            audio.play();
        });

        $(".navbar-text").click(function() {
            $(".sidenavBg").fadeIn("slow");
        });

        $(window).scroll(function() {
            $("#mySidenav").css("width", "0");
            $(".sidenavBg").fadeOut("slow");
        });

        $("body").delegate(".sidenavBg", "click", function(event) {
            event.preventDefault();
            $(".sidenavBg").fadeOut("slow");
            $("#mySidenav").css("width", "0");
        });

        $(".enqBtn, .quickEnqBtn").click(function(ev){
            ev.preventDefault();
            var buttonText = $(".enqBtn").text();

            if(buttonText == "CLOSE"){
                //close
                $(".qef").removeClass("active");
                $(".enqBtn").text("QUICK ENQUIRY");
                audio.play();
            }else if(buttonText == "QUICK ENQUIRY"){
                //open
                $(".sidenav").css("right", "-270px");
                $(".qef").addClass("active");
                $(".enqBtn").text("CLOSE");
                audio.play();
            }
        });

    });
</script>
<script>
    function numbersOnly(input){
        var regex = /[^0-9+]/g;
        input.value = input.value.replace(regex, "");
    }
</script>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.right = "0px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.right = "-200px";
        $(".sidenavBg").fadeOut("slow");
    }
</script></body>
</html>
