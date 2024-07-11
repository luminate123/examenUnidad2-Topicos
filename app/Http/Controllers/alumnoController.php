<?php

namespace App\Http\Controllers;

use App\Models\Alumno; // Importar el modelo Alumno
use App\Models\Nota; // Importar el modelo Nota
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class alumnoController extends Controller
{
    //
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nombre' => 'required',
                'curso' => 'required',
                'nota1' => 'required',
                'nota2' => 'required',

            ]
        );

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        //verifique que no existe otro alumno con ese nombre, solamente quiero que cree un alumno si no existe otro con el mismo nombre
        if (Alumno::where('nombre', $request->nombre)->exists()) {
            //quiero que añada los datos en la tabla notas
            $nota = Nota::create([
                'alumno_id' => Alumno::where('nombre', $request->nombre)->first()->id,
                'curso' => $request->curso,
                'nota1' => $request->nota1,
                'nota2' => $request->nota2,
                'promedio' => ($request->nota1 + $request->nota2) / 2,
                'condicion' => ($request->nota1 + $request->nota2) / 2 >= 13 ? 'Aprobado' : 'Desaprobado',
            ]);
        } else {
            $alumno = Alumno::create([
                'nombre' => $request->nombre,
            ]);

            $nota = Nota::create([
                'alumno_id' => $alumno->id,
                'curso' => $request->curso,
                'nota1' => $request->nota1,
                'nota2' => $request->nota2,
                'promedio' => ($request->nota1 + $request->nota2) / 2,
                'condicion' => ($request->nota1 + $request->nota2) / 2 >= 11 ? 'Aprobado' : 'Desaprobado',
            ]);
        }
        flash()->success('Se ha ingresado correctamente la nota del alumno');
        return redirect('/listado');
    }

    public function listado()
    {

        $alumnos = Alumno::all();
        return view('listado', compact('alumnos'));
    }

    public function show($id)
    {
        //quiero los datos de la tabla notas donde el id del alumno sea igual al id que recibo por parametro
        $notas = Nota::where('alumno_id', $id)->get();
        $nombrealumno = Alumno::where('id', $id)->first()->nombre;
        return view('ver', compact('notas', 'nombrealumno'));
    }
}
