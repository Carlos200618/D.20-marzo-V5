<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
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
        <h1>Inicio</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque illo repellendus deleniti placeat,
            eveniet quis, doloribus adipisci minima quas consectetur iure cumque vero unde consequuntur provident id
            voluptates maiores quasi.
        </p>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d254511.78464797293!2d-74.31439574096837!3d4.639225722952603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1679349747358!5m2!1ses!2sco"
            width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
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