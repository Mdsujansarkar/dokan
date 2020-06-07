@extends('backend.master')
@section('body')
<section id="main-content">
      <section class="wrapper">
        <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <section class="panel">
            <table id="example" class="display" border="1" style="width:100%">
        <thead>
            <tr>
                <th>Sl No</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Short Description </th>
                <th>Product long Description</th>
                <th>Product Image</th>
                <th>Publication Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          @php($i = 0)
          @foreach($products as $product)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$product->product_name}}</td>
                <td>{{$product->product_price}}</td>
                <td>{{$product->product_short_description}}</td>
                <td>{{$product->product_long_description}}</td>
                <td><img src="{{asset($product->product_image)}}" width="100" heigh="100" /></td>
                <td>{{$product->publication_status==1 ? 'Publish':'Unpublish'}}</td>
                 <td>
                  @if($product->publication_status==1)
                  <button class="btn btn-outline-primary"><a href="{{route('unpublished.product', ['id'=>$product-> id])}}"><i class="fa fa-angle-double-up"></i></a></button>
                  @else
                  <button class="btn btn-outline-primary"><a href="{{route('published.product', ['id'=>$product->id])}}"><i class="fa fa-angle-double-down"></i></a></button>
                  @endif
                   <button class="btn btn-outline-success">
                   <a href="{{route('edit.product', ['id'=>$product->id])}}">
                   <i class="fa fa-edit"></i></a>
                   </button>
                   {{-- <button class="btn btn-outline-success">
                   <a href="{{route('delete-category', ['id'=>$category->id])}}">
                   <i class="fa fa-minus-square"></i></a>
                   </button> --}}
                </td>
            </tr>
          @endforeach
    </table>
            </section>
          </div>
          </div>
       </section>
    </section>
@endsection