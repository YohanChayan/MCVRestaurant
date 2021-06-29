<?php

namespace App\Http\Controllers;

use App\Models\Jefe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;

class JefeMeseroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jefemeseros = Jefe::where('role','=',1)->get();
        return view('JefeMesero.jefemeseros', compact('jefemeseros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('JefeMesero.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validando los campos
        $request->validate([
            'name' => ['required','string', 'min:3', 'max:255'],
            'email' => ['required','email:rfc'],
        ]);

        $pass = Hash::make($request['password']);
        $request['password'] = $pass;
        Jefe::create($request->all());
        return redirect()->route('gerenteR.jefemeseros.index')->with('info', 'Jefe creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jefe  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Jefe $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jefe  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Jefe $jefemesero)
    {
        return view('JefeMesero.create',compact('jefemesero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jefe  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jefe $jefemesero)
    {
        Jefe::where('id', $jefemesero->id)->update($request->only('name','email'));
        return redirect()->route('gerenteR.jefemeseros.index')->with('info', 'jefe editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jefe  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jefe $jefemesero)
    {
        $jefemesero->delete();
        return redirect()->route('gerenteR.jefemeseros.index')->with('danger','Jefe de Mesero eliminado correctamente');
    }
}
