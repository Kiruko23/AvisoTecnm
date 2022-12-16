<?php

namespace App\Http\Controllers;

use App\Models\Aviso;
use App\Models\User;
use App\Models\Recordatorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AsistenciaController extends Controller
{
    public function index(Request $request)
    {

        $avisosInAsistencia = [];
        $avisosInSession = $request->session()->get("avisos");
        if ($avisosInSession) {
            $avisosInAsistencia = Aviso::findMany(array_keys($avisosInSession));
        }
        $viewData = [];
        $viewData["title"] = "Asistencia - Online Store";
        $viewData["subtitle"] = "Shopping Asistencia";
        $viewData["avisos"] = $avisosInAsistencia;
        return view('asistencia.index')->with("viewData", $viewData);
    }
    public function add($id)
    {

            $userId = Auth::user()->getId();
            $recordatorio = new Recordatorio();
            $recordatorio->setUserId($userId);
            $recordatorio->setAvisoId($id);
            $recordatorio->save();

            //Lo redirigimos al inicio
        return redirect()->route('aviso.show', ['id'=> $id]);
    }

}
