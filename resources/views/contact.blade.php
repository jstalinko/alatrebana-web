@extends('layout.main')

@section('content')<section class="contact_section layout_padding">
    <div class="container ">
      <div class="heading_container">
        <h2 class="">
            {{__('contact_us')}}
        </h2>
      </div>

    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
            @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
            @endif
            @if(session('errors'))
            <div class="alert alert-danger">
                {{session('errors')}}
            
            </div>
            @endif

          <form action="/contact" method="POST">
            @csrf
            <div>
              <input type="text" placeholder="Nama lengkap" name="name" />
            </div>
            <div>
              <input type="email" placeholder="Email" name="email" />
            </div>
            <div>
              <input type="text" placeholder="Phone" name="phone" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Pesan" name="message" />

            </div>
            <div class="d-flex ">
              <button type="submit" >
                {{__('send')}}
              </button>
            </div>
          </form>
        </div>
        <div class="col-md-6">
            <div class="map_container">
                <div class="map-responsive">
                    <iframe src="{{ App\Helper::websetting('gmaps_url') }}" width="600" height="300"
                        frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
                </div>
            </div>
            <div class="info_info">
                <h5>
                    Social Media

                </h5>
                @foreach(\App\Models\SocialMedia::all() as $social)
                
                  @if($social->type == 'facebook')
                   <a href="{{$social->url}}" target="_blank" class="link text-primary"><x-fab-facebook style="width:20"/> Facebook</a>
                  
                  @elseif($social->type == 'instagram')
                    <a href="{{$social->url}}" target="_blank" class="link text-danger"><x-fab-instagram style="width:20"/> Instagram</a>
                  @elseif($social->type == 'twitter')
                    <a href="{{$social->url}}" target="_blank" class="link text-info"><x-fab-twitter style="width:20"/> Twitter</a>
                  @elseif($social->type == 'youtube')
                    <a href="{{$social->url}}" target="_blank" class="link text-danger"><x-fab-youtube style="width:20"/> Youtube</a>
                  @elseif($social->type == 'tiktok')
                    <a href="{{$social->url}}" target="_blank" class="link text-white"><x-fab-tiktok style="width:20"/> Tiktok</a>
                  @endif
                
                
                @endforeach
            </div>
        </div>
      </div>
    </div>
  </section>
@endsection