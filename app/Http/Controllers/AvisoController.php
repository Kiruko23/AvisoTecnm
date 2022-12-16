<?php

namespace App\Http\Controllers;

use App\Models\Aviso;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class AvisoController extends Controller
{

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Avisos - Avisos Tec";
        $viewData["subtitle"] = "Lista de avisos";
        $viewData["avisos"] = Aviso::all();
        return view('aviso.index')->with("viewData", $viewData);
    }
    public function show($id)
    {
        $viewData = [];
        $aviso = Aviso::findOrFail($id);
        $viewData["title"] = $aviso->getName() . " - Avisos Tec";
        $viewData["subtitle"] = "Detalle del Aviso";
        $viewData["aviso"] = $aviso;
        return view('aviso.show')->with("viewData", $viewData);
    }

    public function showFilter()
    {
        $viewData = [];
        $viewData["title"] = "Avisos - Avisos Tec";
        $viewData["subtitle"] = "Lista de avisos";
        $viewData["avisos"] = Aviso::where('carrera','=',Auth::user()->getCarrera())->get();
        return view('aviso.index')->with("viewData", $viewData);
    }

}
