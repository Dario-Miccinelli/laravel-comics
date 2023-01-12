<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('page-title')</title>
        <link rel="stylesheet" href="{{ asset("css/style.css") }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">


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

        <footer>
            @include('components.footer')
        </footer>
        
    </body>
</html>
