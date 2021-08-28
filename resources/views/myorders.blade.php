<h2> Ordered List </h2>

<div class="container">

        @foreach($orders as $item)
        <div class="card" style="width: 18rem;">
    <img class="products" src={{$item->gallery}} class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$item->name}}</h5>
    <p class="card-text">{{$item->description}}</p>
    <p class="card-price">{{$item->price}}</p>
       
             
      </div>
      <div class="col-sm-4">
         <div class ="">
         <h5>Payment Method:{{$item->payment_method}} </h5>
         <h5>Payment Status:{{$item->payment_status}} </h5>      
</div>

</div>

</div>

</div>
</div>
@endforeach
</div>
<style>
.products
{
   height: 200px;
}
   </style>