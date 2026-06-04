<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Sign Up - AutoTrader</title>
    <style>
        body { background: #f5f5f5; display: flex; justify-content: center; align-items: center; height: 100vh; }
        .signup-card { background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); width: 100%; max-width: 400px; }
        .signup-card h2 { margin-bottom: 1.5rem; color: #e63946; }
        .form-group { margin-bottom: 1rem; }
        .form-group label { display: block; margin-bottom: 0.3rem; }
        .form-group input { width: 100%; padding: 0.6rem; border: 1px solid #ddd; border-radius: 6px; }
        button { width: 100%; background: #e63946; color: white; border: none; padding: 0.7rem; border-radius: 6px; font-size: 1rem; cursor: pointer; }
        button:hover { background: #c1121f; }
        .link { text-align: center; margin-top: 1rem; }
        .link a { color: #e63946; text-decoration: none; }
    </style>
</head>
<body>
    <div class="signup-card">
        <h2>Sign Up</h2>
        @foreach($errors->all() as $error)
            <p style="color:red;">{{ $error }}</p>
        @endforeach
        <form action="/signup" method="POST">
            @csrf
            <div class="form-group"><label>Username</label><input type="text" name="username" required></div>
            <div class="form-group"><label>Email</label><input type="email" name="email" required></div>
            <div class="form-group"><label>Password</label><input type="password" name="password" required></div>
            <button type="submit">Sign Up</button>
        </form>
        <div class="link">Already have an account? <a href="/login">Login</a></div>
    </div>
</body>
</html>
