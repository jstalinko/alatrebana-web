@extends('layout.main')

@section('content')
<section class="brand_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          {{__('all_products')}}
        </h2>
      </div>
      <div class="brand_container layout_padding2">

        @foreach($products as $pro)
        <div class="box">
          <a href="/product/{{$pro->slug}}">
            <div class="new">
              <h5>
                {{$pro->category->name}}
              </h5>
            </div>
            <div class="img-box">
              <img src="{{$pro->image}}" alt="">
            </div>
            <div class="detail-box">
              <h6 class="price">
                {{App\Helper::harga($pro->price)}}
              </h6>
            <h6>
                {{$pro->name}}
              </h6>
            </div>
          </a>
        </div>
        @endforeach
    
      </div>
      {{-- <a href="" class="brand-btn">
        See More
      </a> --}}
    </div>
  </section>

@endsection
