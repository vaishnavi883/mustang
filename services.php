<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from html.rudhisasmito.com/petro/about-company.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jun 2025 05:42:49 GMT -->

<head>
	<!-- Basic Page Needs
    ================================================== -->
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>mustang</title>
	<meta name="keywords"
		content="mustang, industrial, oil and gas, company, manufacturing, mechanical, power and energy, engineering">
	<meta name="author" content="mustang.com">

	<!-- ==============================================
	Favicons
	=============================================== -->
	<link rel="shortcut icon" href=" images/favicon.png">
	<link rel="apple-touch-icon" href=" images/apple-toulch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href=" images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href=" images/apple-touch-icon-114x114.png">

	<!-- ==============================================
	CSS VENDOR
	=============================================== -->
	<link rel="stylesheet" type="text/css" href=" css/vendor/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href=" css/vendor/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href=" css/vendor/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href=" css/vendor/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href=" css/vendor/magnific-popup.css">

	<!-- ==============================================
	Custom Stylesheet
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="css/style.css" />

	<script type="text/javascript" src=" js/vendor/modernizr.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
	<style>
		/* --- 2. the floating “Enquiry” trigger button --- */
		#enquiryToggleBtn {
			position: fixed;
			top: 65px;
			/* bottom‑right, stays visible while scrolling */
			right: 00px;
			padding: 14px 22px;
			background: linear-gradient(to right, #055cfd, #18c9c9);
			color: #fff;
			border: none;
			border-radius: 6px;
			font-size: 16px;
			cursor: pointer;
			box-shadow: 0 4px 10px rgba(0, 0, 0, .2);
			transition: background .25s;
			z-index: 999;
			/* sits above page content */
		}

		#enquiryToggleBtn:hover {
			background: #005ed6;
		}

		/* --- 3. the 500×500 enquiry “drawer” --- */
		#enquiryBox {
			position: fixed;
			top: 40px;
			right: 20px;
			width: 500px;
			height: 500px;
			background: #ffffff;
			border-radius: 8px;
			box-shadow: 0 8px 24px rgba(0, 0, 0, .25);
			display: none;
			/* hidden until user clicks */
			flex-direction: column;
			z-index: 1000;
			overflow: hidden;
			animation: fadeIn .25s ease-out forwards;
		}

		@keyframes fadeIn {
			from {
				opacity: 0;
				transform: translateY(-12px);
			}

			to {
				opacity: 1;
				transform: none;
			}
		}

		/* --- 4. header with close icon --- */

		/*# sourceMappingURL=style.css.map */
 
	.custom-nav-font>li>a {
		 

		font-size: 16px !important;
		/* or try 1.2rem */
		font-weight: 700;
	}
 
	</style>

</head>

<body>



	<!-- BACK TO TOP SECTION -->
	<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

	<div class="header">
		<!-- TOPBAR -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-sm-5 col-md-6">
						<div class="topbar-left">
							<div class="welcome-text mb-2">
								<h4>sales@mustangtecno.com</h4>
							</div>
						</div>
					</div>

					<div class="col-sm-7 col-md-6">
						<div class="topbar-right">
							<ul class="topbar-sosmed">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-12 mt-2 text-center">
						<button id="enquiryToggleBtn" class="btn btn-primary">Enquiry</button>
					</div>

					<!-- Enquiry form drawer -->
					<div id="enquiryBox" style="display: none; flex-direction: column; align-items: center; padding: 20px; background: #f9f9f9; border: 1px solid #ccc; margin-top: 15px;">
						<div class="enquiry-header d-flex justify-content-between align-items-center w-100 mb-3">
							<h2>Quick Enquiry</h2>
							<button class="close-btn btn btn-sm btn-danger" id="closeEnquiry" aria-label="Close enquiry form">&times;</button>
						</div>

						<form action="process_contact.php" method="POST" class="enquiry-body w-100" onsubmit="return validate();">
							<div class="form-group">
								<label>Name</label>
								<input type="text" name="name" class="form-control" required />
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" name="email" class="form-control" required />
							</div>
							<div class="form-group">
								<label>Subject</label>
								<input type="text" name="subject" class="form-control" />
							</div>
							<div class="form-group">
								<label>Message</label>
								<textarea name="message" class="form-control" required></textarea>
							</div>
							<button type="submit" class="btn btn-success mt-2">Send Enquiry</button>
						</form>
					</div>

				</div>
			</div>
		</div>

		<script>
			const toggleBtn = document.getElementById('enquiryToggleBtn');
			const enquiryBox = document.getElementById('enquiryBox');
			const closeBtn = document.getElementById('closeEnquiry');

			toggleBtn.addEventListener('click', () => {
				enquiryBox.style.display = 'flex';
				toggleBtn.style.display = 'none';
			});

			closeBtn.addEventListener('click', () => {
				enquiryBox.style.display = 'none';
				toggleBtn.style.display = 'inline-block';
			});

			function validate() {
				return true;
			}
		</script>

	</div>

	<!-- TOPBAR LOGO SECTION -->
	<div class="topbar-logo">
		<div class="container">


			<div class="contact-info">
				<!-- INFO 1 -->
				<div class="box-icon-1">
					<div class="icon">
						<div class="fa fa-envelope-o"></div>
					</div>
					<div class="body-content">
						<div class="heading">Email Support</div>
						sales@mustangtecno.com
					</div>
				</div>
				<!-- INFO 2 -->
				<div class="box-icon-1">
					<div class="icon">
						<div class="fa fa-phone"></div>
					</div>
					<div class="body-content">
						<div class="heading">Call Support</div>
						+919821889419
					</div>
				</div>
				<!-- INFO 3 -->
				 

			</div>
		</div>
	</div>

	<!-- NAVBAR SECTION -->
	<div class="navbar navbar-main">

		<div class="container container-nav">
			<div class="rowe">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

				</div>

				<a class="navbar-brand" href="index.html">
					<img src="images/logo.png" alt="Logo" style="height: 80px; width: auto; margin-top:-20px">
				</a>

					<nav class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-left custom-nav-font">
							<li class="dropdown"><a href="index.html">HOME</a></li>
							<li class="dropdown"><a href="about-company.html">ABOUT US</a></li>
							<li class="dropdown"><a href="services.php">SERVICES</a></li>
							<li class="dropdown custom-font"><a href="Gallary.php">GALLARY</a></li>
							<li class="dropdown"><a href="contact-2.php">CONTACT</a></li>
						</ul>
					</nav>

			</div>
		</div>
	</div>

	</div>

	<!-- BANNER -->
	<div class="section banner-page about">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="title-page">Services </div>
					<ol class="breadcrumb">
						<li><a href="services-detail.html">Services</a></li>
						<li class="active">Services</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<!-- Service -->
	<div class="section why overlap">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 col-md-4">
					<!-- BOX 1 -->
					<div class="feature-box-8">
						<div class="media">
							<img src="images/service-1.jpg" alt="rud" class="img-responsive">
						</div>
						<div class="body">
							<div class="icon-holder">
								<i class="bi bi-gear-fill" style="font-size: 38px;"></i>
							</div>
							<a href="services-detail.html" class="title">Process Technologies</a>
							<p><b> Delivering cutting-edge process technology solutions.</b></p>
							<a href="services-detail.html" class="readmore">READ MORE</a>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<!-- BOX 2 -->
					<div class="feature-box-8">
						<div class="media">
							<img src="images/service-2.jpg" alt="rud" class="img-responsive">
						</div>
						<div class="body">
							<div class="icon-holder">
								<i class="bi bi-diagram-3-fill " style="font-size: 38px;"></i>
							</div>
							<a href="services-detail.html" class="title">Project Management</a>
							<p>Integrated project management with engineering services.</p>
							<a href="services-detail.html" class="readmore">READ MORE</a>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<!-- BOX 3 -->
					<div class="feature-box-8">
						<div class="media">
							<img src="images/service-3.jpg" alt="rud" class="img-responsive">
						</div>
						<div class="body">
							<div class="icon-holder">
								<i class="bi bi-cpu-fill " style="font-size: 38px;"></i>
							</div>
							<a href="services-detail.html" class="title">Specialized Services</a>
							<p>Advanced simulations using CFD, FEA techniques.</p>

							<a href="services-detail.html" class="readmore">READ MORE</a>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<!-- BOX 4 -->
					<div class="feature-box-8">
						<div class="media">
							<img src="images/service-4.jpg" alt="rud" class="img-responsive">
						</div>
						<div class="body">
							<div class="icon-holder">
								<i class="bi bi-lightbulb-fill " style="font-size: 38px;"></i>
							</div>
							<a href="services-detail.html" class="title">Conceptual / Feasibility Studies</a>
							<p>Early-phase studies to validate project potential.</p>
							<a href="services-detail.html" class="readmore">READ MORE</a>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<!-- BOX 5 -->
					<div class="feature-box-8">
						<div class="media">
							<img src="images/service-5.jpg" alt="rud" class="img-responsive">
						</div>
						<div class="body">
							<div class="icon-holder">
								<i class="bi bi-pencil-fill " style="font-size: 38px;"></i>
							</div>
							<a href="services-detail.html" class="title">Pre-Bid Engineering</a>
							<p>Technical expertise to support competitive bidding.</p>

							<a href="services-detail.html" class="readmore">READ MORE</a>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<!-- BOX 6 -->
					<div class="feature-box-8">
						<div class="media">
							<img src="images/service-6.jpg" alt="rud" class="img-responsive">
						</div>
						<div class="body">
							<div class="icon-holder">
								<i class="bi bi-journal-code " style="font-size: 38px;"></i>
							</div>
							<a href="services-detail.html" class="title">Basic Engineering</a>
							<p>Developing core engineering packages.foundation for project execution.
							</p>

							<a href="services-detail.html" class="readmore">READ MORE</a>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<!-- BOX 6 -->
					<div class="feature-box-8">
						<div class="media">
							<img src="images/must 1.png" alt="rud" style="width: 300px; height: 200px;" class="img-fluid">
						</div>
						<div class="body">
							<div class="icon-holder">
								<i class="bi bi-diagram-3 " style="font-size: 38px;"></i>
							</div>
							<a href="services-detail.html" class="title">Detailed Engineering</a>
							<p>Complete engineering design and documentation.</p>


							<a href="services-detail.html" class="readmore">READ MORE</a>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<!-- BOX 6 -->
					<div class="feature-box-8">
						<div class="media">
							<img src="images/must2.png" alt="rud" class="img-responsive">
						</div>
						<div class="body">
							<div class="icon-holder">
								<i class="bi bi-cart-fill " style="font-size: 38px;"></i>
							</div>
							<a href="services-detail.html" class="title">Procurement Support</a>
							<p>Assisting in vendor evaluation and selection.</p>

							<a href="services-detail.html" class="readmore">READ MORE</a>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<!-- BOX 6 -->
					<div class="feature-box-8">
						<div class="media">
							<img src="images/must3.png" alt="rud" class="img-responsive">
						</div>
						<div class="body">
							<div class="icon-holder">
								<i class="bi bi-currency-dollar " style="font-size: 38px;"></i>
							</div>
							<a href="services-detail.html" class="title">Pre-FEED & FEED Engineering</a>
							<p>Accurate project costing across all phases.<br>Budget control and financial planning</p>


							<a href="services-detail.html" class="readmore">READ MORE</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- INFO BOX -->
	<div class="section info overlap-bottom">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-md-4">
					<!-- BOX 1 -->
					<div class="box-icon-4">
						<div class="icon"><i class="fa fa-phone"></i></div>
						<div class="body-content">
							<div class="heading">CALL US NOW</div>
							Office Telephone: +91 9821889419 <br />
							Mobile:+91 9860086714
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<!-- BOX 2 -->
					<div class="box-icon-4">
						<div class="icon"><i class="fa fa-map-marker"></i></div>
						<div class="body-content">
							<div class="heading">COME VISIT US</div>
							Mustang Technologies Pvt Ltd D402, Pristine Pronext, Near Euro
							School, Wakad Pune, India-411057
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<!-- BOX 3 -->
					<div class="box-icon-4">
						<div class="icon"><i class="fa fa-envelope"></i></div>
						<div class="body-content">
							<div class="heading">SEND US A MESSAGE</div>
							General: www.mustangtecno.com<br />
							Sales: sales@mustangtecno.com
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- FOOTER SECTION -->
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-md-3">
					<div class="footer-item">
						<p
							style="font-family: 'Orbitron', sans-serif;   font-size: 30px; text-decoration: underline;">
							MUSTANG TECHNOLOGIES
						</p>
						<p>
							For solutions based on our Technologies, Mustang Tech aspires to
							deliver complete skid
							<b> including Engineering,</b>
							Procurement and Fabrication.
						</p>
						<div class="footer-sosmed">
							<a href="#" title="">
								<div class="item">
									<i class="fa fa-facebook"></i>
								</div>
							</a>
							<a href="#" title="">
								<div class="item">
									<i class="fa fa-twitter"></i>
								</div>
							</a>
							<a href="#" title="">
								<div class="item">
									<i class="fa fa-instagram"></i>
								</div>
							</a>
							<a href="#" title="">
								<div class="item">
									<i class="fa fa-pinterest"></i>
								</div>
							</a>
							<a href="https://wa.me/919821889419?text=${msg}" target="_blank">
								<div class="item">
									<i class="bi bi-whatsapp"></i>
								</div>
							</a>
							<script>
								const msg = encodeURIComponent(
									"Hi, I'm interested in your services"
								);
							</script>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="footer-item">
						<div class="footer-title">Recent Post</div>
						<ul class="recent-post">
							<li>
								<a href="#" title="">The Best in dolor sit amet consectetur adipisicing elit
									sed</a>
								<span class="date"><i class="fa fa-clock-o"></i> June 16, 2017</span>
							</li>
							<li>
								<a href="#" title="">The Best in dolor sit amet consectetur adipisicing elit
									sed</a>
								<span class="date"><i class="fa fa-clock-o"></i> June 16, 2017</span>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="footer-item">
						<div class="footer-title">Our Services</div>
						<ul class="list">
							<li><a href="#" title="">Conceptual/Feasibility Studies</a></li>
							<li><a href="#" title="">Pre-Bid engineering</a></li>
							<li><a href="#" title="">Pre FEED and FEEED Engineering</a></li>
							<li><a href="#" title="">Basic Engineering</a></li>
							<li><a href="#" title="">Procurement Support</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="footer-item">
						<div class="footer-title">Subscribe</div>
						<p>
							Lit sed The Best in dolor sit amet consectetur adipisicing elit
							sedconsectetur adipisicing
						</p>
						<form action="#" class="footer-subscribe">
							<input type="email" name="EMAIL" class="form-control" placeholder="enter your email" />
							<input id="p_submit" type="submit" value="send" />
							<label for="p_submit"><i class="fa fa-envelope"></i></label>
							<p>Get latest updates and offers.</p>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="fcopy">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<p class="ftex ">
							&copy; 2025

							<b> Career Tech It solutions </b>
							- All Rights Reserved
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- JS VENDOR -->
	<script type="text/javascript" src="./js/vendor/jquery.min.js"></script>
	<script type="text/javascript" src="./js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="./js/vendor/jquery.superslides.js"></script>
	<script type="text/javascript" src="./js/vendor/owl.carousel.js"></script>
	<script type="text/javascript" src="./js/vendor/bootstrap-hover-dropdown.min.js"></script>
	<script type="text/javascript" src="./js/vendor/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="./js/vendor/easings.js"></script>
	<script type="text/javascript" src="./js/vendor/isotope.pkgd.min.js"></script>

	<!-- sendmail -->
	<script type="text/javascript" src="./js/vendor/validator.min.js"></script>
	<script type="text/javascript" src="./js/vendor/form-scripts.js"></script>

	<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false&amp;ver=4.1.5"></script>

	<script type="text/javascript" src="./js/script.js"></script>
</body>

<!-- Mirrored from html.rudhisasmito.com/petro/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jun 2025 05:41:57 GMT -->

</html>