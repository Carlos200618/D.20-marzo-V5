<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/materialize.css') }}">
</head>

<body>
    <nav class="grey darken-2">
        <div class="container">
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo">SENA</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="{{ route('index')}}">Inicio</a></li>
                    <li><a href="{{ route('about')}}">Acerca de</a></li>
                    <li><a href="{{ route('contact')}}">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
        <li><a href="{{ route('index')}}">Inicio</a></li>
        <li><a href="{{ route('about')}}">Acerca de</a></li>
        <li><a href="{{ route('contact')}}">Contacto</a></li>
    </ul>
    <div class="container">
        <h1>Acerca de</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque illo repellendus deleniti placeat,
            eveniet quis, doloribus adipisci minima quas consectetur iure cumque vero unde consequuntur provident id
            voluptates maiores quasi.
        </p>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <script src="{{ url('js/materializa.js') }}"></script>
    <script>
    $(document).ready(function() {
        $('.sidenav').sidenav();
    });
    </script>
</body>

</html>