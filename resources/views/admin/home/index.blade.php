@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card">
<div class="card-header">
    <h3> Panel de administración - Página de inicio</h3>
</div>
<div class="card-body">
    Bienvenido al Panel de administración, use la barra lateral para navegar entre las diferentes opciones.



<br><br>

    <div class="card">
        <div class="card-header">
            Lista de usuarios registrados
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Carrera</th>
                        <th scope="col">Semestre</th>
                        <th scope="col">Situación</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewData['users'] as $user)
                        <tr>
                            <td>{{ $user->getUsername() }}</td>
                            <td>{{ $user->getName() }}</td>
                            <td>{{ $user->getEmail() }}</td>
                            <td>{{ $user->getCarrera() }}</td>
                            <td>{{ $user->getSemestre() }}</td>
                            <td>{{ $user->getSituacion() }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>







</div>
</div>
@endsection
