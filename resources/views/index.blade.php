<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

     
    </head>
<body>
    <div>
        <ul>
            @foreach($productos as $item)
            <li>
                id {{$item->id}}
            </li>
            <li>
                nombre {{$item->nombre}}
            </li>
            <li>
                marca {{$item->marca}}
            </li>
            <li>
                tipo {{$item->tipo}}
            </li>
            
            


            @endforeach
        </ul>
    </div>
</body>
</html>
