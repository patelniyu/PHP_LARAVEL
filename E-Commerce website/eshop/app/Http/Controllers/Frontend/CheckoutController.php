<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;

class CheckoutController extends Controller
{
    public function index()
    {
        $old_cartitems = Cart::where('user_id',Auth::id())->get();
        foreach($old_cartitems as $item)
        {
            if(!Product::where('id', $item->prod_id)->where('qty','>=', $item->prod_qty)->exists())
            {
                $removeItem = Cart::where('user_id',Auth::id())->where('prod_id', $item->prod_id)->first();
                $removeItem->delete();
            }
            $cartitems = Cart::where('user_id',Auth::id())->get();
        }
        return view('frontend.checkout',compact('cartitems'));
    }

    public function placeorder(Request $request)
    {
        $order = new Order();
        $order->user_id = Auth::id();
        $order->fname = $request->input('fname');
        $order->lname = $request->input('lname');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->address1 = $request->input('address1');
        $order->address2 = $request->input('address2');
        $order->city = $request->input('city');
        $order->state = $request->input('state');
        $order->country = $request->input('country');
        $order->pincode = $request->input('pincode');

        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address1' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'pincode' => 'required',

        ],[
                'fname.required' => 'Fname is required!!',
                'lname.required' => 'Lname is required!!',
                'email.required' => 'Email is required!!',
                'phone.required' => 'Phone is required!!',
                'address1.required' => 'Address1 is required!!',
                'city.required' => 'City is required!!',
                'state.required' => 'State is required!!',
                'country.required' => 'Country is required!!',
                'pincode.required' => 'Pincode is required!!',
        ]);

        $total = 0;
        $cartitems_total = Cart::where('user_id', Auth::id())->get();
        foreach($cartitems_total as $prod)
        {
            $total += $prod->products->selling_price;
        }

        $order->total_price = $total;

        $order->tracking_no = 'hello'.rand(1111,9999);
        $order->save();

        $order->id;

        $cartitems = Cart::where('user_id',Auth::id())->get();

        foreach($cartitems as $item)
        {
            OrderItem::create([
                'order_id' => $order->id,
                'prod_id' => $item->prod_id,
                'qty' => $item->prod_qty,
                'price' => $item->products->selling_price,
            ]);

            $prod = Product::where('id',$item->prod_id)->first();
            $prod->qty = $prod->qty - $item->prod_qty;
            $prod->update();
        }

        if(Auth::user()->address1  == NULL)
        {
            $users = User::where('id', Auth::id())->first();
            //$users->name = $request->input('name');
            $users->lname = $request->input('lname');
            $users->phone = $request->input('phone');
            $users->address1 = $request->input('address1');
            $users->address2 = $request->input('address2');
            $users->city = $request->input('city');
            $users->state = $request->input('state');
            $users->country = $request->input('country');
            $users->pincode = $request->input('pincode');
            $users->update();
        }
        $cartitems = Cart::where('user_id',Auth::id())->get();
        Cart::destroy($cartitems);
        return redirect('/')->with('status',"Order Placed Successfully");
    }
}
