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
}
