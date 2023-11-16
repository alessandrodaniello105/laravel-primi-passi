<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina Test Ciao Laravel</title>
</head>
<body>

    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/testpage">Test Page</a></li>
        </ul>
    </nav>

    <h1>Questa è la pagina: {{$_SERVER['REQUEST_URI']}}</h1>
    <h2>L'URL dinamico di questa pagina è: <a href="http://{{$_SERVER['HTTP_HOST']}}{{$_SERVER['REQUEST_URI']}}">http://{{$_SERVER['HTTP_HOST']}}{{$_SERVER['REQUEST_URI']}}</a></h2>

</body>
</html>
