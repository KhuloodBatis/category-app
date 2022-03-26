<h2>{{ $product->title }}</h2>


@if ($product->categories->count())

    <ul>
        @foreach ($product->categories as $category)
            {{-- <li>{{ $category->created_at->diffForHumans() }}</li> --}}
            <li>{{ $category->title }} (Added at {{ $category->pivot->created_at->diffForHumans() }})</li>
        @endforeach
    </ul>

@endif
