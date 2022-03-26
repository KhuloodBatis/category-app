<h2>{{ $category->title }}</h2>


{{-- @if ($category->products->count())
    @foreach ($category->products as $product)
        <div class="">
            <h3>{{ $product->title }}</h3>
            <p>{{ number_format($product->price, 2) }}</p>
        </div>product
    @endforeach
@endif --}}

@if ($products->count())
    @foreach ($products as $product)
        <div class="">
            <h3>{{ $product->title }}</h3>
            <p>{{ number_format($product->price, 2) }}</p>
        </div>
    @endforeach
    <div class="row" size='10'>{{ $products->links() }}</div>

@endif
