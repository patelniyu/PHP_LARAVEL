@extends('admins.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Admin</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admins.index') }}"> Back</a>
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
    
    <form action="{{ route('admins.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Name">
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" value="{{ $user->email }}" class="form-control" placeholder="Email">
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Password:</strong>
                    <input type="password" name="password" value="{{ $user->password }}" class="form-control" placeholder="Password">
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gender:</strong>
                    <input type="radio" name="gender" value="male" {{ ($user->gender=="male")? "checked" : "" }}>Male
                    <input type="radio" name="gender" value="female" {{ ($user->gender=="female")? "checked" : "" }}>Female
                    @if ($errors->has('gender'))
                        <span class="text-danger">{{ $errors->first('gender') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Hobbie:</strong><br>
                    <input type="checkbox" name="hobbie[]" value="Cricket" {{ in_array('Cricket',$user->hobbie ) ? 'checked' : '' }}> Cricket <br>
                    <input type="checkbox" name="hobbie[]" value="Singing" {{ in_array('Singing',$user->hobbie ) ? 'checked' : '' }}> Singing <br>
                    <input type="checkbox" name="hobbie[]" value="Swimming" {{ in_array('Swimming',$user->hobbie ) ? 'checked' : '' }}> Swimming <br>
                    <input type="checkbox" name="hobbie[]" value="Shopping" {{ in_array('Shopping',$user->hobbie ) ? 'checked' : '' }}> Shopping <br>
                    @if ($errors->has('hobbie'))
                        <span class="text-danger">{{ $errors->first('hobbie') }}</span>
                    @endif
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection