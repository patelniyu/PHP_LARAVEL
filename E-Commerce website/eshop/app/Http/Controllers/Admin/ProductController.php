<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index',compact('products'));
    }

    public function add()
    {
        $category = Category::all();
        return view('admin.product.add',compact('category'));
    }

    public function insert(Request $request)
    {
        $products = new Product();


        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'small_description' => 'required',
            'description' => 'required',
            'original_price' => 'required',
            'selling_price' => 'required',
            'tax' => 'required',
            'qty' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,PNG,JPG,JPEG',


        ],[
                'name.required' => 'Name is required!!',
                'slug.required' => 'Slug is required!!',
                'small_description.required' => 'Small Description is required!!',
                'description.required' => 'Description is required!!',
                'original_price.required' => 'Original Price is required!!',
                'selling_price.required' => 'Selling Price is required!!',
                'tax.required' => 'Tax is required!!',
                'qty.required' => 'Quantity is required!!',
                'image.required' => 'Image is required!!',
        ]);

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/products/',$filename);
            $products->image = $filename;
        }

        $products->cate_id = $request->input('cate_id');
        $products->name = $request->input('name');
        $products->slug = $request->input('slug');
        $products->small_description = $request->input('small_description');
        $products->description = $request->input('description');
        $products->original_price = $request->input('original_price');
        $products->selling_price = $request->input('selling_price');
        $products->tax = $request->input('tax');
        $products->qty = $request->input('qty');
        $products->status = $request->input('status') == TRUE ? '1':'0';
        $products->trending = $request->input('trending') == TRUE ? '1':'0';
        $products->meta_title = $request->input('meta_title');
        $products->meta_keywords = $request->input('meta_keywords');
        $products->meta_description = $request->input('meta_description');
        $products->save();
        return redirect('products')->with('status',"Product Added Successfully");
    }

    public function edit($id)
    {
        $products = Product::find($id);
        return view('admin.product.edit',compact('products'));

    }

    public function update(Request $request, $id)
    {
        $products = Product::find($id);
        if($request->hasFile('image'))
        {
            $path = 'assets/uploads/products/'.$products->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/products/',$filename);
            $products->image = $filename;
        }
        $products->name = $request->input('name');
        $products->slug = $request->input('slug');
        $products->small_description = $request->input('small_description');
        $products->description = $request->input('description');
        $products->original_price = $request->input('original_price');
        $products->selling_price = $request->input('selling_price');
        $products->tax = $request->input('tax');
        $products->qty = $request->input('qty');
        $products->status = $request->input('status') == TRUE ? '1':'0';
        $products->trending = $request->input('trending') == TRUE ? '1':'0';
        $products->meta_title = $request->input('meta_title');
        $products->meta_keywords = $request->input('meta_keywords');
        $products->meta_description = $request->input('meta_description');
        $products->update();
        return redirect('products')->with('status',"Product Updated Successfully");
    }

    public function destroy($id)
    {
        $products = Product::find($id);
        $path = 'assets/uploads/products/'.$products->image;
        if(File::exists($path))
        {
            File::delete($path);
        }
        $products->delete();
        return redirect('products')->with('status',"Product Deleted Successfully");
    }
}
