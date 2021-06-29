<?php

namespace App\Http\Controllers;

use App\Models\Mesero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;

class MeseroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if(Gate::denies('manager-Mesero')){
        //     abort(403);
        // }

        $meseros = Mesero::get();
        return view('Meseros.meseros', compact('meseros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Meseros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //Validando el correo
        $request->validate([
            "email" => ['required','email:rfc'],
        ]);

        $pass = Hash::make($request['password']);
        $request['password'] = $pass;
        Mesero::create($request->all());
        return redirect()->route('jefemeseroR.meseros.index')->with('info', 'mesero creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mesero  $mesero
     * @return \Illuminate\Http\Response
     */
    public function show(Mesero $mesero)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mesero  $mesero
     * @return \Illuminate\Http\Response
     */
    public function edit(Mesero $mesero)
    {
        return view('Meseros.create',compact('mesero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mesero  $mesero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mesero $mesero)
    {
        Mesero::where('id', $mesero->id)->update($request->except('_token','_method'));
        return redirect()->route('jefemeseroR.meseros.index')->with('info', 'Mesero editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mesero  $mesero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mesero $mesero)
    {
        $mesero->delete();
        return redirect()->route('jefemeseroR.meseros.index');
    }
}
