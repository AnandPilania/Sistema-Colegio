<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evaluacione;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;



class EvaluacionesEstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','evaluacion-estudiante.index');
        $estudiante =  Auth::user()->id;
        $evaluaciones = DB::table('inscripcions')
                    ->join('inscripcion_materia', 'inscripcions.id', '=', 'inscripcion_materia.inscripcion_id')
                    ->join('evaluaciones', 'inscripcion_materia.materia_id', '=', 'evaluaciones.materia_id')
                    ->join('materias', 'inscripcion_materia.materia_id', '=', 'materias.id')
                    ->select('evaluaciones.nombre_evaluacion','evaluaciones.fecha_inicio','evaluaciones.fecha_fin','materias.nombre_materia','evaluaciones.id')
                    ->where('inscripcions.role_user_id', '=', $estudiante )
                    ->orderBy('evaluaciones.id', 'desc')
                    ->paginate(7);
        return view('admin.evaluacion-estudiante.index', compact('evaluaciones','estudiante'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Gate::authorize('haveaccess','evaluacion-estudiante.show');
        // $estudiante = Auth::user()->id;
        $evaluaciones = Evaluacione::find($id);
        return view('admin.evaluacion-estudiante.show', compact('evaluaciones'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
