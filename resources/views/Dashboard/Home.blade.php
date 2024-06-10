@extends('Dashboard.layout.app')

@section('title')
    Home Page
@endsection

@section('content')

    @component('Dashboard.layout.header')
        @slot('nav_title')
            Home Page
        @endslot
    @endcomponent

    @include('Dashboard.home-sections.statics')
    @include('Dashboard.home-sections.latest-comments')

@endsection
