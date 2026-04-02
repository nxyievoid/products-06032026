<x-layout>
    <h2>Welcome to My Laravel App</h2>
    <p>This is the home page. Click the button below to manage products:</p>

    <a href="{{ route('products.index') }}" style="
        display:inline-block;
        padding:10px 20px;
        background-color:#3490dc;
        color:white;
        text-decoration:none;
        border-radius:5px;
        margin-top:10px;
    ">Go to Products</a>
</x-layout>