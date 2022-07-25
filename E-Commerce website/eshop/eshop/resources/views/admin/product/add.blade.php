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
                    </div>
                    <div class="col-md-6 mb-3">
                        <lable for="">Slug</lable>
                        <input type="text"  class="form-control" name="slug">
                    </div>
                    <div class="col-md-12 mb-3">
                        <lable for="">Small Description</lable>
                        <textarea name="small_description" rows="3" class="form-control"></textarea> 
                    </div>
                    <div class="col-md-12 mb-3">
                        <lable for="">Description</lable>
                        <textarea name="description" rows="3" class="form-control"></textarea> 
                    </div>
                    <div class="col-md-6 mb-3">
                        <lable for="">Original Price</lable>
                        <input type="number" class="form-control" name="original_price">
                    </div>
                    <div class="col-md-6 mb-3">
                        <lable for="">Selling Price</lable>
                        <input type="number" class="form-control" name="selling_price">
                    </div>
                    <div class="col-md-6 mb-3">
                        <lable for="">Tax</lable>
                        <input type="number" class="form-control" name="tax">
                    </div>
                    <div class="col-md-6 mb-3">
                        <lable for="">Quantity</lable>
                        <input type="number" class="form-control" name="qty">
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
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection