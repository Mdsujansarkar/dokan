	<div class="trending-ads">
				<div class="container">
				<!-- slider -->

				<style>
				.myButton {
	background-color:#79bbff;
	border-radius:6px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:15px 24px !important;
	text-decoration:none;
	text-shadow:0px 1px 0px #528ecc;
}
.myButton:hover {

	background-color:#378de5;
	text-decoration:none;
	color:#FFFFFF;
}
.myButton:active {
	position:relative;
	top:3px;
}

				</style>
				<div class="trend-ads">
					<h2>Recent Product</h2>
							<ul id="flexiselDemo3">
								<li>
								@foreach ($newProducts as $newProduct)
									<div class="col-md-3 biseller-column">
										<a href="{{route('singleProduct',['id'=>$newProduct->id])}}">
											<img src="{{asset($newProduct->product_image)}}"/>
											<span class="price">&#36; {{$newProduct->product_price}}</span>
										</a> 
										<div class="ad-info">
											<h5>{{$newProduct->product_name}}</h5>
											<span>Product upload: {{$newProduct->created_at->format('jS F Y')}}</span>
											
										</div>
										<div class="productAdd" />
										<a class="myButton" href="{{route('singleProduct',['id'=>$newProduct->id])}}" style="margin-left: 10px;">Add To Cart</a>
										</div>
									</div>
									@endforeach
									
								</li>
							
						</ul>
					<script type="text/javascript">
						 $(window).load(function() {
							$("#flexiselDemo3").flexisel({
								visibleItems:1,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 5000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems:1
									}, 
									landscape: { 
										changePoint:640,
										visibleItems:1
									},
									tablet: { 
										changePoint:768,
										visibleItems:1
									}
								}
							});
							
						});
					   </script>
					   <script type="text/javascript" src="{{asset('fontend/assets/js/jquery.flexisel.js')}}"></script>
					</div>   
			</div>
			<!-- //slider -->				
			</div>