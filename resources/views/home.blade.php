<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <title>Laravel</title>
        <style>
            body, input {
                color: #333;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <h1>Alternativas naturales</h1>
                    <p>Busca tu enfermedad, dolor o zona afectada</p>
                    <form action="/buscar" method="get">
                        <input type="text" id="btn-buscar" name="asana" placeholder="Buscar"/>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
