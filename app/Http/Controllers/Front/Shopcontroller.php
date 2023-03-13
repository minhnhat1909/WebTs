<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductComment;
use Illuminate\Http\Request;

class Shopcontroller extends Controller
{
    public function show($id){
        $product = Product::findOrFail($id);

        $avgRating = 0;
        $sumRating = array_sum(array_column($product->productcomment->toArray(),'rating'));
        $countRaing = count($product->productcomment);
        if($countRaing)
        {
            $avgRating=$sumRating/$countRaing;
        }

        $relatedProducts = Product::where('product_category_id', $product->product_category_id)
            ->where('tag',$product->tag)
            ->limit(4)
            ->get();

        return view ('front.shop.show', compact('product', 'avgRating','relatedProducts'));

    }

    public function index()
    {
        return view('front.shop.index');
    }
    public function postComment(Request $request)
    {
        ProductComment::create($request->all());
        return redirect()->back();
    }
}
