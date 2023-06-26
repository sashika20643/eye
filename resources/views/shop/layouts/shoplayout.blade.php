<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        @include('shop.components.head')
        <style>
            .loading-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
  background-color: black;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 9999;
}

.loading-progress {
  display: flex;
  align-items: center;
  margin-right: 20px;
}

.progress-bar {
  width: 200px;
  height: 10px;
  background-color: #F50057;
  position: relative;
  margin-right: 10px;
}

.count {
  color: white;
  font-family: 'Roboto', sans-serif;
  font-size: 16px;
  position: absolute;
  top: -20px;
  left: 0;
  width: 100%;
  text-align: center;
}

.loading-text {
  color: #F50057;
  font-family: 'Roboto', sans-serif;
  font-size: 24px;
  font-weight: bold;
}

        </style>

    </head>

<body>

<!-- Main Wrapper Start -->
<div class="main-wrapper">
    <!-- header-area start -->
@include('shop.components.header')
@include('shop.components.pogressbar')

    <!-- Header-area end -->
    @yield('content')

    <!-- Hero Slider start -->
    <!-- Hero Slider end -->

    <!-- Categories List Post area start-->

    <!-- Categories List Post area -->

    <!-- Product Area Start -->

    <!-- Product Area End -->

    <!-- Banner area start -->

    <!-- Banner area end -->

    <!-- Product Area Start -->

    <!-- Product Area End -->

    <!-- Banner area start -->

    <!-- Banner area end -->

    <!-- Client Testimonials Area Start -->

    <!-- Client Testimonials Area End -->

    <!-- Latest Blog Posts Area start -->

    <!-- Latest Blog Posts Area End -->

    <!-- Our Brand Area Start -->

    <!-- Our Brand Area End -->

    <!-- Footer Aare Start -->
@include('shop.components.footer')
    <!-- Footer Aare End -->

    <!-- Modal Algemeen Uitgelicht start -->

    <!-- Modal Algemeen Uitgelicht end -->


</div>
<!-- Main Wrapper End -->

<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="{{asset('assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Plugins JS -->
<script src="{{asset('assets/js/plugins.js')}}"></script>
<!-- Ajax Mail -->
<script src="{{asset('assets/js/ajax-mail.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('assets/js/main.js')}}"></script>


</body>

</html>
