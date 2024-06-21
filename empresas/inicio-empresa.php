<?php
session_start();
$errores = []; 

$nombreEmpresa_error = '';
$sectorE_error= '';
$nombre_error= 
$celular_error = '';
$cargo_error = '';
$email_error = '';
$nombreDistribuidor_error = '';
$ciudad_error= '';
$asesor_error= '';



if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
$nombreEmpresa_error = $_POST['nombreEmpresa'];
$sectorE_error= $_POST['sectorE'];
$nombre_error= $_POST['nombre'];
$celular_error = $_POST['celular'];
$cargo_error = $_POST['cargo'];
$email_error = $_POST['email'];
$nombreDistribuidor_error= $_POST['distribuidor'];
$ciudad_error= $_POST['ciudad'];
$asesor_error= $_POST['asesor'];

    // Almacenar valores en la sesión

    if(!$nombreEmpresa_error){
        $errores[] = "Debes añadir el nombre de tu empresa";
    }
    if(!$sectorE_error){
        $errores[] = "Debes añadir el sector economico de tu empresa";
    }
    if( !$nombre_error){
        $errores[] = "El nombre es obligatorio";
    }
    if(!$celular_error){
        $errores[] = "El numero de celular es obligatorio";
    }
    if(!$cargo_error){
        $errores[] = "Debes añadir el cargo que desempeñas";
    }
    if(!$email_error){
        $errores[] = "El email es obligatorio";
    }
    if(!$nombreDistribuidor_error){
        $errores[] = "El nombre del distribuidor es obligatorio";
    }
    if(!$ciudad_error){
        $errores[] = "La ciudad es obligatoria";
    }
    if(!$asesor_error){
        $errores[] = "Debes añadir tu Asesor";
    }

    if(empty($errores)){
        $_SESSION['nombreEmpresa'] = $_POST['nombreEmpresa'];
        $_SESSION['sectorE'] = $_POST['sectorE'];
        $_SESSION['nombre'] = $_POST['nombre'];
        $_SESSION['celular'] = $_POST['celular'];
        $_SESSION['cargo'] = $_POST['cargo'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['distribuidor'] = $_POST['distribuidor'];
        $_SESSION['ciudad'] = $_POST['ciudad'];
        $_SESSION['asesor'] = $_POST['asesor'];
    
        header('Location: segundario-empresa.php');

    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta  Satisfaccion</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../build/css/style.css">
    <link rel="stylesheet" href="../build/css/normalize.css">
</head>

<body>
<img src="../build/img/1.jpg" placeholder="Imagen saga">
<!-- <nav class="navegacion">
        <a class="navegacion__enlace navegacion__enlace--activo enlace2" href="consultas.php">Distribuidor</a>

    </nav> -->

    <video src="/build/img/Media3.mp4" class="video-carga" loop muted autoplay playsinline ></video>

<div class="video-background">
    <video src="/build/img/Media3.mp4" loop muted autoplay playsinline class="uk-blend-multiply"></video>
</div>

    
    <div class="contenedor-app2">
        <div class="app2">
            <h1 class="nombre-pagina">Encuesta de Satisfaccion</h1>
            <h3>Modulo Empresa</h3>
            <p class="descripcion-pagina">Llena el siguiente formulario</p>
            <div class="formulario-div">
            <P><b>Estimado Cliente:</b> Reciba un cordial saludo. Industria SAGA se complace en invitarlo/a a participar en nuestra encuesta. Nos gustaría conocer su nivel de satisfacción con nuestros productos y servicios, con el objetivo de mejorar aún más nuestra labor y cumplir con sus necesidades y expectativas en cuanto a la seguridad del calzado en su entorno laboral. La encuesta solo le tomará 5 minutos de su valioso tiempo. Agradecemos de antemano su participación.</P>
               
            <?php foreach($errores as $error):?>
            <div class="alerta error">
                <?php  echo $error; ?>        
            </div>       
            <?php endforeach;?>




             <!--Datos Empresa -->
           <fieldset>
               <legend>Datos Empresa</legend>
               <form class="formulario" method="POST" action="inicio-empresa.php">             
               <div class="campo cuadro">
                    <label for="nombreEmpresa">Empresa</label>
                    <input type="text" id="nombreEmpresa" name="nombreEmpresa" placeholder="Ingresa el nombre de tu empresa" value="<?php echo $nombreEmpresa_error; ?>" >
                </div>

                <div class="campo cuadro">
                    <label for="sectorE">Sector economico Empresa</label>
                    <input type="text" id="sectorE" name="sectorE" placeholder="Ingresa el sector economico de tu empresa" value="<?php echo $sectorE_error; ?>">
                </div>

                </fieldset>

                <fieldset class="fieldset">
                    <!--Datos Empresa -->

           
           
                <!--Datos Personales -->
                <legend>Datos Personales</legend>

                <div class="campo cuadro">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre"  placeholder="Ingresa  tú Nombre" value="<?php echo $nombre_error; ?>">
                </div>
                
                <div class="campo cuadro">
                    <label for="celular">Celular</label>
                    <input type="number" name="celular" id="celular" placeholder="Ingresa tú Celular" value="<?php echo $celular_error; ?>">
                </div>
                <div class="campo cuadro">
                    <label for="cargo">Cargo</label>
                    <input type="text" id="cargo"  name="cargo" placeholder="Ingresa el cargo que desempeñas" value="<?php echo $cargo_error; ?>">
                </div>
                <div class="campo cuadro">
                    <label for="email">Correo Electronico</label>
                    <input type="email" id="email" name="email" placeholder="Ingresa tú correo electronico " value="<?php echo $email_error; ?>">

                </div>
                <div class="campo cuadro">
                    <label for="distribuidor">Nombre del distribuidor</label>
                    <input type="text" id="distribuidor" name="distribuidor" placeholder="Ingresa el Nombre del distribuidor" value="<?php echo $nombreDistribuidor_error; ?>">
                </div>
                <div class="campo cuadro">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" id="ciudad" name="ciudad" placeholder="Ingresa tu Ciudad" value="<?php echo $ciudad_error; ?>">
                </div>
                <div class="campo cuadro">
                    <label for="asesor">Asesor</label>
                    <input type="text" id="asesor" name="asesor" placeholder="Ingresa tu asesor" value="<?php echo $asesor_error; ?>">
                </div>

              </fieldset>  
              
              
    <div class="contenedor-boton-verde">
            <a class="boton-verde" href="/index.php">Volver al Menu</a>
    </div>


    <input type="submit" name="submit" value="Siguiente"  class="navegacion__enlace navegacion__enlace--activo enlace2 boton">

            </form>
            </div>
        </div>
    </div>
    <div>
    </div>


</body>
</html>
