<?php
session_start();

require __DIR__ . '/../includes/funciones.php';


// Recuperar valores de la sesión

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombreDistribuidor = $_SESSION['nombreDistribuidor'];
    $ciudadDistribuidor = $_SESSION['ciudadDistribuidor'];
    $nombre = $_SESSION['nombre'];
    $celular = $_SESSION['celular'];
    $cargo = $_SESSION['cargo'];
    $email = $_SESSION['email'];



    $pregunta1 = $_POST["pregunta1"];
    $pregunta2_1 = $_POST["pregunta2_1"];
    $pregunta2_2 = $_POST["pregunta2_2"];
    $pregunta2_3 = $_POST["pregunta2_3"];
    $pregunta2_4 = $_POST["pregunta2_4"];
    $pregunta2_5 = $_POST["pregunta2_5"];
    $pregunta2_6 = $_POST["pregunta2_6"];
    $pregunta2_7 = $_POST["pregunta2_7"];
    $pregunta2_8 = $_POST["pregunta2_8"];
    $pregunta2_9 = $_POST["pregunta2_9"];
    $pregunta3 = $_POST["pregunta3"];
    $pregunta4 = $_POST["pregunta4"]; 
    $pregunta5 = $_POST["pregunta5"];
    $pregunta6 = $_POST["pregunta6"];
    $pregunta7 = $_POST["pregunta7"];
    $pregunta8 = $_POST["pregunta8"];


   $query3 = ingresar_datos_distribuidores($nombreDistribuidor,$ciudadDistribuidor, $nombre, $celular,$cargo,$email, $pregunta1,  $pregunta2_1, $pregunta2_2,$pregunta2_3, $pregunta2_4, $pregunta2_5, $pregunta2_6,$pregunta2_7,$pregunta2_8,$pregunta2_9, $pregunta3,$pregunta4,$pregunta5,$pregunta6,$pregunta7,$pregunta8);
    

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
    <link rel="stylesheet" href="/build/css/style.css">
    <link rel="stylesheet" href="/build/css/normalize.css">
</head>

<body>
<img src="/build/img/1.jpg" placeholder="Imagen saga">
<nav class="navegacion">
    <!-- <p>Industrias Saga de colombia</p> -->
</nav>
<p>EN INDUSTRIAS SAGA ESTAMOS</p>
<h2 class="llamativo">Siempre Listos con el Stock Más Amplio</h2>
<video src="/build/img/Media5.mp4" class="video-carga" loop muted autoplay playsinline ></video>

<div class="video-background">
    <video src="/build/img/Media3.mp4" loop muted autoplay playsinline class="uk-blend-multiply"></video>
</div>
    
    <div class="contenedor-app2">
        <div class="app2">
            <h1 class="nombre-pagina">Encuesta de Satisfaccion- 2 Parte</h1>
            <h3>Modulo Empresas</h3>
            <p class="descripcion-pagina">Llena el siguiente formulario</p>
            <div class="formulario-div">
               
 
            <form class="formulario" method="POST" action="segundario-distribuidor.php"> <!--INICIO FORMULARIO -->

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
                    <option value="5">5. Excelente</option>
                    <option value="4">4. Bueno</option>
                    <option value="3">3. Regular</option>
                    <option value="2">2. Malo</option>
                    <option value="1">1. Pésimo</option>                    
                    </select>
                    </div>
                </div>

                <div class="cuadro">
                    <p>Selecciona de 1 a 5 según su percepción,  donde 1 es pésimo y 5 es excelente, Evaluando los siguientes atributos de los productos y servicios que le ofrecemos en Industria SAGA, Botas de Seguridad</p>

             
         <!--INICIO PREGUNTA-->
                <div class="cuadro ">
                    <p> 2.1 Calidad de la bota SAGA</p>
                    <div class="campo campo-label">
                    <fieldset class="fieldset-container">
                    <div class="container">
                    <input type="radio" id="opcion1" name="pregunta2_1" value="Excelente">
                    <label for="opcion1">5.Excelente</label><br>

                    <input type="radio" id="opcion2" name="pregunta2_1" value="Bueno">
                    <label for="opcion2">4. Bueno </label><br>

                    <input type="radio" id="opcion3" name="pregunta2_1" value="Regular">
                    <label for="opcion3">3. Regular</label><br>

                    <input type="radio" id="opcion4" name="pregunta2_1" value="Malo">
                    <label for="opcion4">2. Malo</label><br>

                    <input type="radio" id="opcion5" name="pregunta2_1" value="Pesimo">
                    <label for="opcion5">1. Pesimo</label><br>
                    </div>
                    <img  class ="img-fieldset prueba" src="/build/img/saga.png">
                   
                </div>
                    
                </div>     <!--FIN PREGUNTA-->

                             
         <!--INICIO PREGUNTA-->
                <div class="cuadro ">
                    <p>2.2 Disponibilidad de  la Bota SAGA </p>
                   <div class="campo campo-label">
                    <fieldset>
                    <input type="radio" id="opcion6" name="pregunta2_2" value="Excelente">
                    <label for="opcion6">5.Excelente</label><br>

                    <input type="radio" id="opcion7" name="pregunta2_2"  value="Bueno">
                    <label for="opcion7">4. Bueno </label><br>

                    <input type="radio" id="opcion8" name="pregunta2_2"  value="Regular">
                    <label for="opcion8">3. Regular</label><br>

                    <input type="radio" id="opcion9" name="pregunta2_2"  value="Malo">
                    <label for="opcion9">2. Malo</label><br>

                    <input type="radio" id="opcion10" name="pregunta2_2" value="Pesimo">
                    <label for="opcion10">1. Pesimo</label><br>
                    </div>
                </div>     <!--FIN PREGUNTA-->

                <div class="cuadro ">
                    <p>2.3 Precio de la Bota SAGA</p>
                   <div class="campo campo-label">
                    <fieldset>
                    <input type="radio" id="opcion11" name="pregunta2_3" value="Excelente">
                    <label for="opcion11">5.Excelente</label><br>

                    <input type="radio" id="opcion12" name="pregunta2_3" value="Bueno">
                    <label for="opcion12">4. Bueno </label><br>

                    <input type="radio" id="opcion13" name="pregunta2_3" value="Regular">
                    <label for="opcion13">3. Regular</label><br>

                    <input type="radio" id="opcion14" name="pregunta2_3" value="Malo">
                    <label for="opcion14">2. Malo</label><br>

                    <input type="radio" id="opcion15" name="pregunta2_3" value="Pesimo">
                    <label for="opcion15">1. Pesimo</label><br>
                    </div>
                </div>     <!--FIN PREGUNTA--->

                <div class="cuadro ">
                    <p>2.4 Calidad del servicio prestado por nuestros asesores comerciales</p>
                   <div class="campo campo-label">
                    <fieldset>
                    <input type="radio" id="opcion16" name="pregunta2_4" value="Excelente">
                    <label for="opcion16">5.Excelente</label><br>

                    <input type="radio" id="opcion17" name="pregunta2_4" value="Bueno">
                    <label for="opcion17">4. Bueno </label><br>

                    <input type="radio" id="opcion18" name="pregunta2_4"  value="Regular">
                    <label for="opcion18">3. Regular</label><br>

                    <input type="radio" id="opcion19" name="pregunta2_4" value="Malo">
                    <label for="opcion19">2. Malo</label><br>

                    <input type="radio" id="opcion20" name="pregunta2_4" value="Pesimo">
                    <label for="opcion20">1. Pesimo</label><br>
                    </div>
                </div>     <!--FIN PREGUNTA--->

                <div class="cuadro ">
                    <p>2.5 Especificaciones técnicas de la Bota SAGA</p>
                   <div class="campo campo-label">
                    <fieldset>
                    <input type="radio" id="opcion21" name="pregunta2_5"  value="Excelente">
                    <label for="opcion21">5.Excelente</label><br>

                    <input type="radio" id="opcion22" name="pregunta2_5" value="Bueno">
                    <label for="opcion22">4. Bueno </label><br>

                    <input type="radio" id="opcion23" name="pregunta2_5" value="Regular">
                    <label for="opcion23">3. Regular</label><br>

                    <input type="radio" id="opcion24" name="pregunta2_5" value="Malo">
                    <label for="opcion24">2. Malo</label><br>

                    <input type="radio" id="opcion25" name="pregunta2_5"value="Pesimo">
                    <label for="opcion25">1. Pesimo</label><br>
                    </div>
                </div>     <!--FIN PREGUNTA--->

                <div class="cuadro ">
                    <p>2.6 Capacitación técnica de la distintas referencias de Bota SAGA</p>
                   <div class="campo campo-label">
                    <fieldset>
                    <input type="radio" id="opcion26" name="pregunta2_6" value="Excelente">
                    <label for="opcion26">5.Excelente</label><br>

                    <input type="radio" id="opcion27" name="pregunta2_6" value="Bueno">
                    <label for="opcion27">4. Bueno </label><br>

                    <input type="radio" id="opcion28" name="pregunta2_6"  value="Regular">
                    <label for="opcion28">3. Regular</label><br>

                    <input type="radio" id="opcion29" name="pregunta2_6" value="Malo">
                    <label for="opcion29">2. Malo</label><br>

                    <input type="radio" id="opcion30" name="pregunta2_6"  value="Pesimo">
                    <label for="opcion30">1. Pesimo</label><br>
                    </div>
                </div>     <!--FIN PREGUNTA--->

                <div class="cuadro ">
                    <p>2.7 Portafolio claro y  precisos de cada referencia de Bota SAGA</p>
                   <div class="campo campo-label">
                    <fieldset>
                    <input type="radio" id="opcion31" name="pregunta2_7"  value="Excelente">
                    <label for="opcion31">5.Excelente</label><br>

                    <input type="radio" id="opcion32" name="pregunta2_7"  value="Bueno">
                    <label for="opcion32">4. Bueno </label><br>

                    <input type="radio" id="opcion33" name="pregunta2_7"  value="Regular">
                    <label for="opcion33">3. Regular</label><br>

                    <input type="radio" id="opcion34" name="pregunta2_7"   value="Malo">
                    <label for="opcion34">2. Malo</label><br>

                    <input type="radio" id="opcion35" name="pregunta2_7"   value="Pesimo">
                    <label for="opcion35">1. Pesimo</label><br>
                    </div>
                </div>     <!--FIN PREGUNTA--->

                <div class="cuadro ">
                    <p>2.8 Atención y solución oportuna a sus QRS  </p>
                   <div class="campo campo-label">
                    <fieldset>
                    <input type="radio" id="opcion36" name="pregunta2_8"  value="Excelente">
                    <label for="opcion36">5.Excelente</label><br>

                    <input type="radio" id="opcion37" name="pregunta2_8" value="Bueno">
                    <label for="opcion37">4. Bueno </label><br>

                    <input type="radio" id="opcion38" name="pregunta2_8" value="Regular">
                    <label for="opcion38">3. Regular</label><br>

                    <input type="radio" id="opcion39" name="pregunta2_8"  value="Malo">
                    <label for="opcion39">2. Malo</label><br>

                    <input type="radio" id="opcion40" name="pregunta2_8" value="Pesimo">
                    <label for="opcion40">1. Pesimo</label><br>
                    </div>
                  
                </div>     <!--FIN PREGUNTA--->

                <div class="cuadro ">
                    <p>2.9 Atención prestada por el personal de Industria SAGA</p>
                   <div class="campo campo-label">
                    <fieldset>
                    <input type="radio" id="opcion41" name="pregunta2_9"  value="Excelente">
                    <label for="opcion41">5.Excelente</label><br>

                    <input type="radio" id="opcion42" name="pregunta2_9" value="Bueno">
                    <label for="opcion42">4. Bueno </label><br>

                    <input type="radio" id="opcion43" name="pregunta2_9"  value="Regular">
                    <label for="opcion43">3. Regular</label><br>

                    <input type="radio" id="opcion44" name="pregunta2_9" value="Malo">
                    <label for="opcion44">2. Malo</label><br>

                    <input type="radio" id="opcion45" nname="pregunta2_9" value="Pesimo">
                    <label for="opcion45">1. Pesimo</label><br>
                    </div>
                  
                </div>     <!--FIN PREGUNTA--->

                <div class="cuadro">
                    <p>3. Logística y entrega de Industria SAGA</p>
                    <div class="campo">
                    <select type="text" id="pregunta3" name="pregunta3" class="custom-select">
                    <option disabled selected>--Selecciona una opcion--</option>
                    <option value="Calidad">6. Calidad</option>
                    <option value="Precio">5. Precio</option>
                    <option value="Confort">4. Confort</option>
                    <option value="Disponibilidad">3. Disponibilidad</option>
                    <option value="Seguridad">2. Seguridad</option>                    
                    <option value="Servicio tecnico">1. Servicio tecnico</option>                    
                    </select>
                    </div>
                </div>

                <div class="cuadro ">
                    <p>4. Condiciones comerciales con Industria SAGA </p>
                   <div class="campo campo-label">
                    <fieldset>
                    <input type="radio" id="opcion46" name="pregunta4" value="Tres veces al año">
                    <label for="opcion46">Tres veces al año</label><br>

                    <input type="radio" id="opcion47" name="pregunta4" value="Dos veces al año">
                    <label for="opcion47">Dos veces al año</label><br>

                    <input type="radio" id="opcion48" name="pregunta4" value="Una vez al año">
                    <label for="opcion48">Una vez al año</label><br>

                    <input type="radio" id="opcion49" name="pregunta4" value="Cuando termina su vida util">
                    <label for="opcion49">Cuando termina su vida util</label><br>

                    <input type="radio" id="opcion50" name="pregunta4" value="Cuando se dañan">
                    <label for="opcion50">Cuando se dañan</label><br>

                    <input type="radio" id="opcion51" name="pregunta4" value="Otros">
                    <label for="opcion51">Otros</label><br>

                    </div>
                  
                </div>     <!--FIN PREGUNTA--->
                


                <div class="cuadro">
                 <p>5. En una escala del 1 a 5, donde 1 no tiene participación y 5 es alta participación. ¿Cuál es el nivel de participación que tiene la marca SAGA dentro de su portafolio de productos de calzado de seguridad? </p><br>
                    <div class="campo">
                    <select type="text" id="pregunta5_opc1" name="pregunta5" class="custom-select">
                    <option disabled selected>--Selecciona una opcion--</option>
                    <option value="Alta participacion">5. Alta participacion</option>
                    <option value="Participacion Moderada">4. Participacion Moderada</option>
                    <option value="Medianamente Participacion">3. Medianamente Participacion</option>
                    <option value="Baja Participacion">2. Baja Participacion </option>
                    <option value="No tien participacion">1. No tiene participacion</option>                    
                    </select>                
                    </div>
                </div>

                <div class="cuadro ">
                    <p>6. ¿Cual atributo del calzado SAGA es el más relevante en el momento de seleccionar nuestra marca?</p>
                   <div class="campo campo-label">
                    <fieldset>
                    <input type="radio" id="opcion52" name="pregunta6" value="calidad">
                    <label for="opcion52">Calidad</label><br>

                    <input type="radio" id="opcion57" name="pregunta6" value="precio">
                    <label for="opcion57">Precio</label><br>

                    <input type="radio" id="opcion53" name="pregunta6" value="confort">
                    <label for="opcion53">Confort</label><br>

                    <input type="radio" id="opcion54" name="pregunta6" value="disponibilidad">
                    <label for="opcion54">Disponibilidad</label><br>

                    <input type="radio" id="opcion55" name="pregunta6" value="seguridad">
                    <label for="opcion55">Seguridad</label><br>

                    <input type="radio" id="opcion56" name="pregunta6" value="servicio tecnico">
                    <label for="opcion56">Servicio Tecnico</label><br>

                    </div>
                  
                </div>     <!--FIN PREGUNTA--->

                <div class="cuadro ">
                    <p>7. ¿Que tan probable es que recomiende  Botas SAGA? </p>
                   <div class="campo campo-label">
                    <fieldset>
                    <input type="radio" id="pregunta7_opcion1" name="pregunta7" value="Muy probable">
                    <label for="pregunta7_opcion1">a. Muy Probable, los productos son de excelente calidad</label><br>

                    <input type="radio" id="pregunta7_opcion2" name="pregunta7" value="Probable">
                    <label for="pregunta7_opcion2">b. Probable, los productos son buenos  </label><br>

                    <input type="radio" id="pregunta7_opcion3" name="pregunta7" value="Poco probable">
                    <label for="pregunta7_opcion3">c. poco probable, se presentan algunos inconvenientes con el producto</label><br>

                    <input type="radio" id="pregunta7_opcion4" name="pregunta7" value="No lo recomiendo">
                    <label for="pregunta7_opcion4">d. No lo recomiendo, el producto no cumple con sus expectativas</label><br>

                    </div>
                  
                </div>     <!--FIN PREGUNTA--->

                <h3>Nos gustaría conocer sus sugerencias o recomendaciones sobre el diseño y modelo de las Botas Industriales SAGA</h3>
               

                <div class="cuadro">
                 <p>8. ¿Hay alguna mejora específica que desee proponer en términos de su diseño, funcionalidad o características? </p><br>
                    <div class="campo">
                    <textarea type="text" id="textofinal" name="pregunta8" placeholder="Ingresa tus sugerencias"></textarea>
                    </div>
                    
                </div>

                <p class="parrafo">Apreciamos sus comentarios y sugerencias! Su opinión es sumamente valiosa para nosotros, ya que nos ayuda a mejorar continuamente nuestros productos y servicios en Industria SAGA. Gracias por compartir su perspectiva, ¡la tomaremos en cuenta para seguir creciendo y brindarle la mejor experiencia posible!</p>

            </fieldset>

                <div class="contenedor-boton-verde">
                <a class="boton-verde" href="inicio-distribuidor.php">Volver</a>
                </div>


                <input type="submit" name="submit" value="Enviar Formulario" class="boton-azul">
            </form>
            </div>
        </div>
    </div>
 

</body>
</html>


