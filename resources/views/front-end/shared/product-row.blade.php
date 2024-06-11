<div class="row">
    @foreach($product as $product)
        <div class="col-lg-6">
            <section class="py-6">
                <div class="container">
                    <div class="row justify-space-between py-2">
                        <div class="col-6 mx-auto">
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <a href="{{ route('front.product', ['id' => $product->id]) }}" title="{{ $product->name }}"
                                        class="d-block blur-shadow-image">
                                        <img src="{{ url('uploads/' . $product->image) }}" alt="img-blur-shadow"
                                            class="img-fluid border-radius-lg">
                                    </a>
                                </div>
                                <div class="card-body text-center px-1 pt-3">
                                    <p class="mb-2 text-sm">Private Room • 1 Guests • 1 Sofa</p>
                                    <a href="{{ route('front.product', ['id' => $product->id]) }}" title="{{ $product->name }}">
                                        <button type="button" class="btn bg-gradient-primary btn-sm">{{ $product->name }}</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    @endforeach
</div>


{{-- <div class="row mt-6">
    @foreach($products as $product)
        <div class="col-lg-4 col-md-8">
            <div class="card card-plain">
                <div class="card-body">
                    <div class="author">
                        <div class="name">
                            <h6 class="mb-0 font-weight-bolder">{{ $product->name }}</h6>
                            <div class="stats">
                                <i class="far fa-clock"></i> 1 day ago
                            </div>
                        </div>
                    </div>
                    <p class="mt-4">"This is an excellent product, the documentation is excellent and helped me get things done more efficiently."</p>
                    <div class="rating mt-3">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <a href="{{ route('front.product', ['id' => $product->id]) }}" title="{{ $product->name }}" class="d-block blur-shadow-image">
                        <img src="{{ url('uploads/' . $product->image) }}" alt="img-blur-shadow" class="img-fluid border-radius-lg mt-3">
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div> --}}
