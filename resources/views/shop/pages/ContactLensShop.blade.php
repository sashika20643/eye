@extends('shop.layouts.shoplayout')

@section('content')
<div class="content-wraper">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 order-2 order-lg-1">
                <!--sidebar-categores-box start  -->
                <div class="sidebar-categores-box">
                    <div class="sidebar-title">
                        <h2>For men</h2>
                    </div>
                    <!-- category-sub-menu start -->
                    <div class="category-sub-menu">
                        <ul>
                            <li class="has-sub"><a href="# ">Jackets</a>
                                <ul>
                                    <li><a href="#">Florals</a></li>
                                    <li><a href="#">Shirts</a></li>
                                    <li><a href="#">Shorts</a></li>
                                    <li><a href="#">Stripes</a></li>
                                </ul>
                            </li>
                            <li class="has-sub"><a href="#">Jeans</a>
                                <ul>
                                    <li><a href="#">Hoodies</a></li>
                                    <li><a href="#">Sweaters</a></li>
                                    <li><a href="#">Vests</a></li>
                                    <li><a href="#">Wedges</a></li>
                                </ul>
                            </li>
                            <li class="has-sub"><a href="#">Men</a>
                                <ul>
                                    <li><a href="#">Crochet</a></li>
                                    <li><a href="#">Dresses</a></li>
                                    <li><a href="#"> Jeans</a></li>
                                    <li><a href="#">Trousers</a></li>
                                </ul>
                            </li>
                            <li class="has-sub"><a href="#">Women</a>
                                <ul>
                                    <li><a href="#">Casual</a></li>
                                    <li><a href="#">Chinos</a></li>
                                    <li><a href="#">Joggers</a></li>
                                    <li><a href="#">Tailored</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- category-sub-menu end -->
                </div>
                <!--sidebar-categores-box end  -->
                <!--sidebar-categores-box start  -->

                <!--sidebar-categores-box end  -->

                <!-- shop-banner start -->
                <div class="shop-banner">
                    <div class="single-banner">
                        <a href="#"><img src="{{asset("assets/images/banner/advertising-s1.jpg")}}" alt=""></a>
                    </div>
                </div>
                <!-- shop-banner end -->
            </div>
            <div class="col-lg-9 order-1 order-lg-2">
                <!-- shop-top-bar start -->
                <div class="shop-top-bar mt-95">
                    <div class="shop-bar-inner">
                        <div class="product-view-mode">
                            <!-- shop-item-filter-list start -->
                            <ul class="nav shop-item-filter-list" role="tablist">
                                <li class="active"><a class="active" data-bs-toggle="tab" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                <li><a data-bs-toggle="tab"  href="#list-view"><i class="fa fa-th-list"></i></a></li>
                            </ul>
                            <!-- shop-item-filter-list end -->
                        </div>
                        <div class="toolbar-amount">
                            <span>Showing 1 to 9 of 15</span>
                        </div>
                    </div>
                    <!-- product-select-box start -->
                    <div class="product-select-box">
                        <div class="product-short">
                            <p>Sort By:</p>
                            <select class="nice-select">
                                <option value="trending">Relevance</option>
                                <option value="sales">Name (A - Z)</option>
                                <option value="sales">Name (Z - A)</option>
                                <option value="rating">Price (Low &gt; High)</option>
                                <option value="date">Rating (Lowest)</option>
                                <option value="price-asc">Model (A - Z)</option>
                                <option value="price-asc">Model (Z - A)</option>
                            </select>
                        </div>
                    </div>
                    <!-- product-select-box end -->
                </div>
                <!-- shop-top-bar end -->

                <!-- shop-products-wrapper start -->
                <div class="shop-products-wrapper">
                    <div class="tab-content">
                        <div id="grid-view" class="tab-pane active">
                            <div class="shop-product-area">
                                <div class="row">
                                    @foreach ($lenses as $lens )


                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mt-30">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="{{route('shop.singleLenspage',$lens->id)}}"><img src="{{asset('Lense/'.$lens->image)}}" alt=""></a>
                                                <span class="label-product label-new">new</span>
                                                <span class="label-product label-sale">-7%</span>
                                                <div class="quick_view">
                                                    <a href="#" title="quick view" class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="{{route('shop.singleLenspage',$lens->id)}}">{{$lens->title}}</a></h3>
                                                <div class="price-box">
                                                    <span class="new-price">රු {{$lens->discount_price}}</span>
                                                    <span class="old-price">රු {{$lens->price}}</span>
                                                </div>
                                                <div class="product-action">
                                                    <form action="{{route('shop.addcart',$lens->id)}}"  method="POST">
                                                        @csrf
                                                        <input type="number" name="quantity" id=""  value="1" hidden="true">
                                                        <input type="text" name="type" id=""  value="lens" hidden="true">

                                                        <button type="submit" class="add-to-cart" title="Add to cart"  ><i class="fa fa-plus"></i> Add to cart</button>

                                                    </form>
                                                    <div class="star_content">
                                                        <ul class="d-flex">
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star-o" href="#"><i class="fa fa-star-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div id="list-view" class="tab-pane">
                            <div class="row">
                                <div class="col">
                                    <div class="row product-layout-list">
                                        <div class="col-lg-4 col-md-5">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="product-details.html"><img src="assets/images/product/5.jpg" alt=""></a>
                                                    <span class="label-product label-new">new</span>
                                                    <span class="label-product label-sale">-7%</span>
                                                    <div class="quick_view">
                                                        <a href="#" title="quick view" class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->
                                        </div>
                                        <div class="col-lg-8 col-md-7">
                                            <div class="product_desc">
                                                <!-- single-product-wrap start -->
                                                <div class="product-content-list">
                                                    <h3><a href="product-details.html">New Printed Summer</a></h3>
                                                    <div class="star_content">
                                                        <ul class="d-flex">
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star-o" href="#"><i class="fa fa-star-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price">$55.27</span>
                                                        <span class="old-price">$58.49</span>
                                                    </div>
                                                    <button class="add-to-cart" title="Add to cart"><i class="fa fa-plus"></i> Add to cart</button>
                                                    <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-layout-list">
                                        <div class="col-lg-4 col-md-5">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="product-details.html"><img src="assets/images/product/4.jpg" alt=""></a>
                                                    <span class="label-product label-new">new</span>
                                                    <span class="label-product label-sale">-7%</span>
                                                    <div class="quick_view">
                                                        <a href="#" title="quick view" class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->
                                        </div>
                                        <div class="col-lg-8 col-md-7">
                                            <div class="product_desc">
                                                <!-- single-product-wrap start -->
                                                <div class="product-content-list">
                                                    <h3><a href="product-details.html">Summer Printed </a></h3>
                                                    <div class="star_content">
                                                        <ul class="d-flex">
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star-o" href="#"><i class="fa fa-star-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price">$51.27</span>
                                                        <span class="old-price">$54.49</span>
                                                    </div>
                                                    <button class="add-to-cart" title="Add to cart"><i class="fa fa-plus"></i> Add to cart</button>
                                                    <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-layout-list">
                                        <div class="col-lg-4 col-md-5">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="product-details.html"><img src="assets/images/product/8.jpg" alt=""></a>
                                                    <span class="label-product label-new">new</span>
                                                    <span class="label-product label-sale">-7%</span>
                                                    <div class="quick_view">
                                                        <a href="#" title="quick view" class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->
                                        </div>
                                        <div class="col-lg-8 col-md-7">
                                            <div class="product_desc">
                                                <!-- single-product-wrap start -->
                                                <div class="product-content-list">
                                                    <h3><a href="product-details.html">New product Summer</a></h3>
                                                    <div class="star_content">
                                                        <ul class="d-flex">
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star-o" href="#"><i class="fa fa-star-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price">$41.27</span>
                                                        <span class="old-price">$54.49</span>
                                                    </div>
                                                    <button class="add-to-cart" title="Add to cart"><i class="fa fa-plus"></i> Add to cart</button>
                                                    <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-layout-list">
                                        <div class="col-lg-4 col-md-5">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="product-details.html"><img src="assets/images/product/6.jpg" alt=""></a>
                                                    <span class="label-product label-new">new</span>
                                                    <span class="label-product label-sale">-7%</span>
                                                    <div class="quick_view">
                                                        <a href="#" title="quick view" class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->
                                        </div>
                                        <div class="col-lg-8 col-md-7">
                                            <div class="product_desc">
                                                <!-- single-product-wrap start -->
                                                <div class="product-content-list">
                                                    <h3><a href="product-details.html">Printed Summer</a></h3>
                                                    <div class="star_content">
                                                        <ul class="d-flex">
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star-o" href="#"><i class="fa fa-star-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price">$41.27</span>
                                                        <span class="old-price">$54.49</span>
                                                    </div>
                                                    <button class="add-to-cart" title="Add to cart"><i class="fa fa-plus"></i> Add to cart</button>
                                                    <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-layout-list">
                                        <div class="col-lg-4 col-md-5">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="product-details.html"><img src="assets/images/product/2.jpg" alt=""></a>
                                                    <span class="label-product label-new">new</span>
                                                    <span class="label-product label-sale">-7%</span>
                                                    <div class="quick_view">
                                                        <a href="#" title="quick view" class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->
                                        </div>
                                        <div class="col-lg-8 col-md-7">
                                            <div class="product_desc">
                                                <!-- single-product-wrap start -->
                                                <div class="product-content-list">
                                                    <h3><a href="product-details.html">Printed Summer</a></h3>
                                                    <div class="star_content">
                                                        <ul class="d-flex">
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star-o" href="#"><i class="fa fa-star-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price">$31.27</span>
                                                        <span class="old-price">$44.49</span>
                                                    </div>
                                                    <button class="add-to-cart" title="Add to cart"><i class="fa fa-plus"></i> Add to cart</button>
                                                    <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- paginatoin-area start -->
                        <div class="paginatoin-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <p>Showing 1-12 of 13 item(s)</p>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul class="pagination-box">
                                        <li><a href="#" class="Previous"><i class="fa fa-chevron-left"></i> Previous</a>
                                        </li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li>
                                          <a href="#" class="Next"> Next <i class="fa fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- paginatoin-area end -->
                    </div>
                </div>
                <!-- shop-products-wrapper end -->
            </div>
        </div>
    </div>
</div>
@endsection
