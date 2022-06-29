@extends('category.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Category</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('category.index') }}"> Back</a>
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
   
<form action="{{ route('category.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CName:</strong>
                <input type="text" name="cname" class="form-control" placeholder="Enter CName">
                @if ($errors->has('cname'))
                    <span class="text-danger">{{ $errors->first('cname') }}</span>
                @endif
            </div>
        </div>

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