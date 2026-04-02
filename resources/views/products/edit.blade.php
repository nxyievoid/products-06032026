<x-layout>
    <h2>Edit Product</h2>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}">
        @error('name')
            <div style="color:red">{{ $message }}</div>
        @enderror
        <br>
        <button type="submit">Update</button>
    </form>
</x-layout>