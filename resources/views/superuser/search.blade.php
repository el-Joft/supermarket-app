@extends('superuser.dashboard')


@section('content')
<div class="container">
<h1>Search</h1>
<p>..You can only search for the product name, barcode and selling price...!</p>
</div>





<div class="container">
<div class="row">
<form class="navbar-form navbar-left" action="/product/search" method="post" role="search">

  {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Search:</label>
            <input type="text" class="form-control" placeholder="Search" name="name">
        </div>



        <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
<hr>
<style>

</style>
<div class="container">

    <div class="row">
    @if(isset($products))
        @foreach($products as $product)
<div class="table-responsive">
            <table class="table" style="width:100%">
  <thead>
  <tr>
    <th>Product Name: </th>
    <th>Barcode: </th>
    <th>Selling Price: </th>
    <th>Stock Qty: </th>
  </tr>
  </thead>

  <tbody>
  <tr>
    <a href="/product/create"><td>{{$product->name}}</td></a>
    <td> {{$product->barcode}}</td>
    <td> {{$product->selling_price}}</td>
    <td> {{$product->stock}} </td>
    <a href="/product/search/{{$product->id}}"><button class="btn btn-primary btn-sm">View product</button></a>
  </tr>

</tbody>
</table>
</div>










    @endforeach
    @endif

    </div>


</div>

</div>


@endsection