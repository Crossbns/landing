<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro de Control</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/431fc3955d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">

</head>
<body>


    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="User">

                </div>

            </div>
        </div>
    </div>

    <form class="form" method="POST" id="form">
        <?php
            use App\Models\Usuario;
            use App\Http\Controllers\SignupController;
        ?>

        <div class="form-cont">

            <h2 class="form-cont">Registre sus Datos</h2>

            <div>
                <input type="text" class="form-input" placeholder="Nombre:" name="Nombre" required>
            </div>

            <div>
                <input type="text" class="form-input" placeholder="Usuario:" name="Usuario" required>
            </div>

            <div>
                <input type="text" class="form-input" placeholder="Contraseña:" name="Contraseña" required>
            </div>

            <div>
                <input type="text" class="form-input" placeholder="Repetir Contraseña:" name="Validación" required>
            </div>

            <button class="form-cta" type="submit" name="btnregist" value="ok">
                Registrar
            </button>

            <div class="enlace">
            <a link href="/login">Iniciar sesión</a>
            </div>
            
            <p class="warnings" id="warnings"></p>

        </div>

    </form>
      <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>