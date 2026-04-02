<x-layout>
    <h2>Add New Product</h2>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        @error('name')
            <div style="color:red">{{ $message }}</div>
        @enderror
        <br>
        <button type="submit">Create</button>
    </form>
</x-layout>