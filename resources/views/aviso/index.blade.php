@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="row">
        @foreach ($viewData['avisos'] as $aviso)
            <div class="col-md-4 col-lg-3 mb-2">
                <div class="card">
                    <img src="{{ asset('/storage/'.$aviso->getImage()) }}" class="card-img-top img-card">
                    <div class="card-body text-center">
                        <a href="{{ route('aviso.show', ['id' => $aviso->getId()]) }}"
                            class="btn bg-primary text-white">{{ $aviso->getName() }}</a>
                            <p></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
