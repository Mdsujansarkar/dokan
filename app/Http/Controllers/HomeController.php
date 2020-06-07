<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class HomeController extends Controller
{
    public function index()
    {
        $newProducts        = Product::where('publication_status', 1)
        ->orderBy('id', 'DESC')
            ->take(9)
            ->get();
        $newCategorys        = Category::where('publication_status', 1)
        ->orderBy('id', 'DESC')
            ->take(9)
            ->get();

        return view('fontend.home.home', [
            'newProducts'  => $newProducts,
            'newCategorys' => $newCategorys,
        ]);
    	
    }
    public function singelCategory($id)
    {
        $singelProduct      = Product::where('category_id', $id)
                            ->where('publication_status', 1)
                            ->paginate(6);
        return view('fontend.category.singleCategory', [
            'singelProduct'  => $singelProduct
        ]);

    }
}
