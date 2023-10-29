<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesion</title>
    <link rel="stylesheet" href="{{asset('assets/styles.css')}}">
</head>
<body class="body-container">
    <div class="login-container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="logo-container">
                <img src="{{asset('assets/image/logo-bizflow.png')}}">
            </div>
            <div class="input-container">
                <label>Correo Electrónico</label>
                <input type="email" id="email" name="email" required><br>
            </div>
            <div class="input-container">
                <label>Contraseña</label>
                <input type="password" id="password" name="password" required><br>
            </div>
            @if ($errors->has('email') || $errors->has('password'))
                <div class="verification-alert">
                    No se encontró la cuenta.
                </div>
            @endif
            <button type="submit" class="button">Iniciar sesión</button>
        </form>
    </div>
</body>
</html>

