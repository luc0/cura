<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        <div>
            <form action="/buscar" method="get">
                <input type="text" id="btn-buscar" name="asana" />
                <submit>Buscar</submit>
            </form>
            <h1>{{ $asana->name }}</h1>
                <img src="{{ $asana->image }}" width="180" height="100  "/>
                <div class="placeholder"></div>
            <ul>
                @foreach($benefits as $benefit)
                    <li>
                        {{ $benefit->benefitable->name }}
                    </li>
                @endforeach
            </ul>
        </div>
    </body>
</html>
