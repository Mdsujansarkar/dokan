@extends('backend.master')
@section('body')
<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Form elements</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Forms</li>
              <li><i class="fa fa-file-text-o"></i>Form elements</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-offset-4">
            <section class="panel">
              <header class="panel-heading">
                {{Session::get('message')}}
              </header>
              <div class="panel-body">
                <form role="form" method="post" action="{{route('update-category')}}">
                	@csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" name="add_category" value="{{$category->add_category}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    <input type="hidden" name="category_id" value="{{$category->id}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category Icon</label>
                    <input type="text" name="category_icon" value="{{$category->category_icon}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Category Description</label>
                    <textarea name="category_description" class="form-control" cols="30" rows="10">{{$category->category_description}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Publication Status:</label>
                    <input type="radio" name="publication_status" {{$category->category_description==1 ? 'checked':''}} value="1">
                    <label for="">Publish</label>
                    <input type="radio" name="publication_status" {{$category->category_description==0 ? 'checked':''}} value="0">
                    <label for="">Unpublish</label>
                  </div>
                  <button type="submit" name="btn" class="btn btn-primary" value="submit">update</button>

                </form>

              </div>
            </section>

          </div>
        </div>
       </section>
    </section>
@endsection