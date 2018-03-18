<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Laravel</title>

    <style>
        body {
            color: #333;
        }
        .contraposture img {
            width: 150px;
            height: 100%;
        }
        .contraposture ul {
            display: flex;
            justify-content: space-evenly;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm">

            <p>Busca tu enfermedad, dolor o zona afectada</p>
            <form action="/buscar" method="get">
                <input type="text" id="btn-buscar" name="asana" placeholder="Buscar"/>
            </form>

            <h1>{{ $asana->name }}</h1>
            <img src="{{ asset('img/' . $asana->image) }}" alt="{{ $asana->name }}">
            <div class="placeholder"></div>
            <ul class="list-unstyled">
                {{ $asana->description }}
                @foreach($benefits as $benefit)
                    <li>
                        <span class="badge badge-primary">{{ $benefit->benefitable->name }}</span>
                    </li>
                @endforeach
            </ul>
            @if($asana->contraindication)
                <div class="row">
                    <div class="col-sm-5">
                        <div class="contraindication">
                            <h3>Contraindicación:</h3>
                            <p>{{ $asana->contraindication }}</p>
                        </div>
                    </div>
                </div>
            @endif
            @if(count($asana->contrapostures))
                <div class="row">
                    <div class="col-sm-5">
                        <div class="contraposture">
                            <h3>Contraposturas:</h3>
                            <ul class="list-unstyled">
                                @foreach($asana->contrapostures as $contraposture)
                                    <li>
                                        <p><a href="{{ route('asana', ['asana' => $contraposture->id]) }}">{{ $contraposture->name }}</a></p>
                                        <a href="{{ route('asana', ['asana' => $contraposture->id]) }}">
                                            <img src="{{ asset('img/' . $contraposture->image) }}" alt="{{ $contraposture->name }}">
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
</body>
</html>
