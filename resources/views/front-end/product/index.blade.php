@extends('layouts.app')
@section('title', $product->name)

@section('content')
<div class="section section-buttons">
    <div class="container">
        <div class="title">
            <h1>{{ $product->name }}</h1>
        </div>

        <div class="row">
            <div class="col-md-3">
                <img class="card-img-top" src="{{ url('uploads/'.$product->image) }}" alt="{{ $product->name }}" style="max-width: 100%;">
            </div>
            <div class="col-md-9">
                <p>
                    <span style="margin-right: 20px">
                        <i class="nc-icon nc-calendar-60"></i> {{ $product->created_at }}
                    </span>
                    <span style="margin-right: 20px">
                        <i class="nc-icon nc-single-copy-04"></i> <a href="{{ route('front.category', ['id' => $product->cat->id ]) }}">
                            {{ $product->cat->name }}
                        </a>
                    </span>
                </p>
                <p>{{ $product->description }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
