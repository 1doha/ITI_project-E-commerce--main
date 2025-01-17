<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
    .custom-login{
        height: 500px;
        padding-top:100px;
    }
    img.slider-img{
        height:400px !important
        
       

    }
    .custom-product{
        height:600px;
      
    }
    .slider-text{
       font-family: cursive;
        color:black;

        
    }
    .trending-image{
        height: 200px;
    }
    .trending-item{
        float:left;
        width: 15%;
        margin:10px;
    }
    .trending-wrapper{
        margin: 20px;
    }
    .trending-products{
        text-align:center;
        margin:2%;
        font-family: ui-rounded;
        color:#c91a1a;
        font-size: 32px;
        
    }
    .name{
        font-family: emoji;
        color:black;
        

    }
    .detail-img{
        height: 300px;
    }
    .search-box{
        width:600px !important
    }
    .cart-list-devider{
        border-bottom:1px solid #ccc;
        margin-bottom :20px;
        padding-bottom:20px;
    }
    .R{
        margin:2%;
        color:#c91a1a;
        
    }
    .search{
       
        color:black;
        font-family: cursive;
    }
    body{
        font-family: cursive;
        color:black;
    }
    .orders{
        margin:2%;
        color:#c91a1a;
    }
    .R2{
        margin:2%;
        color:#c91a1a;
    }
</style>
</html>

