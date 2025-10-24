@extends('layout.app')
@section('title', 'Login Form')
@section('main')


    <div class="ps-account mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 m-auto">
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="ps-form--review">
                            <h2 class="ps-form__title">Register</h2>
                            <div class="ps-form__group">
                                <label class="ps-form__label">Name</label>
                                <input class="form-control ps-form__input" type="text" name="name" value="{{ old('name') }}">
                            </div>
                            <div class="ps-form__group">
                                <label class="ps-form__label">Email address *</label>
                                <input class="form-control ps-form__input" type="email" name="email"value="{{ old('email') }}" >
                            </div>
                            <div class="ps-form__group">
                                <label class="ps-form__label">Password *</label>
                                <div class="input-group">
                                    <input class="form-control ps-form__input" type="password" name="password">
                                    <div class="input-group-append"><a class="fa fa-eye-slash toogle-password"
                                            href="javascript: vois(0);"></a></div>
                                </div>
                                <div class="ps-form__group">
                                <label class="ps-form__label">Confirm Password *</label>
                                <div class="input-group">
                                    <input class="form-control ps-form__input" type="password" name="password_confirmation">
                                    <div class="input-group-append"><a class="fa fa-eye-slash toogle-password"
                                            href="javascript: vois(0);"></a></div>
                                </div>
                                <p class="ps-form__text">Hint: The password should be at least twelve characters long. To
                                    make it stronger, use upper and lower case letters, numbers, and symbols like ! " ? $ %
                                    ^ & ).</p>
                            </div>
                            <div class="ps-form__submit">
                                <button class="ps-btn ps-btn--warning">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
