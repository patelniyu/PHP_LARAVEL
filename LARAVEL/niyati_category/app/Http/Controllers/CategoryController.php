<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::latest()->paginate(7);
        
    
        return view('category.index',compact('data','data'))
            ->with('i', (request()->input('page', 1) - 1) * 7);
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'cname' => 'required',
            'active' => 'required',
        ],[
            'cname.required' => 'CName is required!!',           
            'active.required' => 'Active is required!!',
            ]);
    
        Category::create($request->all());

        return redirect()->route('category.index')
                        ->with('success','Category created successfully.');
    }

    public function show(Category $category)
    {
        return view('category.show',compact('category'));
    }

    public function edit(Category $category)
    {
        return view('category.edit',compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        //echo $post->id; exit;
        $request->validate([
            'cname' => 'required',  
            'active' => 'required', 
        ],[
                'cname.required' => 'CName is required!!',
                'active.required' => 'Active is required!!',
            ]);

        
        $request_data = $request->all();
        //$request_data['gender'] = 'active'; 
    
        $category->update($request_data);
    
        return redirect()->route('category.index')
                        ->with('success','Category updated successfully');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        //echo $post->id; exit;
        return redirect()->route('category.index')
                        ->with('success','Category deleted successfully');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
