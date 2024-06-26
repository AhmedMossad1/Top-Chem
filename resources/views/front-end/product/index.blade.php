@extends('layouts.app')
@section('title', $product->name)
@section('content')
    <section class="py-7">
        <div class="container py-6 mt-2">
            <div class="row" dir="ltr">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item text-dark opacity-5"><a href="{{ route('frontend.landing') }}">{{ __('Home') }}</a>
                        </li>
                        <li class="breadcrumb-item text-dark opacity-5"><a
                                href="{{ route('front.category', ['id' => $product->cat->id]) }}">{{ $product->cat->name }}</a>
                        </li>
                        <li class="breadcrumb-item text-dark active" aria-current="page">{{ $product->name }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-6 mx-lg-0 mx-auto px-lg-0 px-md-0 my-auto"style="flex: 1 0 auto">
                    <img class="max-width-400 border-radius-lg shadow-lg" src="{{ url('uploads/' . $product->image) }}"
                        alt="{{ $product->name }}">
                </div>
                <div class="col-md-5 col-10 d-flex justify-content-center flex-column mx-auto text-lg-start text-center">
                    <h2 class="mb-4">{{ $product->name }}</h2>
                    <p class="mb-2">{{ $product->description }} </p>
                    <h3 class="mt-4"> {{ __('composition') }}</h3>
                    <p class="mb-2">{{ $product->composition }} </p>
                    <h3 class="mt-4"> {{ __('usage_rate') }}</h3>
                    <p class="mb-2">{{ $product->usage_rate }} </p>
                </div>
            </div>

        </div>
    </section>
@endsection
