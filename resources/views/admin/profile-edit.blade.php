@extends('admin.layout.app')

@section('title', 'Admin')

@section('main')

    <div class="app-content-area">
        <div class="container mt-4">
            <div class="row">
                <div class="col-12 col-md-6 m-auto">
                    <form action="{{ route('admin.profile.update') }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="ps-form--review">
                            <h2 class="ps-form__title">Update Profile</h2>

                            <!-- Name -->
                            <div class="ps-form__group">
                                <label class="ps-form__label">Name *</label>
                                <input class="form-control ps-form__input" type="text" name="name"
                                    value="{{ old('name', Auth::user()->name) }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="ps-form__group">
                                <label class="ps-form__label">Email address *</label>
                                <input class="form-control ps-form__input" type="email" name="email"
                                    value="{{ old('email', Auth::user()->email) }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Employee ID -->
                            <div class="ps-form__group">
                                <label class="ps-form__label">Employee ID *</label>
                                <input class="form-control ps-form__input" type="text" name="employee_id"
                                    value="{{ old('employee_id', Auth::user()->employee_id) }}">
                                @error('employee_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Joining Date -->
                            <div class="ps-form__group">
                                <label class="ps-form__label">Joining Date *</label>
                                <input class="form-control ps-form__input" type="date" name="join_date"
                                    value="{{ old('join_date', Auth::user()->join_date) }}">
                                @error('join_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Phone -->
                            <div class="ps-form__group">
                                <label class="ps-form__label">Phone *</label>
                                <input class="form-control ps-form__input" type="text" name="phone"
                                    value="{{ old('phone', Auth::user()->phone) }}">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Birthday -->
                            <div class="ps-form__group">
                                <label class="ps-form__label">Birthday *</label>
                                <input class="form-control ps-form__input" type="date" name="birthday"
                                    value="{{ old('birthday', Auth::user()->birthday) }}">
                                @error('birthday')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Gender -->
                            <div class="ps-form__group">
                                <label class="ps-form__label">Gender *</label>
                                <select class="form-control ps-form__input" name="gender">
                                    <option value="">Select Gender</option>
                                    <option value="male"
                                        {{ old('gender', Auth::user()->gender) == 'male' ? 'selected' : '' }}>Male</option>
                                    <option value="female"
                                        {{ old('gender', Auth::user()->gender) == 'female' ? 'selected' : '' }}>Female
                                    </option>
                                    <option value="other"
                                        {{ old('gender', Auth::user()->gender) == 'other' ? 'selected' : '' }}>Other
                                    </option>
                                </select>
                                @error('gender')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Address -->
                            <div class="ps-form__group">
                                <label class="ps-form__label">Address *</label>
                                <textarea class="form-control ps-form__input" name="address">{{ old('address', Auth::user()->address) }}</textarea>
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Password (optional) -->
                            <div class="ps-form__group">
                                <label class="ps-form__label">New Password (optional)</label>
                                <div class="input-group">
                                    <input class="form-control ps-form__input" type="password" name="password">
                                </div>
                               
                            </div>

                            <!-- Confirm Password -->
                            <div class="ps-form__group">
                                <label class="ps-form__label">Confirm New Password</label>
                                <div class="input-group">
                                    <input class="form-control ps-form__input" type="password" name="password_confirmation">
                                </div>
                                @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="d-grid gap-2 mt-4 mb-4">
                                <button class="btn btn-primary" type="button">Button</button>
                            </div>



                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
