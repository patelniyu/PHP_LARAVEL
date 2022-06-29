@extends('products.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
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
   
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Enter Name">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div><br>
             
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category:</strong><br>
                <select name="category_id" class="form-control" id="category_id">
				    <option value="">--Select--</option>
                    @foreach($data as $key => $value)
                        <option value="{{$value->cname}}">{{ $value->cname }}</option>
                    @endforeach
				</select>

              
            </div><br>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" >
                @if ($errors->has('image'))
                    <span class="text-danger">{{ $errors->first('image') }}</span>
                @endif
            </div><br>
        </div>

       <input type="hidden" name="user_id" class="for-control" value="{{ Auth::user()->email }}">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Active:</strong><br>
                <div class="form-check form-check-inline" >
                    <input class="form-check-input" type="radio" name="active" value="yes">
                    <label class="form-check-label" for="yes">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="active" value="no">
                    <label class="form-check-label" for="no">No</label>
                </div>
                @if ($errors->has('active'))
                    <span class="text-danger">{{ $errors->first('active') }}</span>
                @endif
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection