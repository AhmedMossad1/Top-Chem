<section class="py-8">
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
