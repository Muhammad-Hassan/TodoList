<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo List</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@include('inc.navbar')
<div class="container">
    @include('inc.errorsmessages')
    @yield('content')
</div>
<hr>
<footer id="footer">
    <p class="text-center">Copyright &copy; Todo List 2017</p>
</footer>

</body>
</html>