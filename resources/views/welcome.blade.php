@extends('layouts.app')
@section('title','home')
@section('content')
@include('front-end.homepage-sections.home-image')
@include('front-end.homepage-sections.about')
@include('front-end.homepage-sections.product')
{{-- @include('front-end.homepage-sections.statics') --}}
{{-- @include('front-end.homepage-sections.contact-us') --}}
@endsection
