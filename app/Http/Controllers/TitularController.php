<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTitular;
use App\Models\Titular;
use Illuminate\Http\Request;

class TitularController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $busqueda = $request->busqueda;
        $titulares = Titular::where('apellido','LIKE','%'.$busqueda.'%')->orwhere('nombre','LIKE','%'.$busqueda.'%')->orwhere('dni','LIKE','%'.$busqueda.'%')->latest('id')->paginate(10);
        return view('titulares.index',compact('titulares','busqueda'))->with('titulares',$titulares);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $titulares = Titular::all();
        return view('titulares.create',compact('titulares'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTitular $request)
    {
        //
        $titular = Titular::create($request->all());
        return redirect()->route('titulares.index',$titular);
    }

    /**
     * Display the specified resource.
     */
    public function show(Titular $titulare)
    {
        //
        return view('titulares.show', compact('titulare'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Titular $titulare)
    {
        return view('titulares.edit', compact('titulare'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreTitular $request, Titular $titulare)
    {
        //
        $data = $request->validated();
        $titulare->update($data);
        return redirect()->route('titulares.show',$titulare);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
