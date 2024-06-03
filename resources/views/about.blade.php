@extends('layout.main')

@section('content')
<section class="brand_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          {{__('about_us')}}
        </h2>
      </div>
      <div class="brand_container layout_padding2">
        {!! App\Helper::websetting('about') !!}
    </div>

    </div>
</section>
@endsection