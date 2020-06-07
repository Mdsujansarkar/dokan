@extends('fontend.master')
@section('body')
@include('fontend.parts.banner')
		<!-- content-starts-here -->
		<div class="content">
			<div class="categories">
				<div class="container">
				@foreach ($newCategorys as $newCategory)
					<div class="col-md-2 focus-grid">
						{{-- <a href="{{'categorySingel',['id'=>$newCategory->id]}}"> --}}
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="{{$newCategory->category_icon}}" ></i></div>
									<h4 class="clrchg">{{$newCategory->add_category}}</h4>
								</div>
							</div>
						</a>
					</div>
				@endforeach
					<div class="clearfix"></div>
				</div>
			</div>
		
		@include('fontend.home.slider')
		</div>
@endsection