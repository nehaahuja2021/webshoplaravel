
@extends('master')
@section('content')

<h2> Welcome to Products Page </h2>

<div class="container">

        @foreach($products as $item)
        <div class="card" style="width: 18rem;">
  <img class="products" src={{$item->gallery}} class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$item->name}}</h5>
    <p class="card-text">{{$item->description}}</p>
    <p class="card-price">{{$item->price}}</p>
    <!---Add to cart --->
    <form action="/addtocart" method="POST">
      @csrf
      <input type="hidden" name="product_id" value="
      {{$item->id}}" />
    <button class="btn btn-primary">Add to Cart</a>
     </form>
  </div>
</div>
@endforeach


@endsection
