@extends('layout.app')

@section('title', 'My Medi')

@section('main')

    <div class="ps-categogy ps-categogy--separate">
        <div class="container">
            <ul class="ps-breadcrumb">
                <li class="ps-breadcrumb__item"><a href="index.html">Home</a></li>
                <li class="ps-breadcrumb__item active" aria-current="page">Shop</li>
            </ul>
            <h1 class="ps-categogy__name">Shop</h1>
            <div class="ps-categogy__content">
                <div class="ps-categogy__wrapper">
                    <div class="ps-categogy__filter"> <a href="#" id="collapse-filter"><i class="fa fa-filter"></i><i
                                class="fa fa-times"></i>Filter</a></div>

                    <div class="ps-categogy__sort">
                        <form><span>Sort by</span>
                            <select class="form-select">
                                <option selected="">Latest</option>
                                <option value="Popularity">Popularity</option>
                                <option value="Average rating">Average rating</option>
                                <option value="Latest">Latest</option>
                                <option value="Price: low to high">Price: low to high</option>
                                <option value="Price: high to low">Price: high to low</option>
                            </select>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="ps-categogy__main">
            <div class="container">
                <div class="ps-categogy__widget"><a href="#" id="close-widget-product"><i class="fa fa-times"></i></a>
                    <div class="ps-widget ps-widget--product">


                        <div class="ps-widget__block">
                            <h4 class="ps-widget__title">Color</h4><a class="ps-block-control" href="#"><i
                                    class="fa fa-angle-down"></i></a>
                            <div class="ps-widget__content">
                                <div class="ps-widget__color">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="colorGray">
                                        <label class="custom-control-label" for="colorGray"
                                            style="--bg-color: #5b6c8f"></label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="colorGreen">
                                        <label class="custom-control-label" for="colorGreen"
                                            style="--bg-color: #12a05c"></label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="colorRed">
                                        <label class="custom-control-label" for="colorRed"
                                            style="--bg-color: #f00000"></label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="colorYellow">
                                        <label class="custom-control-label" for="colorYellow"
                                            style="--bg-color: #ff9923"></label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="colorBlack">
                                        <label class="custom-control-label" for="colorBlack"
                                            style="--bg-color: #313330"></label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="colorBlue">
                                        <label class="custom-control-label" for="colorBlue"
                                            style="--bg-color: #58c8ec"></label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="colorNavy">
                                        <label class="custom-control-label" for="colorNavy"
                                            style="--bg-color: #103178"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-widget__block">
                            <h4 class="ps-widget__title">Brands</h4><a class="ps-block-control" href="#"><i
                                    class="fa fa-angle-down"></i></a>
                            <div class="ps-widget__content">
                                <div class="ps-widget__item">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="BestPharm">
                                        <label class="custom-control-label" for="BestPharm">BestPharm</label>
                                    </div>
                                </div>
                                <div class="ps-widget__item">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="HeartRate">
                                        <label class="custom-control-label" for="HeartRate">HeartRate</label>
                                    </div>
                                </div>
                                <div class="ps-widget__item">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="HeartShield">
                                        <label class="custom-control-label" for="HeartShield">HeartShield</label>
                                    </div>
                                </div>
                                <div class="ps-widget__item">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="iHeart">
                                        <label class="custom-control-label" for="iHeart">iHeart</label>
                                    </div>
                                </div>
                                <div class="ps-widget__item">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="iLovehealth">
                                        <label class="custom-control-label" for="iLovehealth">iLovehealth</label>
                                    </div>
                                </div>
                                <div class="ps-widget__item">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="Medialarm">
                                        <label class="custom-control-label" for="Medialarm">Medialarm</label>
                                    </div>
                                </div>
                                <div class="ps-widget__item">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="Medicstore">
                                        <label class="custom-control-label" for="Medicstore">Medicstore</label>
                                    </div>
                                </div>
                                <div class="ps-widget__item">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="MyMedi">
                                        <label class="custom-control-label" for="MyMedi">MyMedi</label>
                                    </div>
                                </div>
                                <div class="ps-widget__item">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="Pharmy">
                                        <label class="custom-control-label" for="Pharmy">Pharmy</label>
                                    </div>
                                </div>
                                <div class="ps-widget__item">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="WeTakeCare">
                                        <label class="custom-control-label" for="WeTakeCare">WeTakeCare</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ps-widget__promo"><img src="img/banner-sidebar1.jpg" alt=""></div>
                    </div>
                </div>
                <div class="ps-categogy__product">
                    <div class="row m-0">
                        @foreach ($products as $product)
                            <div class="col-6 col-lg-4 col-xl-3 p-0">
                                <div class="ps-product ps-product--standard">
                                    <div class="ps-product__thumbnail"><a class="ps-product__image"
                                            href="{{ route('detail.product', $product->id) }}">
                                            <figure>
                                                <img src="{{ asset('uploads/' . $product->image) }}"
                                                    alt="{{ $product->name }}">
                                            </figure>
                                        </a>

                                        <div class="ps-product__badge">
                                        </div>
                                    </div>
                                    <div class="ps-product__content"><a class="ps-product__branch" href="#"></a>
                                        <h5 class="ps-product__title"><a
                                                href="{{ route('detail.product', $product->id) }}">{{ $product->name }}</a>
                                        </h5>
                                        <div class="ps-product__meta">
                                            <span class="ps-product__price sale">
                                                ₹{{ $product->price - ($product->price * $product->percentage) / 100 }}
                                            </span>
                                            <span class="ps-product__del">₹{{ $product->price }}</span>
                                        </div>


                                        <div class="ps-product__rating">
                                            <select class="ps-rating">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <option value="{{ $i }}"
                                                        @if ($product->rating == $i) selected @endif>
                                                        {{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="ps-pagination">
                        <ul class="pagination">
                            <li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
