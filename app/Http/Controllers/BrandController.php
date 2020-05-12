<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandController extends Controller
{
    public function index()
    {
    	return view('backend.brand.add-brand');
    }
    public function brandSave(Request $request)
    {
    	$brand 			= new Brand();
    	$brand 			->add_brand 					=   $request 		->add_brand;
    	$brand 			->brand_description 			=	$request 		->brand_description;
    	$brand 			->publication_status 			=	$request 		->publication_status;
    	$brand 			->save();
    	return redirect('/add/brand')->with('message','Brand Save Successfully');
    }
    public function manageBrand()
    {
    	$brands 		= Brand::all();
    	return view('backend.brand.manageBrand',['brands' => $brands]);
    }

    public function unpublishBrand($id)
    {
    	$brands 		= Brand::find($id);
    	$brands 		->publication_status = 0;
    	$brands 		->save();
    	return redirect('/manage/brand')->with('message','Publication Status change');
    }
    public function publishBrand($id)
    {
    	$brands 		= Brand::find($id);
    	$brands 		->publication_status = 1;
    	$brands 		->save();
    	return redirect('/manage/brand')->with('message','Publication Status change');
    }
    public function editBrand($id)
    {
    	$brand 	= Brand::find($id);
    	return view('backend.brand.editBrand',['brand' =>$brand]);
    }
    public function updateBrand(Request $request)
    {
    	$brand 			= Brand::find($request->brand_id);
    	$brand  		-> add_brand 			= 	$request  -> add_brand;
    	$brand  		-> brand_description 	= 	$request  -> brand_description;	
    	$brand  		-> publication_status 	= 	$request  -> publication_status;	
    	$brand 			->save();
    	return redirect('/manage/brand')->with('message','Brand change');
    }
    public function deleteBrand($id)
    {
    	$brand 			= Brand::find($id);
    	$brand 			->delete();
    	return redirect('/manage/brand')->with('message','Brand Delete');

    }
}
