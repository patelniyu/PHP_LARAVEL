@extends('layouts.app')
 
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Category - Product app</h2>
            </div><br><br>
            
            <div class="pull-right" style="float:right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
                <a class="btn btn-success" href="{{ route('admins.index') }}"> Admin</a>
                <a class="btn btn-success" href="{{ route('category.index') }}"> Category</a>     
            </div><br>
            
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Category</th>
            <th>Image</th>
            <th>Created By User ID</th>
            <th>Active</th>
            
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->name }}</td>
            <td>{{$value->category_id}}</td>
            <td><img src=" {{ asset('images/' . $value->image)}}" width="100"></td>
            <td>{{ $value->user_id}}</td>
            <td>{{ $value->active }}</td>
            
            <td>
                <form action="{{ route('products.destroy',$value->id) }}" method="POST">   
                    <a class="btn btn-primary" href="{{ route('products.edit',$value->id) }}">Edit</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $data->links() !!}   
     
@endsection