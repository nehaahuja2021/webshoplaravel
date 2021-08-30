@extends('master')
@section('content')
<h2 class="commonheader"> Items in your Cart </h2>
<div class="buttons">
<a class="btn btn-primary" href="/ordernow">Order Now </a>
<a class="btn btn-success" href="/product"> Go back to products </a><br><br>

</div>

<div class="cards">

        @foreach($productsdisplay as $item)
        <div class="card border-success mb-3"  style="max-width: 25rem;">
    <img class="products" src={{$item->gallery}} class="card-img-top" alt="...">
  <div class="card-body text-success">
    <h5 class="card-title">{{$item->name}}</h5>
    <p class="card-text">{{$item->description}}</p>
    <p class="card-price">{{$item->price}}</p>
        
<!--<a class href="/deletefromcart/{{$item->cart_id}}">Delete from cart </a>
<br><br>-->
   
<form action="/deletefromcart/{{$item->cart_id}}" >
            
    <button class="btn btn-primary">Delete</a>
     </form>
      </div>
      </div>
           
@endforeach

@endsection

<style>
  .commonheader
 {
   text-align:center;
   color:green;
 }
 .cards {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: center;
  
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


.buttons
{
 
  margin-left:680px;
  
}
products
{
   height: 200px;
}
   </style>