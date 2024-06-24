@extends('Dashboard.layout.app')
@section('content')
    @component('Dashboard.layout.header')
        @slot('nav_title')
        @endslot
    @endcomponent

    <div class="row">
        <!-- Existing stats cards here -->
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                        <i class="fa fa-shopping-basket"></i>
                    </div>
                    <p class="card-category">Products</p>
                    <h3 class="card-title">{{ \App\Models\Product::count() }}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <a href="{{ route('products.index') }}" class="warning-link">All Products</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                        <i class="fa fa-list"></i>
                    </div>
                    <p class="card-category">Categories</p>
                    <h3 class="card-title">{{ \App\Models\Category::count() }}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <a href="{{ route('categories.index') }}" class="warning-link">All Categories</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <p class="card-category">Messages</p>
                    <h3 class="card-title">{{ \App\Models\Message::count() }}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <a href="{{ route('messages.index') }}" class="warning-link">All Messages</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- New table for products with visit counts -->
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header card-header-primary" style="display: flex; align-items: center;">
                    <i class="material-icons" style="color:#fff; margin-right: 10px;">timeline</i>
                    <h4 class="card-title" style="margin: 0;">Products with Visit Counts</h4>
                </div>

                <div class="card-body table-responsive">
                    <table class="table table-hover">
                        <thead class="text-primary">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Visit Count</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->cat->name }}</td>
                                    <td>{{ $product->visit_count }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
