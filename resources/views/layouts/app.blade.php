<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/netflix-icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./css/login.css">

    <title>Netflix-clone</title>
</head>

<body>
    <div class="container">
        <header>
            <img src="./assets/img/logo.png" alt="Logo">
        </header>

        @yield('contenido')

        <footer>
            <div class="container-footer">
                <p>¿Preguntas? <a href="">Llama al 1 (408) 724-8973 (USA)</a></p>
    
                <div class="listas">
                    <ul>
                        <li><a href="">Preguntas frecuentes</a></li>
                        <li><a href="">Información corporativa</a></li>
                        <li><a href="">Preferencias de cookies</a></li>
                        <li><a href="">Centro de ayuda</a></li>
                        <li><a href="">Privacidad</a></li>
                        <li><a href="">Términos de uso</a></li>
                    </ul>
                </div>
    
                <select>
                    <option>Español</option>
                    <option>Inglês</option>
                </select>
            </div>
        </footer>
    </div>
    <script src="./js/login.js"></script>
</body>