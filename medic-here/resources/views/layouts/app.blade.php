<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- Fonts --}}
        <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,400,500|Rajdhani:600&display=swap" rel="stylesheet">

        {{-- Styles --}}
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/navbar/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/footer/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
        @yield('custom-styles')

        {{-- fonts --}}
        <link rel="stylesheet" href="{{asset('css/font-awesome/all.min.css')}}">

        <title>{{config('app.name', 'Medic Here')}}</title>

        <link rel="shortcut icon" href="{{asset('imgs/Logo.png')}}" type="image/x-icon">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="/">
                <img src="{{asset('imgs/Logo.png')}}" width="30" height="30" class="d-inline-block align-top" alt="Logo">
                Medic here
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/posts">Health Blog</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Log In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
              </ul>
            </div>
          </nav>
        @yield('content')
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                Our office address:<br>
                                16 Main street,<br>
                                Australia.
                            </div>
                            <div class="col-md-8">
                                <div id="map"></div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="text-right col-md-6">
                        <ul>
                            <li class="facebook">
                                <a href="#">
                                    <div class="icon-container">
                                        <i class="fab fa-facebook-f"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="youtube">
                                <a href="#">
                                    <div class="icon-container">
                                        <i class="fab fa-youtube"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="instagram">
                                <a href="#">
                                    <div class="icon-container">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="twitter">
                                <a href="#">
                                    <div class="icon-container">
                                        <i class="fab fa-twitter"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container text-center mt-5">Crafted with <span style="color:red"><i class="fas fa-heart"></i> </span>by Debarun Mukherjee</div>
        </footer>
        <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    
    {{-- maps script --}}
    <script>
        // Initialize and add the map
        function initMap() {
          // The location of Uluru
          var uluru = {lat: -25.344, lng: 131.036};
          // The map, centered at Uluru
          var map = new google.maps.Map(
              document.getElementById('map'), {zoom: 4, center: uluru});
          // The marker, positioned at Uluru
          var marker = new google.maps.Marker({position: uluru, map: map});
        }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwj__zGoFf0IolXfgieU4X-j_dVu_fx4E&callback=initMap">
    </script>
    
    @yield('page-scripts')
    </body>
</html>
