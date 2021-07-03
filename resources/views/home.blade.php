<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>NOB Manager - Customer Service Desk</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('theme/frontend/assets/img/favicon.png')}}"/>
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{asset('theme/frontend/assets/css/bootstrap-5.0.0-alpha-2.min.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/frontend/assets/css/tiny-slider.css')}}"/>
    <link rel="stylesheet" href="{{asset('theme/frontend/assets/css/animate.css')}}"/>
    <link rel="stylesheet" href="{{asset('theme/frontend/assets/css/main.css')}}"/>
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
  </head>
  <body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- ========================= preloader start ========================= -->
    <div class="preloader">
      <div class="loader">
        <div class="ytp-spinner">
          <div class="ytp-spinner-container">
            <div class="ytp-spinner-rotator">
              <div class="ytp-spinner-left">
                <div class="ytp-spinner-circle"></div>
              </div>
              <div class="ytp-spinner-right">
                <div class="ytp-spinner-circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
		<!-- preloader end -->
		

    <!-- ========================= header start ========================= -->
    <header class="header">
      <div class="navbar-area">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="">
                  <img src="{{ asset('theme/frontend/assets/img/logo/nob_manager_logo.png')}}" alt="NOB Manager" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                  <ul id="nav" class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="page-scroll" href="#home">Home</a>
                    </li>
                     <li class="nav-item">
                      <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#pricing">Pricing</a>
                    </li>

                    <li class="nav-item">
                      <a class="page-scroll" href="#testimonials">Clients</a>
                    </li>
                    <li class="nav-item">
                    <a class="page-scroll" href="#testimonials">Login</a>
                    </li>
                     </ul>
                </div>
                <!-- navbar collapse -->
              </nav>
              <!-- navbar -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- navbar area -->
    </header>
    <!-- ========================= header end ========================= -->

    <!-- ========================= hero-section start ========================= -->
    <section id="home" class="hero-section">
      <div class="container">
        <div class="row align-items-center position-relative">
          <div class="col-lg-6">
            <div class="hero-content">
              <h1 class="wow fadeInUp" data-wow-delay=".4s">Website Support & Maintenance Services</h1>
              <p class="wow fadeInUp" data-wow-delay=".6s">
			  Don't waste time and money trying to fix and update your site. Track and manage all your issues in one place. No more back and forth emailing.
              </p>
							<a href="#pricing" class="main-btn border-btn btn-hover wow fadeInUp" data-wow-delay=".6s">Get Started</a>
							<a href="#features" class="scroll-bottom"> <i class="lni lni-arrow-down"></i></a>
            </div>
					</div>
					<div class="col-lg-6">
						<div class="hero-img wow fadeInUp" data-wow-delay=".5s">
							<img src="{{asset('theme/frontend/assets/img/hero/hero-img01.png')}}" alt="">
						</div>
					</div>
        </div>
			</div>
    </section>
		<!-- ========================= hero-section end ========================= -->

		<!-- ========================= feature-section start ========================= -->
		<section id="features" class="feature-section pt-120">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-8 col-sm-10">
						<div class="single-feature">
							<div class="icon">
								<i class="lni lni-bootstrap"></i>
							</div>
							<div class="content">
								<h3>Ready to Use</h3>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-8 col-sm-10">
						<div class="single-feature">
							<div class="icon">
								<i class="lni lni-layout"></i>
							</div>
							<div class="content">
								<h3>Easy to Nagivate </h3>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-8 col-sm-10">
						<div class="single-feature">
							<div class="icon">
								<i class="lni lni-coffee-cup"></i>
							</div>
							<div class="content">
								<h3>Time-Saving </h3>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ========================= feature-section end ========================= -->

		<!-- ========================= about-section start ========================= -->
		<section id="services" class="about-section pt-150">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-6 col-lg-6">
						<div class="about-img">
							<img src="{{asset('theme/frontend/assets/img/about/about-1.png')}}" alt="" class="w-100">
							<img src="{{asset('theme/frontend/assets/img/about/about-left-shape.svg')}}" alt="" class="shape shape-1">
							<img src="{{asset('theme/frontend/assets/img/about/left-dots.svg')}}" alt="" class="shape shape-2">
						</div>
					</div>
					<div class="col-xl-6 col-lg-6">
						<div class="about-content">
							<div class="section-title mb-30">
								<h1 class="mb-25 wow fadeInUp" data-wow-delay=".2s">Perfect Solution Website Owners</h1>
								<p class="wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dinonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem.Lorem ipsum dolor sit amet.</p>
							</div>
							<a href="javascript:void(0)" class="main-btn btn-hover border-btn wow fadeInUp" data-wow-delay=".6s">Discover More</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ========================= about-section end ========================= -->

		<!-- ========================= about2-section start ========================= -->
		<section id="about" class="about-section pt-150">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-6 col-lg-6">
						<div class="about-content">
							<div class="section-title mb-30">
								<h1 class="mb-25 wow fadeInUp" data-wow-delay=".2s">Easy to Use </h1>
								<p class="wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
							</div>
							<ul>
								<li>Quick Access</li>
								<li>Easily to Manage</li>
								<li>24/7 Support</li>
							</ul>
							<a href="javascript:void(0)" class="main-btn btn-hover border-btn wow fadeInUp" data-wow-delay=".6s">Learn More</a>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 order-first order-lg-last">
						<div class="about-img-2">
							<img src="{{asset('theme/frontend/assets/img/about/about-2.png')}}" alt="" class="w-100">
							<img src="{{asset('theme/frontend/assets/img/about/about-right-shape.svg')}}" alt="" class="shape shape-1">
							<img src="{{asset('theme/frontend/assets/img/about/right-dots.svg')}}" alt="" class="shape shape-2">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ========================= about2-section end ========================= -->

		<!-- ========================= feature-section start ========================= -->
		<section id="why" class="feature-extended-section pt-100">
			<div class="feature-extended-wrapper">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xxl-5 col-xl-6 col-lg-8 col-md-9">
							<div class="section-title text-center mb-60">
								<h1 class="mb-25 wow fadeInUp" data-wow-delay=".2s">NOB Manager Services</h1>
								<p class="wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-feature-extended">
								<div class="icon">
									<i class="lni lni-display"></i>
								</div>
								<div class="content">
									<h3>Content Management</h3>
									<p>We'll handle all of your updates, edits, image changes for you so that you won't have to.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature-extended">
								<div class="icon">
									<i class="lni lni-leaf"></i>
								</div>
								<div class="content">
									<h3>Technical Support</h3>
									<p>Any Tech issues you have with the running of your WordPress site we will handle it.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature-extended">
								<div class="icon">
									<i class="lni lni-grid-alt"></i>
								</div>
								<div class="content">
									<h3>Software Updates</h3>
									<p>We will update all your WP core, plugins and software updates.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature-extended">
								<div class="icon">
									<i class="lni lni-javascript"></i>
								</div>
								<div class="content">
									<h3>Theme Support</h3>
									<p>Need help with customization of your theme we can handle it for you.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature-extended">
								<div class="icon">
									<i class="lni lni-layers"></i>
								</div>
								<div class="content">
									<h3>Training</h3>
									<p>Need help learning new features and tools on your site. Enjoy our Live one on one training sessions.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature-extended">
								<div class="icon">
									<i class="lni lni-rocket"></i>
								</div>
								<div class="content">
									<h3>Reports</h3>
									<p>Weekly and monthly reports will be generated that will allow you to track all your issues</p>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</section>
		<!-- ========================= feature-section end ========================= -->

		<!-- ========================= pricing-section end ========================= -->
		<section id="pricing" class="pricing-section pt-120 pb-120">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xxl-5 col-xl-6 col-lg-8 col-md-9">
						<div class="section-title text-center mb-35">
							<h1 class="mb-25 wow fadeInUp" data-wow-delay=".2s">Choose a Plan</h1>
							<p class="wow fadeInUp" data-wow-delay=".4s">With all plans you get access to the all services.</p>
						</div>
					</div>
				</div>

				<div class="pricing-nav-wrapper mb-60">
					<ul class="nav nav-pills" id="pills-tab" role="tablist">
						<li role="presentation">
							<a class="active" id="pills-month-tab" data-toggle="pill" href="#pills-month" role="tab" aria-controls="pills-month" aria-selected="true">Monthly</a>
						</li>
						<li role="presentation">
							<a id="pills-year-tab" data-toggle="pill" href="#pills-year" role="tab" aria-controls="pills-year" aria-selected="false">Yearly</a>
						</li>
					</ul>
				</div>

				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-month" role="tabpanel" aria-labelledby="pills-month-tab">
						<div class="row justify-content-center">
							<div class="col-lg-4 col-md-8 col-sm-10">
								<div class="single-pricing">
									<div class="pricing-header">
										<h1 class="price">$75</h1>
										<h3 class="package-name">Basic Account</h3>
									</div>
									<div class="content">
										<ul>
											<li> <i class="lni lni-checkmark active"></i> 1 ticket </li>
											<li> <i class="lni lni-checkmark active"></i> 1 Website </li>
											<li> <i class="lni lni-checkmark active"></i> Personalize Dashboard</li>
											<li> <i class="lni lni-close"></i> Live Support </li>
											<li> <i class="lni lni-close"></i> Free Future Updates</li>
										</ul>
									</div>
									<div class="pricing-btn">
										<a href="javascript:void(0)" class="main-btn btn-hover border-btn">Get Start</a>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-8 col-sm-10">
								<div class="single-pricing">
									<div class="pricing-header">
										<h1 class="price">$125 </h1>
										<h3 class="package-name">Standard Account</h3>
									</div>
									<div class="content">
										<ul>
											<li> <i class="lni lni-checkmark active"></i> 5 tickets </li>
											<li> <i class="lni lni-checkmark active"></i> 1 Website </li>
											<li> <i class="lni lni-checkmark active"></i> Personalize Dashboard</li>
											<li> <i class="lni lni-checkmark active"></i> Live Support </li>
											<li> <i class="lni lni-checkmark active"></i> Free Future Updates</li>
										</ul>
									</div>
									<div class="pricing-btn">
										<a href="javascript:void(0)" class="main-btn btn-hover">Get Start</a>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-8 col-sm-10">
								<div class="single-pricing">
									<div class="pricing-header">
										<h1 class="price">$195</h1>
										<h3 class="package-name">Premium Account</h3>
									</div>
									<div class="content">
										<ul>
											<li> <i class="lni lni-checkmark active"></i> 10 Tickets </li>
											<li> <i class="lni lni-checkmark active"></i> 2 Websites </li>
											<li> <i class="lni lni-checkmark active"></i> Personalize Dashboard</li>
											<li> <i class="lni lni-checkmark active"></i> Live Support </li>
											<li> <i class="lni lni-checkmark active"></i> Free Future Updates</li>
										</ul>
									</div>
									<div class="pricing-btn">
										<a href="javascript:void(0)" class="main-btn btn-hover border-btn">Get Start</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-year" role="tabpanel" aria-labelledby="pills-year-tab">
						<div class="row justify-content-center">
							<div class="col-lg-4 col-md-8 col-sm-10">
								<div class="single-pricing">
									<div class="pricing-header">
										<h1 class="price">$120</h1>
										<h3 class="package-name">Basic Account</h3>
									</div>
									<div class="content">
										<ul>
                                        <li> <i class="lni lni-checkmark active"></i> 5 tickets </li>
											<li> <i class="lni lni-checkmark active"></i> 1 Website </li>
											<li> <i class="lni lni-checkmark active"></i> Personalize Dashboard</li>
											<li> <i class="lni lni-checkmark active"></i> Live Support </li>
											<li> <i class="lni lni-checkmark active"></i> Free Future Updates</li>
										</ul>
									</div>
									<div class="pricing-btn">
										<a href="javascript:void(0)" class="main-btn btn-hover border-btn">Get Start</a>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-8 col-sm-10">
								<div class="single-pricing">
									<div class="pricing-header">
										<h1 class="price">$150</h1>
										<h3 class="package-name">Standard Account</h3>
									</div>
									<div class="content">
										<ul>
                                        <li> <i class="lni lni-checkmark active"></i> 5 tickets </li>
											<li> <i class="lni lni-checkmark active"></i> 1 Website </li>
											<li> <i class="lni lni-checkmark active"></i> Personalize Dashboard</li>
											<li> <i class="lni lni-checkmark active"></i> Live Support </li>
											<li> <i class="lni lni-checkmark active"></i> Free Future Updates</li>
										</ul>
									</div>
									<div class="pricing-btn">
										<a href="javascript:void(0)" class="main-btn btn-hover">Get Start</a>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-8 col-sm-10">
								<div class="single-pricing">
									<div class="pricing-header">
										<h1 class="price">$194</h1>
										<h3 class="package-name">Premium Account</h3>
									</div>
									<div class="content">
										<ul>
                                        <li> <i class="lni lni-checkmark active"></i> 10 Tickets </li>
											<li> <i class="lni lni-checkmark active"></i> 1 Website </li>
											<li> <i class="lni lni-checkmark active"></i> Personalize Dashboard</li>
											<li> <i class="lni lni-checkmark active"></i> Live Support </li>
											<li> <i class="lni lni-checkmark active"></i> Free Future Updates</li>
										</ul>
									</div>
									<div class="pricing-btn">
										<a href="javascript:void(0)" class="main-btn btn-hover border-btn">Get Start</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ========================= pricing-section end ========================= -->

		<!-- ========================= testimonial-section start ========================= -->
		<section id="testimonials" class="testimonial-section">
			<div class="container">
										<div class="section-title text-center">
											<h1 class="mb-30">What our customers says</h1>
										</div>
				<div class="testimonial-active-wrapper">

					<div class="shapes">
						<img src="{{asset('theme/frontend/assets/img/testimonial/testimonial-shape.svg')}}" alt="" class="shape shape-1">
						<img src="{{asset('theme/frontend/assets/img/testimonial/testimonial-dots.svg')}}" alt="" class="shape shape-2">
					</div>

					<div class="testimonial-active">

						<!-- single testimonial -->
						<div class="single-testimonial">
							<div class="row">
								<div class="col-xl-5 col-lg-5">
									<div class="testimonial-img">
										<img src="{{asset('theme/frontend/assets/img/testimonial/testimonial-1.png')}}" alt="">
										<div class="quote">
											<i class="lni lni-quotation"></i>
										</div>
									</div>
								</div>
			
								<div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1">
									<div class="content-wrapper">
										<div class="content">
											<p>Since I engaged NOB Manager in 2017; my website has been maintained with accuracy and efficiency. The flexible approach to problem solving and  knowledge of technical solutions really assists me with staying up to date. </p>
										</div>
										<div class="info">
											<h4>Wendy H Lewis</h4>
											<p></p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- single testimonial -->
						<div class="single-testimonial">
							<div class="row">
								<div class="col-xl-5">
									<div class="testimonial-img">
										<img src="{{asset('theme/frontend/assets/img/testimonial/testimonial-2.png')}}" alt="">
										<div class="quote">
											<i class="lni lni-quotation"></i>
										</div>
									</div>
								</div>
			
								<div class="col-xl-6 offset-xl-1">
									<div class="content-wrapper">
										<div class="content">
											<p>This team has proven to be truly solutions oriented. Evidently knowledgeable in current industry practices, and continues to provide us with reliable and timely tech support.</p>
										</div>
										<div class="info">
											<h4>John Charles</h4>
											<p></p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- single testimonial -->
						<div class="single-testimonial">
							<div class="row">
								<div class="col-xl-5">
									<div class="testimonial-img">
										<img src="{{asset('theme/frontend/assets/img/testimonial/testimonial-3.png')}}" alt="">
										<div class="quote">
											<i class="lni lni-quotation"></i>
										</div>
									</div>
								</div>
			
								<div class="col-xl-6 offset-xl-1">
									<div class="content-wrapper">
										<div class="content">
											<p>Having worked with NOB Manager to do at least two websites for me over the past 8 years , I am extremely satisfied with their efficient and prompt, yet friendly service.</p>
										</div>
										<div class="info">
											<h4>Colleen Cameron</h4>
											<p></p>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- ========================= testimonial-section end ========================= -->
		
		
    <!-- ========================= footer start ========================= -->
		<footer class="footer">
			<div class="container">
				<div class="widget-wrapper">
					<div class="row">
						
						<div class="col-xl-4 col-lg-4 col-md-6">
							<div class="footer-widget">
								<div class="logo mb-30">
									<a href="index.html"> <img src="{{asset('theme/frontend/assets/img/logo/nob_manager_logox1.png')}}" alt=""> </a>
								</div>
								<p class="desc mb-30 text-white">We provide good customer care service to all our clients.</p>
								<ul class="socials">
									<li>
										<a href="jvascript:void(0)"> <i class="lni lni-facebook-original"></i> </a>
									</li>
									<li>
										<a href="jvascript:void(0)"> <i class="lni lni-twitter-original"></i> </a>
									</li>
									<li>
										<a href="jvascript:void(0)"> <i class="lni lni-instagram-original"></i> </a>
									</li>
									<li>
										<a href="jvascript:void(0)"> <i class="lni lni-linkedin-original"></i> </a>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-xl-2 col-lg-2 col-md-6">
							<div class="footer-widget">
								<h3>About Us</h3>
								<ul class="links">
									<li> <a href="#home">Home</a> </li>
									<li> <a href="#features">Feature</a> </li>
									<li> <a href="#about">About</a> </li>
									<li> <a href="#testimonials">Testimonials</a> </li>
								</ul>
							</div>
						</div>

						<div class="col-xl-3 col-lg-3 col-md-6">
							<div class="footer-widget">
								<h3>Useful Links</h3>
								<ul class="links">
									<li> <a href="javascript:void(0)">How it works</a> </li>
									<li> <a href="javascript:void(0)">Privacy policy</a> </li>
									<li> <a href="javascript:void(0)">Terms of service</a> </li>
									<li> <a href="javascript:void(0)">Refund policy</a></li>
								</ul>
							</div>
						</div>

						<div class="col-xl-3 col-lg-3 col-md-6">
							<div class="footer-widget">
								<h3>Other Services</h3>
								<ul class="links">
									<li> <a href="jvascript:void(0)">Website Development</a> </li>
									<li> <a href="jvascript:void(0)">WordPress Development</a> </li>
									<li> <a href="jvascript:void(0)">E-Commerce Development</a> </li>
									<li> <a href="jvascript:void(0)">Web App Development</a> </li>
								</ul>
							</div>
						</div>

					</div>
				</div>

			</div>
		</footer>
    <!-- ========================= footer end ========================= -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
      <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="{{asset('theme/frontend/assets/js/bootstrap.5.0.0.alpha-2-min.js')}}"></script>
    <script src="{{asset('theme/frontend/assets/js/tiny-slider.js')}}"></script>
    <script src="{{asset('theme/frontend/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('theme/frontend/assets/js/main.js')}}"></script>
  </body>
</html>
