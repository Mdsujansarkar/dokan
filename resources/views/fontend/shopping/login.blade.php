@extends('fontend.master')
@section('body')
@include('fontend.parts.banner')
		<!-- content-starts-here -->
	<!--single-page-->
	 <section>
			<div id="page-wrapper" class="sign-in-wrapper">
				<div class="graphs">
					<div class="sign-in-form">
						<div class="sign-in-form-top">
							<h1>Log in</h1>
						</div>
						<div class="signin">
							<div class="signin-rit">
								<span class="checkbox1">
									 <label class="checkbox"><input type="checkbox" name="checkbox" checked="">Forgot Password ?</label>
								</span>
								<p><a href="#">Click Here</a> </p>
								<div class="clearfix"> </div>
							</div>
							<form action="{{route('custom.login')}}" method="post">
								@csrf
							<div class="log-input">
								<div class="log-input-left">
								   <input type="text" class="user" name="email_address" value="Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email';}"/>
								</div>
								
								<div class="clearfix"> </div>
							</div>
							<div class="log-input">
								<div class="log-input-left">
								   <input type="password" class="lock" name="password" value="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address:';}"/>
								</div>
								<div class="clearfix"> </div>
							</div>
							<input type="submit" name="btn" value="Log in">
						</form>	 
						</div>
						<div class="new_people">
							<h2>For New People</h2>
							<p>Having hands on experience in creating innovative designs,I do offer design 
								solutions which harness.</p>
							<a href="register.html">Register Now!</a>
						</div>
					</div>
				</div>
			</div>
	</section>
@endsection