<?php

use App\Models\Usuario;

$id=$_GET["id"];

$sql=$conn->query("SELECT * FROM Contacto WHERE Id=$id");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Registros</title>
    <script src="https://kit.fontawesome.com/431fc3955d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/resources/css/modificar.css">
</head>

<body>

    <form class="form" method="POST" id="form">
        <?php
            use App\Http\Controllers\UpdateController;

            while ($datos=$sql->fetch_object()) {?>
                        
        <div class="form-cont">

            <h2 class="form-cont">Modifique los Datos</h2>
            <input type="hidden" name="Id" value="<?=$_GET["id"]?>">
            <div>
                <input type="text" class="form-input" placeholder="Nombre:" name="Nombre" required value=<?= $datos->Nombre?>>
            </div>

            <div>
                <input type="email" class="form-input" placeholder="Correo:" name="Correo" required value=<?= $datos->Correo?>>
            </div> 


            <button class="form-cta" type="submit" name="btnmodify" value="ok">
                Modificar
            </button>

            <a href="form.php">Volver</a>
            <p class="warnings" id="warnings"></p>

        </div>

        <?php }

        ?>

    </form>

</body>

</html>
