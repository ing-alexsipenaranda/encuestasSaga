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
<img src="build/img/1.jpg" class="index-saga" placeholder="Imagen saga">
<!-- <nav class="navegacion">
        <a class="navegacion__enlace navegacion__enlace--activo enlace2" href="consultas.php">Distribuidor</a>

    </nav> -->

    <video src="/build/img/Media3.mP4" class="video-carga" loop muted autoplay playsinline ></video>

<div class="video-background">
    <video src="/build/img/Media3.mp4" loop muted autoplay playsinline class="uk-blend-multiply"></video>
</div>

    
    <div class="contenedor-app2">
        <div class="app2">
            <h1 class="nombre-pagina">Encuesta de Satisfaccion</h1>
            <?php 
           if(intval($resultado) === 1):
        ?>
        <p class="alerta exito">Encuesta Enviada Correctamente</p>


        <?php  endif;?>
            <div class="formulario-div">
            <P><b>Estimado Cliente:</b> Reciba un cordial saludo. Industria SAGA se complace en invitarlo/a a participar en nuestra encuesta. Nos gustaría conocer su nivel de satisfacción con nuestros productos y servicios, con el objetivo de mejorar aún más nuestra labor y cumplir con sus necesidades y expectativas en cuanto a la seguridad del calzado en su entorno laboral. La encuesta solo le tomará 5 minutos de su valioso tiempo. Agradecemos de antemano su participación.</P>
            

      <a class="navegacion__enlace navegacion__enlace--activo enlace2 boton" href="/empresas/inicio-empresa.php">EMPRESAS</a>
      <a class="navegacion__enlace navegacion__enlace--activo enlace2 boton" href="/cliente/inicio-cliente.php">CLIENTE FINAL</a>
      <a class="navegacion__enlace navegacion__enlace--activo enlace2 boton" href="/distribuidores//inicio-distribuidor.php">DISTRIBUIDOR</a>

            </form>
            </div>
        </div>
    </div>
    <div>
    </div>


</body>
</html>
