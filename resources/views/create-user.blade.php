@extends('home')
    
@section('content')
    <div class="container-register">
        <div class="card-register">
            <div class="card-title-register">Crear Usuario</div>
            <div class="card-form-register">
                <form method="POST" action="{{ route('crear-usuario') }}" onsubmit="return validarContrasenas()">
                @csrf
                    <div class="form-group-register">
                        <div class="form-label">Nombres completos</div>
                        <div class="form-input-container">
                            <input  class="form-input" type="text" id="name" name="name" required autofocus>
                        </div>
                    </div>
                    <div class="form-group-register">
                        <div class="form-label">Correo electronico</div>
                        <div class="form-input-container">
                            <input class="form-input" type="email" id="email" name="email" required>
                        </div>
                    </div>
                        @if ($errors->has('email'))
                        <div style="padding-left:4%;color:#d7384a">
                            {{ $errors->first('email') }}
                        </div>
                        @endif
                    <div class="form-group-register">
                        <div class="form-label">Contraseña</div>
                        <div class="form-input-container">
                            <input class="form-input" type="password" id="password" name="password" required>
                        </div>
                    </div>
                    <div class="error-message-password" style="color: #d7384a;padding-left:4%"></div>
                    <div class="form-group-register">
                        <div class="form-label">DNI</div>
                        <div class="form-input-container">
                            <input class="form-input" type="text" id="dni" name="dni">
                        </div>
                    </div>
                    @if ($errors->has('dni'))
                        <div style="padding-left:4%;color:#d7384a">
                            {{ $errors->first('dni') }}
                        </div>
                    @endif
                    <div class="error-message-dni" style="color: #d7384a;padding-left:4%"></div>
                    <div class="button-container">
                        <button type="submit" class="button-submit">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div></div>
@endsection
