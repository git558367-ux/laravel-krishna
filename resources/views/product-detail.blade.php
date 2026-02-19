@extends('layout.app')

@section('title', 'My Medi')

@section('main')

    <div class="row">
        <div class="col-12 col-xl-7">
            <div class="ps-product--gallery">

                <div class="ps-product__thumbnail">
                    <div class="slide">
                        <img src="{{ asset('uploads/' . $product->image) }}" alt="{{ $product->name }}">
                    </div>
                    {{-- If you have multiple images, repeat dynamically --}}
                </div>

                <div class="ps-gallery--image">
                    <div class="slide">
                        <div class="ps-gallery__item">
                            <img src="{{ asset('uploads/' . $product->image) }}" alt="{{ $product->name }}">
                        </div>
                    </div>
                </div>

            </div>

            <div class="ps-product__badge">
                @if ($product->quantity > 0)
                    <span class="ps-badge ps-badge--instock">In Stock</span>
                @else
                    <span class="ps-badge ps-badge--outstock">OUT OF STOCK</span>
                @endif
            </div>
        </div>

        <div class="col-12 col-xl-5">
            <div class="ps-product__info">



                <div class="ps-product__branch">{{ $product->brand ?? 'Brand' }}</div>

                <div class="ps-product__title">{{ $product->name }}</div>

                <div class="ps-product__rating">
                    <select class="ps-rating" data-read-only="true">
                        @for ($i = 1; $i <= 5; $i++)
                            <option value="{{ $i }}" @if ($product->review == $i) selected @endif>
                                {{ $i }}</option>
                        @endfor
                    </select>
                    {{-- <span class="ps-product__review">(5 Reviews)</span> --}}
                </div>

                <div class="ps-product__desc">
                    {!! $product->description !!}
                </div>

                <div class="ps-product__meta">
                    
                    @php
                        $finalPrice = $product->price - ($product->price * $product->discount) / 100;
                    @endphp
                    <h4 class="ps-product__price sale">
                        ₹{{ number_format($finalPrice, 2) }}
                    </h4>
                    {{-- if you have old price --}}
                    {{-- <span class="ps-product__del">₹400</span> --}}
                    <span class="ps-product__del">₹{{ number_format($product->price, 2) }}
                    </span>
                </div>

                <div class="ps-product__variations">
                    <a class="ps-product__link" href="#">Add to wishlist</a>
                    <a class="ps-product__link" href="#">Add to Compare</a>
                </div>

                <div class="ps-product__type">
                    <ul class="ps-product__list">
                        <li><span class="ps-list__title">SKU: </span>{{ $product->sku ?? 'N/A' }}</li>
                        <li><span class="ps-list__title">Tags: </span>{{ $product->category->name ?? 'Category' }}</li>
                    </ul>
                </div>

                <div class="ps-product__social">
                    <ul class="ps-social ps-social--color">
                        <li><a class="ps-social__link facebook" href="#"><i class="fa fa-facebook"> </i></a></li>
                        <li><a class="ps-social__link twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="ps-social__link pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a class="ps-social__link whatsapp" href="#"><i class="fa fa-whatsapp"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    @endsection
