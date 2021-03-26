@extends('front-end.master')

@section('slider')

    @include('front-end.includes.carousel')

@endsection

@section('trusted-shop')

@include('front-end.includes.trusted-shop')

@endsection

@section('content')

<section class="products" id="">
		<div class="heading">
			<h3 class="text-white text-center">Products</h3>
			<div class="heading-line"></div>
		</div>
		
		<div class="container-fluid">

<!------------------------------------------------------------------------------------------fashion starts -->
			<div class="content-title margin-product">
				<p class="text-white h5 ml-5 pt-2">Fashion&nbsp;Collections</p>
			</div>
<!------------------------------------------------------------------------------------------owl carousel segment is here -->
			<div class="owl-carousel owl-fashion owl-theme">
					
					<div class="card">
						<div class="card-body">
							<img src="{{ asset('/') }}/front-end/images/products/p6.jpg" class="img-fluid">
						</div>
						<div class="card-footer">
							<p><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="far fa-star text-warning"></i></p>
							<p class="text-white">Mens Collection Classic Black</p>
							<p class="text-white small mt-2">Price : <span class="text-warning">BDT 1500</span></p>
							<button class="btn btn-outline-danger mt-1">View Details</button>
						</div>
					</div>
	<!------------------------------------------------------------------------------------------owl carousel ends -->
				</div>
				<button class="btn my-button float-right mr-xl-5 mr-lg-3 mt-3 rounded-pill">View All Products</button>
			
			<!------------------------------------------------------------------------------------------fashion ends -->

			<!------------------------------------------------------------------------------------------furniture starts -->
			<div class="content-title margin-product">
				<p class="text-white h5 ml-5 pt-2">Furniture&nbsp;Collections</p>
			</div>
	<!------------------------------------------------------------------------------------------owl carousel segment 2 is here -->
			<div class="owl-carousel owl-furniture owl-theme">
					
					<div class="card">
						<div class="card-body">
							<img src="{{ asset('/') }}/front-end/images/products/f5.jpg" class="img-fluid">
						</div>
						<div class="card-footer">
							<p><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="far fa-star text-warning"></i></p>
							<p class="text-white">Exclusive Furniture Set From WoodPack</p>
							<p class="text-white small mt-2">Price : <span class="text-warning">BDT 6500</span></p>
							<button class="btn btn-outline-danger mt-1">View Details</button>
						</div>
					</div>
				</div>
	<!------------------------------------------------------------------------------------------owl carousel 2 ends -->
				<button class="btn my-button float-right mr-xl-5 mr-lg-3 mt-3 rounded-pill">View All Products</button>
	<!------------------------------------------------------------------------------------------Furniture ends -->

	<!------------------------------------------------------------------------------------------Cellphone starts -->
			<div class="content-title margin-product">
				<p class="text-white h5 mt-2 ml-5 pt-2">Cellphones</p>
			</div>
	<!------------------------------------------------------------------------------------------owl carousel segment 3 is here -->
			<div class="owl-carousel owl-cellphone owl-theme">
					
					<div class="card">
						<div class="card-body">
							<img src="{{ asset('/') }}/front-end/images/products/m6.jpg" class="img-fluid">
						</div>
						<div class="card-footer">
							<p><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="far fa-star text-warning"></i></p>
							<p class="text-white">No Idea Max Pro</p>
							<p class="text-white small mt-2">Price : <span class="text-warning">BDT 36500</span></p>
							<button class="btn btn-outline-danger mt-1">View Details</button>
						</div>
					</div>
				</div>
	<!------------------------------------------------------------------------------------------owl carousel segment 3 ends -->
				<button class="btn my-button float-right mr-xl-5 mr-lg-3 mt-3 rounded-pill">View All Products</button>
			</div>
	<!------------------------------------------------------------------------------------------Cellphones ends -->
	</section>
    


@endsection