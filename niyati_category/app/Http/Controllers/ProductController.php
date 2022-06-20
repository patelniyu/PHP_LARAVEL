<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::latest()->paginate(7);
        $data1 = Category::get()->all();
    
        return view('products.index',compact('data','data1'))
            ->with('i', (request()->input('page', 1) - 1) * 7);
    }

    public function create()
    {
        $data = Category::get()->all();
        return view('products.create' , compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'image' => 'required',
            'active' => 'required',
        ],[
            'name.required' => 'Name is required!!',   
            'category_id' => 'Category is required',
            'image' => 'Image is required',
            'active.required' => 'Active is required!!',
            ]);
         $imageName = time().'.'.$request->image->extension();
         $request->image->move(public_path('images'),$imageName);
         $product=$request->all();
         $product['image']=$imageName;    
        Product::create($product);

        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
         
         }
    

    public function show(Product $product)
    {
        
        return view('products.show',compact('product'));
    }

    public function edit(Product $product )
    {
        $data = Category::get('cname');
        return view('products.edit',compact('product' ,'data'));
    }

    public function update(Request $request, Product $product)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'category' => 'required',
        //     'image' => 'required',
        //     'active' => 'required',
        // ],[
        //     'name.required' => 'Name is required!!',   
        //     'category' => 'Category is required',
        //     'image' => 'Image is required',
        //     'active.required' => 'Active is required!!',
        //     ]);
        
        $request_data = $request->all();
        //$request_data['gender'] = 'active'; 
    
        $product->update($request_data);
    
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        //echo $post->id; exit;
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
        unlink(public_path('images/'.$product->image));
        
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

}
