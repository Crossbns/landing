<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <script src="https://kit.fontawesome.com/431fc3955d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/resources/css/signup.css">
</head>

<body>

    <form class="form" method="POST" id="form">
        <?php
            use App\Models\Mail;
            use App\Http\Controllers\AddController;
        ?>

        <div class="form-cont">

            <h2 class="form-cont">Registre al Nuevo Usuario</h2>

            <div>
                <input type="text" class="form-input" placeholder="Nombre:" name="Nombre" required>
            </div>

            <div>
                <input type="email" class="form-input" placeholder="Correo:" name="Correo" required>
            </div> 


            <button class="form-cta" type="submit" name="btncrear" value="ok">
                Registrar
            </button>
            <a href="form.php">Volver</a>
            <p class="warnings" id="warnings"></p>

        </div>

    </form>

</body>

</html>
