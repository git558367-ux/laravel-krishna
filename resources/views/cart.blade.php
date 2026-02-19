@extends('layout.app')

@section('title', 'My Medi')

@section('main')
<div class="ps-shopping">
    <div class="container">

        <ul class="ps-breadcrumb">
            <li class="ps-breadcrumb__item"><a href="{{ url('/') }}">Home</a></li>
            <li class="ps-breadcrumb__item active">Shopping cart</li>
        </ul>

        <h3 class="ps-shopping__title">
            Shopping cart
            <sup>({{ count((array) session('cart')) }})</sup>
        </h3>

        <div class="ps-shopping__content">
            <div class="row">
                <div class="col-12 col-md-7 col-lg-9">

                    @php $total = 0; @endphp

                    @if(session('cart'))
                        <ul class="ps-shopping__list">
                            @foreach(session('cart') as $id => $item)
                                @php
                                    $subtotal = $item['price'] * $item['quantity'];
                                    $total += $subtotal;
                                @endphp

                                <li>
                                    <div class="ps-product ps-product--wishlist">

                                        <!-- REMOVE -->
                                        <div class="ps-product__remove">
                                            <form action="{{ route('cart.remove', $id) }}" method="POST">
                                                @csrf
                                                <button style="border:none;background:none">
                                                    <i class="icon-cross"></i>
                                                </button>
                                            </form>
                                        </div>

                                        <!-- IMAGE -->
                                        <div class="ps-product__thumbnail">
                                            <img src="{{ asset('uploads/'.$item['image']) }}" width="80">
                                        </div>

                                        <!-- CONTENT -->
                                        <div class="ps-product__content">
                                            <h5 class="ps-product__title">{{ $item['name'] }}</h5>

                                            <div class="ps-product__row">
                                                <div class="ps-product__label">Price:</div>
                                                <div class="ps-product__value">
                                                    ₹{{ $item['price'] }}
                                                </div>
                                            </div>

                                            <div class="ps-product__row ps-product__quantity">
                                                <div class="ps-product__label">Quantity:</div>
                                                <div class="ps-product__value">
                                                    {{ $item['quantity'] }}
                                                </div>
                                            </div>

                                            <div class="ps-product__row ps-product__subtotal">
                                                <div class="ps-product__label">Subtotal:</div>
                                                <div class="ps-product__value">
                                                    ₹{{ $subtotal }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>Your cart is empty.</p>
                    @endif

                </div>

                <!-- CART TOTAL -->
                <div class="col-12 col-md-5 col-lg-3">
                    <div class="ps-shopping__label">Cart totals</div>

                    <div class="ps-shopping__box">
                        <div class="ps-shopping__row">
                            <div class="ps-shopping__label">Subtotal</div>
                            <div class="ps-shopping__price">₹{{ $total }}</div>
                        </div>

                        <div class="ps-shopping__row">
                            <div class="ps-shopping__label">Total</div>
                            <div class="ps-shopping__price">₹{{ $total }}</div>
                        </div>

                        <div class="ps-shopping__checkout">
                            <a class="ps-btn ps-btn--warning" href="{{ route('checkout') }}">
                                Proceed to checkout
                            </a>
                            <a class="ps-shopping__link" href="{{ url('/') }}">
                                Continue Shopping
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection
