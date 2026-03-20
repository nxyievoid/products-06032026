<div>
    @foreach ($allProducts as $singleProduct)
        <h1>{{ $singleProduct->name }}</h1>
        <a href="/products/{{ $singleProduct->id }}/delete">Delete</a>
    @endforeach
</div>
