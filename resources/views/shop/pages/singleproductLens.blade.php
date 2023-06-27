    <!-- content-wraper start -->

    @extends('shop.layouts.shoplayout')

@section('content')
    <div class="content-wraper">
        <div class="container">
            <div class="row single-product-area">

                <div class="col-lg-5 col-md-6" >
                   <!-- Product Details Left -->
                    <div class="product-details-left">
                        <div class="product-details-images slider-lg-image-1">
                            <div class="lg-image">
                                <a href="{{asset('Lense/'.$product->image)}}" class="img-poppu"><img src="{{asset('Lense/'.$product->image)}}" alt="product image"></a>
                            </div>
                            <div class="lg-image">
                                <a href="{{asset('lense/'.$product->image1)}}" class="img-poppu"><img src="{{asset('lense/'.$product->image1)}}" alt="product image"></a>
                            </div>
                            <div class="lg-image">
                                <a href="{{asset('lense/'.$product->image2)}}" class="img-poppu"><img src="{{asset('lense/'.$product->image2)}}" alt="product image"></a>
                            </div>
                            <div class="lg-image">
                                <a href="{{asset('lense/'.$product->image3)}}" class="img-poppu"><img src="{{asset('lense/'.$product->image3)}}" alt="product image"></a>
                            </div>
                        </div>
                        <div class="product-details-thumbs slider-thumbs-1">
                            <div class="sm-image"><img src="{{asset('Lense/'.$product->image)}}" alt="product image thumb"></div>
                            <div class="sm-image"><img src="{{asset('lense/'.$product->image1)}}" alt="product image thumb"></div>
                            <div class="sm-image"><img src="{{asset('lense/'.$product->image2)}}" alt="product image thumb"></div>
                            <div class="sm-image"><img src="{{asset('lense/'.$product->image3)}}" alt="product image thumb"></div>
                        </div>
                    </div>
                    <!--// Product Details Left -->
                </div>

                <div class="col-lg-7 col-md-6">
                    <div class="product-details-view-content">
                        <div class="product-info">
                            <h2>{{$product->title}}</h2>
                            <div class="price-box">
                                <span class="old-price">RS {{$product->price}}</span>
                                <span class="new-price">RS {{$product->discount_price}}</span>
                                <span class="discount discount-percentage">Save {{($product->price-$product->discount_price)*100/$product->price}}%</span>
                            </div>
                            <p>{{$product->description}}</p>
                            {{--  --}}
                            </div>
                            <div class="single-add-to-cart">
                                <form action="#" class="cart-quantity">
                                    <div class="quantity">
                                        <label>Quantity</label>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" value="1" type="text">
                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                        </div>
                                    </div>
                                    <button class="add-to-cart" type="submit">Add to cart</button>
                                </form>
                            </div>
                            <div class="product-availability">
                              <i class="fa fa-check"></i>
                              @if($product->quantity>0)
                              In stock
                              @else
                              <span style="color: orange">Out of stock</span>
                              @endif
                            </div>
                            <div class="product-social-sharing">
                                <label>Share</label>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="block-reassurance">
                                <ul>
                                    <li>
                                        <div class="reassurance-item">
                                            <div class="reassurance-icon">
                                                <i class="fa fa-check-square-o"></i>
                                            </div>
                                            <p>Security policy (edit with Customer reassurance module)</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="reassurance-item">
                                            <div class="reassurance-icon">
                                                <i class="fa fa-truck"></i>
                                            </div>
                                            <p>Delivery policy (edit with Customer reassurance module)</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="reassurance-item">
                                            <div class="reassurance-icon">
                                                <i class="fa fa-exchange"></i>
                                            </div>
                                            <p> Return policy (edit with Customer reassurance module)</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>



            <div class="row">
                <div class="col-12">
                    <div class="product-details-tab mt--60">
                        <ul role="tablist" class="mb--50 nav">

                            <li role="presentation">
                                <a data-bs-toggle="tab" role="tab" href="#reviews">Reviews</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12">
                    <div class="product_details_tab_content tab-content">
                        <!-- Start Single Content -->
                        <div class="product_tab_content tab-pane active" id="description" role="tabpanel">

                        </div>
                        <!-- End Single Content -->
                        <!-- Start Single Content -->
                        <div class="product_tab_content tab-pane" id="sheet" role="tabpanel">
                            <div class="pro_feature">
                                <h2 class="title_3">Data sheet</h2>
                                <ul class="feature_list">
                                    <li><a href="#"><i class="fa fa-play"></i>Duis aute irure dolor in reprehenderit in voluptate velit esse</a></li>
                                    <li><a href="#"><i class="fa fa-play"></i>Irure dolor in reprehenderit in voluptate velit esse</a></li>
                                    <li><a href="#"><i class="fa fa-play"></i>Irure dolor in reprehenderit in voluptate velit esse</a></li>
                                    <li><a href="#"><i class="fa fa-play"></i>Sed do eiusmod tempor incididunt ut labore et </a></li>
                                    <li><a href="#"><i class="fa fa-play"></i>Sed do eiusmod tempor incididunt ut labore et </a></li>
                                    <li><a href="#"><i class="fa fa-play"></i>Nisi ut aliquip ex ea commodo consequat.</a></li>
                                    <li><a href="#"><i class="fa fa-play"></i>Nisi ut aliquip ex ea commodo consequat.</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Content -->
                        <!-- Start Single Content -->
                        <div class="product_tab_content tab-pane" id="reviews" role="tabpanel">
                            <div class="review_address_inner">
                                <!-- Start Single Review -->
                                <div class="pro_review">
                                    <div class="review_thumb">
                                        <img alt="review images" src="assets/images/review/1.jpg">
                                    </div>
                                    <div class="review_details">
                                        <div class="review_info">
                                            <h4><a href="#">Gerald Barnes</a></h4>
                                            <ul class="product-rating d-flex">
                                                <li><span class="fa fa-star"></span></li>
                                                <li><span class="fa fa-star"></span></li>
                                                <li><span class="fa fa-star"></span></li>
                                                <li><span class="fa fa-star"></span></li>
                                                <li><span class="fa fa-star"></span></li>
                                            </ul>
                                            <div class="rating_send">
                                                <a href="#"><i class="fa fa-reply"></i></a>
                                            </div>
                                        </div>
                                        <div class="review_date">
                                            <span>27 Jun, 2018 at 3:30pm</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at estei to bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                                    </div>
                                </div>
                                <!-- End Single Review -->
                                <!-- Start Single Review -->
                                <div class="pro_review ans">
                                    <div class="review_thumb">
                                        <img alt="review images" src="assets/images/review/2.jpg">
                                    </div>
                                    <div class="review_details">
                                        <div class="review_info">
                                            <h4><a href="#">Gerald Barnes</a></h4>
                                            <ul class="product-rating d-flex">
                                                <li><span class="fa fa-star"></span></li>
                                                <li><span class="fa fa-star"></span></li>
                                                <li><span class="fa fa-star"></span></li>
                                                <li><span class="fa fa-star"></span></li>
                                                <li><span class="fa fa-star"></span></li>
                                            </ul>
                                            <div class="rating_send">
                                                <a href="#"><i class="fa fa-reply"></i></a>
                                            </div>
                                        </div>
                                        <div class="review_date">
                                            <span>27 Jun, 2018 at 4:32pm</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at estei to bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                                    </div>
                                </div>
                                <!-- End Single Review -->
                            </div>
                            <!-- Start RAting Area -->
                            <div class="rating_wrap">
                                <h2 class="rating-title">Write  A review</h2>
                                <h4 class="rating-title-2">Your Rating</h4>
                                <div class="rating_list">
                                    <ul class="product-rating d-flex">
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="fa fa-star"></span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End RAting Area -->
                            <div class="comments-area comments-reply-area">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form action="#" class="comment-form-area">
                                            <div class="comment-input">
                                                <p class="comment-form-author">
                                                    <label>Name <span class="required">*</span></label>
                                                    <input type="text" required="required" name="Name">
                                                </p>
                                                <p class="comment-form-email">
                                                    <label>Email <span class="required">*</span></label>
                                                    <input type="text" required="required" name="email">
                                                </p>
                                            </div>
                                            <p class="comment-form-comment">
                                                <label>Comment</label>
                                                <textarea class="comment-notes" required="required"></textarea>
                                            </p>
                                            <div class="comment-form-submit">
                                                <input type="submit" value="Post Comment" class="comment-submit">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection
    <!-- conten
