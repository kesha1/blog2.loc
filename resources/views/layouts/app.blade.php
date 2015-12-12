<!DOCTYPE html>
<html lang="ru">

@include('partials._head')

<body>
@include('partials._nav')
@include('partials._header')

@yield('content')


@include('partials._footer')

</body>

</html>
