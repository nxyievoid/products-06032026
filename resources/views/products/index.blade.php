<div>
    @foreach ($allProducts as $singleProduct)
        <h1>{{ $singleProduct->name }}</h1>
        <!-- <a href="/products/{{ $singleProduct->id }}/delete">Delete</a> -->
        <form action="/products/{{ $singleProduct->id }}/delete" method="post">
            @csrf
            @method('delete')
            <button>Delete</button>
        </form>
        <form action="/products/{{ $singleProduct->id }}/edit" method="GET">
            <button>Edit</button>
        </form>
    @endforeach
</div>
<a href="/form">go back to form</a>