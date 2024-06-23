@extends('layouts.app')

@section('content')
    <section class="py-7">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto text-center">
                    <h2 class="mb-0">PRODUCTS</h2>
                </div>
            </div>
            @include('front-end.shared.product-row')
        </div>
    </section>
@endsection
