@extends('layout.app')

@section('title', 'Edit Blog')

@section('main')
<div class="ps-contact">
    <div class="container">
        <form action="{{ route('update.post', $post->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="ps-form--contact">
                <h2 class="ps-form__title">Edit Blog Post</h2>

                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="ps-form__group">
                            <input class="form-control ps-form__input" type="text" name="title"
                                value="{{ old('title', $post->title) }}" placeholder="Enter Your Title">
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="ps-form__group">
                            <input class="form-control ps-form__input" name="image" type="file">
                            @if($post->image)
                                <img src="{{ asset('upload/post/'.$post->image) }}" alt="Post Image"
                                    width="100" class="mt-2 rounded">
                            @endif
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="ps-form__group">
                            <textarea class="form-control ps-form__textarea" rows="5" name="description"
                                placeholder="Description">{{ old('description', $post->description) }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="ps-form__submit">
                    <button class="ps-btn ps-btn--warning">Update Blog</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
