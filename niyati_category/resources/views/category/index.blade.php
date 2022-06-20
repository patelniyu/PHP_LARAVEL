@extends('layouts.app')
 
@section('content')


    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Category - Product app</h2>
            </div><br><br>
            <div class="pull-right" style="float:right">
                <a class="btn btn-success" href="{{ route('category.create') }}"> Create New Category</a>
                <a class="btn btn-success" href="{{ route('admins.index') }}"> Admin</a>
                <a class="btn btn-success" href="{{ route('products.index') }}"> Product</a>
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
            <th>CName</th>
            <th>Active</th>
            
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->cname }}</td>
            <td>{{ $value->active }}</td>
            
            <td>
                <form action="{{ route('category.destroy',$value->id) }}" method="POST">   
                    <a class="btn btn-primary" href="{{ route('category.edit',$value->id) }}">Edit</a>   
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