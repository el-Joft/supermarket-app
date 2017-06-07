@extends('superuser.dashboard')

@section('content')


  <div class="container">
    <h1 style="margin: auto; text-align:center; padding-bottom:20px;">Add Product</h1>


</div>






<div style="width: 50%; margin: auto;">





<form method="post" action="/product/store">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="name">Product Name: </label>
    <input type="text" class="form-control" id="productName" name="name" placeholder="name" required>
  </div>


  <div class="form-group">
    <label for="Unit">Unit of Measurement: </label>
    <input type="text" class="form-control" id="unit_of_measurement" name="measurement" placeholder="unit of measurement" required>
  </div>


  <div class="form-group">
    <label for="Default cost price">Default Cost Price: </label>
    <input type="text" class="form-control" id="cost_price" name="cost_price" placeholder="default cost price" required>
  </div>


  <div class="form-group">
    <label for="Percent Makup">Percent Markup: </label>
    <input type="text" class="form-control" id="percent" name="percent_markup" placeholder="Percentage markup">
  </div>


  <div class="form-group">
    <label for="Default selling price">Default Selling Price: </label>
    <input type="text"  class="form-control" id="selling_price" name="selling_price" placeholder=" default selling price" required>
  </div>



  <div class="form-group">
    <label for="Re-order Level">Re-order Level: </label>
    <input type="text" class="form-control" id="Re_order" name="re_order" placeholder="Re-order Level" required>
  </div>


  <div class="form-group">
    <label for="Manufacturer barcode">Manufacturer Barcode: </label>
    <input type="text" class="form-control" id="barcode" name="barcode" placeholder="Manufacturer Barcode" required>
  </div>


  <div class="form-group">
    <label for="Description">Description: </label>
    <input type="text" class="form-control" id="description" name="description" placeholder="description" required>
    <p class="help-block">A brief description of the product</p>
  </div>


  <button type="submit" style="background-color:#3a3a3; margin: 10px 0;" class="btn btn-default">Submit</button>
</form>
























@if(count($errors))
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)

    <li>{{ $error }}</li>

    @endforeach
  </ul>
@endif




</div>




</div>



<script type="text/javascript" src="/js/jquery-3.1.1.min.js"></script>


<script src="/js/main.js"></script>






@endsection

