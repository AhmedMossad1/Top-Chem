<div class="row">
    @foreach($product as $product)
        <div class="col-lg-4">
            @include('front-end.shared.product-card')
        </div>
    @endforeach
</div>
<div class="row">
    <div class="col-md-12">
        {{-- {{ $product->links() }} --}}
    </div>
</div>
