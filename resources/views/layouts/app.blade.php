<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>
</head>
<body>
    <header>
        <h1>My Laravel App</h1>
        <nav>
            <a href="{{ route('products.index') }}">Products</a>
            <a href="/">Home</a>
        </nav>
        <hr>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <hr>
        <p>© 2026 My App</p>
    </footer>
</body>
</html>