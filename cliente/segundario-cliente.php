<?php
session_start();

require __DIR__ . '/../includes/funciones.php';


// Recuperar valores de la sesión

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombreEmpresa = $_SESSION['nombreEmpresa'];
    $ciudadEmpresa = $_SESSION['ciudadEmpresa'];
    $nombre = $_SESSION['nombre'];
    $celular = $_SESSION['celular'];
    $cargo = $_SESSION['cargo'];
    $email = $_SESSION['email'];
    $categoria = $_SESSION['categoria'];
    $otro_categoria = $_SESSION['otro_categoria'];


    $pregunta1 = $_POST["pregunta1"];
    $pregunta2 = $_POST["pregunta2"];
    $pregunta3 = $_POST["pregunta3"];
    $pregunta4 = $_POST["pregunta4"];
    $pregunta4_1 = $_POST["pregunta4_1"];
    $pregunta5 = $_POST["pregunta5"];
    $pregunta6 = $_POST["pregunta6"];
    $pregunta6_1 = $_POST["pregunta6_1"];
    $pregunta7 = $_POST["pregunta7"];
    $pregunta8 = $_POST["pregunta8"];

   $query2 = ingresar_datos_clienteFinal($nombreEmpresa,$ciudadEmpresa, $nombre, $celular,$cargo,$email,$categoria,$otro_categoria, $pregunta1, $pregunta2,$pregunta3,$pregunta4,$pregunta4_1,$pregunta5,$pregunta6,$pregunta6_1,$pregunta7,$pregunta8);
    

   

    // Ahora puedes usar estas variables para procesar los datos del formulario.
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
<!-- <img src="../build/img/1.jpg" placeholder="Imagen saga"> -->
<!-- <nav class="navegacion">
        <a class="navegacion__enlace navegacion__enlace--activo enlace2" href="consultas.php">Distribuidor</a>

    </nav> -->


    <div class="galeria">
    <div>
        <img src="/build/img/user6.JPG" class="img-galeria">
    </div>
    <div>
        <img src="/build/img/user7.JPG" class="img-galeria">
    </div>
    <div>
        <img src="/build/img/user8.JPG" class="img-galeria">
    </div>
    <div>
        <img src="/build/img/user9.JPG" class="img-galeria">
    </div>
    <div>
        <img src="/build/img/user10.JPG" class="img-galeria">
    </div>
</div>

<div class="video-background">
    <video src="/build/img/Media3-full.mp4" loop muted autoplay playsinline class="uk-blend-multiply"></video>
</div>
    
    <div class="contenedor-app2">
        <div class="app2">
            <h1 class="nombre-pagina">Encuesta de Satisfaccion- 2 Parte</h1>
            <h3>Modulo Cliente Final</h3>
            <p class="descripcion-pagina">Llena el siguiente formulario</p>
            <div class="formulario-div">
               
 
            <form class="formulario" method="POST" action="segundario-cliente.php"> <!--INICIO FORMULARIO -->

                        <!--Datos Empresa -->
        
    <a>Indicaciones para las preguntas 1-3</a>
    <p>Seleccione de 1 a 5, ,donde 1 es pésimo y 5 es Excelente. </p>
    <img src="/build/img/3.png" class="imagen-preguntas">

                <fieldset class="fieldset">
                <!--Datos Encuesta -->
                <legend>Encuesta</legend>

                <div class="cuadro">
                    <p>1. ¿Qué tan satisfecho esta usando el calzado de seguridad SAGA? </p>
                    <div class="campo">
                    <select type="text" id="pregunta1" name="pregunta1" class="custom-select">
                    <option disabled selected>--Selecciona una opcion--</option>
                    <option value="Excelente">5. Excelente</option>
                    <option value="Bueno">4. Bueno</option>
                    <option value="Regular">3. Regular</option>
                    <option value="Malo">2. Malo</option>
                    <option value="Pesimo">1. Pésimo</option>                    
                    </select>
                    </div>
                </div>

                <div class="cuadro">
                    <p>2. ¿Considera que el calzado de seguridad SAGA cumple con la seguridad, confort y bienestar de sus colaboradores?</p>
                    <div class="campo">
                    <select type="text" id="pregunta2" name="pregunta2" class="custom-select">
                    <option disabled selected>--Selecciona una opcion--</option>
                    <option value="Excelente">5. Excelente</option>
                    <option value="Bueno">4. Bueno</option>
                    <option value="Regular">3. Regular</option>
                    <option value="Malo">2. Malo</option>
                    <option value="Pesimo">1. Pésimo</option>                   
                    </select>
                    </div>
                </div>
                <div class="cuadro">
                    <p>3. En una escala del 1 a 5, donde 1 es pésima y 5 es excelente. ¿Qué tan seguro se siente al usar el calzado de seguridad SAGA? </p>
                    <div class="campo">
                    <select type="text" id="pregunta2" name="pregunta3" class="custom-select">
                    <option disabled selected>--Selecciona una opcion--</option>
                    <option value="Excelente">5. Excelente</option>
                    <option value="Bueno">4. Bueno</option>
                    <option value="Regular">3. Regular</option>
                    <option value="Malo">2. Malo</option>
                    <option value="Pesimo">1. Pésimo</option>                     
                    </select>
                    </div>
                </div>

             
         <!--INICIO PREGUNTA-->
                <!-- <div class="cuadro ">
                    <p> 3. Calidad del producto</p>
                    <div class="campo campo-label">
                    <fieldset class="fieldset-container">
                    <div class="container">
                    <input type="radio" id="opcion1" name="pregunta3" value="Excelente">
                    <label for="opcion1">5.Excelente</label><br>

                    <input type="radio" id="opcion2" name="pregunta3" value="Bueno">
                    <label for="opcion2">4. Bueno </label><br>

                    <input type="radio" id="opcion3" name="pregunta3" value="Regular">
                    <label for="opcion3">3. Regular</label><br>

                    <input type="radio" id="opcion4" name="pregunta3" value="Malo">
                    <label for="opcion4">2. Malo</label><br>

                    <input type="radio" id="opcion5" name="pregunta3" value="Pesimo">
                    <label for="opcion5">1. Pesimo</label><br>
                    </div>
                    <img  class ="img-fieldset" src="/build/img/4.jpg">
                   
                </div>
                    
                </div>     FIN PREGUNTA -->

                <!-- INICIO PREGUNTA -->

                <div>
                    <div>
                    <p>4. ¿El Calzado de seguridad SAGA cumplen con las condiciones para suplir sus necesidades según su actividad laboral diaria?</p><br>
                    </div>
                    
                    <div class="campo cuadro">
                    <fieldset>

                    <input type="radio" name="pregunta4" id="industrial" value="Industrial">
                    <label for="industrial">Si</label><br>

                    <input type="radio" name="pregunta4" id="metalurgico" value="Metalúrgico">
                    <label for="metalurgico">NO</label><br>

                    <input type="radio" name="pregunta4" id="otro" value="Otro">
                    <label for="otro">¿Por qué?</label>
                    <input type="text" name="pregunta4_1" id="otro_categoria"><br>
                    </div>
                </div>

                <div class="cuadro">
                    <p>5.¿Con que frecuencia le realizan cambio de las botas SAGA? </p>
                    <div class="campo">
                    <select type="text" id="pregunta5" name="pregunta5" class="custom-select">
                    <option disabled selected>--Selecciona una opcion--</option>
                    <option value="Tres veces al año">1. Tres veces al año</option>
                    <option value="Dos veces al año">2. Dos veces al año</option>
                    <option value="Una vez al año">3. Una vez al año</option>
                    <option value="Cuando terminan su vida util">4. Cuando terminan su vida util</option>
                    <option value="Cuando se dañan">5. Cuando se dañan</option>                    
                    <option value="Otros">6. Otros</option>                    
                    </select>
                    </div>
                </div>

                             
         <!--INICIO PREGUNTA-->
              

                <div>
                    <div>
                    <p>6.¿Esta conforme con el Diseño de calzado de seguridad SAGA?</p><br>
                    </div>
                    
                    <div class="campo cuadro">
                    <fieldset>

                    <input type="radio" name="pregunta6" id="conformidad_1" value="Si">
                    <label for="conformidad_1">Si</label><br>

                    <input type="radio" name="pregunta6" id="conformidad_2" value="No">
                    <label for="conformidad_2">NO</label><br>

                    <input type="radio" name="pregunta6" id="conformidad_3" value="Otro">
                    <label for="conformidad_3">¿Por qué?</label>
                    <input type="text" name="pregunta6_1"><br>
                    </div>
                </div>
       


                <h3>Nos gustaría conocer sus sugerencias o recomendaciones sobre el diseño y modelo de las Botas Industriales SAGA</h3>
                
                <div class="cuadro ">
                    <p>7. De los siguientes atributos cual considera que podrimos mejorar en el calzado de seguridad SAGA: </p>
                     <div class="campo campo-label">
                        <fieldset>
                        <input type="radio" id="opcion67" name="pregunta7" value="Diseños">
                        <label for="opcion67">Ver diseños modernos y estéticamente atractivos en el calzado de seguridad</label><br>

                        <input type="radio" id="opcion68" name="pregunta7" value="integracion-materiales">
                        <label for="opcion68">La integración de materiales livianos en el diseño del calzado de seguridad </label><br>

                        <input type="radio" id="opcion69" name="pregunta7" value="Confort">
                        <label for="opcion69">Mayor confort y comodidad del calzado</label><br>

                        <input type="radio" id="opcion70" name="pregunta7" value="Resistencia antideslizantes">
                        <label for="opcion70">Mayor resistencia antideslizantes en la suela del calzado de seguridad</label><br>

                        <input type="radio" id="opcion71" name="pregunta7" value="Resistencia al agua y quimicos">
                        <label for="opcion71">Mayor resistente al agua y a sustancias químicas del calzado de seguridad</label><br>

                    </div>
                </div>

                <div class="cuadro">
                 <p>8. ¿Qué otras características o innovaciones le gustaría ver en el diseño del calzado de seguridad para mejorar su experiencia de uso y protección en el trabajo?</p><br>
                    <div class="campo">
                    <textarea type="text" id="textofinal" name="pregunta8" placeholder="Ingresa tus sugerencias"></textarea>
                    </div>
                    
                </div>

                <p class="parrafo">Apreciamos sus comentarios y sugerencias! Su opinión es sumamente valiosa para nosotros, ya que nos ayuda a mejorar continuamente nuestros productos y servicios en Industria SAGA. Gracias por compartir su perspectiva, ¡la tomaremos en cuenta para seguir creciendo y brindarle la mejor experiencia posible!</p>

            </fieldset>

                <div class="contenedor-boton-verde">
                <a class="boton-verde" href="inicio-cliente.php">Volver</a>
                </div>


                <input type="submit" name="submit" value="Enviar Formulario" class="boton-azul">
            </form>
            </div>
        </div>
    </div>
 

</body>
</html>
