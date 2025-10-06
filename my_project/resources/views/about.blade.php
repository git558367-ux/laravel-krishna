@extends('layout.app')

@section('title','About Page')

@section('main')

<ul>
    @foreach($userid as $item)
    <li>{{$item}}</li>
    @endforeach
</ul>
<div><a href="/contact">Contact</a></div>

<a href="/signin">Sign In</a>
@endsection