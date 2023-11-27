<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInfraccion;
use App\Models\Automotor;
use App\Models\Infraccion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfraccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $busqueda = $request->busqueda;
        $infracciones = Infraccion::where('fecha','LIKE','%'.$busqueda.'%')->orwhere('tipo','LIKE','%'.$busqueda.'%')->latest('id')->paginate(10);
        return view('infracciones.index',compact('infracciones','busqueda'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $automotores = Automotor::all();
        $valores = DB::select('SHOW COLUMNS FROM infracciones WHERE Field = "tipo"')[0]->Type;
        preg_match('/^enum\((.*)\)$/', $valores, $valor);
        $valores = explode(',', $valor[1]);
        $tipos = array_map(function ($valor) {
            return trim($valor, "'");
        }, $valores);
        return view('infracciones.create',compact('automotores','tipos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInfraccion $request)
    {
        //
        $infraccion = Infraccion::create($request->all());
        return redirect()->route('infracciones.index',$infraccion);
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
