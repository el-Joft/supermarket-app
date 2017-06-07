
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/css/app.css" rel="stylesheet">
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=El+Messiri" rel="stylesheet">
    </head>
    <body>
    <div class="container edit">
    	<div class="row">
       <h1 class="vam">Joventa Supermart</h1>

            </div>

    </div>
     <style>
     body{
      font-family: 'El Messiri', sans-serif;
      font-size: 1.5em;
     }
        .header{
            color:deepblue;
            margin-bottom: 3px;
        }
        a{
            text-decoration:none;
            list-style:none;
        }
        .img{
            width:100%;
        }
        .head{
            color: blue;
        }
        ul{
            margin-top:-50px;
            padding-bottom:50px;
        }
        .edit{
            margin-bottom: 30px;
            padding-bottom: 30px;

        }
        h1{
            color: #337ab7;
            font-family:tahoma;
        }
        .item{
             background-color: #337ab7;

             color:white;
        }
        .vam{
            font-family:verdena;
            font-size:3.6em;
        }


     </style>

<div class="container" style="margin-top:-70px; margin-bottom:70px;">
<nav class="pull-right row">
<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="/product">Home</a></li>
  <li role="presentation"><a href="/product/create">Register Products</a></li>
  <li role="presentation"><a href="/product/search">Search for Products</a></li>
  <li role="presentation"><a href="/product/sales">Sales</a></li>


</ul>

</nav>





</div>

<div>

@yield('content')

@yield('context')

</div>

@if(isset($products))
@foreach($products as $product)
<div class="container">
  <div class="row" style="margin:auto;" >
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      {{-- <img src="/img/1.jpg" alt="image of a cart"> --}}
      <div class="caption">
        <p><strong>Name:</strong> {{ $product->name }}</p>
        <p><strong>Description:</strong> {{ $product->description }}</p>
        <p><strong>Price:</strong> {{ $product->selling_price }}</p>
        <p><strong>Unit of Measurement:</strong> {{ $product->measurement}}</p>

      </div>
    </div>
  </div>
</div>
</div>

@endforeach
@endif











 <script src="{{ asset('js/app.js') }}"></script>

<script type="text/javascript" src="/js/jquery-3.1.1.min.js"></script>


</body>





