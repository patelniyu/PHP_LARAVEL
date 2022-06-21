@extends('layouts.app')
 
@section('content')


    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Category - Product app</h2>
            </div><br><br>
            <div class="pull-right" style="float:right">
                @if(auth()->user()->utype == '1')
                    <a class="btn btn-success" href="{{ route('admins.create') }}"> Create New Admin</a>
                @endif
                <a class="btn btn-success" href="{{ route('category.index') }}"> Category</a>
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
            <th>Name</th>
            <th>Email</th>
            <!-- <th>Password</th> -->
            <th>Gender</th>
            <th>Hobbie</th>
            @if(auth()->user()->utype == '1')
            <th width="280px">Action</th>
            @endif
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <!-- <td>{{ $value->password }}</td> -->
            <td>{{ $value->gender }}</td>
            <td>
                @foreach ($value->hobbie as $values)
                {{$values}}
                @endforeach
            </td>
            @if(auth()->user()->utype == '1')
            <td>
                <form action="{{ route('admins.destroy',$value->id) }}" method="POST">   
                    <a class="btn btn-primary" href="{{ route('admins.edit',$value->id) }}">Edit</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
            @endif
        </tr>
        @endforeach
    </table>
    {!! $data->links() !!}       
@endsection