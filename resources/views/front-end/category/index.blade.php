@extends('layouts.app')
@section('title' , $cat->name)

@section('content')
    <section class="py-7">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto text-center">
                    <h2 class="mb-0">{{ $cat->name }}</h2>
                </div>
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-lg-4">
                            @include('front-end.shared.product-card')
                        </div>
                    @endforeach
                </div>
            </div>
            {{ $products->links()}}
        </div>
    </section>

@endsection
