
  
    <!-- info section -->
    <section class="info_section layout_padding2">
      <div class="container">
          <div class="info_logo">
              <h2>
                  {{ App\Helper::websetting('name') }}
              </h2>
          </div>
          <div class="row">

              <div class="col-md-6">
                  <div class="info_contact">
                      <h5>
                          {{ __('find_us') }}
                      </h5>
                      <div>
                          <div class="img-box">
                              <img src="{{url('images/location-white.png')}}" width="18px" alt="">
                          </div>
                          <p>
                              {{ App\Helper::websetting('address') }}
                          </p>
                      </div>
                      <div>
                          <div class="img-box">
                              <img src="{{url('images/telephone-white.png')}}" width="12px" alt="">
                          </div>
                          <p>
                              {{ App\Helper::websetting('phone') }}
                          </p>
                      </div>
                      <div>
                          <div class="img-box">
                              <img src="{{url('images/envelope-white.png')}}" width="18px" alt="">
                          </div>
                          <p>
                              {{ App\Helper::websetting('email') }}
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="info_info">
                      <h5>
                          Social Media

                      </h5>
                      @foreach(\App\Models\SocialMedia::all() as $social)
                      <li>
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
                      
                      </li>
                      @endforeach
                  </div>
              </div>

              <div class="col-md-3">
                  <div class="info_form ">
                      <h5>
                          Newsletter
                      </h5>
                      <form action="">
                          <input type="tel" placeholder="Enter your phone number">
                          <button>
                              Subscribe
                          </button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- end info_section -->


  <!-- footer section -->
  <section class="container-fluid footer_section ">
      <div class="container">
          <p>
              &copy; {{ date('Y') }} All Rights Reserved By
              <a href="https://{{ App\Helper::websetting('domain') }}">
                  {{ App\Helper::websetting('name') }}
              </a>
          </p>
      </div>
  </section>
  <!-- end  footer section -->



  <script type="text/javascript" src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/bootstrap.js')}}"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: [],
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        420: {
          items: 2
        },
        1000: {
          items: 5
        }
      }

    });
  </script>
  <script>
    var nav = $("#navbarSupportedContent");
    var btn = $(".custom_menu-btn");
    btn.click
    btn.click(function (e) {

      e.preventDefault();
      nav.toggleClass("lg_nav-toggle");
      document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
    });
  </script>
  <script>
    $('.carousel').on('slid.bs.carousel', function () {
      $(".indicator-2 li").removeClass("active");
      indicators = $(".carousel-indicators li.active").data("slide-to");
      a = $(".indicator-2").find("[data-slide-to='" + indicators + "']").addClass("active");
      console.log(indicators);

    })
  </script>

</body>
</body>

</html>