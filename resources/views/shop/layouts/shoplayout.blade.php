<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        @include('shop.components.head')

    </head>

<body>

<!-- Main Wrapper Start -->
<div class="main-wrapper">
    <!-- header-area start -->
@include('shop.components.header')
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
