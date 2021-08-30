@extends('master')
@section('content')

<h2 class="commonheader">Your Orders {{Session::get('user')['name']}}</h2>


<div class="container5">
<div class="cards">
        @foreach($orders as $item)
        <div class="card border-success mb-3" style="max-width: 30rem;">
    <img class="products5" src={{$item->gallery}} class="card-img-top" alt="...">
  <div class="card-body text-success">
    <h5 class="card-title">{{$item->name}}</h5>
    <p class="card-text">{{$item->description}}</p>
    <p class="card-price">{{$item->price}}</p>
    <p>Payment Method:{{$item->payment_method}} </p>
         <p>Payment Status:{{$item->payment_status}} </p>                 
      </div>
     

</div>

</div>
<hr class="new5">
</div>

@endforeach
@endsection
<style>
   .commonheader
 {
   text-align:center;
   color:green;
 }

 .container5 {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content:flex-start;
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
.products5
{
   height: 180px;
   width: 250px;
}
hr.new5 {
  border: .5px solid green;
  border-radius: .5px;
}
   </style>