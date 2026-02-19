@extends('admin.layout.app')

@section('title', 'Admin')

@section('main')

    <div class="app-content-area">
        <div class="app-content-wrap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-title-box d-flex-between flex-wrap gap-15">
                            <h1 class="page-title fs-18 lh-1">Product List</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-example1 mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Product List</li>
                                </ol>
                            </nav>
                        </div>
                    </div>



                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header justify-between">
                                <h4 class="d-flex-items gap-10">Product List</h4>
                                <div class="d-flex flex-wrap gap-15">
                                    <a class="btn btn-primary" href="{{ route('products.create') }}">Add Product</a>
                                    <a class="btn btn-success text-white" href="javascript:void(0);">Export As
                                        CSV</a>
                                    <div class="dataTables-sorting-control ">
                                        <select class="form-select sorting-dropdown">
                                            <option value="">Sort by:</option>
                                            <option value="1_asc">ID (Low to High)</option>
                                            <option value="1_desc">ID (High to Low)</option>
                                            <option value="2_asc">Name (A-Z)</option>
                                            <option value="2_desc">Name (Z-A)</option>
                                            <option value="5_asc">Company (A-Z)</option>
                                            <option value="5_desc">Company (Z-A)</option>
                                            <option value="8_asc">Status (Active First)</option>
                                            <option value="8_desc">Status (Inactive First)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-15">
                                <div class="table-responsive">
                                    <table id="dataTableDefault" class="table text-nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th><input class="form-check-input" type="checkbox"></th>
                                                <th>ID</th>
                                                <th>Image</th>
                                                <th>Title</th>
                                                <th>Price</th>
                                                <th>Discount (%)</th>
                                                <th>Stock</th>
                                                <th>Rating</th>
                                                <th>Published</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($products as $p)
                                                <tr>
                                                    <td><input class="form-check-input" type="checkbox"></td>

                                                    <td>{{ $p->id }}</td>

                                                    <td>
                                                        <div class="d-flex-items gap-10">
                                                            <div class="avatar avatar-md">
                                                                @if ($p->image)
                                                                    <img src="{{ asset('uploads/' . $p->image) }}"
                                                                        alt="image" class="radius-6">
                                                                @else
                                                                    <img src="https://via.placeholder.com/60"
                                                                        class="radius-6">
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>{{ $p->name }}</td>

                                                    <td>₹{{ $p->price ?? 0 }}</td>

                                                    <td>{{ $p->percentage ?? 0 }}%</td>

                                                    <td>
                                                        <div class="d-flex-items gap-15">
                                                            <span>{{ $p->quantity }}</span>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <span class="rating-badge">
                                                            <i class="ri-star-fill text-warning"></i> {{ $p->rating }}
                                                        </span>
                                                    </td>

                                                    <td>{{ $p->created_at->format('d M, Y h:i A') }}</td>

                                                    <td>
                                                        <div class="d-flex-items gap-5">
                                                            <a class="btn-icon btn-info-light"
                                                                href="{{ route('products.edit', $p->id) }}">
                                                                <i class="ri-edit-line"></i>
                                                            </a>

                                                            <a class="btn-icon btn-danger-light"
                                                                href="{{ route('products.delete', $p->id) }}"
                                                                onclick="return confirm('Are you sure to delete this product?')">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
