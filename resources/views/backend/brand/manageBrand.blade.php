@extends('backend.master')
@section('body')
<section id="main-content">
      <section class="wrapper">
        <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <section class="panel">
            <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Sl No</th>
                <th>Brand Name</th>
                <th>Brand Description </th>
                <th>Publication Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          @php($i = 0)
          @foreach($brands as $brand)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$brand->add_brand}}</td>
                <td>{{$brand->brand_description}}</td>
                <td>{{$brand->publication_status==1 ? 'Publish':'Unpublish'}}</td>
                <td>
                  @if($brand->publication_status==1)
                  <button class="btn btn-outline-primary"><a href="{{route('unpublished-brand', ['id'=>$brand-> id])}}"><i class="fa fa-angle-double-up"></i></a></button>
                  @else
                  <button class="btn btn-outline-primary"><a href="{{route('published-brand', ['id'=>$brand-> id])}}"><i class="fa fa-angle-double-down"></i></a></button>
                  @endif
                   <button class="btn btn-outline-success"><a href="{{route('edit-brand', ['id'=>$brand->id])}}"><i class="fa fa-edit"></i></a></button>
                   <button class="btn btn-outline-success"><a href="{{route('delete-brand', ['id'=>$brand->id])}}"><i class="fa fa-minus-square"></i></a></button>
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