   <h1>Add New Product</h1>

    <!-- Veiksmīgas darbības paziņojums -->
    @if(session('success'))
        <div style="color:green">{{ session('success') }}</div>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>

        <!-- Validācijas kļūdas -->
        @error('name')
            <div style="color:red">{{ $message }}</div>
        @enderror

        <button type="submit">Add Product</button>
    </form>
</body>
</html>