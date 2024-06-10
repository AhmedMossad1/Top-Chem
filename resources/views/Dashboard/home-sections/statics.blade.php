<div class="row">
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


