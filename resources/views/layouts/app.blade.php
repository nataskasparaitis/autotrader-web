<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <title>AutoTrader</title>
</head>
<body>
    <nav class="top-nav">
        <div class="logo">
            <a href="/home">AutoTrader</a>
        </div>
        <div class="nav-links">
            <a href="/home"><i class="fas fa-home"></i> Home</a>
            <a href="/favorites">Favorites</a>
            <a href="/admin/categories">Manage Categories</a>
            @if(Auth::user()->role === 'admin')
                <a href="/admin"><i class="fas fa-cog"></i> Admin</a>
            @endif
        </div>
        <div class="user-info">
            <span class="user-name">{{ Auth::user()->username }}</span>
            <a href="/logout" class="logout-btn">Logout</a>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <p>&copy; 2026 AutoTrader. All rights reserved.</p>
    </footer>

    <script>
        const userFavorites = {!! json_encode($userFavorites ?? []) !!};
    </script>
    <script src="/js/main.js"></script>
    @stack('scripts')
</body>
</html>
