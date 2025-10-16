@extends('layout.app')

@section('title', 'Blogs')

@section('main')
    <div class="ps-blog">
        <div class="container">
            <ul class="ps-breadcrumb">
                <li class="ps-breadcrumb__item"><a href="index.html">Home</a></li>
                <li class="ps-breadcrumb__item active" aria-current="page">My Medi Blog</li>
            </ul>
            <h1 class="ps-blog__title">My Medi Blog</h1>
            <div class="ps-blog__content">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="ps-blog--sidebar">
                            <div class="row">
                                @foreach ($posts as $post)
                                    <div class="col-4">
                                        <div class="ps-blog--latset">
                                            <div class="ps-blog__thumbnail"><a href="blog-post1.html"><img
                                                        src="{{ asset('upload/post/' . $post['image']) }}"
                                                        alt="alt"></a>
                                            </div>
                                            <div class="ps-blog__content">
                                                <div class="ps-blog__meta"> <span
                                                        class="ps-blog__date">{{ $post['created_at']->format('m d,y') }}</span><a
                                                        class="ps-blog__author" href="#">Alfredo Austin</a></div><a
                                                    class="ps-blog__title" href="blog-post1.html">{{ $post['title'] }}</a>
                                                <p class="ps-blog__desc"> {{ $post['description'] }} </p>
                                                <a href="{{ route('delete.post', $post['id']) }}"
                                                    class="btn btn-danger">Delete</a>
                                                <a href="{{ route('edit.post', $post['id']) }}"
                                                    class="btn btn-info">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="ps-pagination">
                            <ul class="pagination">
                                <li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
