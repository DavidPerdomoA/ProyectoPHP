<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;

class Departament extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos=Departamento::all();

        return view('departndx', compact('departamentos'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $departamento=new Departamento();
        
        $departamento->num_departamento=$request->txtNombre;
        $departamento->save();
        
        $departamentos=Departamento::all();

        return view('departndx', compact('departamentos'));
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
        $departamentos = Departamento::find($id);
        return view('departform', compact('departamentos'))->with(['edit'=>true]);
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
        $departamentos=Departamento::findOrFail($id);
        $departamentos->id  =$request->txtId;
        $departamentos->num_departamento=$request->txtNombre;
        $departamentos->update();
        return redirect('/Departamento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Departamento::destroy($id);
        $departamentos=Departamento::all();
        return back();
    }
}
