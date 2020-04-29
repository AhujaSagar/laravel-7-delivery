<?php

use Illuminate\Support\Facades\Route;
use App\Order;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('orders', 'OrderController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::any('/search',function(){
    $q = Request::get ( 'q' );
    $order = Order::where('name','LIKE','%'.$q.'%')->get();
    if(count($order) > 0)
        return view('orders.index')->withDetails($order)->withQuery ( $q );
    else return view ('orders.index')->withMessage('No Details found. Try to search again !');
});

// Route::get('generate-pdf','PDFController@generatePDF');
