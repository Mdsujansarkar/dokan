<?php

namespace App\Http\Controllers;
use App\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory()
    {
    	return view('backend.categories.add-category');
    }
    public function categoryInsert(Request $request)
    {
    	$category 		= 	new Category();
    	$category 	   -> add_category  		= $request ->	add_category;
    	$category 	   -> category_icon 		= $request ->	category_icon;
    	$category 	   -> category_description 	= $request ->	category_description;
    	$category 	   -> publication_status 	= $request ->	publication_status;
    	$category 	   -> save();

    	return redirect('/catagory/add')->with('message','Category Add Successfully');
    }

    public function categoryManage()
    {
    	$categories = Category::all();
    	return view('backend.categories.manage-category', ['categories' => $categories]);
    }
    public function categoryPublished($id)
    {
    	$category 		= Category::find($id);
    	$category 		-> publication_status = 0;
    	$category 		->save();
    	return redirect('/catagory/manage')->with('message','Category Unpublished Successfully');

    }

    public function categoryUnpublished($id)
    {
    	$category 		= Category::find($id);
    	$category 		-> publication_status = 1;
    	$category 		->save();
    	return redirect('/catagory/manage')->with('message','Category Published Successfully');
    }
    public function categoryEdit($id)
    {
    	$category 		= Category::find($id);
    	return view('backend.categories.edit-category', ['category' => $category]);

    }
    public function categoryupdate(Request $request)
    {
    	$category 	= Category::find($request->category_id);
    	$category   ->add_category 			= $request ->add_category;
    	$category   ->category_icon 		= $request ->category_icon;
    	$category   ->category_description  = $request ->category_description;
    	$category   ->publication_status 	= $request ->publication_status;
    	$category   ->save();
    	return redirect('/catagory/manage')->with('message','Category Published Successfully');
    }
    public function categorydelete($id)
    {
    	$category 		= Category::find($id);
    	$category 		->delete();
    	return redirect('/catagory/manage')->with('message','Category Published Successfully');


    }
}
