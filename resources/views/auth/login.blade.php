<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="icon" type="image/png" href="{{ asset('/src/Copia.png') }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            background-image: url("{{ asset('/src/Fondo 2.png') }}");
            align-items: center;
            height: 100vh;
        }

        .login-container {
            width: 200%;
            max-width: 400px;
            background: rgba(251, 251, 251, 0.797);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            text-align: center;
        }

        .login-form h2 {
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
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        .input-group input:focus {
            border-color: #007bff;
        }

        .is-invalid {
            border-color: red;
        }

        .invalid-feedback {
            color: red;
            font-size: 13px;
            margin-top: 5px;
        }

        .btn-login {
            width: 100%;
            background-color: #007bff;
            color: #fff;
            padding: 12px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-login:hover {
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
    <div class="login-container">
        <form method="POST" action="{{ route('login') }}" class="login-form">
        @csrf
            <h2>Iniciar Sesión</h2>
            <div class="input-group">
                <label for="username">Usuario</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Ingresa tu usuario">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>Las credenciales ingresadas no coinciden con nuestros registros</strong>
                    </span>
                @enderror
            </div>
            <div class="input-group">
                <label for="password">Contraseña</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Ingresa tu contraseña">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>La contraseña es incorrecta</strong>
                    </span>
                @enderror
            </div>
            <button type="submit" class="btn-login">Iniciar Sesión</button>
            <p class="signup-text">¿No tienes cuenta? <a href={{ route('register')}}>Regístrate</a></p>
        </form>
    </div>
</body>
</html>
