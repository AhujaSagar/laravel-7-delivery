<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style type="text/css" media="all">
  
            .container {
                margin-top: 10px;
            }
            .nav-link{
                color: white;
            }
            table {
                border-collapse: collapse;
            }
            table,th,td{
                padding: 5px;
                border: 1px solid black;
            }
  </style>
<div class="row">
    <div class="col-sm-6">
      <h1 class="display-3">Order {{$order->id}}</h1> 
    </div>

   
<div class="col-sm-12"> 

  <table class="table table-striped">
    <thead>
        <tr>
          <th>Name</th>
          <th>Brand</th>
          <th>Category</th>
          <th>City</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Weight</th>
          <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$order->name}}</td>
            <td>{{$order->brand}}</td>
            <td>{{$order->category}}</td>
            <td>{{$order->city}}</td>
            <td>{{$order->price}}</td>
            <td>{{$order->qty}}</td>
            <td>{{$order->weight}}</td>
            <td>{{$order->info}}</td>
        </tr>
    </tbody>
  </table>
</div>

<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
