@extends('layout.main')

@section('content')
<section class="brand_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          {{__('all_products')}}
        </h2>
      </div>
      <div class="container container-fluid">
        <a href="?"> <span class="badge  @if(request()->get('category') == '') badge-success @else badge-info @endif p-2 m-1"><x-heroicon-s-tag style="width:20"/> {{__('all')}} </span> </a>
        @foreach($categories as $cat)
        <a href="{{url('/products?category='.$cat->id)}}">  <span class="badge @if(request()->get('category') == $cat->id) badge-success @else  badge-info @endif p-2 m-1"><x-heroicon-s-tag style="width:20"/> {{$cat->name}} </span> </a>&nbsp;
        @endforeach
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
              <img src="{{App\Helper::imageUrl($pro->image)}}" alt="">
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
