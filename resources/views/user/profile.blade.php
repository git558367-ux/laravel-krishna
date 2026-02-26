@extends('layout.app')

@section('title', 'My Profile')

@section('main')

    <div class="app-content-area">
        <div class="app-content-wrap">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-xl-12">
                        <div class="page-title-box d-flex-between flex-wrap gap-15">
                            <h1 class="page-title fs-18 lh-1">My Profile</h1>
                            <nav>
                                <ol class="breadcrumb breadcrumb-example1 mb-0">
                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                    <li class="breadcrumb-item active">Profile</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <div class="col-xxl-4 col-xl-12">
                        <div class="card">
                            <div class="card-header justify-between">
                                <h4>Personal Information</h4>
                                <div>
                                    <a href="{{ route('user.profile.edit') }}" class="btn btn-sm btn-primary">
                                        Edit Profile
                                    </a>
                                </div>
                            </div>

                            <div class="card-body pt-15">

                                @php
                                    $user = auth()->user();
                                    $imagePath = public_path('upload/user/' . $user->image);
                                @endphp

                                <div class="text-center mb-10">
                                    <div class="avatar avatar-big radius-100">
                                        <img class="radius-100"
                                            src="{{ $user->image && file_exists($imagePath)
                                                ? asset('upload/user/' . $user->image)
                                                : asset('images/default-user.png') }}"
                                            alt="profile image" style="width:120px;height:120px;object-fit:cover;">
                                    </div>
                                </div>

                                <div class="profile-info text-center mb-15">
                                    <h3 class="mb-5">{{ $user->name }}</h3>
                                    <h6 class="text-body mb-10">User</h6>
                                </div>

                                <div class="table-responsive mb-15">
                                    <table class="table">
                                        <tbody>

                                            <tr>
                                                <td>Email:</td>
                                                <td>
                                                    <div class="text-heading">
                                                        {{ $user->email }}
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Phone:</td>
                                                <td>
                                                    <div class="text-heading">
                                                        {{ $user->phone ?? 'Not Added' }}
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Birthday:</td>
                                                <td>
                                                    <div class="text-heading">
                                                        {{ optional($user->birthday)->format('Y-m-d') ?? 'Not Added' }}
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Gender:</td>
                                                <td>
                                                    <div class="text-heading text-capitalize">
                                                        {{ $user->gender ?? 'Not Added' }}
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Address:</td>
                                                <td>
                                                    <div class="text-heading">
                                                        {{ $user->address ?? 'Not Added' }}
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Joined:</td>
                                                <td>
                                                    <div class="text-heading">
                                                        {{ $user->created_at->format('d M, Y') }}
                                                    </div>
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
