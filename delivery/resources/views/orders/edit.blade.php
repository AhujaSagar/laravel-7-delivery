@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a order</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('orders.update',$order->id) }}">
        @method('PATCH') 
        @csrf
        
          <div class="form-group">    
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>

          <div class="form-group">
              <label for="brand">Brand:</label>
              <input type="text" class="form-control" name="brand"/>
          </div>

          <div class="form-group">
              <label for="category">Category:</label>
              <input type="text" class="form-control" name="category"/>
          </div>
          <div class="form-group">
              <label for="city">City:</label>
              <input type="text" class="form-control" name="city"/>
          </div>
          <div class="form-group">
              <label for="price">Price:</label>
              <input type="number" class="form-control" name="price"/>
          </div>
          <div class="form-group">
              <label for="weight">Weight:</label>
              <input type="number" class="form-control" name="weight"/>
          </div>
          <div class="form-group">
              <label for="qty">Quantity:</label>
              <input type="number" class="form-control" name="qty"/>
          </div>
          <div class="form-group">
              <label for="info">Description:</label>
              <input type="text" class="form-control" name="info"/>
          </div>                      
          <button type="submit" class="btn btn-primary">Update order</button>
      </form>
  </div>
</div>
@endsection