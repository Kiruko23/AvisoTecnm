<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recordatorio;
use Illuminate\Support\Facades\Auth;

class RecordatorioController extends Controller
{
    public function recordatorios()
    {
        $viewData = [];
        $viewData["title"] = "Recordatorio";
        $viewData["subtitle"] = "Mis avisos";
        $viewData["recordatorios"] = Recordatorio::where('user_id', Auth::user()->getId())->get();
        return view('mycuenta.recodatorios')->with("viewData", $viewData);
    }
}
