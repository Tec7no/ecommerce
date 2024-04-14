@extends('mastar')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="image-scale" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h4>Category : {{$product['category']}}</h4>
            <h2>{{$product['name']}}</h2>
            <h3>Details : {{$product['description']}}</h3>
            <br>
            <h4>Price : {{$product['price']}}$  </h4>
            <br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
            <input type="hidden" name="product_id" value="{{ $product['id'] }}">
            <button class="btn btn-primary"> Add to Cart</button>
            </form>
            <br><br>
            <button class="btn btn-success"> Buy Now</button>
        </div>
    </div>
</div>
@endsection("footer")