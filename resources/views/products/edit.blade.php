<form action="/products/{{ $product->id }}" method="post">
    @csrf
    @method('put')
    <input type="text" name="name" value="{{ $product->name }}">
    <button>Update</button>
</form>