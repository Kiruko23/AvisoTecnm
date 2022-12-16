@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Numero de control') }}</label>
                            <!-- Numero de control -->
                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="carrera" class="col-md-4 col-form-label text-md-end">{{ __('Carrera') }}</label>
                            <!-- Carrera -->
                            <div class="col-md-6">
                            <select name="carrera" id="carrera" class="form-control @error('carrera') is-invalid @enderror" name="carrera" value="{{ old('carrera') }}" required autocomplete="carrera" autofocus>
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
                                <!--<input id="carrera" type="text" class="form-control @error('carrera') is-invalid @enderror" name="carrera" value="{{ old('carrera') }}" required autocomplete="carrera" autofocus>-->
                                @error('carrera')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="semestre" class="col-md-4 col-form-label text-md-end">{{ __('Semestre') }}</label>
                            <!-- Semestre -->
                            <div class="col-md-6">
                                <select name="semestre" id="semestre" class="form-control @error('semestre') is-invalid @enderror" name="semestre" value="{{ old('semestre') }}" required autocomplete="semestre" autofocus>
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
                                <!--<input id="semestre" type="text" class="form-control @error('semestre') is-invalid @enderror" name="semestre" value="{{ old('semestre') }}" required autocomplete="semestre" autofocus>-->
                                @error('semestre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="situacion" class="col-md-4 col-form-label text-md-end">{{ __('Situacion') }}</label>
                            <!-- situacion -->
                            <div class="col-md-6">
                                <select name="situacion" id="situacion" class="form-control @error('situacion') is-invalid @enderror" name="situacion" value="{{ old('situacion') }}" required autocomplete="situacion" autofocus>
                                    <option value="Regular">Regular</option>
                                    <option value="Irregular">Irregular</option>
                                </select>
                                <!--<input id="situacion" type="text" class="form-control @error('situacion') is-invalid @enderror" name="situacion" value="{{ old('situacion') }}" required autocomplete="situacion" autofocus>-->

                                @error('situacion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>
                            <!-- Nombre -->
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo electronico') }}</label>
                            <!-- Correo -->
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>
                            <!-- Contrasena -->
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar Contraseña') }}</label>
                            <!-- Confir Contra -->
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn bg-primary text-white">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
