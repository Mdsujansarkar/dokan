<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Brand;
use Image;

class ProductController extends Controller
{
    public function index()
    {
		$categories		= Category::where('publication_status', 1)->get();
		$brands			= Brand::where( 'publication_status', 1)->get();
    	return view('backend.product.add-product',[
			'categories'	=> $categories,
			'brands'		=> $brands
		]);
	}
	protected function validateCheck($request)
	{
		$this->validate($request, [
			'product_name'   => 'required'
		]);
	}

	protected function UploadImage($request)
	{

		$productImage       = $request->file('product_image');
		// $photo = $request->file('image')->getClientOriginalName();
		$imageName          = $productImage->getClientOriginalName();

		// return $imageName;
		$directoryName      = 'product-imags/';

		$imageurl           = $directoryName . $imageName;
		// $productImages -> move( $directoryName,$imageName );
		Image::make($productImage)->save($imageurl);
		return $imageurl;
	}

	protected function saveProductbasicInfo($request, $imageurl)
	{
		$product = new Product();

		$product->category_id          = $request->category_id;
		$product->brand_id             = $request->brand_id;
		$product->product_name         = $request->product_name;
		$product->product_price        = $request->product_price;
		$product->product_short_description    = $request->product_short_description;
		$product->product_long_description     = $request->product_long_description;
		$product->product_image        = $imageurl;
		$product->publication_status   = $request->publication_status;
		$product->save();
	}

	public function saveProduct(Request $request)
	{
		$this->validateCheck($request);

		$imageurl           = $this->UploadImage($request);

		$this->saveProductbasicInfo($request, $imageurl);

		return redirect('/product/add')->with(' message', 'Message save');
	}
}
