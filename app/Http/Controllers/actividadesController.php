<?php

namespace App\Http\Controllers;

use App\Models\actividades;
use App\Models\entrenador;
use App\Models\sala;
use App\Models\tipo_actividad;
use App\Models\tipo_actividades;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class actividadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $clase4 = actividades::all();
        return view('actividades.index')->with('actividades', $clase4);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clase1 = entrenador::all();
        $clase2 = sala::all();
        $clase3 = tipo_actividades::all();
        $clase4 = actividades::all();
        try {
            return view('actividades.create')->with('id_tipo_actividad', $clase3)->with('id_sala', $clase2)->with('id_entrenador', $clase1)->with('actividades', $clase4);
        } catch (QueryException $ex) {
            echo $ex;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $clase = new actividades();
        $clase->nombre = $request->nombre;
        $clase->fecha_inicio = $request->fecha_inicio;
        $clase->fecha_fin = $request->fecha_fin;
        $clase->id_tipo_actividad = $request->id_tipo_actividad;
        $clase->id_sala = $request->id_sala;
        $clase->id_entrenador = $request->id_entrenador;
        $nombrefoto = time() . "-" . $request->file('imagen')->getClientOriginalName();
        $clase->imagen = $nombrefoto;
        $clase->saveOrFail();
        $request->file('imagen')->storeAs('/public/', $nombrefoto);
        return redirect()->route('actividades.index')->with('status', "participante introducido");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bucarId = actividades::findOrFail($id);
        $bucarId2 = tipo_actividades::findOrFail($id);
        $url = 'storage/';
        return view('actividades.show')->with('profesores', $bucarId)->with('actividades', $bucarId2)->with('url', $url);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bucarId = actividades::findOrFail($id);
        $url = '/public/storage';
        return view('actividades.edit')->with('clase', $bucarId)->with('url', $url);
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
        try {
            $request->validate([
                'nombre' => 'required',
                'fecha_inicio' => 'required',
                'fecha_fin' => 'required',
                'imagen' => 'required',
            ]);

            $clase = actividades::findOrFail($id);
            $clase->nombre = $request->nombre;
            $clase->fecha_inicio = $request->fecha_inicio;
            $clase->fecha_fin = $request->fecha_fin;
            $clase->imagen = $request->imagen;
            if (is_uploaded_file($request->imagen)) {
                $nombrefoto = time() . "-" . $request->file('imagen')->getClientOriginalName();
                $clase->imagen = $nombrefoto;
                $request->file('imagen')->storeAs('/public', $nombrefoto);
            }
            $clase->save();
            return redirect()->route('actividades.index')->with('status', "Clase editado correctamente");
        } catch (QueryException $ex) {
            echo $ex;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clase = actividades::findOrFail($id);
        $clase->delete();
        return redirect()->route('actividades.index')->with('status', "Clase borrado correctamente");
    }
}
