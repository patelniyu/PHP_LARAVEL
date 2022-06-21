<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Student::latest()->paginate(2);
        $datanew['newdata'] = "asdf";
    
        return view('students.index',compact('data','datanew'))
            ->with('i', (request()->input('page', 1) - 1) * 2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required|min:4|unique:students,fname',
            'lname' => 'required|min:4',
            'email' => 'required|unique:students,email,',
            'designation' => 'required',
            'gender' => 'required', 
        ],[
            'fname.required' => 'Fname is required!!',
            'fname.max' => 'Maximum 8 charachers require!!',
            'fname.unique' => 'Fname is already exists!!',
            'lname.required' => 'Lname is required',
            'lname.max' => 'Maximum 8 charachers require!!',
            'email.required' => 'Email is required',
            'email.unique' => 'Email is already exists!!',           
            'designation.required' => 'Designation is required!!',
            'gender.required' => 'Gender is required!!',
            ]);
    
        Student::create($request->all());
     
        return redirect()->route('students.index')
                        ->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {

        return view('students.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //echo $post->id; exit;
        $request->validate([
            'fname' => 'required|min:4',
            'lname' => 'required|min:4',
            'email' => 'required|unique:students,email,'.$student->id.',id',
            'designation' => 'required',
            'gender' => 'required',
              
        ],[
                'fname.required' => 'Fname is required!!',
                'fname.max' => 'Maximum 8 charachers require!!',
                //'fname.unique' => 'Fname is already exists!!',
                'lname.required' => 'Lname is required',
                'lname.max' => 'Maximum 8 charachers require!!',
                'email.required' => 'Email is required',
                'email.unique' => 'Email is already exists!!',
                'designation.required' => 'Designation is required!!',
                'gender.required' => 'Gender is required!!',
            ]);

        
        $request_data = $request->all();
        //$request_data['gender'] = 'active'; 
    
        $student->update($request_data);
    
        return redirect()->route('students.index')
                        ->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        //echo $post->id; exit;
        return redirect()->route('students.index')
                        ->with('success','Post deleted successfully');
    }
}
