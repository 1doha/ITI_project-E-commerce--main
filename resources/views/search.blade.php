@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
       
    </div>
    <div class="col-sm-4">
    <div class="trending-wrapper">
    <h2 class="R">Result for Products:</h2>
    @foreach($products as $key=>$item)
    <div class="searched-item">
    <a href="detail/{{$item['id']}}">
        <img class="trending-image"src="{{$item['gallery']}}" alt="Chania">
        <div class="search" >
          <h2>{{$item['name']}}</h2>
          <h5>{{$item['description']}}</h5>
        </div>
    </div>
    </a>
        @endforeach
  </div>
    </div>
 
</div>
@endsection

