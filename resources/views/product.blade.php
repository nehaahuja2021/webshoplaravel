
@extends('master')
@section('content')

<h2 class="productspage">Fresh Products from our Farm </h2>

<div class="cards">

        @foreach($products as $item)
        <div class="card border-success mb-3" style="max-width: 25rem;">
  <img class="products" src={{$item->gallery}} class="card-img-top" alt="...">
  <div class="card-body text-success">
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


  
<style>
 .productspage
 {
   text-align:center;
   color:green;
 }
.cards {
  display: flex;
  flex-wrap: wrap;
  flex-direction: row;
  justify-content: space-between;
}

.card {
  width: 250px;
  height: 350;
  border-radius: 10px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  background-color: white;
  margin-left: 30px;
  margin-right: 30px;
  margin-top: 30px;
  margin-bottom: 30px;
}
  </style>