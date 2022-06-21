<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    
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

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }
}
