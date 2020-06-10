@extends('fontend.master')
@section('body')
@include('fontend.parts.banner')
		<!-- content-starts-here -->
	<!--single-page-->
	<div class="single-page main-grid-border">
		<div class="container">
           
	</div><section>
			<div id="page-wrapper" class="sign-in-wrapper">
				<div class="graphs">
					<div class="sign-up">
						<h1>Create an account</h1>
						<p class="creating">Having hands on experience in creating innovative designs,I do offer design 
							solutions which harness.</p>
						<h2>Personal Information</h2>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>First Name :</h4>
							</div>
							<div class="sign-up2">
									<input type="text" name="first-name" placeholder="Enter Your First Name" required=" "/>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>Last Name :</h4>
							</div>
							<div class="sign-up2">
									<input type="text" name="last-name" placeholder="Enter Your Last Name" required=" "/>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>Phone Number* :</h4>
							</div>
							<div class="sign-up2">
									<input type="text" name="phone-number" placeholder="Enter Your Phone Number" required=" "/>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>Email Address* :</h4>
							</div>
							<div class="sign-up2">
									<input type="text" name="email-address" placeholder="Enter Your Email Address" required=" "/>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>Password* :</h4>
							</div>
							<div class="sign-up2">
									<input type="password" name="password" placeholder="Enter Your Password" required=" "/>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>textarea* :</h4>
							</div>
							<div class="sign-up2">
									<textarea rows="8" cols="63" name="message" placeholder="Message"></textarea>
							</div>
							<div class="clearfix"> </div>
						</div>
						
						<div class="sub_home">
							<div class="sub_home_left">
									<input type="submit" name="btn" value="Register">
							</div>
							<div class="sub_home_right" style="background:#01a185;;padding:10px 20px">
								<a href="{{route('customer.login')}}" style="color:#fff">Login</a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
		
	</section>
		</div>
@endsection