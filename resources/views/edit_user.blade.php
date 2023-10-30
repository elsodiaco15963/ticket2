@extends('home')

@section('content')
    <div class="container-edit">
        <div class="card-edit">
            <div class="card-title-edit">Editar Usuario</div>
            <div class="card-form-edit">
                <form method="POST" action="{{ route('update_user', $users->id) }}">
                @csrf
                @method('PUT')

                    <div class="form-group-edit">
                        <div class="form-label">Nombres completos</div>
                        <div class="form-input-container">
                            <input class="form-input" type="text" id="name" name="name" value="{{ $users->name }}" required autofocus>
                        </div>
                    </div>
                    <div class="form-group-edit">
                        <div class="form-label">Correo electrónico</div>
                        <div class="form-input-container">
                            <input class="form-input" type="email" id="email" name="email" value="{{ $users->email }}" required>
                        </div>
                    </div>

                    <div class="form-group-edit">
                        <div class="form-label">Contraseña</div>
                        <div class="form-input-container">
                            <input class="form-input" type="password" id="password" name="password">
                        </div>
                    </div>
                    <div class="error-message-password" style="color: #d7384a;padding-left:4%"></div>

                    <div class="form-group-edit">
                        <div class="form-label">DNI</div>
                        <div class="form-input-container">
                            <input class="form-input" type="text" id="dni" name="dni" value="{{ $users->dni }}">
                        </div>
                    </div>
                    <div class="button-container">
                        <button type="submit" class="button-submit">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
