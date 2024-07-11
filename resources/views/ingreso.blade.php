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
    <div class="flex justify-center">
        <form action="{{ route('ingreso.store')}}" method="post">
            @csrf
            <div class="space-y-5 w-96 grid  mt-12">

            <label class="form-control  ">
                <div class="label">
                    <span class="label-text">Nombre del alumno</span>
                </div>
                <input type="text" name="nombre" required placeholder="Jesus Sebastian Senmache" class="input input-bordered <?php echo empty($_POST['nombre']) && isset($_POST['submit']) ? 'border-red-500' : ''; ?>" />
                <?php if (empty($_POST['nombre']) && isset($_POST['submit'])) : ?>
                    <p class="text-red-500">Ingrese el nombre del alumno</p>
                <?php endif; ?>
            </label>

            <label class="form-control ">
                <div class="label">
                    <span class="label-text">Curso</span>
                </div>
                <input type="text" name="curso" required placeholder="Matematicas" class="input input-bordered <?php echo empty($_POST['curso']) && isset($_POST['submit']) ? 'border-red-500' : ''; ?>" />
                <?php if (empty($_POST['curso']) && isset($_POST['submit'])) : ?>
                    <p class="text-red-500">Ingrese el nombre del curso</p>
                <?php endif; ?>
            </label>

            <label class="form-control ">
                <div class="label">
                    <span class="label-text">Nota 1</span>
                </div>
                <input type="number" name="nota1" required placeholder="Nota 1" class="input input-bordered <?php echo empty($_POST['nota1']) && isset($_POST['submit']) ? 'border-red-500' : ''; ?>" min="0" max="20" />
                <?php if (empty($_POST['nota1']) && isset($_POST['submit'])) : ?>
                    <p class="text-red-500">Ingrese la nota 1</p>
                <?php endif; ?>
            </label>

            <label class="form-control ">
                <div class="label">
                    <span class="label-text">Nota 2</span>
                </div>
                <input type="number" name="nota2" required placeholder="Nota 2" class="input input-bordered <?php echo empty($_POST['nota2']) && isset($_POST['submit']) ? 'border-red-500' : ''; ?>" min="0" max="20" />
                <?php if (empty($_POST['nota2']) && isset($_POST['submit'])) : ?>
                    <p class="text-red-500">Ingrese la nota 2</p>
                <?php endif; ?>
            </label>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>

</html>