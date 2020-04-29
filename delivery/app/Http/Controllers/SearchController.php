<?php

namespace App\Http\Controllers;

use Request;
use App\Order;

class SearchController extends Controller
{
    public function search(Request $request){
        $q = Request::get('q');
        $order = Order::where('id','LIKE','%'.$q.'%')->get();
        if(count($order) > 0)
        return view('orders.index')->withDetails($order)->withQuery ( $q );
        else return view ('orders.index')->withMessage('No Details found. Try to search again !');
    }
    public function filter(Request $request){
        $q = Request::get('sel');
        $order = Order::where('category','LIKE','%'.$q.'%')->get();
        if(count($order) > 0)
        return view('orders.index')->withDetails($order)->withQuery ( $q );
        else return view ('orders.index')->withMessage('No Details found. Try to search again !');
    }
}
