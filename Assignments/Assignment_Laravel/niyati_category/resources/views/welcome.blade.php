@extends('layouts.app')
 
@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Category - Product app</h2>
            </div>

            <div class="pull-right" style="float:right"> 
                <select name="category_id" id="category_id">
                    <option value="">--Select--</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->cname }}">{{ $category->cname }}</option>
                    @endforeach
                </select>
            </div><br>
        </div>
    </div>
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Category</th>
            <th>Image</th>
            <th>Created By User ID</th>
            
            <th width="280px">Action</th>
        </tr>
        <tbody id="tbody">
       @foreach($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category_id }}</td>
            <td><img src=" {{ asset('images/' . $product->image)}}" width="100"></td>
            <td>{{ $product->user_id}}</td>
            <td>{{ $product->active }}</td>
            
            
        </tr>
        @endforeach
        </tbody>
    </table>     
    <script>
        $(document).ready(function(){  
            // alert ('hello');         
            $("#category_id").change(function(){
                var category = $(this).val();          
                $.ajax({
                    url:"{{ url('filterProduct')}}",
                    type:"GET",
                    data:{'category':category},
                    success:function(data){
                        // alert(data);
                        console.log(data);
                        
                        var products = data;    
                        var html = '';
                        if(products.length > 0){
                            for(let i=0; i<products.length; i++){

                                html +='<tr>\
                                        <td>'+products[i]['id']+'</td>\
                                        <td>'+products[i]['name']+'</td>\
                                        <td>'+products[i]['category_id']+'</td>\
                                        <td> <img src="images/'+products[i]['image']+'" width="100"></td>\
					                    <td>'+products[i]['user_id']+'</td>\
                                        <td>'+products[i]['active']+'</td>\                        </tr>';
                            }
                        }
                        else{
                            html +='<tr>\
                                    <td>No Product found </td>\
                                    </tr>';
                        }
                        $("#tbody").html(html);
                    }
                });
            });
        });

    </script>   
    

@endsection