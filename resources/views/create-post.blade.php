@extends('layout.app')

@section('title', 'Create Blogs')

@section('main')

    <div class="ps-contact">
        <div class="container">
            <form action="/post" method="post" enctype="multipart/form-data">
                @csrf
                <div class="ps-form--contact">
                    <h2 class="ps-form__title">Fill up the form if you have any question</h2>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="ps-form__group">
                                <input class="form-control ps-form__input" type="text" name="title"
                                    placeholder="Enter Your Title">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="ps-form__group">
                                <input class="form-control ps-form__input" name="image" type="file">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="ps-form__group">
                                <textarea class="form-control ps-form__textarea" rows="5" name="description" placeholder="Description"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="ps-form__submit">
                        <button class="ps-btn ps-btn--warning">Create Blog</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
