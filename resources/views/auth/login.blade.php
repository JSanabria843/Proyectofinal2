<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background: #e5e7eb;
            font-family: Arial, sans-serif;
        }

        .login-container {
            width: 100%;
            max-width: 400px;
            margin: 90px auto;
            background: white;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 0 12px #0003;
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        .btn {
            width: 100%;
            margin-top: 25px;
            padding: 12px;
            border: none;
            border-radius: 6px;
            background: #2563eb;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .error {
            background: #dc2626;
            color: white;
            padding: 10px;
            border-radius: 6px;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>

<body>

<div class="login-container">
    <h2>Iniciar Sesión</h2>

    @if(session('error'))
        <div class="error">{{ session('error') }}</div>
    @endif

    <form action="{{ route('login.post') }}" method="POST">
        @csrf

        <label>Correo electrónico:</label>
        <input type="email" name="email" required>

        <label>Contraseña:</label>
        <input type="password" name="password" required>

        <button class="btn">Ingresar</button>
    </form>
</div>

</body>
</html>
