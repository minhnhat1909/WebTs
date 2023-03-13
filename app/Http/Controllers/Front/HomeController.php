<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductComment;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $womenProducts = Product::where('featured', true)->where('product_category_id',2)->get();
        $menProducts = Product::where('featured', true)->where('product_category_id',1)->get();


        return view('front.index', compact('womenProducts','menProducts'));
    }

}
