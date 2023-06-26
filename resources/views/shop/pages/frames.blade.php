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
                            <li class="has-sub"><a href="# ">By Color</a>
                                <ul>
                                    @foreach ($colors as $color )


                                    <li style="display:flex mb-1"><div class="colord" style="width: 25px;height:25px;background-color:{{$color->color_code}}"></div> <a href="#">{{$color->name}}</a></li>
@endforeach
                                </ul>
                            </li>

                            <li class="has-sub"><a href="# ">By Category</a>
                                <ul>
                                    @foreach ($catagories as $cat )


                                    <li style="display:flex"> <a href="#">{{$cat->name}}</a></li>
@endforeach
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
                                    @foreach ($frames as $frame )


                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mt-30">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-details.html"><img src="{{asset('Frame/'.$frame->image)}}" alt=""></a>
                                                <span class="label-product label-new">new</span>
                                                <span class="label-product label-sale">-7%</span>
                                                <div class="quick_view">
                                                    <a href="#" title="quick view"  class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" onclick="showQuick({{$frame->id}});" ><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="product-details.html">{{$frame->title}}</a></h3>
                                                <div class="price-box">
                                                    <span class="new-price">රු {{$frame->discount_price}}</span>
                                                    <span class="old-price">රු {{$frame->price}}</span>
                                                </div>
                                                <div class="product-action">
                                                    <button class="add-to-cart" title="Add to cart"><i class="fa fa-plus"></i> Add to cart</button>
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
@include('shop.components.quickview')
<script>
function showQuick(id) {
    console.log(id);
    $.ajax({
        type: 'POST',
        url: '{{ route('shop.singleframe') }}',
        data: {
            id: id,
            _token: '{{ csrf_token() }}'
        },
        success: function(data) {
            console.log(data);
            var imagePath="{{asset('Frame/')}}"+'/'+data['image'];
        console.log(imagePath);
            $('#image1').attr('src', imagePath);
            $('#title').text(data['title']);
            $('#description').text(data['description']);
            $('#price').text(data['price']);
            $('#discount_price').text(data['discount_price']);

        },
        error: function(xhr, status, error) {
            console.log(xhr.responseText);
        }
    });
}
</script>
@endsection
