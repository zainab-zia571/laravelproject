<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="npm i bootstrap@5.3.3">
    <link rel="stylesheet" href="npm i bootstrap@5.3.3">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMqZzFpQz6G0bd5zp5a3y7Fcc48Th5UV8Fl3MJE" crossorigin="anonymous">

    <title>@yield('title')</title> 
</head>
<body>
    @include('layouts.header') <!-- Include header -->
    <div class="container">
        @yield('content') <!-- Content will be injected here -->
    </div>
    @include('layouts.footer')

</body>

</html>