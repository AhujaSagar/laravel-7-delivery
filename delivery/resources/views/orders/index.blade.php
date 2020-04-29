@extends('base')

@section('main') 
<div class="row">
    <div class="col-sm-6">
      <h1 class="display-3">Orders</h1> 
    </div>

    <div class="col-sm-2">
      <a href="{{ route('orders.create')}}" class="btn btn-primary">Add order</a>
   </div>  

   <div class="col-sm-4">
    <form action="/search" method="POST" role="search">
      {{ csrf_field() }}
      <div class="input-group">
      <input type="text" class="form-control" name="q"
            placeholder="Search order"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
      </div>
    </form>
  </div>
</div>

<div class="col-sm-12"> 

  <table class="table table-striped">
    <thead>
        <tr>
          <th>Option</th>
          <th>Name</th>
          <th>Brand</th>
          <th>Category</th>
          <th>City</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Weight</th>
          <th colspan = 3>Actions</th>
        </tr>
    </thead>
    <tbody>
    @if(isset($details))
    @foreach($details as $o)
        <tr>
            <td>{{$o->id}}</td>
            <td>{{$o->name}}</td>
            <td>{{$o->brand}}</td>
            <td>{{$o->category}}</td>
            <td>{{$o->city}}</td>
            <td>{{$o->price}}</td>
            <td>{{$o->qty}}</td>
            <td>{{$o->weight}}</td>

            <td>
                <a href="{{ route('orders.edit',$o->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('orders.destroy', $o->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
            <td>
                <a href="{{ route('orders.show',$o->id)}}" class="btn btn-primary">View Pdf</a>
            </td>
        </tr>
    @endforeach
    @else
        @foreach($order as $o)
        <tr>
            <td>{{$o->id}}</td>
            <td>{{$o->name}}</td>
            <td>{{$o->brand}}</td>
            <td>{{$o->category}}</td>
            <td>{{$o->city}}</td>
            <td>{{$o->price}}</td>
            <td>{{$o->qty}}</td>
            <td>{{$o->weight}}</td>

            <td>
                <a href="{{ route('orders.edit',$o->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('orders.destroy', $o->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
            <td>
                <a href="{{ route('orders.show',$o->id)}}" class="btn btn-primary">Pdf</a>
            </td>
        </tr>
        @endforeach
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
{!! $order ?? ''->links() !!}
@endif
@endsection
