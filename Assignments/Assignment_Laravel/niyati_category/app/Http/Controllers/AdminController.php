<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data = User::latest()->paginate(7);
        
    
        return view('admins.index',compact('data','data'))
            ->with('i', (request()->input('page', 1) - 1) * 7);
    }

    public function create()
    {
        return view('admins.create');
    }

    public function store(Request $request, User $user)
    {
        $request->validate([

            'name' => 'required|min:2|max:15|unique:users',
            'email' => 'required|email',
            'password' => 'required',
            'gender' => 'required',
            'hobbie' => 'required',
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->hobbie = $request->hobbie;
        $user->password = Hash::make($request->password);
        $user->save();
        $password = Hash::make('password');
        
        return redirect()->route('admins.index')->with('success', 'Admin Successfully Added.');
    }

    
    public function show(User $admin)
    { 
        return view('admins.show',compact('admin'));
    }

    public function edit(User $admin)
    {
        return view('admins.edit',['user' => $admin]);
    } 

    public function update(Request $request,$id)
    {      
        $user= User::find($id);
        $user->name=$request->name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->hobbie = $request->hobbie;
        $user->update();
        return redirect()->route('admins.index')
                        ->with('success','Admin updated successfully');
    }

    public function destroy(User $admin)
    {
        $admin->delete();
        //echo $post->id; exit;
        return redirect()->route('admins.index')
                        ->with('success','Admin deleted successfully');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
