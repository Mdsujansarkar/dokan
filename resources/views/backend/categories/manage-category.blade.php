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
                <th>Category Name</th>
                <th>Category Description </th>
                <th>Category Icon</th>
                <th>Publication Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          @php($i = 0)
          @foreach($categories as $category)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$category->add_category}}</td>
                <td>{{$category->category_description}}</td>
                <td><i class="{{$category->category_icon}}"></i></td>
                <td>{{$category->publication_status==1 ? 'Publish':'Unpublish'}}</td>
                <td>
                  @if($category->publication_status==1)
                  <button class="btn btn-outline-primary"><a href="{{route('unpublished-category', ['id'=>$category-> id])}}"><i class="fa fa-angle-double-up"></i></a></button>
                  @else
                  <button class="btn btn-outline-primary"><a href="{{route('published-category', ['id'=>$category->id])}}"><i class="fa fa-angle-double-down"></i></a></button>
                  @endif
                   <button class="btn btn-outline-success"><a href="{{route('edit-category', ['id'=>$category->id])}}"><i class="fa fa-edit"></i></a></button>
                   <button class="btn btn-outline-success"><a href="{{-- {{route('published-category', ['id'=>$category->id])}} --}}"><i class="far fa-trash-alt"></i></a></button>
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