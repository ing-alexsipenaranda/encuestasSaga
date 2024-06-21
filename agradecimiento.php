<?php
session_start();
$resultado = $_GET['resultado'] ?? null;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta  Satisfaccion</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="build/css/style.css">
    <link rel="stylesheet" href="build/css/normalize.css">
</head>

<body>
<!-- <img src="build/img/1.jpg" placeholder="Imagen saga"> -->
<!-- <nav class="navegacion">
        <a class="navegacion__enlace navegacion__enlace--activo enlace2" href="consultas.php">Distribuidor</a>

    </nav> -->
    <div class="videos-agradecimiento">
    <video src="/build/img/CNC.mov" class="video-carga-fin" loop muted autoplay playsinline ></video>
    <video src="/build/img/Media2.mov" class="video-carga-fin" loop muted autoplay playsinline ></video>
    </div>

  


<div class="video-background">
    <video src="/build/img/Media3.mp4" loop muted autoplay playsinline class="uk-blend-multiply"></video>
    
</div>

    
    <div class="contenedor-app2">
        <div class="app2">
            <?php 
           if(intval($resultado) === 1):
        ?>
        <p class="alerta exito">Encuesta Enviada Correctamente</p>

        <?php  endif;?>
            <div class="formulario-div">
                <h3>GRACIAS POR RESPONDER ESTA ENCUESTA!</h3>
                <p class="parrafo">Apreciamos sus comentarios y sugerencias! Su opinión es sumamente valiosa para nosotros, ya que nos ayuda a mejorar continuamente nuestros productos y servicios en Industria SAGA. Gracias por compartir su perspectiva, ¡la tomaremos en cuenta para seguir creciendo y brindarle la mejor experiencia posible!</p>
        </div>
        </div>
           </div>
        <div class="galeria-2">
    <div>
        <img src="/build/img/user6.JPG" class="img-galeria">
    </div>
    <div>
        <img src="/build/img/user7.JPG" class="img-galeria">
    </div>

    <div>
        <img src="/build/img/user10.JPG" class="img-galeria">
    </div>

    
    <div>
        <img src="/build/img/user1.JPG" class="img-galeria">
    </div>


</div>



</body>
</html>
