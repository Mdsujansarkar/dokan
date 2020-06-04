<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Brand;
use App\Test;
use Image;

class TestController extends Controller
{
    public function index()
    {
        $categories        = Category::where('publication_status', 1)->get();
        $brands            = Brand::where('publication_status', 1)->get();
        return view('backend.test.add',[
            'categories'    => $categories,
            'brands'        => $brands
        ]);
    }
    public function testSave(Request $request)
    {
        $testImage       = $request->file('product_image');
        // $photo = $request->file('image')->getClientOriginalName();
        $imageName          = $testImage->getClientOriginalName();

        // return $imageName;
        $directoryName      = 'product-imags/';

        $imageurl           = $directoryName . $imageName;
        // $testImage -> move( $directoryName,$imageName );
        Image::make($testImage)->save($imageurl);

        $test = new Test();

        $test->category_id          = $request->category_id;
        $test->brand_id             = $request->brand_id;
        $test->product_name         = $request->product_name;
        $test->product_price        = $request->product_price;
        $test->product_short_description    = $request->product_short_description;
        $test->product_long_description     = $request->product_long_description;
        $test->product_image        = $imageurl;
        $test->publication_status   = $request->publication_status;
        $test->save();
        return redirect('/test/add');
        // $test->save();
    }
}
