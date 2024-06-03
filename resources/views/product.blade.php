@extends('layout.main')

@section('content')
<section class="brand_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          {{$product->name}}
        </h2>
      </div>
      <div class="brand_container layout_padding2">
       <div class="row">
        <div class="col-md-4">
            <img src="{{$product->image}}" alt="{{$product->name}}" class="img img-responsive img-fluid img-thumbnail">  
        </div>
        <div class="col-md-8">
            <h3>
                {{$product->name}}
            </h3>
            <span class="badge badge-info">
                <x-heroicon-m-tag  style="width:20"/> {{$product->category->name}}<br>
            </span>
            <span class="badge badge-primary">
                <x-heroicon-m-eye style="width:20" /> {{$product->views}} {{__('watched')}}<br>
            </span>
            
            <br>
            <br>
            <h4 class="btn btn-success">
                <x-heroicon-m-currency-dollar style="width:20"/> @if($product->price == 0)  Hubungi Kami @else {{App\Helper::harga($product->price)}} @endif
            </h4>
            <p>
                {{$product->description}}
            </p>

            <br><br>
            <a href="{{\App\Helper::orderWaButton(url()->current())}}" class="btn btn-block btn-success"><x-heroicon-m-phone style="width:20"/>
            {{__('order_now')}}
            </a>
        </div>
       </div>
    </div>
       <br><br>

       <div class="heading_container">
        <h2>
          {{__('similar_products')}}
        </h2>
      </div>
      <br>
      <div class="brand_container layout_padding2">
        @foreach($products as $pro)
        <div class="box">
          <a href="">
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

    </div>
</section>
@endsection