@extends('shop.layouts.shoplayout')

@section('content')
  <!-- breadcrumb-area start -->
  <div class="breadcrumb-area bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Error 404</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->


<!-- content-wraper start -->
<div class="content-wraper mb--100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="search-error-wrapper">
                    <h1>404</h1>
                    <h2>PAGE NOT BE FOUND</h2>
                    <p class="home-link">Sorry but the page you are looking for does not exist, have been removed, name changed or is temporarity unavailable.</p>
                    <form action="#" class="error-form">
                        <div class="error-form-input">
                            <input type="text" placeholder="Search..." class="error-input-text">
                            <button type="submit" class="error-s-button"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                    <a href="index.html" class="home-bacck-button">Back to home page</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content-wraper end -->
@endsection


