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
    <div class="card card-side bg-base-100 shadow-xl border-2 border-red-950 m-52">
        <div class="card-body">
            <h2 class="card-title ">Bienvenido al registro de notas</h2>
            <p>Se realizo el programa para que se pueda ingresar el nombre del alumno, el curso, asi como 2 notas
            y su respectivo promedio. Finalizando con la condicion de aprobado que sera si el promedio del estudiante
            es de 11 o mas, de lo contrario sera reprobado.
            </p>
            <div class="card-actions justify-end">
                <a href="/ingreso" class="btn btn-primary">Ingreso</a>
            </div>
        </div>
    </div>
</body>

</html>