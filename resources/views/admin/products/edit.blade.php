@extends('admin.layout.app')

@section('title', 'Admin')

@section('main')

    <div class="app-content-area">
        <div class="app-content-wrap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-title-box d-flex-between flex-wrap gap-15">
                            <h1 class="page-title fs-18 lh-1">Edit Product</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-example1 mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-header justify-between">
                                <h4 class="">Product Information</h4>
                                <div class="">
                                    <a class="btn btn-light" href="ecommerce-product-details.html">Back To Product</a>
                                </div>
                            </div>
                            <div class="card-body pt-15">
                                <div class="row gy-15">
                                    <form action="{{ route('products.update', $products->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="col-xl-12">
                                            <label class="form-label">Product Name</label>
                                            <input type="text" class="form-control" value="{{ $products->name }}"
                                                name="name">
                                        </div>

                                        <div class="col-xl-12">
                                            <label class="form-label">Product Image</label>
                                            <div class="mb-2">
                                                <img src="{{ asset('upload/products/' . $products->image) }}" width="120"
                                                    class="redius-6" alt="product image">
                                            </div>
                                            <input type="file" class="form-control" name="image">
                                        </div>

                                        <div class="col-xl-6">
                                            <label class="form-label">Price</label>
                                            <input type="number" step="0.01" class="form-control"
                                                value="{{ $products->price }}" name="price">
                                        </div>

                                        <div class="col-xl-6">
                                            <label class="form-label">Discount Percentage</label>
                                            <input type="number" class="form-control" value="{{ $products->percentage }}"
                                                name="percentage">
                                        </div>

                                        <div class="col-xl-6">
                                            <label class="form-label">Stock Quantity</label>
                                            <input type="number" class="form-control" value="{{ $products->quantity }}"
                                                name="quantity">
                                        </div>

                                        <div class="col-xl-6">
                                            <label class="form-label">Rating</label>
                                            <input type="number" class="form-control" value="{{ $products->rating }}"
                                                name="rating">
                                        </div>

                                        <div class="card-footer border-top pt-15 mt-15 d-flex justify-end">
                                            <button class="btn btn-primary" type="submit">Update Product</button>
                                        </div>
                                    </form>


                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
