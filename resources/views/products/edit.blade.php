<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}" />
    @error('name')
        <div style="color:red">{{ $message }}</div>
    @enderror
    <button>Update</button>
</form>