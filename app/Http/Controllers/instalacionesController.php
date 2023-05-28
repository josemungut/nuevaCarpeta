<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\instalaciones;
use App\Models\tipo_actividad;

class instalacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clase = instalaciones::all();
        $url = 'storage/';
        return view('instalaciones.index')->with('hola', $clase)->with('url', $url);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clase = instalaciones::all();
        return view('instalaciones.create')->with('instalaciones', $clase);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clase = new instalaciones();
        $clase->nombre = $request->nombre;
        $clase->descripcion = $request->descripcion;
        $clase->descripcion_corta = $request->descripcion_corta;
        $nombrefoto = time() . "-" . $request->file('imagen')->getClientOriginalName();
        $clase->imagen = $nombrefoto;
        $clase->saveOrFail();
        $request->file('imagen')->storeAs('/public/', $nombrefoto);
        return redirect()->route('instalaciones.index')->with('status', "participante introducido");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bucarId = instalaciones::findOrFail($id);
        $url = 'storage/';
        return view('instalaciones.show')->with('profesores', $bucarId)->with('url', $url);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bucarId = instalaciones::findOrFail($id);
        $url = '/public/storage';
        return view('instalaciones.edit')->with('clase', $bucarId)->with('url', $url);
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
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'descripcion_corta' => 'required',
            'imagen' => 'required',
        ]);

        $clase = instalaciones::findOrFail($id);
        $clase->nombre = $request->nombre;
        $clase->descripcion = $request->descripcion;
        $clase->descripcion_corta = $request->descripcion_corta;
        $clase->imagen = $request->imagen;
        if (is_uploaded_file($request->imagen)) {
            $nombrefoto = time() . "-" . $request->file('imagen')->getClientOriginalName();
            $clase->imagen = $nombrefoto;
            $request->file('imagen')->storeAs('/public', $nombrefoto);
        }
        $clase->save();
        return redirect()->route('instalaciones.index')->with('status', "Clase editado correctamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clase = instalaciones::findOrFail($id);
        $clase->delete();
        return redirect()->route('instalaciones.index')->with('status', "Clase borrado correctamente");
    }
}
