<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alfinanda</title>
    
</head>
<body>
    <div id="app">
        <div class="main-wrapper">
            @include('shared.header')
            <div class="main-content">
                @yield('content')
            </div>
            @include('shared.footer')
        </div>
    </div>
</body>
</html>