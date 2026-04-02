@extends('layouts.app')
@section('title', 'Products List')
@section('content')
    <h2>All Products</h2>
    <a href="{{ route('products.create') }}">Add New Product</a>
    <ul>
        @foreach($allProducts as $product)
            <li>
                {{ $product->name }}
                <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
<!-- <x-layout>
    <h2>All Products</h2>
    <a href="{{ route('products.create') }}">Add New Product</a>

    <ul>
        @foreach($allProducts as $product)
            <li>
                {{ $product->name }}
                <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</x-layout> -->