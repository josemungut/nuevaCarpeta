<?php

namespace App\Http\Controllers;

use App\Models\actividades;
use App\Models\reserva;
use App\Models\sala;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class reservarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clase = reserva::all();
        $clientes = array();
        foreach ($clase as $c) {
            $clientes[] = User::find($c->id_users);
        }
        $clases = array();
        foreach ($clase as $c) {
            $clases[] = actividades::find($c->id_actividad);
        }
        return view('reserva.index')->with('reserva', $clase)->with('clientes', $clientes)->with('actividades', $clases);
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

        $actividad = actividades::find($request->id_actividad);
        $sala = sala::findOrFail($actividad->id_sala);
        $sala->save();
        $clase = new reserva();
        $clase->id_actividad = $request->id_actividad;
        $clase->fecha_reserva =  date('Y-m-d H:i:s', time());
        $clase->id_users = Auth::user()->id;
        $clase->save();
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
        $clase = reserva::findOrFail($id);
        $actividad = actividades::findOrFail($clase->id_actividad);
        $sala = sala::findOrFail($actividad->id_sala);
        $sala->aforo += 1;
        $sala->save();
        $clase->delete();
        return redirect()->back();
    }
}
