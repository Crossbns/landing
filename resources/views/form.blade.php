<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro de Control</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/431fc3955d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/crud.css') }}">

</head>

<body>
    <div class="sidemenu">

        <div class="brand">
            <h2 class="">Veggies&Stuff</h2>
        </div>
        <a href="/adm"> <i class="fa-solid fa-house"></i>  Inicio</a>
        <a href="/user"> <i class="fa-solid fa-user"></i>  Usuarios</a>

    </div>

    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="User">

                </div>

            </div>
        </div>
    </div>

    <script>
        function eliminar() {
            let respuesta = confirm("¿Estas Seguro Que Deseas Eliminar?");
            return respuesta;
        }
    </script>
    <?php
            use App\Models\Usuario; 
            use App\Http\Controllers\DeleteController;
            ?>

    <div class="container-fluid row" style="width: 500px; margin: auto; margin-top: 200px; margin-left: 400px; ">

        <div class="" style="margin-left: 40px;">

            <table>
                <td>
                    <h3>Usuarios  </h3>
                </td>
                <td>
                    <a href="/user" class="btn btn-small btn-success mb-2"><i class="fa-solid fa-plus"></i></a>
                </td>
                <table>

                    <table class="table table-striped table-hover bg-white border">

                        <thead class="bg-warning text-white">
                            <tr style="text-align: center;">
                                <th scope="col">Id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    use App\Models\Usuario as UsuarioModel;
    $datos = UsuarioModel::all();
    foreach ($datos as $dato) { ?>
                            <tr>
                                <td><?=$dato->Id?></td>
                                <td><?=$dato->Nombre?></td>
                                <td><?=$dato->Correo?></td>
                                <td>
                                    <a href="editar.php?id=<?= $dato->Id ?>" class="btn btn-small btn-warning"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                    <a onclick="return eliminar ()" href="form.php?id=<?= $dato->Id ?>"
                                        class="btn btn-small btn-danger"><i class="fa-sharp fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php }
    ?>
                        </tbody>

                    </table>

        </div>

    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

</body>

</html>
