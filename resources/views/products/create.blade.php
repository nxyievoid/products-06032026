<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="{{ old('name') }}" />
    @error('name')
        <div style="color:red">{{ $message }}</div>
    @enderror
    <button type="submit">Send</button>
</form>