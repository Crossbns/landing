<?php
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio-Veggies&Stuff</title>

    <!--Iconos-->
    <script src="https://kit.fontawesome.com/431fc3955d.js" crossorigin="anonymous"></script>

    <!--Archivo CSS-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <!--Creacion de Header-->
    <div class="encabezado">
        <input type="checkbox" id="check">
        <header class="header"> 
            
            <a href="#" class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="">
            </a>
    
            <nav class="navbar">
                <a class="button" href="#home">Inicio</a>
                <a class="button" href="#us">Nosotros</a>
                <a class="button" href="#location">Ubicacion</a>
                <a class="button" href="/login">Iniciar Sesión</a>
                <a class="button" href="/user">Registrarse</a>
                <a class="buttnon" href="#form">Contactenos</a>
            </nav>
            
            <label for="check">
                <i class="fa-solid fa-bars"></i>
                <i class="fa-solid fa-rectangle-xmark"></i>
            </label>
        </header>

    </div>

    <div class="cont" id="home">
    <img class="fondo" src="{{ asset('images/fondo.jpg') }}" alt="">
    <div class="adv">
        <h1 class="advtitle">EMPIEZA UNA NUEVA VIDA A BASE DE PRODUCTOS NATURALES</h1>
        <h5 class="advsub">¡Y SALVA A LOS ANIMALES EN EL PROCESO!</h5>
    </div>
</div>


        <div class="us" id="us">
            <img class="veggies" src="{{ asset('images/salad.png') }}" alt="">

            <h2> <span>Veggies</span> & <span>Stuff</span></h3>

                <p class="nosotros">
                    Somos una empresa dedicada a la importación de productos 100% <span>VEGANOS</span>
                    y de calidad para su venta al retail. Nuestro compromiso no es solo para con nuestros clientes
                    sino tambien tenemos un compromiso con los animales de nuestro planeta.
                </p>
                <p class="quote">
                    "No tiene sentido ir tras un animal para obtener los nutrientes que este obtuvo de una planta."
                </p>
                <p class="quote2">-Colleen Patrick Goudreau</p>    
            
        </div>

        <div class="location" id="location">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3338.886390232349!2d-64.63925633413417!3d10.188894352699728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2d73f70a6c91af%3A0xa041fa7c5aa058ad!2sBarrio%20Tierra%20Adentro%2C%20Puerto%20La%20Cruz%206023%2C%20Anzo%C3%A1tegui!5e1!3m2!1ses!2sve!4v1667846397784!5m2!1ses!2sve" 
            width="100%" height="600" style="border:0;" allowfullscreen="" 
            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
       
    <div class="form" id="form">
 
 
        <form class="form-cont" method="POST">

            <h2>Contáctanos</h2>
            <?php
                use App\Models\Mail;
                use App\Http\Controllers\MailController;
            ?>

            <div>
                <input type="text" class="form-input" id="name" name="nombre" placeholder="combre:" required>
            </div>

            <div>
                <input type="email" class="form-input" id="mail" name="correo" placeholder="correo:" required>
            </div>


            <button type="submit" class="form-cta" id="form-cta" name="btnmake" value="ok">
                Enviar
            </button>

            
            <div class="war" id="war"></div>

        </form>

    </div>
       
    <div class="foot" id="foot">

        <footer class="pie">

            <div class="grupo-1">
                <div class="redes">
                    <h3>Sigueme en Mis Redes</h3>
                        <a href="https://www.facebook.com/profile.php?id=100084864302244" target="_blank" class="fa-brands fa-facebook-f"></a>
                        <a href="https://www.instagram.com/ces.js/" target="_blank" class="fa-brands fa-instagram"></a>
                        <a href="https://twitter.com/crossbns97" target="_blank" class="fa-brands fa-twitter"></a>
                </div>
    
            </div>
    
            <div class="grupo-2">
    
                <div class="disclaimer">
                    <div class="credit"><span> © 2022 César Márquez, 6to nivel de Informática C.I: 25.852.388</span> 
                    |Todos los Derechos Reservados 2022</div>
                    <div class="credit"></div>
    
                </div>
    
            </div>
    
            </footer>

        </div>

    <script src="contacto.js"></script>
</body>


</html>