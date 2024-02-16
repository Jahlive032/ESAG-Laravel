<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Template</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="../css/app.css">

        <!-- Styles -->
        <style>
            
                

                
        </style>
    </head>
    <body class="antialiased">
        

        <div class="container">
            <nav class="">
                <img src="{{ asset('image/Logo_ESAG.png') }}" alt="Example Image">
                <div class="content">
                    <h1>ESAG LARAVEL</h1>
                </div>
            </nav>
           <div class="contain">
                @include('menu')
                <div class="title">
                    <h1 >@yield('contenu')</h1>
                </div>
           </div>
        </div>
        
    </body>
</html>
