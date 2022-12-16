<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Aviso;
use Illuminate\Http\Request;

class AvisosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aviso = Aviso::all();

        return response()->json([
            'status' => true,
            'avisos' => $aviso
        ]);
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
        $aviso = Aviso::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Avisoo Creado con exito!",
            'aviso' => $aviso
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aviso  $aviso
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aviso = Aviso::find($id);

        return response()->json([
            'status' => true,
            'aviso' => $aviso
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aviso  $aviso
     * @return \Illuminate\Http\Response
     */
    public function edit(Aviso $aviso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aviso  $aviso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aviso $aviso)
    {


        $aviso->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Avisoo actualizado con exito!",
            'aviso' => $aviso
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aviso  $aviso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aviso $aviso)
    {
        $aviso->delete();

        return response()->json([
            'status' => true,
            'message' => "Avisoo eliminado con exito!",
        ], 200);
    }
}
