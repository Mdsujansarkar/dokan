@extends('fontend.master')
@section('body')
@include('fontend.parts.banner')
		<!-- content-starts-here -->
	<!--single-page-->
	<div class="single-page main-grid-border">
		<div class="container">
            <div class="panel panel-default">
                    <div class="panel-body">
                        <table class="table table-bordered">
                <thead>
                    <tr class="bg-primary">
                    <th scope="col" style="color:#FFF">Sl. NO</th>
                    <th scope="col" style="color:#FFF">Product Name</th>
                    <th scope="col" style="color:#FFF">Image</th>
                    <th scope="col" style="color:#FFF">Price Tk.</th>
                    <th scope="col" style="color:#FFF">Quantity</th>
                    <th scope="col" style="color:#FFF">Total Price</th>
                    <th scope="col" style="color:#FFF">Action</th>
                    </tr>
                </thead>
                        <tbody>
                        @php( $i = 1)
                        @php($sum = 0)
                        @foreach ($cartCollections as $cartCollection )
                            <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{$cartCollection->name}}</td>
                            <td><img src="{{asset($cartCollection->options->image)}}" height="100" width="90" /></td>
                            <td>Tk. {{$cartCollection->price}}</td>
                            <td>
                            <form action="{{route('cart.update')}}" method="post">
                            @csrf
                            <input type="number" name="qty" min="1" value="{{$cartCollection->qty}}">
                            <input type="hidden" name="rowId" value="{{$cartCollection->rowId}}" />
                            <input type="submit" name="btn" value="update">
                                
                            </form>
                                
                            </td>
                            <td>Tk. {{$total = $cartCollection->qty*$cartCollection->price}}</td>
                            <td><a   href="{{ route('delete-cart-item',['rowId' => $cartCollection->rowId])}}"  class="btn btn-danger" role="button">Danger</a></td>
                            </tr>
                             @php($sum = $total + $sum)
                            @endforeach
                        </tbody>
                </table>
                    </div>
            </div>
			
			<div class="clearfix"></div>
            <div class="col-md-6">
                <div class="panel panel-default" style="background-color:#337AB7;padding:15px">
                <div class="panel-body" style="color:#FFF;">A Basic Panel</div>

            </div>
             <table class="table table-bordered">
                    <tbody>
                       
                            <tr>
                            <th scope="row">Item Total</th>
                            <td>Taka. {{$sum}} /=</td>
                            </tr>
                            <tr>
                            <th scope="row">Vat</th>
                            <td>Taka. {{$vat = 0}} /=</td>
                            </tr>
                            <tr>
                            <th scope="row">Total</th>
                            <td>Taka. {{$vat +$sum}} /=</td>
                            </tr>
                          
                        </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default" >
                <div class="panel-body"style="background-color:green;padding:15px">A Basic Panel</div>
                <table class="table table-bordered">
                    <tbody>
                       
                            <tr>
                            <th scope="row"><a href="{{url('/')}}" class="btn btn-danger">Contunue Shopping</a></th>
                            <td><a href="{{route('registration.shopping')}}" class="btn btn-danger">Check Out</a></td>
                            
                            </tr>
                          
                        </tbody>
                </table>
            </div>
            </div>
            
		</div>
	</div>
		</div>
@endsection