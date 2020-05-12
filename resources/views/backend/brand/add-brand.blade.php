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
                <form role="form" method="post" action="{{route('new-brand')}}">
                	@csrf
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Brand Name</label>
                    <input type="text" name="add_brand" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Brand Description</label>
                    <textarea name="brand_description" class="form-control" cols="30" rows="10"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Publication Status:</label>
                    <input type="radio" name="publication_status" value="1">
                    <label for="">Publish</label>
                    <input type="radio" name="publication_status" value="0">
                    <label for="">Unpublish</label>
                  </div>
                  <button type="submit" name="btn" class="btn btn-primary" value="submit">Submit</button>
                 
                </form>

              </div>
            </section>

          </div>
        </div>
       </section>
    </section>
@endsection