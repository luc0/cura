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
            .benefits li {
                margin-bottom: 5px;
                background: #eee;
                padding: 5px;
            }
            .benefits img {
                width: 250px;
                height: 100%;
            }
            .benefit-image {
                margin-right: 5px;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <p>Resultados para <b>"{{ $request->get('asana') }}"</b></p>
                <ul class="list-unstyled benefits">
                    @foreach($asanas as $asana)
                        <li>
                            <div class="media">
                                <div class="benefit-image">
                                    <a href="{{ route('asana', ['id' => $asana->id]) }}">
                                        <img class="mr-3" src="{{ asset('img/' . $asana->image) }}" alt="{{ $asana->name }}">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0"><a href="{{ route('asana', ['id' => $asana->id]) }}">{{ $asana->name }}</a></h5>
                                    {{ $asana->description }}
                                    <div>
                                        @foreach($asana->benefits as $benefit)
                                            <span class="badge badge-primary">{{ $benefit->benefitable->name }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    </body>
</html>
