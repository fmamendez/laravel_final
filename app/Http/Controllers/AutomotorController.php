<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAutomotor;
use App\Models\Automotor;
use App\Models\Titular;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $titulares = Titular::all();

        $valores = DB::select('SHOW COLUMNS FROM autos WHERE Field = "tipo"')[0]->Type;
        preg_match('/^enum\((.*)\)$/', $valores, $valor);
        $valores = explode(',', $valor[1]);
        $tipos = array_map(function ($valor) {
            return trim($valor, "'");
        }, $valores);
        return view('automotores.create',compact('titulares','tipos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAutomotor $request)
    {
        //
        $automotor = Automotor::create($request->all());
        return redirect()->route('automotores.index',$automotor);
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
