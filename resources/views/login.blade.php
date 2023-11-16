<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <script src="https://kit.fontawesome.com/431fc3955d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <img class="govegan" src="{{ asset('images/govegan.png') }}" alt="">
    <form class="form" action="" method="POST" id="form">
        @csrf
        <div class="form-c">

            <img src="{{ asset('images/logo.png') }}" class="logo" alt="">
            <?php
            use App\Models\Usuario;
            use App\Http\Controllers\SigninController;
            ?>

            <div>
                <input class="frm-input" type="text" placeholder="Usuario:" id="user" name="Usuario" required>
            </div>

                <input class="frm-input" type="text" placeholder="Contraseña:" id="password" name="Contraseña" required>
            </div>

            <button type="submit" class="form-act" name="btniniciar" value="ok">
                Iniciar sesión
            </button>
            <a href="index.php">Volver al Inicio</a>
            <p class="war" id="war"></p>


    </form>

    </div>

    <script class="login.js"></script>
    
</body>
</html>
