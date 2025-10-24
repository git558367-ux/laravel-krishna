@extends('layout.app')
@section('title', 'Login Form')
@section('main')


    <div class="ps-account">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 m-auto">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="ps-form--review">
                            <h2 class="ps-form__title">Login</h2>
                            <div class="ps-form__group">
                                <label class="ps-form__label">Email address *</label>
                                <input class="form-control ps-form__input" type="email" name="email"
                                    value="{{ old('email') }}">
                            </div>
                            <div class="ps-form__group">
                                <label class="ps-form__label">Password *</label>
                                <div class="input-group">
                                    <input class="form-control ps-form__input" type="password" name="password">
                                    <div class="input-group-append"><a class="fa fa-eye-slash toogle-password"
                                            href="javascript: vois(0);"></a></div>
                                </div>
                            </div>
                            <div class="ps-form__submit">
                                <button class="ps-btn ps-btn--warning">Log in</button>

                            </div><a class="ps-account__link" href="lost-password.html">Lost your password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
