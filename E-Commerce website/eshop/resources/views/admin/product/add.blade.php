@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add Product</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('insert-product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select" name="cate_id" aria-lable="Default select example">
                        <option value="">Select a Category</option>
                            @foreach($category as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <lable for="">Name</lable>
                        <input type="text"  class="form-control" name="name">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6 mb-3">
                        <lable for="">Slug</lable>
                        <input type="text"  class="form-control" name="slug">
                        @if ($errors->has('slug'))
                            <span class="text-danger">{{ $errors->first('slug') }}</span>
                        @endif
                    </div>
                    <div class="col-md-12 mb-3">
                        <lable for="">Small Description</lable>
                        <textarea name="small_description" rows="3" class="form-control"></textarea>
                        @if ($errors->has('small_description'))
                            <span class="text-danger">{{ $errors->first('small_description') }}</span>
                        @endif
                    </div>
                    <div class="col-md-12 mb-3">
                        <lable for="">Description</lable>
                        <textarea name="description" rows="3" class="form-control"></textarea>
                        @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6 mb-3">
                        <lable for="">Original Price</lable>
                        <input type="number" class="form-control" name="original_price">
                        @if ($errors->has('original_price'))
                            <span class="text-danger">{{ $errors->first('original_price') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6 mb-3">
                        <lable for="">Selling Price</lable>
                        <input type="number" class="form-control" name="selling_price">
                        @if ($errors->has('selling_price'))
                            <span class="text-danger">{{ $errors->first('selling_price') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6 mb-3">
                        <lable for="">Tax</lable>
                        <input type="number" class="form-control" name="tax">
                        @if ($errors->has('tax'))
                            <span class="text-danger">{{ $errors->first('tax') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6 mb-3">
                        <lable for="">Quantity</lable>
                        <input type="number" class="form-control" name="qty">
                        @if ($errors->has('qty'))
                            <span class="text-danger">{{ $errors->first('qty') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6 mb-3">
                        <lable for="">Status</lable>
                        <input type="checkbox" name="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <lable for="">Trending</lable>
                        <input type="checkbox" name="trending">
                    </div>
                    <div class="col-md-12 mb-3">
                        <lable for="">Meta Title</lable>
                        <input type="text"  class="form-control" name="meta_title">
                    </div>
                    <div class="col-md-12 mb-3">
                        <lable for="">Meta Keywords</lable>
                        <textarea name="meta_keywords" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <lable for="">Meta Description</lable>
                        <textarea name="meta_description" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control">
                        @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
