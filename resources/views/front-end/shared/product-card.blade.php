 <div class="card" style="width: 20rem;">
    <a href="{{ route('front.product' , ['id' => $product->id]) }}" title="{{ $product->name }}">
        <img class="card-img-top" src="{{ url('uploads/'.$product->image) }}" alt="{{ $product->name }}" style="max-height:100%">
    </a>
    <div class="card-body">
        <p class="card-text">
            <a href="{{ route('front.product' , ['id' => $product->id]) }}" title="{{ $product->name }}">
                {{ $product->name }}
            </a>
        </p>
        <small>{{ $product->created_at }}</small>
    </div>
</div>


