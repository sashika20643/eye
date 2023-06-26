@extends('shop.layouts.shoplayout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="#" class="cart-table">
                <div class="table-content table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="plantmore-product-thumbnail">Images</th>
                                <th class="cart-product-name">Product</th>
                                <th class="plantmore-product-price">Unit Price</th>
                                <th class="plantmore-product-quantity">Quantity</th>
                                <th class="plantmore-product-subtotal">Total</th>
                                <th class="plantmore-product-remove">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $tot=0;
                        @endphp
                            @foreach($cartItems as $itemId => $item)
                            @php
                            $tot+=$item['product']->discount_price* $item['quantity'];
                        @endphp
                            <tr>
                                <td class="plantmore-product-thumbnail"><a href="#"><img src="{{ asset('assets/images/cart/1.jpg') }}" alt=""></a></td>
                                <td class="plantmore-product-name"><a href="#">{{ $item['product']->title }}</a></td>
                                <td class="plantmore-product-price"><span class="amount">{{ $item['product']->discount_price }}</span></td>
                                <td class="plantmore-product-quantity">
                                    <input value="{{ $item['product']->quantity }}" type="number">
                                </td>
                                <td class="product-subtotal"><span class="amount">{{ $item['product']->discount_price * $item['quantity'] }}</span></td>
                                <td class="plantmore-product-remove"><a href="#"><i class="fa fa-close"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="coupon-all">
                            <div class="coupon2">
                                <input class="submit btn" name="update_cart" value="Update cart" type="submit">
                                <a href="shop.html" class="btn continue-btn">Continue Shopping</a>
                            </div>
                            <div class="coupon">
                                <h3>Coupon</h3>
                                <p>Enter your coupon code if you have one.</p>
                                <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <div class="cart-page-total">
                            <h2>Cart totals</h2>
                            <ul>
                                <li>Subtotal <span>{{ $tot }}</span></li>
                                <li>Total <span>{{ $tot }}</span></li>
                            </ul>
                            <a href="#" class="proceed-checkout-btn">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
