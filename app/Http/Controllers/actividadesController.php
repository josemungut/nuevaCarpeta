<?php

namespace App\Http\Controllers;

use App\Models\actividades;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            return view('actividades.create');
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
        try {
            $clase = new actividades();
            $clase->nombre = $request->nombre;
            $clase->fecha_inicio = $request->fecha_inicio;
            $clase->fecha_fin = $request->fecha_fin;
            $nombrefoto = time() . "-" . $request->file('imagen')->getClientOriginalName();
            $clase->imagen = $nombrefoto;
            $clase->saveOrFail();
            $request->file('imagen')->storeAs('/public/', $nombrefoto);
            return redirect()->route('actividades.index')->with('status', "participante introducido");
        } catch (QueryException $ex) {
            echo $ex;
        }
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
