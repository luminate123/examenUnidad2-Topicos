<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <x-nav>
    </x-nav>
    <div class="grid mx-11 mt-9 space-y-11">
        <h2 class="card-title ">Notas de {{$nombrealumno}}</h2>
        <div class="flex space-x-5">
            @foreach($notas as $nota)
            <div class="card card-side bg-base-100 shadow-xl w-72 border-2 border-red-950">
                <div class="card-body">
                    <h2 class="card-title ">Curso: {{$nota->curso}}</h2>
                    <p>Nota 1: {{$nota->nota1}}</p>
                    <p>Nota 2: {{$nota->nota2}}</p>
                    <p>Promedio: {{$nota->promedio}}</p>
                    <p>Condicion: {{$nota->condicion}}</p>
                    <p>Fecha: {{$nota->created_at}}</p>
                </div>
            </div>
            @endforeach
        </div>

    </div>

</body>

</html>