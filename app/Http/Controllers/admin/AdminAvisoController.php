<?php

namespace App\Http\Controllers\Admin;

use App\Models\Aviso;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminAvisoController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Avisos - Avisos TECNM";
        $viewData["avisos"] = Aviso::all();
        return view('admin.aviso.index')->with("viewData", $viewData);
    }

    public function store(Request $request)
    {
        Aviso::validate($request);

        $newAviso = new Aviso();
        $newAviso->setName($request->input('name'));
        $newAviso->setPriority($request->input('priority'));
        $newAviso->setDescription($request->input('description'));
        $newAviso->setCarrera($request->input('carrera'));
        $newAviso->setSemestre($request->input('semestre'));
        $newAviso->setSituacion($request->input('situacion'));
        $newAviso->setImage("avisos.png");
        $newAviso->save();

        if ($request->hasFile('image')) {
            $imageName = $newAviso->getId() . "." . $request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $newAviso->setImage($imageName);
            $newAviso->save();
        }

        return back();
    }

    public function delete($id)
    {
        Aviso::destroy($id);
        return back();
    }

    public function edit($id)
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Edit Aviso - Online Store";
        $viewData["aviso"] = Aviso::findOrFail($id);
        return view('admin.aviso.edit')->with("viewData", $viewData);
    }
    public function update(Request $request, $id)
    {
        Aviso::validate($request);

        $aviso = Aviso::findOrFail($id);
        $aviso->setName($request->input('name'));
        $aviso->setPriority($request->input('priority'));
        $aviso->setDescription($request->input('description'));
        $aviso->setCarrera($request->input('carrera'));
        $aviso->setSemestre($request->input('semestre'));
        $aviso->setSituacion($request->input('situacion'));
        if ($request->hasFile('image')) {
            $imageName = $aviso->getId() . "." . $request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $aviso->setImage($imageName);
        }
        $aviso->save();
        return redirect()->route('admin.aviso.index');
    }
}
