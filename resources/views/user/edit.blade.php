@extends('layout.app')

@section('title', 'Edit Profile')

@section('main')

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h4>Edit Profile</h4>
            </div>

            <div class="card-body">

                <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    @php
                        $user = auth()->user();
                    @endphp

                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Email (readonly)</label>
                            <input type="email" class="form-control" value="{{ $user->email }}" readonly>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control"
                                value="{{ old('phone', $user->phone) }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Birthday</label>
                            <input type="date" name="birthday" class="form-control"
                                value="{{ old('birthday', optional($user->birthday)->format('Y-m-d')) }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Gender</label>
                            <select name="gender" class="form-control">
                                <option value="">Select</option>
                                <option value="male" {{ $user->gender == 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ $user->gender == 'female' ? 'selected' : '' }}>Female</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control"
                                value="{{ old('address', $user->address) }}">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Profile Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary">
                        Update Profile
                    </button>

                </form>

            </div>
        </div>
    </div>

@endsection
