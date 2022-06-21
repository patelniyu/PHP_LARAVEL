@extends('students.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('students.update',$student->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fname:</strong>
                    <input type="text" name="fname" value="{{ $student->fname }}" class="form-control" placeholder="Fname">
                    @if ($errors->has('fname'))
                            <span class="text-danger">{{ $errors->first('fname') }}</span>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Lname:</strong>
                    <input type="text" name="lname" value="{{ $student->lname }}" class="form-control" placeholder="Lname">
                    @if ($errors->has('lname'))
                            <span class="text-danger">{{ $errors->first('lname') }}</span>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" value="{{ $student->email }}" class="form-control" placeholder="Email">
                    @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Designation:</strong>
                    <select name="designation">
        			    <option value="">select </option>
        			    <option value="Project Manager" {{ ($student->designation=="Project Manager")? "selected" : "" }} >Project Manager</option>
        			    <option value="Humman resource" {{ ($student->designation=="Humman resource")? "selected" : "" }} >Humman resource</option>
        		    </select>
                    @if ($errors->has('designation'))
                            <span class="text-danger">{{ $errors->first('designation') }}</span>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gender:</strong>
                    <input type="radio" name="gender" value="male" {{ ($student->gender=="male")? "checked" : "" }}>Male
                    <input type="radio" name="gender" value="female" {{ ($student->gender=="female")? "checked" : "" }}>Female
                    @if ($errors->has('gender'))
                            <span class="text-danger">{{ $errors->first('gender') }}</span>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection