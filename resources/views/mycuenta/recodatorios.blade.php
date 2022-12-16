@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    @forelse ($viewData["recordatorios"] as $recordatorio)
        <div class="card mb-4">
            <div class="card-header">
                Recordatorios #{{ $recordatorio->getId() }}
            </div>
            <div class="card-body">
                <b>Fecha de enterado:</b> {{ $recordatorio->getCreatedAt() }}<br />
                <table class="table table-bordered table-striped text-center mt-3">
                    <thead>
                        <tr>
                            <th scope="col">Titulo del aviso</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Prioridad</th>
                        </tr>
                    </thead>
                    <tbody>

                            <tr>

                            </tr>

                    </tbody>
                </table>
            </div>
        </div>
    @empty
        <div class="alert alert-danger" role="alert">
            Seems to be that you have not purchased anything in our store =(.
        </div>
    @endforelse
@endsection
