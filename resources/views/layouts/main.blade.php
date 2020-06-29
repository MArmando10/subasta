<!DOCTYPE html>
<html lang="en">
<head>
    @yield('header', View::make('layouts.header'))
    <title>Document</title>
</head>
<body>
    @yield('navigation', View::make('layouts.navigation'))
    @yield('content')
</body>
</html>