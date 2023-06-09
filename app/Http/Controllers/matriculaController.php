<?php

namespace App\Http\Controllers;

use App\Models\especificaciones_matricula;
use App\Models\matricula;
use App\Models\pago;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class matriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matricula = matricula::all();
        return view('matricula.index')->with('matricula', $matricula);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clase1 = matricula::all();
        $clase2 = User::all();
        $clase3=  pago:: all();
        return view('matricula.create')->with('matricula', $clase1)->with('user', $clase2)->with('id_pago',$clase3);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'telefono' => 'numeric|max:9'
        ]);

        $clase = new matricula();
        $clase2 = User::all();
        $clase->nombre = $request->nombre;
        $clase->apellidos = $request->apellidos;
        $clase->fecha = $request->fecha;
        $clase->id_pago = $request->id_pago;
        $clase->telefono = $request->telefono;
        $clase->email = $request->email;
        $clase->descripcion = $request->descripcion;
        $clase->id_usuario = $request->id_usuario;
        $clase->saveOrFail();
        return redirect()->route('matricula.index')->with('status', "participante introducido")->with('user', $clase2);
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

        $request->validate([
            'nombre' => 'required',
            'fecha' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'descripcion' => 'required',

        ]);

        $clase = matricula::findOrFail($id);
        $clase->nombre = $request->nombre;
        $clase->fecha = $request->fecha;
        $clase->id_pago = $request->id_pago;
        $clase->telefono = $request->telefono;
        $clase->email = $request->email;
        $clase->descripcion = $request->descripcion;
        $clase->save();
        return redirect()->route('matricula.index')->with('status', "Clase editado correctamente");
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
