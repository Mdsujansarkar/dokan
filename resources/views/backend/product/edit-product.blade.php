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
          @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
          @endif
            <section class="panel">
              <header class="panel-heading">
                {{Session::get('message')}}
              </header>
              <div class="panel-body">
                   <form class="form-horizontal" name="editForms" action="{{ route('update.product')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                    <!-- Form Name -->
                    <legend>PRODUCTS</legend>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_id">Product Name:</label>
                        <div class="col-md-4">
                            <input id="product_name" name="product_name" value="{{$product->product_name}}" class="form-control input-md" required="" type="text">
                            <input type="hidden" value="{{$product->id}}" name="product_id" />
                            </div>
                    </div>
                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_categorie">Select Category</label>
                        <div class="col-md-4">
                            <select id="product_categorie" name="category_id" class="form-control">
                                     <option value="">Select Category</option>
                                @foreach ( $categories as $category)
                                     <option value="{{$category->id}}">{{$category->add_category}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_brand">Select Brand</label>
                        <div class="col-md-4">
                            <select id="product_brand" name="brand_id" class="form-control">
                                <option value="">Select Brands</option>
                                @foreach ( $brands as $brand)
                                     <option value="{{$brand->id}}">{{$brand->add_brand}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_price">Product Price</label>
                        <div class="col-md-4">
                            <input id="product_price" name="product_price" value="{{$product->product_price}}" class="form-control input-md" required="" type="text">
                        </div>
                    </div>

                    

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_short_description">Product Short Description </label>
                        <div class="col-md-4">
                            <textarea id="product_short_description" rows="4" cols="50" name="product_short_description" required="">{{$product->product_short_description}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_long_description">Product Long Description </label>
                        <div class="col-md-4">
                            <textarea id="product_long_description" rows="4" cols="50" name="product_long_description" class="form-control input-md" required="" >{{$product->product_long_description}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                                <label class="col-md-4 control-label" for="filebutton">Main Image</label>
                                <div class="col-md-4">
                                <img src="{{asset($product->product_image)}}" width="100" height="100">
                                    <input id="filebutton" name="product_image" class="input-file" accept="image/*" type="file">
                                </div>
                    </div>
                        <div class="form-group">
                             <label class="col-md-4 control-label" for="product_name_fr">Publication Status</label>
                                <div class="col-md-4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="publication_status" {{ $product ->publication_status== 1 ? 'checked' : '' }} value="1" id="inlineRadio1">
                                        <label class="form-check-label" for="inlineRadio1">Publish</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="publication_status" {{ $product ->publication_status== 0 ? 'checked' : ''}} value="0">
                                        <label class="form-check-label" for="inlineRadio2">Unpublish</label> 
                                    </div>
                                 </div>
                             </div>
                            <!-- File Button -->
                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="singlebutton">Product Insert</label>
                                <div class="col-md-4">
                                    <button id="singlebutton" name="singlebutton" value="submit" class="btn btn-primary">Product Save</button>
                            </div>
                
            </form>
              </div>
            </section>
        <script>
                document.forms['editForms'].elements['category_id'].value = '{{ $product -> category_id }}';
                document.forms['editForms'].elements['brand_id'].value    = '{{ $product -> brand_id }}';
        </script>
          </div>
        </div>
       </section>
    </section>
@endsection