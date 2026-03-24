<?php
    $datos_post = $_POST;
    if(!empty($datos_post)){
        $nombreComple = $datos_post['fullName'];
        $mail = $datos_post['email'];
        $phone = $datos_post['phone'];
        $destinatario = 'francisco.garcia.prieto@onsistems.com';
        $mensaje = $nombreComple.$mail.$phone;
        mail($destinatario, $nombreComple, $mensaje);
        }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>onsistems · Tienda online</title>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>



<body>
    <header class="fondo-cabecera">
        <div class="header-top">
            <div class="logo">
                <img src="img/logo.png" alt="onsistems logo">
            </div>

                <h1 class="hero-title">revoluciona tu presencia online</h1>
                <p class="hero-text">diseño web profesional y a medida con wordpress</p>
    
        </div>
        <div class="wave">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 220">
                <path fill="#5E42A6" fill-opacity="1" d="M0,64L48,58.7C96,53,192,43,288,32C384,21,480,11,576,37.3C672,64,768,128,864,138.7C960,149,1056,107,1152,85.3C1248,64,1344,64,1392,64L1440,64L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
            </svg>
        </div>
    </header>

    <main class="contenido">
        <div class="contenido-main">
            <div class="borde">
                <div class="oferta">
                    <h2 class="fw-bolder">¡¡3 meses gratis!!</h2>
                    <p class="fw-bold">diseño web con wordpress</p>
                    <p class="fw-bold">oferta de lanzamiento</p>
                    <div class="promocion">
                        <h3>promoción limitada</h3>
                    </div>
                </div>
            </div>
            <div class="contenedor-formulario">
                <form class="formulario" method="post">
                    <legend class="titulo-formulario">Solicita tu oferta</legend>
                    <input type="text" style="padding-left:1rem" placeholder=" Nombre completo*" required name=fullName>
                    <input type="email" style="padding-left:1rem" placeholder=" Correo electrónico" required name=email>                    
                    <input type="tel" style="padding-left:1rem" placeholder=" Teléfono (+34 001 002 003)" required name=phone>
                    <span class="aviso">La posible información que pudiera contener este formulario, relacionada con datos de carácter personal, se encuentra amparada en la LOPD 15/99, que compromete a no utilizar estos datos para fines que no sean estrictamente necesarios para la realización de su cometido, añadiendo además la absoluta confidencialidad y exclusividad, quedando prohibida a cualquier persona su revelación, copia, distribución o el ejercicio de cualquier acción relativa a su contenido.</span>
                    <input class="boton" type="submit" value="Enviar">
                </form>
            </div>
        </div>
    </main>
</body>
</html>