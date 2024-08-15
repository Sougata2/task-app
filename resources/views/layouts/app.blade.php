<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task App 11</title>
</head>
@yield('styles')
<body>
    @if (session()->has('success'))
        <p>{{ session('success') }}</p>
    @endif
    <h1>@yield('title')</h1>
    @yield('content')
</body>
</html>