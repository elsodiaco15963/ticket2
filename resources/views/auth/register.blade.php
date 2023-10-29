<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="{{asset('assets/styles.css')}}">
</head>
<body class="body-container">
    <div class="login-container">
        <form method="POST" action="{{ route('register') }}" onsubmit="return validarContrasenas()">
            @csrf
            <div class="logo-container">
                <img src="{{asset('assets/image/logo-bizflow.png')}}">
            </div>
            <h2>Registrarte</h2>
            <div class="input-container">
                <label for="name">Nombres completos</label>
                <input type="text" id="name" name="name" required autofocus>
            </div>
            <div class="input-container">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" required><br>
            </div>
            @if ($errors->has('email'))
                <div class="verification-alert">
                    {{ $errors->first('email') }}
                </div>
            @endif
            <div class="input-container">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required><br>
            </div>
            <div class="input-container">
                <label for="password-confirm">Confirmar Contraseña</label>
                <input type="password" id="password-confirm" name="password_confirmation" required><br>
            </div>
            <button type="submit" class="button">Registrar</button>
        </form>
    </div>
    <script src="{{asset('assets/scripts/register.js')}}"></script>
</body>
</html>
