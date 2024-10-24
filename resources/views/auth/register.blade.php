<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('/src/Copia.png') }}">

    <title>Registro</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            background-image: url("{{ asset('/src/Fondo 2.png') }}");
            align-items: center;
            height: 100vh;
        }

        .register-container {
            background-color: #fff;
            width: 100%;
            max-width: 500px;
            background: rgba(251, 251, 251, 0.797);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            text-align: center;
        }

        .register-container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .input-group label {
            font-size: 14px;
            color: #555;
            margin-bottom: 5px;
            display: block;
        }

        .input-group input {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: none;
        }

        .input-group input:focus {
            border-color: #007bff;
        }

        /* Estilo para los mensajes de error */
        .is-invalid {
            border-color: red;
        }

        .invalid-feedback {
            color: red;
            font-size: 13px;
            margin-top: 5px;
        }

        .btn-register {
            width: 100%;
            background-color: #007bff;
            color: #fff;
            padding: 12px;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-register:hover {
            background-color: #0056b3;
        }

        .signup-text {
            margin-top: 15px;
            font-size: 14px;
        }

        .signup-text a {
            color: #007bff;
            text-decoration: none;
        }

        .signup-text a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <div class="register-container">
        <h2>Registro</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf <!-- Token de seguridad obligatorio en Laravel -->

            <div class="input-group">
                <label for="name">Nombre</label>
                <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus placeholder="Ingresa tu nombre">
                @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-group">
                <label for="email">Correo Electrónico</label>
                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Ingresa tu correo">
                @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-group">
                <label for="password">Contraseña</label>
                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required placeholder="Ingresa tu contraseña">
                @error('password')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-group">
                <label for="password-confirm">Confirmar Contraseña</label>
                <input id="password-confirm" type="password" name="password_confirmation" required placeholder="Confirma tu contraseña">
            </div>

            <button type="submit" class="btn-register">Registrar</button>

            <p class="signup-text">¿Ya tienes cuenta? <a href="{{ route('login') }}">Inicia sesión</a></p>
        </form>
    </div>
</body>
</html>
