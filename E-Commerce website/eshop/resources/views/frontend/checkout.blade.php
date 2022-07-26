@extends('layouts.front')

@section('title')
    Checkout
@endsection

@section('content')

<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">
            <a href="{{ url('/') }}">
                Home
            </a>/
            <a href="{{ url('cart') }}">
                Checkout
            </a>
    </div>
</div>
    <div class="container mt-3">
        <form action="{{ url('place-order') }}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <h4><b>Basic Details</b></h4>
                            <hr>
                            <div class="row checkout-form">
                                <div class="col-md-6">
                                    <label for=""><b>First Name</b></label>
                                    <input type="text" class="form-control" name="fname" placeholder="Enter First Name">
                                    @if ($errors->has('fname'))
                                        <span class="text-danger">{{ $errors->first('fname') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for=""><b>Last Name</b></label>
                                    <input type="text" class="form-control" name="lname" placeholder="Enter Last Name">
                                    @if ($errors->has('lname'))
                                        <span class="text-danger">{{ $errors->first('lname') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for=""><b>Email</b></label>
                                    <input type="text" class="form-control" name="email" placeholder="Enter Email">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for=""><b>Phone Number</b></label>
                                    <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number">
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for=""><b>Address 1</b></label>
                                    <input type="text" class="form-control" name="address1" placeholder="Enter Address 1">
                                    @if ($errors->has('address1'))
                                        <span class="text-danger">{{ $errors->first('address1') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for=""><b>Address 2</b></label>
                                    <input type="text" class="form-control" name="address2" placeholder="Enter Address 2">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for=""><b>City</b></label>
                                    <input type="text" class="form-control" name="city" placeholder="Enter City">
                                    @if ($errors->has('city'))
                                        <span class="text-danger">{{ $errors->first('city') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for=""><b>State</b></label>
                                    <input type="text" class="form-control" name="state" placeholder="Enter State">
                                    @if ($errors->has('state'))
                                        <span class="text-danger">{{ $errors->first('state') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for=""><b>Country</b></label>
                                    <input type="text" class="form-control" name="country" placeholder="Enter Country">
                                    @if ($errors->has('country'))
                                        <span class="text-danger">{{ $errors->first('country') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for=""><b>Pin Code</b></label>
                                    <input type="text" class="form-control" name="pincode" placeholder="Enter Pin Code">
                                    @if ($errors->has('pincode'))
                                        <span class="text-danger">{{ $errors->first('pincode') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            @php $total = 0; @endphp
                            <h4><b>Order Details</b></h4>
                            <hr>
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartitems as $item)
                                    <tr>
                                        <td>{{ $item->products->name }}</td>
                                        <td>{{ $item->prod_qty }}</td>
                                        <td>{{ $item->products->selling_price }}</td>

                                    </tr>
                                    @php $total += $item->products->selling_price * $item->prod_qty ; @endphp
                                    @endforeach

                                </tbody>

                            </table>
                            <hr>
                            <h6 class="btn btn-success float-end w-100">Total Price : Rs {{ $total }} </h6><br>

                            <hr>
                            <button type="submit" class="btn btn-primary float-end w-100">Place Order</button>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
