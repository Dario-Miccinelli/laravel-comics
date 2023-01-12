<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('page-title')</title>
        <link rel="stylesheet" href="{{ asset("css/style.css") }}">


    </head>
    <body>
        <header>
            @include('components.header')
        </header>
        <main>
            <section>
                @include('components.jumbotron')
            </section>
            <div>
                @yield('components.currseries')
            </div>
            <section>
                @yield('mainpage-main')
            </section>


        </main>
        
    </body>
</html>
