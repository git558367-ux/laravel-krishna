@extends('admin.layout.app')

@section('title', 'Profile')

@section('main')

    <div class="app-content-area">
        <div class="app-content-wrap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-title-box d-flex-between flex-wrap gap-15">
                            <h1 class="page-title fs-18 lh-1">Applicants Details</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-example1 mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Job</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Applicants Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <div class="col-xxl-4 col-xl-12">
                        <div class="card">
                            <div class="card-header justify-between">
                                <h4 class="">Personal Information</h4>
                                <div class="card-dropdown">
                                    <div class="dropdown">
                                        <a class="card-dropdown-icon" href="javascript:void(0);" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('admin.profile.edit') }}">Edit</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                            <a class="dropdown-item" href="javascript:void(0);">This Year</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-15">

                                <div class="text-center mb-10">
                                    <div class="avatar avatar-big radius-100">
                                        <img class="radius-100"
                                            src="{{ asset('assets/images/avatar/avatar-thumb-001.webp') }}"
                                            alt="image not found">
                                    </div>
                                </div>

                                <div class="profile-info text-center mb-15">
                                    <h3 class="mb-5">{{ Auth::user()->name }}</h3>
                                    <h6 class="text-body mb-10">{{ Auth::user()->role ?? 'Employee' }}</h6>

                                    <div class="d-flex-center gap-15">
                                        <a href="#" class="btn-icon btn-warning-light fs-16">
                                            <i class="ri-twitter-x-line"></i>
                                        </a>
                                        <a href="#" class="btn-icon btn-success-light fs-16">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                        <a href="#" class="btn-icon btn-info-light fs-16">
                                            <i class="ri-linkedin-fill"></i>
                                        </a>
                                        <a href="#" class="btn-icon btn-danger-light fs-16">
                                            <i class="ri-whatsapp-line"></i>
                                        </a>
                                        <a href="#" class="btn-icon btn-primary-light fs-16">
                                            <i class="ri-telegram-2-fill"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="table-responsive mb-15">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td style="min-width: 105px;">Employee ID:</td>
                                                <td>
                                                    <div class="text-heading">{{ Auth::user()->employee_id }}</div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Date of Join:</td>
                                                <td>
                                                    <div class="text-heading">
                                                        {{ optional(Auth::user()->join_date)->format('Y-m-d') }}
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Email:</td>
                                                <td>
                                                    <div class="text-heading">{{ Auth::user()->email }}</div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Phone:</td>
                                                <td>
                                                    <div class="text-heading">{{ Auth::user()->phone }}</div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Birthday:</td>
                                                <td>
                                                    <div class="text-heading">
                                                        {{ optional(Auth::user()->birthday)->format('Y-m-d') }}
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Gender:</td>
                                                <td>
                                                    <div class="text-heading text-capitalize">
                                                        {{ Auth::user()->gender }}
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Address:</td>
                                                <td>
                                                    <div class="text-heading">{{ Auth::user()->address }}</div>
                                                </td>
                                            </tr>
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
