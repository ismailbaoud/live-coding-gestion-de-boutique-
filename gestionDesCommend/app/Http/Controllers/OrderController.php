<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = order::all();

        return view('orders' , [
            'orders'=>$order
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = product::all();
        return view('add_order',[
            'products'=>$products
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_name'=>'required',
            'stock'=>'required',
            'product'=>'required',
        ]);


        $product = product::find($validated['product']);
        $total_price = $validated['stock'] * $product->price;

        
        order::create([
            'customer_name'=> $validated['customer_name'],
            'total_price'=> $total_price
        ]);

        return to_route('orders.index');
    }

    /**
     * Display the specified resource.
     */

    public function show(order $order)
    {
        return view('order_details' , [
            'order'=>$order
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(order $order)
    {
        return view('edit_order', [
            'order'=>$order
        ]);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, order $order)
    {

       // product::find($product->id);
       $order->update([
        'status'=>$request['status']
       ]);

       return to_route('orders.index');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(order $order)
    {
        $order->delete();
        return back();
    }
}
