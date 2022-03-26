<h2>{{ $product->title }}</h2>


@if ($product->categories->count())

    <ul>
        @foreach ($product->categories as $category)
            <li>{{ $category->title }}</li>
        @endforeach
    </ul>

@endif
