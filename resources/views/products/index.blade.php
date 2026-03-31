<div>
    @foreach ($allProducts as $singleProduct)
        <h1>{{ $singleProduct->name }}</h1>
        <form action="{{ route('products.destroy', $singleProduct->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Delete</button>
        </form>
        <a href="{{ route('products.edit', $singleProduct->id) }}">Edit</a>
    @endforeach
</div>
<a href="{{ route('products.create') }}">go back to form</a>