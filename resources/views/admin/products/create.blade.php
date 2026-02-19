@extends('admin.layout.app')

@section('title', 'Admin')

@section('main')

    <div class="app-content-area">
        <div class="app-content-wrap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-title-box d-flex-between flex-wrap gap-15">
                            <h1 class="page-title fs-18 lh-1">Add Product</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-example1 mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Product</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <div class="col-xxl-12 col-xl-12">
                        <div class="card">
                            <div class="card-header justify-between">
                                <h4 class="">Product Information</h4>
                                <div class="">
                                    <a class="btn btn-light" href="ecommerce-product-list.html">Back To Product</a>
                                </div>
                            </div>
                            <div class="card-body pt-15">
                                <div class="row gy-15">
                                    <form action="{{ route('products.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="col-xl-12">
                                            <label class="form-label">Product Name</label>
                                            <input type="text" class="form-control" name="name">
                                        </div>

                                        <div class="col-xl-12">
                                            <label class="form-label">Product Image</label>
                                            <input type="file" class="form-control" name="image">
                                        </div>

                                        <div class="col-xl-6">
                                            <label class="form-label">Price</label>
                                            <input type="number" step="0.01" class="form-control" name="price">
                                        </div>

                                        <div class="col-xl-6">
                                            <label class="form-label">Discount Percentage</label>
                                            <input type="number" class="form-control" name="percentage">
                                        </div>

                                        <div class="col-xl-6">
                                            <label class="form-label">Stock Quantity</label>
                                            <input type="number" class="form-control" name="quantity">
                                        </div>

                                        <div class="col-xl-6">
                                            <label class="form-label">Rating</label>
                                            <input type="number" class="form-control" name="rating">
                                        </div>

                                        <button type="submit" class="btn btn-primary mt-3">Add Product</button>
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
