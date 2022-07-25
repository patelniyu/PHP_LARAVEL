@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit/Update Category</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <lable for="">Name</lable>
                        <input type="text" value="{{ $category->name }}" class="form-control" name="name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <lable for="">Slug</lable>
                        <input type="text" value="{{ $category->slug }}"  class="form-control" name="slug">
                    </div>
                    <div class="col-md-12 mb-3">
                        <lable for="">Description</lable>
                        <textarea name="description" rows="3" class="form-control">{{ $category->description }}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <lable for="">Status</lable>
                        <input type="checkbox" {{ $category->status == '1' ? 'checked':'' }} name="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <lable for="">Popular</lable>
                        <input type="checkbox" {{ $category->popular == '1' ? 'checked':'' }} name="popular">
                    </div>
                    <div class="col-md-12 mb-3">
                        <lable for="">Meta Title</lable>
                        <input type="text" value="{{ $category->meta_title }}" class="form-control" name="meta_title">
                    </div>
                    <div class="col-md-12 mb-3">
                        <lable for="">Meta Keywords</lable>
                        <textarea name="meta_keywords" rows="3" class="form-control">{{ $category->meta_keywords }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <lable for="">Meta Description</lable>
                        <textarea name="meta_description" rows="3" class="form-control">{{ $category->meta_descrip }}</textarea>
                    </div>
                    @if($category->image)
                        <img src="{{ asset('assets/uploads/category/'.$category->image) }}" alt="Category Image">  
                    @endif
                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection