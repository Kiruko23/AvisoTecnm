@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')


    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('/storage/' . $viewData['aviso']->getImage()) }}" class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $viewData['aviso']->getName() }}
                        <p>Prioridad: {{ $viewData['aviso']->getPriority() }} </p>
                    </h5>
                    <p class="card-text">{{ $viewData['aviso']->getDescription() }}</p>
                    <p class="card-text">
                    <form method="POST" action="{{ route('asistencia.add', ['id' => $viewData['aviso']->getId()]) }}">
                        <div class="row">
                            @csrf





                            <!-- ALERTS -->
							<div class="d-grid gap-2 col-3 mx-auto">
								<button type="button" class="btn bg-primary text-white" data-bs-toggle="modal" data-bs-target="#myModal">
									<!-- SPINNER -->
									<span class="spinner-grow spinner-grow-sm"></span> Añadir recordatorio
								</button>
							  </div>

							  <!-- Modal -->
							  <div class="modal" id="myModal">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">

									<!-- Modal Header -->
									<div class="modal-header">
									  <h5 class="modal-title">Recordatorio</h5>
									  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
									</div>

									<!-- Modal body -->
									<div class="modal-body text-center">
										¿Estas seguro de guardar el recordatorio?
									</div>

									<!-- Modal footer -->
									<div class="modal-footer">
                                        <button id="success" class="btn bg-primary text-white" type="submit">Guardar</button>

									</div>

								  </div>
								</div>
							  </div>















                        </div>
                    </form>
                    </p>

                </div>
            </div>
        </div>
    </div>
@endsection
