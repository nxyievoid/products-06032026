<div>
    <header>
        <h1>My Laravel App</h1>
        <nav>
            <a href="{{ route('products.index') }}">Products</a>
            <a href="/">Home</a>
        </nav>
        <hr>
    </header>

    <main>
        {{ $slot }}
    </main>

    <footer>
        <hr>
        <p>© 2026 My App</p>
    </footer>
</div>