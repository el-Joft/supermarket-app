
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
        .search_region{
            margin:20px 0px;
            padding-top:150px;
        }
        .make_sales{
            padding:50px 0px;
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



<div class="container search_region">
<p>Please input the Product Name or barcode</p>
<form class="navbar-form navbar-left" action="/product/sales/search" method="post" role="search" required>

  {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Search:</label>
            <input type="text" class="form-control" placeholder="Search" name="search_text" id="search_text">
        </div>



        <button type="submit" class="btn btn-default">Submit</button>
</form>

<br>
<div class="make_sales">
<h1>Make Sales</h1>

<table class="table">
    <thead>
        <tr>
            <th>Product Name: </th>
            <th>Selling Price: </th>
            <th>Description: </th>
            <th>Quantity: </th>
            <th>Total: </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="product_name"></td>
            <td class="sell_price"></td>
            <td class="desc"></td>
            <td><div class="input-group">
  <input type="text" class="form-control qty" placeholder="Specify Quantity" aria-describedby="basic-addon2">
</div></td>
        <td class="total"></td>
        </tr>

    </tbody>

</div>
</div>
<div class="container">
    <div class="row">
@if(isset($products))
@foreach($products as $product)

<a class="product"><p>{{ $product->name }}</p></a>
<input id="input1" type="hidden" name="input" value="{{ $product->name }}">
<input id="input2" type="hidden" name="input" value="{{ $product->selling_price }}">
<input id="input3" type="hidden" name="input" value="{{ $product->description }}">

<span>{{ $product->selling_price }}</span>


@endforeach

@endif
</div>
</div>


         </table>
        </div>
    </div>
</body>
</html>



 <script src="{{ asset('js/app.js') }}"></script>

<script type="text/javascript" src="/js/jquery-3.1.1.min.js"></script>

<script>
   $(document).ready(function(){
    var prod_name = $('#input1').val();
    var prod_price = $('#input2').val();
    var prod_desc = $('#input3').val();
        
    $(".product").click(function(e){
        e.preventDefault();

        

        $('.product_name').text(prod_name);
        $('.sell_price').text(prod_price);
        $('.desc').text(prod_desc);


    });

    $('.qty').keyup(function(){
        var calc = $('.qty').val();
        var total_cal = prod_price * calc;

        $('.total').text(total_cal);



    });
    



   });


</script>