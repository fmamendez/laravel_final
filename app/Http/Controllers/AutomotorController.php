<?php

namespace App\Http\Controllers;

use App\Models\Automotor;
use Illuminate\Http\Request;

class AutomotorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $busqueda = $request->busqueda;
        $automotores = Automotor::where('marca','LIKE','%'.$busqueda.'%')->orwhere('modelo','LIKE','%'.$busqueda.'%')->orwhere('patente','LIKE','%'.$busqueda.'%')->latest('id')->paginate(10);
        return view('automotores.index',compact('automotores','busqueda'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
