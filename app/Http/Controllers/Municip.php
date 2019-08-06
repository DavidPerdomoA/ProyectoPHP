<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Municipio;
use App\Departamento;
class Municip extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos=Departamento::all();
        $municipios=Municipio::all();

        return view('munindx', compact('municipios','departamentos'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentos=Departamento::all();
        $municipios=Municipio::all();
        return view('muniform', compact('municipios','departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $municipios=new Municipio();
        
        $municipios->departamentoid=$request->vid;
        $municipios->nom_municipio=$request->txtNombre;
        
        $municipios->save();
        
        $municipios=Municipio::all();

        return view('munindx', compact('municipios'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
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
        $departamentos=Departamento::all();
        $municipios = Municipio::find($id);
        return view("muniform", compact('municipios','departamentos'))->with(['edit'=>true]);;
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
        $municipios=Municipio::findOrFail($id);
        $municipios->id=$id;
        $municipios->nom_municipio=$request->txtNombre;
        $municipios->departamentoid=$request->vid;
        $municipios->update();
        return redirect('/Municipio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Municipio::destroy($id);
        $municipios=Municipio::all();
        return back();
    }
}
