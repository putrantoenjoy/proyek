<!doctype HTML5>
<html>
<head>
    @include('layouts.top')
    @include('layouts.header')
</head>

<body>
    <div id="app">
        @include('layouts.navigation')
        <main class="" id="main">
            @yield('content')
        </main>
    </div>
    @include('layouts.bottom')
</body>
</html>