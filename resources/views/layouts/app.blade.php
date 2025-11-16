<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Panel')</title>

   
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        nav {
            background: #222;
            color: white;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav a {
            color: #fff;
            margin-right: 15px;
            text-decoration: none;
            font-weight: bold;
        }
        nav form {
            display: inline;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: 30px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px #0003;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        table th, table td {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        .btn {
            padding: 8px 14px;
            border-radius: 6px;
            border: none;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
        }
        .btn-primary { background: #2563eb; color: white; }
        .btn-success { background: #16a34a; color: white; }
        .btn-warning { background: #eab308; color: black; }
        .btn-danger  { background: #dc2626; color: white; }

    </style>
</head>
<body>

    <nav>
        <div>
            <a href="{{ route('admin.products.index') }}">Productos</a>
            <a href="{{ route('productos.index') }}">Vista Público</a>
        </div>

        @auth
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-danger">Cerrar sesión</button>
        </form>
        @endauth
    </nav>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>
