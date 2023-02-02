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
	<link rel="shortcut icon" type="image/x-icon" href="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/favicon.ico">
	<link rel="apple-touch-icon" href="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/favicon.ico">
	<link rel="shortcut icon" type="image/x-icon" href="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/favicon.ico">
	<link rel="shortcut icon" type="image/x-icon" href="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/favicon.ico">
	<meta name="robots" content="index,follow">
	<!-- Favicon and touch icons -->


	<!-- Google online fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
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
		var setBAutoHeight = function() {
			if ($(".set-box-height-1").length > 0) {
				var max_height = 250;
				$(".set-box-height-1").each(function() {
					if (max_height < $(this).height()) {
						max_height = $(this).height();
					}
				});
				$(".set-box-height-1").each(function() {
					$(this).css("height", max_height + 10);
				});
			}
			if ($(".set-box-height-2").length > 0) {
				var max_height = 250;
				$(".set-box-height-2").each(function() {
					if (max_height < $(this).height()) {
						max_height = $(this).height();
					}
				});
				$(".set-box-height-2").each(function() {
					$(this).css("height", max_height + 10);
				});
			}
			if ($(".set-box-height-3").length > 0) {
				var max_height = 250;
				$(".set-box-height-3").each(function() {
					if (max_height < $(this).height()) {
						max_height = $(this).height();
					}
				});
				$(".set-box-height-3").each(function() {
					$(this).css("height", max_height + 10);
				});
			}
		}
		$(document).ready(function() {
			$('.nav-bar .toggle').click(function() {
				$('.nav-bar').toggleClass('active');
			});
		});
		$(window).scroll(function() {
			if ($(window).scrollTop() >= 200) {
				$('.header').addClass('fixed-header');
			} else {
				$('.header').removeClass('fixed-header');
			}
			$('.nav-bar').removeClass("active");
		});
		$(window).on('load', function() {
			setBAutoHeight();
		});

		function gtag_report_conversion(url) {
			var callback = function() {
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

		.banner-slide {
			background: rgba(255, 255, 255, 0) !important;
		}

		.sidenavBg {
			height: 100%;
			width: 100%;
			position: fixed;
			z-index: 999999;
			top: 0;
			right: 300px;
			background-color: rgba(0, 0, 0, 0.2);
			display: none;
		}
	</style>
	<script>
		$(document).ready(function() {
			$(".coverVid, .bottomDef").click(function() {
				if ($(".coverVid").prop("muted")) {
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

			$(".coverVid2").click(function() {
				if ($(".coverVid2").prop('muted')) {
					$(".coverVid2").prop('muted', false);
				} else {
					$(".coverVid2").prop('muted', true);
				}
			});

			$(".singleDiv").hover(function() {
				var divColor = $(this).data("color");
				$(this).addClass("shadow");
				$(this).css("background-color", divColor);
				$(this).css("cursor", "pointer");
			}, function() {
				$(this).removeClass("shadow");
				$(this).css("background-color", "rgba(0,0,0,0)");
				$(this).css("cursor", "none");
			});
		});
	</script>
	<style type="text/css">
		body .myFooter {
			padding: 0px 0px !important;
			margin-top: 0;
		}

		@media only screen and (max-width: 700px) {
			.p-5.Pad0 {
				padding: 0 !important;
			}

			.nav-toggle {
				top: 15px;
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
		$(document).ready(function() {

			$(".sendEnquiryForm").click(function(e) {
				e.preventDefault();
				gtag_report_conversion();
				var hiddenInput2 = $("#w3lhidden2").val();
				var contIP2 = $("#w3lcontactIP2").val();
				var w3lPageURL2 = $("#w3lPageURL2").val();

				var contName2 = $("#w3lName2").val();
				var contEmail2 = $("#w3lSender2").val();
				var contPhone2 = $("#w3lPhone2").val();
				var contMsg2 = $("#w3lMessage2").val();

				if (contName2 == "" || contEmail2 == "" || contPhone2 == "" || contMsg2 == "") {
					swal({
						title: "Please Fill All Necessary Fields, Thanks!",
						text: "Thanks for Using McCollins Media!",
						icon: "warning",
						button: "Continue!",
					});
				} else if (hiddenInput2 != "") {

				} else if (IsEmail(contEmail2) == false) {
					swal({
						title: "Please Provide A Valid Email Address!",
						text: "Thanks for Using McCollins Media!",
						icon: "warning",
						button: "Continue!",
					});
					return false;
				} else {
					$.ajax({
						method: "POST",
						url: "quickEnquiryData.php",
						data: {
							contactName2: contName2,
							contactEmail2: contEmail2,
							contactPhone2: contPhone2,
							contactMessage2: contMsg2,
							contactIP2: contIP2,
							send_w3lPageURL2: w3lPageURL2
						},
						success: function(response) {
							if (response == "success") {
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
							} else {
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

			function IsEmail(email) {
				var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				if (!regex.test(email)) {
					return false;
				} else {
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
					<source src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/main-banner.mp4" type="video/mp4" media="screen">
					</source>
					Your browser does not support HTML5 video.
				</video>
			</div>
			<div class="videoContMob">
				<video title="Film Production Company Dubai" autoplay loop muted playsinline preload="auto" alt="McCollins Media Production" style="width: 100%;" class="video-fluid coverVid">
					<source src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/main-banner-mobile.mp4" type="video/mp4" media="screen">
					</source>
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
						<h1 class="mb-3"><span class="fw-bold" style="color: #e6252e;font-size:30px;">NETFLIX </span><span style="font-size:20px;">picked film&rsquo;s UAE Producers:</span> <br> <b style="font-family: 'Bree Serif', serif;"> #1 Lorem ipsum dolor sit amet
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
						<img style="width: 100%;" src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/amazone2.jpg" class="img-fluid" alt="">
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
					<div class="nu_relCont servConBG" style="background-image: url(https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/11.jpg);">
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
					<div class="nu_relCont servConBG" style="background-image: url(https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/12.jpg);">
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
					<div class="nu_relCont servConBG" style="background-image: url(https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/13.jpg);">
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
					<div class="nu_relCont servConBG" style="background-image: url(https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/14.jpg);">
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
	</section>
	<section class="py-1">
		<video class="sas-desktop-animation" title="Film Production Company Dubai" autoplay loop muted playsinline preload="auto" alt="McCollins Media Production" style="width: 100%;">
			<source src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/main-banner-2.mp4" type="video/mp4" media="screen">
			</source>
			Your browser does not support HTML5 video.
		</video>
		<video class="sas-mobile-animation" title="Film Production Company Dubai" autoplay loop muted playsinline preload="auto" alt="McCollins Media Production" style="width: 100%;">
			<source src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/main-banner-2.mp4" type="video/mp4" media="screen">
			</source>
			Your browser does not support HTML5 video.
		</video>
	</section>
	<section class="">
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
								<a href="#" vididef="19" vidurl="https://res.cloudinary.com/dhhtgppki/video/upload/v1672984433/mccollins-media/BBQ_Party_Video_-_POST_audkzz.mp4" vidtitl="Delicut" viddesc="" class="vidPlayBtn">
									<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/vid1.jpg" class="img-fluid rounded imgSl" alt="film production company dubai">
								
									<div class="overlay">
										<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-play-button.svg" class="portfolio-play" alt="">
									</div>
									<div class="poster-topRight">
										<p class="text-start forPC">Delicut</p>
									</div>
								</a>
							</div>
						</div>
						<div class="col-4 col-lg-2">
							<div class="imgCont hover_play">
								<a href="#" vididef="18" vidurl="https://res.cloudinary.com/dhhtgppki/video/upload/v1672984054/mccollins-media/Armoured_Vehicles_-_Interior_-_Exterior_Video_cvqcvv.mp4" vidtitl="Armoured Solutions" viddesc="" class="vidPlayBtn">
									<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/vid2.jpg" class="img-fluid rounded imgSl" alt="film production company dubai">
									
									<div class="overlay">
										<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-play-button.svg" class="portfolio-play" alt="">
									</div>
									<div class="poster-topRight">
										<p class="text-start forPC">Armoured Solutions</p>
									</div>
								</a>
							</div>
						</div>
						<div class="col-4 col-lg-2">
							<div class="imgCont hover_play">
								<a href="#" vididef="17" vidurl="https://res.cloudinary.com/dhhtgppki/video/upload/v1672987639/mccollins-media/Braised_Cabbage_Video_bbpwre.mp4" vidtitl="Delicut" viddesc="" class="vidPlayBtn">
									<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/vid3.jpg" class="img-fluid rounded imgSl" alt="film production company dubai">
									
									<div class="overlay">
										<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-play-button.svg" class="portfolio-play" alt="">
									</div>
									<div class="poster-topRight">
										<p class="text-start forPC">Delicut</p>
									</div>
								</a>
							</div>
						</div>
						<div class="col-4 col-lg-2">
							<div class="imgCont hover_play">
								<a href="#" vididef="16" vidurl="https://res.cloudinary.com/dhhtgppki/video/upload/v1672987911/mccollins-media/Breakfast_Set_kg0pop.mp4" vidtitl="TV Commercial" viddesc="" class="vidPlayBtn">
									<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/vid4.jpg" class="img-fluid rounded imgSl" alt="film production company dubai">
									
									<div class="overlay">
										<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-play-button.svg" class="portfolio-play" alt="">
									</div>
									<div class="poster-topRight">
										<p class="text-start forPC">Ruby</p>
									</div>
								</a>
							</div>
						</div>
						<div class="col-4 col-lg-2">
							<div class="imgCont hover_play">
								<a href="#" vididef="15" vidurl="https://res.cloudinary.com/dhhtgppki/video/upload/v1672987689/mccollins-media/Cryo_Red_Light_Therapy_ixcnv5.mp4" vidtitl="Promo Video" viddesc="" class="vidPlayBtn">
									<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/vid5.jpg" class="img-fluid rounded imgSl" alt="film production company dubai">
									
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
								<a href="#" vididef="14" vidurl="https://res.cloudinary.com/dhhtgppki/video/upload/v1672987787/mccollins-media/Doors_Valentines_Day_2022_Video_-_YOUTUBE_p7shnb.mp4" vidtitl="Promo Video" viddesc="" class="vidPlayBtn">
									<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/vid6.jpg" class="img-fluid rounded imgSl" alt="film production company dubai">
									
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
								<a href="#" vididef="13" vidurl="https://res.cloudinary.com/dhhtgppki/video/upload/v1672988500/mccollins-media/Dr._Babor_Female_Version_-_YOUTUBE_mhl5xn.mp4" vidtitl="Promo Video" viddesc="" class="vidPlayBtn">
									<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/vid7.jpg" class="img-fluid rounded imgSl" alt="film production company dubai">
									
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
								<a href="#" vididef="12" vidurl="https://res.cloudinary.com/dhhtgppki/video/upload/v1672987730/mccollins-media/Family_Video_-_POST_zzjsdt.mp4" vidtitl="Promo Video" viddesc="" class="vidPlayBtn">
									<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/vid8.jpg" class="img-fluid rounded imgSl" alt="film production company dubai">
									
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
								<a href="#" vididef="11" vidurl="https://res.cloudinary.com/dhhtgppki/video/upload/v1672987738/mccollins-media/HR-CineBTS-Final-01112021-1min-26102021_tnpxp9.mp4" vidtitl="Social Media Video" viddesc=" " class="vidPlayBtn">
									<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/vid9.jpg" class="img-fluid rounded imgSl" alt="film production company dubai">
									
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
								<a href="#" vididef="10" vidurl="https://res.cloudinary.com/dhhtgppki/video/upload/v1672987704/mccollins-media/Mapei-LoadingVideo_thrg6q.mp4" vidtitl="Promo Video" viddesc=" " class="vidPlayBtn">
									<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/vid10.jpg" class="img-fluid rounded imgSl" alt="film production company dubai">
									
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
								<a href="#" vididef="10" vidurl="https://res.cloudinary.com/dhhtgppki/video/upload/v1672988446/mccollins-media/Midea-Frier-VDO-Instapost-Portrait_idpg2n.mp4" vidtitl="Promo Video" viddesc=" " class="vidPlayBtn">
									<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/vid11.jpg" class="img-fluid rounded imgSl" alt="film production company dubai">
									
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
								<a href="#" vididef="25" vidurl="https://res.cloudinary.com/dhhtgppki/video/upload/v1672988446/mccollins-media/Midea-Frier-VDO-Instapost-Portrait_idpg2n.mp4" vidtitl="Web Commercial" viddesc="">
									<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/vid11.jpg" class="img-fluid rounded imgSl" alt="film production company dubai">
									
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
								<a href="#" vididef="26" vidurl="https://res.cloudinary.com/dhhtgppki/video/upload/v1672987991/mccollins-media/Prato_Branding_Video_liuj6j.mp4" vidtitl="Promo Video" viddesc="" class="vidPlayBtn">
									<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/vid12.jpg" class="img-fluid rounded imgSl" alt="film production company dubai">
									
									<div class="overlay">
										<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-play-button.svg" class="portfolio-play" alt="">
									</div>
									<div class="poster-topRight">
										<p class="text-start forPC">Promo Video</p>
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
									
									<video class="videoCont" style="max-width: 450px;width:100%;" controls>
										<source src="mov_bbb.mp4" type="video/mp4">
										<source src="mov_bbb.ogg" type="video/ogg">
										Your browser does not support HTML video.
									</video>
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
	</div>
	<script>
		$(".vidPlayBtn").click(function() {
			var vidUrl = $(this).attr("vidurl");
			var vididef = $(this).attr("vididef");
			var vidtitl = $(this).attr("vidtitl");
			var vidDesc = $(this).attr("vidDesc");
			$(".videoCont").attr("src", vidUrl);
			$(".videoTitle").html(vidtitl);
			$(".videoDescription").html(vidDesc);
			$(".viewVideoBg").css("left", "0");
			return false;
		});
		$(".closeVide").click(function() {
			$(".viewVideoBg").css("left", "-100%");
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
						<h1 class="mb-3"><span class="fw-bold" style="color: #e6252e;font-size:30px;">NETFLIX </span><span style="font-size:20px;">picked film&rsquo;s UAE Producers:</span> <br> <b style="font-family: 'Poppins', sans-serif;"> #1 Lorem ipsum dolor sit amet
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
						<img style="width: 100%;" src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/amazone1.jpg" class="img-fluid" alt="">
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
						<iframe src="https://www.youtube.com/embed/eK6SzU776KY" title="YouTube video" autoplay="True" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function() {

			$(".vidModBg").click(function() {
				$(this).css("display", "none");
			});

			$(".pgImg").click(function() {
				$(".vidModBg").css("display", "block");
			});

		});
	</script>
	<section class="">
	<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-lg-12">
					<div class="row g-3">
						<div class="col-6 col-lg-3">
							<div class="imgCont hover_play">
								<a href="#" vididef="21" vidurl="https://res.cloudinary.com/dhhtgppki/video/upload/v1672988276/mccollins-media/Richemont_Ad_g5ijrl.mp4" vidtitl="Promotional Video" viddesc="" class="vidPlayBtn">
									<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/vid13.jpg" class="img-fluid rounded imgSl" alt="film production company dubai">
								
									<div class="overlay">
										<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-play-button.svg" class="portfolio-play" alt="">
									</div>
									<div class="poster-topRight">
										<p class="text-start forPC">Promotional Video</p>
									</div>
								</a>
							</div>
						</div>
						<div class="col-6 col-lg-3">
							<div class="imgCont hover_play">
								<a href="#" vididef="22" vidurl="https://res.cloudinary.com/dhhtgppki/video/upload/v1672988222/mccollins-media/Ruby_Invite_Video_1_oi3dvf.mp4" vidtitl="Promotional Video" viddesc="" class="vidPlayBtn">
									<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/vid14.jpg" class="img-fluid rounded imgSl" alt="film production company dubai">
									
									<div class="overlay">
										<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-play-button.svg" class="portfolio-play" alt="">
									</div>
									<div class="poster-topRight">
										<p class="text-start forPC">Promotional Video</p>
									</div>
								</a>
							</div>
						</div>
						<div class="col-6 col-lg-3">
							<div class="imgCont hover_play">
								<a href="#" vididef="23" vidurl="https://res.cloudinary.com/dhhtgppki/video/upload/v1672988055/mccollins-media/Ruby_Ramadan_Youtube_dbdnxo.mp4" vidtitl="Promotional Video" viddesc="" class="vidPlayBtn">
									<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/vid15.jpg" class="img-fluid rounded imgSl" alt="film production company dubai">
									
									<div class="overlay">
										<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-play-button.svg" class="portfolio-play" alt="">
									</div>
									<div class="poster-topRight">
										<p class="text-start forPC">Promotional Video</p>
									</div>
								</a>
							</div>
						</div>
						<div class="col-6 col-lg-3">
							<div class="imgCont hover_play">
								<a href="#" vididef="24" vidurl="https://res.cloudinary.com/dhhtgppki/video/upload/v1672988203/mccollins-media/Toshiba-Arabicversion-Youngman2_spqgcm.mp4" vidtitl="Promotional Video" viddesc="" class="vidPlayBtn">
									<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/vid16.jpg" class="img-fluid rounded imgSl" alt="film production company dubai">
									
									<div class="overlay">
										<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing//images/images-play-button.svg" class="portfolio-play" alt="">
									</div>
									<div class="poster-topRight">
										<p class="text-start forPC">Promotional Video</p>
									</div>
								</a>
							</div>
						</div>

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
							<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/c1.jpg" class="img-fluid" alt="Inverex" title="Inverex">
						</div>
						<div class="swiper-slide">
							<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/c2.jpg" class="img-fluid" alt="Atkearney" title="Atkearney">
						</div>
						<div class="swiper-slide">
							<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/c3.jpg" class="img-fluid" alt="The Gulf Hotel Bahrain" title="The Gulf Hotel Bahrain">
						</div>
						<div class="swiper-slide">
							<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/c4.jpg" class="img-fluid" alt="Deyaar" title="Deyaar">
						</div>
						<div class="swiper-slide">
							<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/c5.jpg" class="img-fluid" alt="Khaadi" title="Khaadi">
						</div>
						<div class="swiper-slide">
							<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/c6.jpg" class="img-fluid" alt="Homes R Us" title="Homes R Us">
						</div>
						<div class="swiper-slide">
							<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/c7.jpg" class="img-fluid" alt="Quetta" title="Quetta">
						</div>
						<div class="swiper-slide">
							<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/c8.jpg" class="img-fluid" alt="Lu" title="Lu">
						</div>
						<div class="swiper-slide">
							<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/c9.jpg" class="img-fluid" alt="Coded Minds" title="Coded Minds">
						</div>
						<div class="swiper-slide">
							<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/c10.jpg" class="img-fluid" alt="Mocciani" title="Mocciani">
						</div>
						<div class="swiper-slide">
							<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/c11.jpg" class="img-fluid" alt="Outfitters" title="Outfitters">
						</div>
						<div class="swiper-slide">
							<img src="https://mccollinsmediaweb.github.io/mccollins-media-landing-page-assetes/video-landing/c12.jpg" class="img-fluid" alt="Master Chef" title="Master Chef">
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
		.hideOnScroll {
			transition: all 0.3s ease 0s;
			animation: bounce 3s infinite;
			-webkit-animation: bounce 3s infinite;
			-moz-animation: bounce 3s infinite;
			-o-animation: bounce 3s infinite;
		}

		@keyframes bounce {

			0%,
			20%,
			50%,
			80%,
			100% {
				transform: translateY(0)
			}

			40% {
				transform: translateY(-30px)
			}

			60% {
				transform: translateY(-15px)
			}
		}
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

			$(".enqBtn, .quickEnqBtn").click(function(ev) {
				ev.preventDefault();
				var buttonText = $(".enqBtn").text();

				if (buttonText == "CLOSE") {
					//close
					$(".qef").removeClass("active");
					$(".enqBtn").text("QUICK ENQUIRY");
					audio.play();
				} else if (buttonText == "QUICK ENQUIRY") {
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
		function numbersOnly(input) {
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
	</script>
</body>

</html>