@extends('superuser.dashboard')


@section('content')


<div class="container">
<h1> {{ $product->name }}</h1>
<table class="table" style="width:100%">
<thead>
  <tr>
    <th>Product Name: </th>
    <th>Selling Price: </th>
    <th>Stock: </th>
    <th>Description: </th>
    <th>Barcode: </th>
    <th>Re-order Level: </th>
  </tr>
  </thead>


<tbody>
<tr>
<td>{{ $product->name }}</td>
<td>{{ $product->selling_price }}</td>
<td>{{ $product->stock }}</td>
<td>{{ $product->description }}</td>
<td>{{ $product->barcode }}</td>
<td>{{ $product->re_order }}</td>

</tr>

</tbody>

<br>

<form method="post" action="/product/{{ $product->id }}/create_stock">
{{ csrf_field() }}
<input type="text" class="form-control"  id="stock" name="stock" placeholder="enter the stock" required>
<button class="btn btn-primary" style="margin:10px 0"; type="submit" >Add stock</button>

</form>
</div>











<br>
<div class="container" style="margin:10px 0;">
<div class="row">

<a href="/product/delete/{{ $product->id }}"><button class="btn btn-primary">Delete Product</button></a>
<a href="/product/{{ $product->id }}/edit"><button class="btn btn-primary">Edit</button></a>
<hr>

</div>
</div>


@endsection
