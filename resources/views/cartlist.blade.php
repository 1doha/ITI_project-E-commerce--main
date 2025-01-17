@extends('master')
@section("content")
<div class="custom-product">
    
    <div class="col-sm-10">
    <div class="trending-wrapper">
    <h2 class="R2">Cart Items:</h2>
    @foreach($products as $key=>$item)
    <div class="row searched-item cart-list-devider" >
    <div class="col-sm-3">
    <a href="detail/{{$item->id}}">
        <img class="trending-image"src="{{$item->gallery}}" alt="Chania">
        
        </a>
    </div>
    <div class="col-sm-4">
    
        
        <div class="" >
          <h3>{{$item->name}}</h3>
          <h6>{{$item->description}}</h6>
        </div>
       
    </div>
    <div class="col-sm-3">
    <a href="/removecart/{{$item->cart_id}}"class="btn btn-warning">Remove</a>
    </div>
    </div>
        @endforeach
  </div>
  <a class="btn btn-success" href="ordernow">Order Now</a><br> <br>
    </div>
 
</div>
@endsection

