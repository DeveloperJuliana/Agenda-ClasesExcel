<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Citas;
use App\Http\Controllers\Carbon;

class RegistrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $fecha = $request-> get('fecha');
        $citas= DB::table('citas')->select('id','cedula', 'nom_dueño','apell_dueño','nom_mascota','fecha_cita','hora_cita')
                                  ->where('fecha_cita','LIKE','%'.$fecha.'%')->orderBy('fecha_cita','asc')->paginate(10);
        return view ('Agenda.index', compact('citas','fecha'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('agendar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate(['cedula'=>'required|min:6']);
        $cita = new Cita;
        $cita->cedula=$request->input('cedula');
        $cita->nom_dueño=$request->input('nom_dueño');
        $cita->apell_dueño=$request->input('apell_dueño');
        $cita->nom_mascota=$request->input('nom_mascota');
        $cita->fecha_cita=$request->input('fecha_cita');
        $cita->hora_cita=$request->input('hora_cita');
        $cita-> save();
        return redirect()->route('agendar.index')->with('seccess','Registro Almacenado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cita = Cita::findOrFail($id);
        return view('Agenda.Editar', compact('cita'));
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
        $cita = Cita::findOrFail($id);
        $cita->fecha_cita=$request->input('fecha_cita');
        $cita->hora_cita=$request->input('hora_cita');
        $cita->save();
        return redirect()->route('agendar.index')->with('seccess','Registro Actualizado Correctamente');
         

        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
