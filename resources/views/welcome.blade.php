<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 9 + Bootstrap Template</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

        <main>
            @foreach($trains as $train )
            <div class="container">
                <div class="row">
                    <div class="col text-center">

                        <div class="card">
                            <div class="card-body">
                                

                                <h1 class="card-title">{{$traintrain->office}}</h1>
                                <h2>
                                {{$traintrain->orario_di_partenza}}
                                </h2>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </main>

    </body>
</html>
