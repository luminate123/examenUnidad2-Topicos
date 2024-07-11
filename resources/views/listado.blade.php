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
    <div class="w-56 ml-11 mt-9">

        <label for="" class="text-2xl mb-5">Lista de alumnos</label>
        <div class="divider mt-0"></div>
        <ul class="menu rounded-box space-y-4">
            @if($alumnos->isEmpty())
            <li>No hay alumnos registrados</li>
            @endif
            @foreach($alumnos as $alumno)
            <li><a href="/ver/{{$alumno->id}}" class="border-2 bg-orange-100 ">{{$alumno->nombre}}</a></li>

            @endforeach
        </ul>
    </div>

</body>

</html>