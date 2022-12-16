@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            Crear Aviso
        </div>
        <div class="card-body">
            @if ($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <form method="POST" action="{{ route('admin.aviso.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Titulo del aviso:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="name" value="{{ old('name') }}" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Prioridad:</label>

                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <select  name="priority" id="priority" class="form-control @error('priority') is-invalid @enderror" name="priority" value="{{ old('priority') }}" required autocomplete="priority" autofocus>
                                    <option value="ALTA">ALTA</option>
                                    <option value="MEDIA">MEDIA</option>
                                    <option value="BAJA">BAJA</option>
                                </select>
                                </div>
                        </div>
                    </div>

                <div class="mb-3">
                    <label class="form-label">Descripcion:</label>
                    <textarea class="form-control" name="description" rows="3">{{ old('description') }}</textarea>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Carrera:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <select  name="carrera" id="carrera" class="form-control @error('carrera') is-invalid @enderror" name="carrera" value="{{ old('carrera') }}" required autocomplete="carrera" autofocus>
                                <option value="TODAS">Todas las Carreras</option>
                                <option value="LADM">Licenciatura en Administración</option>
                                <option value="LBIO">Licenciatura en Biología</option>
                                <option value="LTUR">Licenciatura en Turismo</option>
                                <option value="COPU">Contador Público</option>
                                <option value="ARQU">Arquitectura</option>
                                <option value="ICIV">Ingeniería Civil</option>
                                <option value="IADM">Ingeniería en Administración</option>
                                <option value="IELE">Ingeniería Eléctrica</option>
                                <option value="IGE">Ingeniería en Gestión Empresarial</option>
                                <option value="ISIC">Ingeniería en Sistemas Computacionales</option>
                                <option value="ITICS">Ingeniería en Tecnologías de la Información y Comunicaciones</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Semestre:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <select  name="semestre" id="semestre" class="form-control @error('semestre') is-invalid @enderror" name="semestre" value="{{ old('semestre') }}" required autocomplete="semestre" autofocus>
                                    <option value="20">Todos los Semestres</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Situacion:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <select  name="situacion" id="situacion" class="form-control @error('situacion') is-invalid @enderror" name="situacion" value="{{ old('situacion') }}" required autocomplete="situacion" autofocus>
                                    <option value="Regular">Regular</option>
                                    <option value="Irregular">Irregular</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Image:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input class="form-control" type="file" name="image">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        &nbsp;
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Manage Avisos
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewData['avisos'] as $aviso)
                        <tr>
                            <td>{{ $aviso->getId() }}</td>
                            <td>{{ $aviso->getName() }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{route('admin.aviso.edit', ['id'=> $aviso->getId()])}}">
                                    <i class="bi-pencil"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('admin.aviso.delete', $aviso->getId()) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">
                                        <i class="bi-trash"></i>
                                    </button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
