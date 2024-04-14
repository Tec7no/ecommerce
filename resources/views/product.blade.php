@extends('mastar')
@section("content")
<div class="container custom-product">
  <!-- Carousel -->
  <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      @for ($i = 0; $i < count($products); $i++)
        <button type="button" data-bs-target="#demo" data-bs-slide-to="{{ $i }}" class="{{ $i === 0 ? 'active' : '' }}"></button>
      @endfor
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      @foreach ($products as $item)
        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
          <a href="detail/{{$item['id']}}">
          <img class="slider-img" src="{{ $item['gallery'] }}" alt="{{ $item['alt'] }}" class="d-block w-100">
          <div class="carousel-caption d-none d-md-block">
            <h5>{{ $item['name'] }}</h5>
          </div>
          </a>
        </div>
      @endforeach
    </div>

    <!-- Left and right controls/icons -->
    
    <div>
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
    <div class="trending-wrapper">
  <h3 style="text-align:center; margin-bottom:50px;">Trending Products</h3>
  <div class="trending-items-container">
    @foreach ($products as $item)
      <div class="trending-item">
      <a href="detail/{{$item['id']}}">
        <img class="trending-image" src="{{ $item['gallery'] }}" alt="{{ $item['alt'] }}">
        <div class="trending-caption">
          <h5>{{ $item['name'] }}</h5>
        </div>
      </a>
      </div>
    @endforeach 
  </div>
</div>

    </div>
  </div>
</div>

@endsection("footer")