<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de la página</title>
    <!-- Agrega aquí tus enlaces CSS, scripts, etc. -->
    <!-- Por ejemplo, puedes incluir estilos de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Encabezado común a todas las páginas -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Test Refinery89</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <!-- Aquí puedes agregar elementos de navegación -->
                </ul>
                <!-- Aquí puedes agregar otros elementos del encabezado, como botones de inicio de sesión, etc. -->
            </div>
        </nav>
    </header>

    <!-- Contenido de la página -->
    <main>
        @yield('content')
    </main>

    <!-- Pie de página común a todas las páginas -->
    <footer>
        <!-- Aquí puedes agregar el contenido del pie de página -->
    </footer>

    <!-- Agrega aquí tus scripts JS, si es necesario -->
    <!-- Por ejemplo, puedes incluir jQuery y Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
