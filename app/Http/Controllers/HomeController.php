<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $departamentos=Departamento::all();

        return view('departndx', compact('departamentos'));
    }
}
