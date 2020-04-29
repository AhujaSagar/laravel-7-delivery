<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use PDF;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::paginate(6);

        return view('orders.index', compact('order'));
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'category' =>'required',
        'name' =>'required',
        'price' =>'required',
        'weight' =>'required',
        'city' =>'required',  
        'qty'   =>'required',
        ]);

        $order = new Order([
            'category' => $request->get('category'),
            'name' => $request->get('name'),
            'price' => $request->get('price'),
            'weight' => $request->get('weight'),
            'city' => $request->get('city'),
            'qty' => $request->get('qty'),
            'brand' => $request->get('brand'),
            'info' => $request->get('info'),
        ]);
        $order->save();
        return redirect('/orders')->with('success', 'order saved!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $order = Order::find($id);
        $pdf = PDF::loadView('orders.show', compact('order'));

        return $pdf->download('order.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);
        return view('orders.edit', compact('order'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $order = Order::find($id);
            if($request->category!=""){
            $order->category = $request->get('category');
            }
            if($request->name!=""){
            $order->name = $request->get('name');
            }
            if($request->price!=""){
            $order->price = $request->get('price');
            }
            if($request->weight!=""){
            $order->weight = $request->get('weight');
            }
            if($request->city!=""){
            $order->city = $request->get('city');
            }
            if($request->qty!=""){
            $order->qty = $request->get('qty');
            }
            if($request->brand!=""){
            $order->brand = $request->get('brand');
            }
            if($request->info!=""){
            $order->info = $request->get('info');
            }
            $order->save();

        return redirect('/orders')->with('success', 'Order updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect('/orders')->with('success', 'Order deleted!');
    }
}
