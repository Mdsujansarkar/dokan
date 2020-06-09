@extends('fontend.master')
@section('body')
@include('fontend.parts.banner')
		<!-- content-starts-here -->
	<!--single-page-->
	<div class="single-page main-grid-border">
		<div class="container">
			<div class="product-desc">
				<div class="col-md-7 product-view">
					<h2>{{$singelProduct->product_name}}</h2>
					
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="{{asset($singelProduct->product_image)}}">
								<img src="{{asset($singelProduct->product_image)}}" />
							</li>
						</ul>
					</div>
					<!-- FlexSlider -->
					  <script defer src="{{asset('fontend/assets/js/jquery.flexslider.js')}}"></script>
					<link rel="stylesheet" href="{{asset('fontend/assets/css/flexslider.css')}}" type="text/css" media="screen" />

						<script>
					// Can also be used with $(document).ready()
					$(window).load(function() {
					  $('.flexslider').flexslider({
						animation: "slide",
						controlNav: "thumbnails"
					  });
					});
					</script>
					<!-- //FlexSlider -->
					<div class="product-details">
						<p><strong>Product Description</strong> : {{$singelProduct->product_short_description}}</p>
					
					</div>
				</div>
				<div class="col-md-5 product-details-grid">
					<div class="item-price">
						<div class="product-price">
							<p class="p-price">Price</p>
							<h3 class="rate">Taka. {{$singelProduct->product_price}} /=</h3>
							<div class="clearfix"></div>
						</div>
                        <form action="{{route('add.to.cart')}}" method="post">
                        @csrf
						<div class="condition">
							<p class="p-price">Quntity:</p>
                            <input type="number" name="qty" value="1" min="1" />
                            <input type="hidden" name="id" value="{{$singelProduct->id}}" min="1">
							<input type="submit" name="btn" value="Add to cart" class="button">
							<div class="clearfix"></div>
						</div>
                        </form>
					</div>
						<div class="tips">
						<h4>Product Long Description</h4>
							{{$singelProduct->product_long_description}}
						</div>
				</div>
			<div class="clearfix"></div>
			</div>
		</div>
	</div>
		</div>
@endsection