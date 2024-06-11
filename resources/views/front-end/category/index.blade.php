@extends('layouts.app')
@section('title' , $cat->name)

@section('content')
    {{-- <div class="section section-buttons">
        <div class="container">
            <div class="title">
                <h1>{{ $cat->name }}</h1>
            </div>
            <div class="row">
                @foreach($product as $product)
                    <div class="col-lg-4">
                        @include('front-end.shared.product-card')
                    </div>
                @endforeach
            </div>
        </div>
    </div> --}}
    <section class="py-7">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto text-center">
                    <h2 class="mb-0">{{ $cat->name }}</h2>
                </div>
                <div class="row">
                    @foreach($product as $product)
                        <div class="col-lg-4">
                            @include('front-end.shared.product-card')
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
