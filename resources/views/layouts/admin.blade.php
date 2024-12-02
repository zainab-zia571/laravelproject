<!-- resources/views/layouts/admin.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Layout</title>
</head>
<body>
    <header>
        <!-- Add your admin layout header -->
        <link rel="stylesheet" href="{{ asset('CSS/admin-style.css') }}">
        <link rel="stylesheet" href="{{ asset('CSS/admincreate.css') }}">
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <!-- Add your admin layout footer -->
    </footer>
</body>
</html>
