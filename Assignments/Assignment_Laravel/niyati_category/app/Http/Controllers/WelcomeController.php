<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $query = Product::query();
        $categories = Category::all();
        

        $products=$query->get();

        return view('welcome',compact('products','categories'))
            ->with('i', (request()->input('page', 1) - 1) * 7);
            
    }
    public function filterProduct(Request $request)
    {
        $query = Product::query();
        $categories = Category::all();
        if($request->ajax())
        {
            if(empty($request->category))
        {
            $products = $query->get();
        }
        else
        {
            $products = $query->where(['category_id' => $request->category])->get();
        }
        return response()->json($products);
        }
    }

}
