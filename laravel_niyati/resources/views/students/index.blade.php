@extends('students.layout')
 
@section('content')


    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Crud app</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('students.create') }}"> Create New Post</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   {{ $datanew['newdata'] }}
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Fname</th>
            <th>Lname</th>
            <th>Email</th>
            <th>Designation</th>
            <th>Gender</th>
            
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->fname }}</td>
            <td>{{ $value->lname }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->designation }}</td>
            <td>{{ $value->gender }}</td>
            
            <td>
                <form action="{{ route('students.destroy',$value->id) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('students.show',$value->id) }}">Show</a>    
                    <a class="btn btn-primary" href="{{ route('students.edit',$value->id) }}">Edit</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    <p>Date: {{ convertYmdToMdy('2022-02-12') }}</p>
    <p>Date: {{ convertMdyToYmd('02-12-2022') }}</p>
    {!! $data->links() !!}       
@endsection