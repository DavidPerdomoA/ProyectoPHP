<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;
use App\Municipio;
use App\tiquete ;

class Tiquetes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tiquetes=tiquete::all();

        return view('formndx', compact('tiquetes'));
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
        $tiquetes=new tiquete;
        
        $tiquetes->municipioid=$request->municipioid;
        $tiquetes->cantidad=$request->txtcantidad;
        $tiquetes->precio=$request->txtprecio;
        
        $tiquetes->save();
        
        $tiquetes=tiquete::all();

        return back();
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
        $municipios=Municipio::all();
        $tiquetes = Tiquete::find($id);
        return view("tiquetform", compact('tiquetes','municipios'))->with(['edit'=>true]);;
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
        $tiquetes=tiquete::findOrFail($id);
        $tiquetes->id=$id;
        $tiquetes->municipioid=$request->vid;
        $tiquetes->cantidad=$request->txtcantidad;
        $tiquetes->precio=$request->txtprecio;
        $tiquetes->update();
        return redirect('/Tiquete');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tiquete::destroy($id);
        $tiquetes=tiquete::all();
        return back();
    }
}
