<!DOCTYPE html>
<html>
<head>
	<title>e s a s r o y</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}/front-end/css/index.css">
	<link rel="stylesheet" type="text/css" href="fonts/{{ asset('/') }}/front-end/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}/front-end/css/owl.carousel.min.css">
	<!-- jQuery CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<!-- datepicker CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous"></script>
</head>
<body>
	<!------------------------------------------------------menu for mobile -->
	<div class="mob-nav">
			<div class="row text-center">
				<div class="col-3 menu-item">
					<a href=""><i class="fas fa-home mob-icon-size"></i><br><p class="small font-weight-bold">Home</p></a>
				</div>
				<div class="col-3 menu-item">
					<a href=""><i class="fas fa-shopping-cart mob-icon-size"></i><br><p class="small font-weight-bold">Cart</p></a>
				</div>
				<div class="col-3 menu-item">
					<a href=""><i class="far fa-heart mob-icon-size"></i><br><p class="small font-weight-bold">Wishlist</p></a>
				</div>
				<div class="col-3 menu-item">
					<a href="" data-toggle="modal" data-target="#loginModalForm"><i class="fas fa-user-circle mob-icon-size"></i><br><p class="small font-weight-bold">Account</p></a>
				</div>
			</div>
		
	</div>
	<!---------------------------------------------------------menu for mobile -->
	
	<section class="top" id="top">
		<!---------------------------------------------------------navbar 1 grid system -------->

		@include('front-end.includes.header')
	<!------------------------------------------------------login modal segment starts-->
				@include('front-end.includes.signlogin')
		<!---------------------------------------------------------------------navbar 1 grid system ends -->

		<!------------------------------------------------------------------------------------------navbar 2 starts -->
		<div class="container-fluid mt-2">
			<div class="row top-gap">
				
				@include('front-end.includes.categories')
				
				 
				<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 right-pad">
					<nav class="navbar navbar-expand-sm nav2">
						<button class="navbar-toggler navbar-btn" id="sidebarCollapse">
							<span><i class="fas fa-bars"></i></span>
						</button>
						
							<ul class="navbar-nav ul1" id="sidebar">
								<li><a href="index.html" class="nav-link">Home</a></li>
								<li><a href="#shops" class="nav-link">All&nbsp;Shops</a></li>
								<li><a href="#!" class="nav-link">Flash&nbsp;Sell</a></li>
								<li><a href="#!" class="nav-link">Customer&nbsp;Care</a></li>
								<li><a href="sellerLogin.html" class="nav-link">Sell&nbsp;On&nbsp;ESASROY</a></li>
							</ul>
							<ul class="navbar-nav ml-auto ul2 pr-xl-5 pr-lg-5 pr-md-0 pr-sm-0">
								<li><a href="" class="nav-link W mob-hide"><i class="far fa-heart W-I"></i>&nbsp;&nbsp;Wishlist</a></li>
								<li><a href="" class="nav-link C mob-hide"><i class="fas fa-shopping-cart C-I"></i>&nbsp;&nbsp;Cart</a></li>
							</ul>
						
					</nav>
	<!--------------------------------------------------------------------------------------------carousel section starts -->
						@yield('slider')
	<!--------------------------------------------------------------------------------------------carousel section ends -->	
				</div>
			</div>
		</div>
		
		<!------------------------------------------------------------------------------------------navbar 2 ends -->
	</section>

		<!------------------------------------------------------------------------------------------shop list start -->
				@yield('trusted-shop')
	<!------------------------------------------------------------------------------------------shops list ends-->

	<!------------------------------------------------------------------------------------------product section starts -->
					@yield('content')
	<!------------------------------------------------------------------------------------------product section ends here -->


	<!-- footer section starts here -->
	<section class="page-footer">
		<div class="container-xl container-lg container-md container-fluid-sm">
			<div class="row text-white">
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 mt-xl-5 mt-lg-5 mt-md-5 mt-sm-3 small-dev-padding">
					<p class=" mt-2 text-white font-weight-bold" style="font-size: 30px; text-decoration: none;">ESASROY</p>
					<p class="small" style="margin-top:-20px">জিনিস ভালো, খরচ কম</p>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 mt-xl-5 mt-lg-5 mt-md-5 mt-sm-4 small-dev-padding contact-margin-top">
					<p class="footer-headings h5">Contact&nbsp;Us</p>
					<p class="small"><i class="fas fa-phone-alt mr-3"></i>+1234567895<br>
						<span><i class="far fa-envelope mr-3"></i>esasroy@gmail.com</span></p>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 mt-xl-5 mt-lg-5 mt-md-5 mt-sm-3 small-dev-padding">
					<p class="footer-headings h5">Valuable&nbsp;Links</p>
					<ul class="list-unstyled">
						<li><a href="#!" class="text-white text-decoration-none small">Services</a></li>
						<li><a href="#!" class="text-white text-decoration-none small">Support</a></li>
						<li><a href="#!" class="text-white text-decoration-none small">Customer&nbsp;Care</a></li>
						<li><a href="#!" class="text-white text-decoration-none small">Terms&nbsp;&&nbsp;Conditions</a></li>
						<li><a href="#!" class="text-white text-decoration-none small">Privacy&nbsp;Policy</a></li>
					</ul>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 mt-xl-5 mt-lg-5 mt-md-5 mt-sm-3 small-dev-padding">
					<p class="footer-headings h5">Information</p>
					<ul class="list-unstyled m-auto">
						<li><a href="#!" class="text-white text-decoration-none small">Blogs</a></li>
						<li><a href="#!" class="text-white text-decoration-none small">Events</a></li>
						<li><a href="#!" class="text-white text-decoration-none small">Seminars</a></li>
					</ul>
				</div>
				
			</div>

			<div class="separator"></div>

			<ul class="iconlist">
					<li><a href="#!"><i class="fab fa-2x fa-facebook-square text-white"></i></a></li>
					
					<li><a href="#!"><i class="fab fa-2x fa-twitter-square text-white"></i></a></li>
					
					<li><a href="#!"><i class="fab fa-2x fa-skype text-white"></i></a></li>
					
					
					<li><a href="#!"><i class="fab fa-2x fa-instagram text-white"></i></a></li>
					
					<li><a href="#!"><i class="fab fa-2x fa-github text-white"></i></a></li>
				</ul> 
		</div>
		<p class="float-right small text-white mt-1 mr-5">All Rights Reserved | esasroy &#8482;</p>
	</section>
	<!-- footer ends -->


<script type="text/javascript">
	if ( $(window).scrollTop() > 50){
		$('#nav-shadow').css('padding-top','12px');
    	$('#nav-shadow').css('padding-bottom','12px');
        $('#nav-shadow').css('transition','all 0.2s');
    }
	if( $(window).scrollTop() > 450 ){
        $('#nav-shadow').css('box-shadow', '2px -6px 15px #fff');
    }
    

$(window).scroll(function(){
	if ($(window).scrollTop() > 50){
		$('#nav-shadow').css('padding-top','12px');
		$('#nav-shadow').css('padding-bottom','12px');
        $('#nav-shadow').css('transition','all 0.2s');	
	}
	else{
		$('#nav-shadow').css('padding-top','0px');
		$('#nav-shadow').css('padding-bottom','0px');
        $('#nav-shadow').css('transition','all 0.2s');
	}
    if( $(window).scrollTop() > 450 ){
        $('#nav-shadow').css('box-shadow', '2px -6px 15px #fff');
        
    } else {
        $('#nav-shadow').css('box-shadow', 'none');
    }

});
</script>
<script type="text/javascript">
	if( $(window).scrollTop() > 70 ){
        $('#cart-hide').css('visibility', 'visible');
    }

$(window).scroll(function(){
    if( $(window).scrollTop() > 70 ){
        $('#cart-hide').css('visibility', 'visible');
    } else {
        $('#cart-hide').css('visibility', 'hidden');
    }
});
</script>

<script type="text/javascript">
	 // Data Picker Initialization
	 $('.datepicker').datepicker({
    	startDate: '-3d'
	 });
</script>


<script src="{{ asset('/') }}/front-end/js/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}/front-end/fonts/js/all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<!-- bootstrap js CDN -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="{{ asset('/') }}/front-end/js/index.js"></script>
</body>
</html>