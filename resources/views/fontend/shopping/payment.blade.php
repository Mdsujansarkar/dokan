@extends('fontend.master')
@section('body')
@include('fontend.parts.banner')
		<!-- content-starts-here -->
	<!--single-page-->
	<div class="single-page main-grid-border">
		<div class="container">
<table class="table" border="1">
  <thead class="thead-light">
  	<form action="{{route('payments.confarm')}}" method="post">
  		@csrf
    <tr>
      <th scope="col">PayPal</th>
      <th scope="col">
      	<input type="radio" name="payment_type" value="paypal">
      	<lavel>Paypal</lavel>
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Cash In Delivery</th>
      <td>
      	<input type="radio" name="payment_type" value="cash">
      	<lavel>Cash</lavel>
      </td>
    </tr>
     <tr>
      <th scope="row">Bikash</th>
      <td>
      	<input type="radio" name="payment_type" value="bikash">
      	<lavel>Bikash</lavel>
      </td>
    </tr>
    <tr>
      <th scope="row">Submit</th>
      <td>
      
      	<button  name="btn">Submit</button>
      	
      </td>
    </tr>
 </form>
  
  </tbody>
</table>
	</div>
		</div>
@endsection