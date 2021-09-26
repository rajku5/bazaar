@extends('base')
@section('content')
    <div class="container">
       @foreach ($products as $pro)
           <div class="col-3">
               <div class="card">
                   <img src="{{asset('product_image/'.$pro->image)}}" alt="{{$pro->image}}" class="card-img-top">
                   <div class="card-body">
                       <h2 class="card-title">{{$pro->title}}</h2>
                       <h5><del>{{$pro->discount_price}}</del><span> {{$pro->price}}</span></h5>
                       <div class="d-flex">
                            <button type="button" class="btn btn-success">+</button>
                            <span class="counter btn disabled rounded-0">0</span>
                            <button type="button" class="btn btn-danger">-</button>
                       </div>
                   </div>
               </div>
           </div>
       @endforeach
    </div>
@endsection