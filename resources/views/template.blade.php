<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Locadora</title>
</head>
<body>
    <header>
       <h1>Cabeçalho do site</h1>
    </header>

     <main class="container">
         @yield('container')

    </main>

    <footer>
        <h1>Rodape do site</h1>
    </footer>
</body>
</html>