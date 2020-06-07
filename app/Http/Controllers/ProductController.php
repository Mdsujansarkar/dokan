<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Brand;
use Image;
use DB;

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

		$product->category_id          		   = $request->category_id;
		$product->brand_id             		   = $request->brand_id;
		$product->product_name         		   = $request->product_name;
		$product->product_price        		   = $request->product_price;
		$product->product_short_description    = $request->product_short_description;
		$product->product_long_description     = $request->product_long_description;
		$product->product_image        		   = $imageurl;
		$product->publication_status   		   = $request->publication_status;
		$product->save();
	}

	public function saveProduct(Request $request)
	{
		$this->validateCheck($request);

		$imageurl           = $this->UploadImage($request);

		$this->saveProductbasicInfo($request, $imageurl);

		return redirect('/product/add')->with(' message', 'Message save');
	}

	public function manageProduct()
	{
		$products = DB::table('products')
		->join('categories', 'products.category_id', '=', 'categories.id')
		->join('brands', 'products.brand_id', '=', 'brands.id')
		->select('products.*', 'categories.add_category', 'brands.add_brand')
		->paginate(2);

		return view('backend.product.manage-product', ['products' => $products]);	
	}
	public function unpublisProduct($id)
	{
		$product		= Product::find($id);
		$product		->publication_status = 0;
		$product        ->save();
		return redirect('/product/manage')->with("message",'product unpublished');
	}

	public function publisProduct($id)
	{
		$product		= Product::find($id);
		$product->publication_status = 1;
		$product->save();
		return redirect('/product/manage')->with("message", 'product unpublished');
	}
	public function editProduct($id)
	{
		$product		= Product::find($id);
		$categories = Category::where('publication_status', 1)->get();
		$brands     = Brand::where('publication_status', 1)->get();
		return view('backend.product.edit-product',[
			'product' => $product,
			'categories' => $categories,
			'brands'		=> $brands
			]);
	}

	public function productInfoUpdate($request,$product,$imageUrl =null)
	{
		$product->product_name  					= $request->product_name;
		$product->category_id   					= $request->category_id;
		$product->brand_id   	 					= $request->brand_id;
		$product->product_price   	 				= $request->product_price;
		$product->product_short_description   	 	= $request->product_short_description;
		$product->product_long_description   	 	= $request->product_long_description;
		$product->publication_status   	 		    = $request->publication_status;
		if($imageUrl)
		{
			$product->product_image   	 				= $imageUrl;
		}
		
		$product->save();
	}
	public function updateProduct(Request $request)
	{
		$productImage = $request->file('product_image');
		$product = Product::find($request->product_id);
		if($productImage)
		{
			unlink($product->product_image);
			$imageUrl = $this->UploadImage($request);
			$this->productInfoUpdate($request, $product, $imageUrl);
		}else{
			$this->productInfoUpdate($request, $product);
		}

		return redirect('/product/manage')->with("message", 'product update');

	}
}
