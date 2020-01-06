
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NegoDevis Simulation</title>
        <link href="https://fonts.googleapis.com/css?family=Racing+Sans+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
    <body>

         <div id="negodevis" class="container col-lg">
                    <a id="title_nego" href="/" class="text-decoration-none display-3 text-primary">Nego<span id="title_devis" class="display-2 text-warning">Devis</span></a>
                    <p class="lead text-white mb-3">Négocier n'a jamais été aussi simple</p>
            </div>
            <br class="my-3">
            @yield('content')

    </body>

