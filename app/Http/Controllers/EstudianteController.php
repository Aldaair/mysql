<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use Illuminate\Support\Facades\DB;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes=DB::select("CALL mostrar_estudiantes()");
        return view('estudiante.index',['estudiantes'=>$estudiantes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $nombre = $request -> get ('nombre');
        $apellido = $request -> get ('apellido');
        $dni = $request -> get ('dni');
        $edad = $request -> get ('edad');
        $promedio = $request -> get ('promedio');

        DB::select('CALL nuevo_estudiante(?,?,?,?,?)',array($nombre,$apellido,$dni,$edad,$promedio));
        
        return redirect('/estudiante');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiante = Estudiante::find($id);
        return view('estudiante.edit',['estudiante'=>$estudiante]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $nombre = $request -> get ('nombre');
        $apellido = $request -> get ('apellido');
        $dni = $request -> get ('dni');
        $edad = $request -> get ('edad');
        $promedio = $request -> get ('promedio');

        DB::select('CALL editar_estudiante(?,?,?,?,?,?)',array($id,$nombre,$apellido,$dni,$edad,$promedio));

        
        return redirect('/estudiante');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::select("CALL eliminar_estudiante(?)",array($id));

        return redirect('/estudiante');
    }
}
