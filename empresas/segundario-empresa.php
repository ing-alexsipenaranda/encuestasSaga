<?php
session_start();

require __DIR__ . '/../includes/funciones.php';


// Recuperar valores de la sesión

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombreEmpresa = $_SESSION['nombreEmpresa'];
    $sectorEconomico = $_SESSION['sectorE'];
    $nombre = $_SESSION['nombre'];
    $celular = $_SESSION['celular'];
    $cargo = $_SESSION['cargo'];
    $email = $_SESSION['email'];
    $distribuidor = $_SESSION['distribuidor'];
    $ciudad = $_SESSION['ciudad'];


    $selecciones = $_POST['pregunta7'];
    $pregunta7 = implode(',', $selecciones);

    $pregunta1 = $_POST["pregunta1"];
    $pregunta2 = $_POST["pregunta2"];
    $pregunta3 = $_POST["pregunta3"];
    $pregunta3_1 = $_POST["pregunta3_1"];
    $pregunta3_2 = $_POST["pregunta3_2"];
    $pregunta3_3 = $_POST["pregunta3_3"];
    $pregunta3_4 = $_POST["pregunta3_4"];
    $pregunta3_5 = $_POST["pregunta3_5"];
    $pregunta3_6 = $_POST["pregunta3_6"];
    $pregunta3_7 = $_POST["pregunta3_7"];
    $pregunta3_8 = $_POST["pregunta3_8"];
    $pregunta4 = $_POST["pregunta4"];
    $pregunta5 = $_POST["pregunta5"];
    $pregunta6 = $_POST["pregunta6"];
    $pregunta8 = $_POST["pregunta8"];
    $pregunta9 = $_POST["pregunta9"];
    $pregunta10 = $_POST["pregunta10"];

   $query5 = ingresar_datos_empresa($nombreEmpresa,$sectorEconomico, $nombre,
   $celular,$cargo,$email,$distribuidor,$ciudad,$asesor, $pregunta1, $pregunta2,$pregunta3,
   $pregunta3_1, $pregunta3_2, $pregunta3_3, $pregunta3_4, $pregunta3_5, $pregunta3_6, $pregunta3_7, $pregunta3_8,
   $pregunta4,$pregunta5,$pregunta6,$pregunta7,$pregunta8,$pregunta9,$pregunta10);
    
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
<img src="../build/img/1.jpg" placeholder="Imagen saga">
<nav class="navegacion">
    <!-- <p>Industrias Saga de colombia</p> -->
</nav>
<p>EN INDUSTRIAS SAGA CONTAMOS CON LA </p>
<h2 class="llamativo">Tecnología que nos hace distintos</h2>
<video src="/build/img/Media1.mov" class="video-carga" loop muted autoplay playsinline ></video>

<div class="video-background">
    <video src="/build/img/Media3.mp4" loop muted autoplay playsinline class="uk-blend-multiply"></video>
</div>
    
    <div class="contenedor-app2">
        <div class="app2">
            <h1 class="nombre-pagina">Encuesta de Satisfaccion- 2 Parte</h1>
            <h3>Modulo Empresas</h3>
            <p class="descripcion-pagina">Llena el siguiente formulario</p>
            <div class="formulario-div">
               
 
            <form class="formulario" method="POST" action="segundario-empresa.php"> <!--INICIO FORMULARIO -->

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
                    <p>2. ¿Considera que el calzado de seguridad SAGA cumple con la seguridad, confort y bienestar de sus colaboradores?</p>
                    <div class="campo">
                    <select type="text" id="pregunta2" name="pregunta2" class="custom-select">
                    <option disabled selected>--Selecciona una opcion--</option>
                    <option value="5">5. Excelente</option>
                    <option value="4">4. Bueno</option>
                    <option value="3">3. Regular</option>
                    <option value="2">2. Malo</option>
                    <option value="1">1. Pésimo</option>                    
                    </select>
                    </div>
                </div>
             
         <!--INICIO PREGUNTA-->
                <div class="cuadro ">
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
                    <img  class ="img-fieldset prueba" src="/build/img/saga.png">
                   
                </div>
                    
                </div>     <!--FIN PREGUNTA-->

                             
         <!--INICIO PREGUNTA-->
                <div class="cuadro ">
                    <p>3.1 Precio del producto</p>
                   <div class="campo campo-label">
                    <fieldset>
                    <input type="radio" id="opcion6" name="pregunta3_1" value="Excelente">
                    <label for="opcion6">5.Excelente</label><br>

                    <input type="radio" id="opcion7" name="pregunta3_1" value="Bueno">
                    <label for="opcion7">4. Bueno </label><br>

                    <input type="radio" id="opcion8" name="pregunta3_1" value="Regular">
                    <label for="opcion8">3. Regular</label><br>

                    <input type="radio" id="opcion9" name="pregunta3_1" value="Malo">
                    <label for="opcion9">2. Malo</label><br>

                    <input type="radio" id="opcion10" name="pregunta3_1" value="Pesimo">
                    <label for="opcion10">1. Pesimo</label><br>
                    </div>
                </div>     <!--FIN PREGUNTA-->

                <div class="cuadro ">
                    <p>3.2 Disponibilidad del producto</p>
                   <div class="campo campo-label">
                    <fieldset>
                    <input type="radio" id="opcion11" name="pregunta3_2" value="Excelente">
                    <label for="opcion11">5.Excelente</label><br>

                    <input type="radio" id="opcion12" name="pregunta3_2" value="Bueno">
                    <label for="opcion12">4. Bueno </label><br>

                    <input type="radio" id="opcion13" name="pregunta3_2" value="Regular">
                    <label for="opcion13">3. Regular</label><br>

                    <input type="radio" id="opcion14" name="pregunta3_2"value="Malo">
                    <label for="opcion14">2. Malo</label><br>

                    <input type="radio" id="opcion15" name="pregunta3_2" value="Pesimo">
                    <label for="opcion15">1. Pesimo</label><br>
                    </div>
                </div>     <!--FIN PREGUNTA--->

                <div class="cuadro ">
                    <p>3.3 Especificaciones Tecnicas</p>
                   <div class="campo campo-label">
                    <fieldset>
                    <input type="radio" id="opcion16" name="pregunta3_3" value="Excelente">
                    <label for="opcion16">5.Excelente</label><br>

                    <input type="radio" id="opcion17" name="pregunta3_3" value="Bueno">
                    <label for="opcion17">4. Bueno </label><br>

                    <input type="radio" id="opcion18" name="pregunta3_3" value="Regular">
                    <label for="opcion18">3. Regular</label><br>

                    <input type="radio" id="opcion19" name="pregunta3_3" value="Malo">
                    <label for="opcion19">2. Malo</label><br>

                    <input type="radio" id="opcion20" name="pregunta3_3" value="Pesimo">
                    <label for="opcion20">1. Pesimo</label><br>
                    </div>
                </div>     <!--FIN PREGUNTA--->

                <div class="cuadro ">
                    <p>3.4 Atencion brindada por el distribuidor </p>
                   <div class="campo campo-label">
                    <fieldset>
                    <input type="radio" id="opcion21" name="pregunta3_4" value="Excelente">
                    <label for="opcion21">5.Excelente</label><br>

                    <input type="radio" id="opcion22" name="pregunta3_4" value="Bueno">
                    <label for="opcion22">4. Bueno </label><br>

                    <input type="radio" id="opcion23" name="pregunta3_4" value="Regular">
                    <label for="opcion23">3. Regular</label><br>

                    <input type="radio" id="opcion24" name="pregunta3_4" value="Malo">
                    <label for="opcion24">2. Malo</label><br>

                    <input type="radio" id="opcion25" name="pregunta3_4" value="Pesimo">
                    <label for="opcion25">1. Pesimo</label><br>
                    </div>
                </div>     <!--FIN PREGUNTA--->

                <div class="cuadro ">
                    <p>3.5 Logistica del producto</p>
                   <div class="campo campo-label">
                    <fieldset>
                    <input type="radio" id="opcion26" name="pregunta3_5" value="Excelente">
                    <label for="opcion26">5.Excelente</label><br>

                    <input type="radio" id="opcion27" name="pregunta3_5" value="Bueno">
                    <label for="opcion27">4. Bueno </label><br>

                    <input type="radio" id="opcion28" name="pregunta3_5" value="Regular">
                    <label for="opcion28">3. Regular</label><br>

                    <input type="radio" id="opcion29" name="pregunta3_5" value="Malo">
                    <label for="opcion29">2. Malo</label><br>

                    <input type="radio" id="opcion30" name="pregunta3_5" value="Pesimo">
                    <label for="opcion30">1. Pesimo</label><br>
                    </div>
                </div>     <!--FIN PREGUNTA--->

                <div class="cuadro ">
                    <p>3.6 Presentación del producto</p>
                   <div class="campo campo-label">
                    <fieldset>
                    <input type="radio" id="opcion31" name="pregunta3_6" value="Excelente">
                    <label for="opcion31">5.Excelente</label><br>

                    <input type="radio" id="opcion32" name="pregunta3_6" value="Bueno">
                    <label for="opcion32">4. Bueno </label><br>

                    <input type="radio" id="opcion33" name="pregunta3_6" value="Regular">
                    <label for="opcion33">3. Regular</label><br>

                    <input type="radio" id="opcion34" name="pregunta3_6" value="Malo">
                    <label for="opcion34">2. Malo</label><br>

                    <input type="radio" id="opcion35" name="pregunta3_6" value="Pesimo">
                    <label for="opcion35">1. Pesimo</label><br>
                    </div>
                </div>     <!--FIN PREGUNTA--->

                <div class="cuadro ">
                    <p>3.7 Acompañamiento asesor técnico</p>
                   <div class="campo campo-label">
                    <fieldset>
                    <input type="radio" id="opcion36" name="pregunta3_7" value="Excelente">
                    <label for="opcion36">5.Excelente</label><br>

                    <input type="radio" id="opcion37" name="pregunta3_7" value="Bueno">
                    <label for="opcion37">4. Bueno </label><br>

                    <input type="radio" id="opcion38" name="pregunta3_7" value="Regular">
                    <label for="opcion38">3. Regular</label><br>

                    <input type="radio" id="opcion39" name="pregunta3_7" value="Malo">
                    <label for="opcion39">2. Malo</label><br>

                    <input type="radio" id="opcion40" name="pregunta3_7" value="Pesimo">
                    <label for="opcion40">1. Pesimo</label><br>
                    </div>
                  
                </div>     <!--FIN PREGUNTA--->

                <div class="cuadro ">
                    <p>3.8 Comunicación de los asesores</p>
                   <div class="campo campo-label">
                    <fieldset>
                    <input type="radio" id="opcion41" name="pregunta3_8" value="Excelente">
                    <label for="opcion41">5.Excelente</label><br>

                    <input type="radio" id="opcion42" name="pregunta3_8" value="Bueno">
                    <label for="opcion42">4. Bueno </label><br>

                    <input type="radio" id="opcion43" name="pregunta3_8" value="Regular">
                    <label for="opcion43">3. Regular</label><br>

                    <input type="radio" id="opcion44" name="pregunta3_8" value="Malo">
                    <label for="opcion44">2. Malo</label><br>

                    <input type="radio" id="opcion45" name="pregunta3_8" value="Pesimo">
                    <label for="opcion45">1. Pesimo</label><br>
                    </div>
                  
                </div>     <!--FIN PREGUNTA--->

                <div class="cuadro">
                    <p>4. ¿Cual atributo del calzado SAGA es el más relevante en el momento de seleccionar nuestra marca? </p>
                    <div class="campo">
                    <select type="text" id="pregunta4" name="pregunta4" class="custom-select">
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
                    <p>5. ¿Con que frecuencia realiza cambio del calzado de seguridad SAGA en la Organización? </p>
                   <div class="campo campo-label">
                    <fieldset>
                    <input type="radio" id="opcion46" name="pregunta5" value="Tres veces al año">
                    <label for="opcion46">Tres veces al año</label><br>

                    <input type="radio" id="opcion47" name="pregunta5" value="Dos veces al año">
                    <label for="opcion47">Dos veces al año</label><br>

                    <input type="radio" id="opcion48" name="pregunta5" value="Una vez al año">
                    <label for="opcion48">Una vez al año</label><br>

                    <input type="radio" id="opcion49" name="pregunta5" value="Cuando termina su vida util">
                    <label for="opcion49">Cuando termina su vida util</label><br>

                    <input type="radio" id="opcion50" name="pregunta5" value="Cuando se dañan">
                    <label for="opcion50">Cuando se dañan</label><br>

                    <input type="radio" id="opcion51" name="pregunta5" value="Otros">
                    <label for="opcion51">Otros</label><br>

                    </div>
                  
                </div>     <!--FIN PREGUNTA--->
                


                <div class="cuadro">
                 <p>6. ¿Cuántos colaboradores usan calzado de seguridad SAGA  dentro de la organización?</p><br>
                    <div class="campo">
                    <input type="number" id="cantcolaboradores" name="pregunta6"placeholder="Ingresa la cantidad de colaboradores">
                    </div>
                </div>

                <div class="cuadro ">
                    <p>7. ¿Qué modelos de calzado de seguridad SAGA se manejan en su organización?</p>
                   <div class="campo campo-label">
                    <fieldset>
                    <input type="checkbox" id="opcion52" name="pregunta7[]" value="2021E">
                    <label for="opcion52">2021E</label><br>

                    <input type="checkbox" id="pregunta7_opc2" name="pregunta7[]" value="2022E">
                    <label for="pregunta7_opc2">2022E</label><br>

                    <input type="checkbox" id="opcion53" name="pregunta7[]" value="2023E">
                    <label for="opcion53">2023E</label><br>

                    <input type="checkbox" id="opcion54" name="pregunta7[]" value="2024">
                    <label for="opcion54">2024</label><br>

                    <input type="checkbox" id="opcion55" name="pregunta7[]" value="2033">
                    <label for="opcion55">2033</label><br>

                    <input type="checkbox" id="opcion56" name="pregunta7[]" value="3046">
                    <label for="opcion56">3046</label><br>

                    <input type="checkbox" id="opcion57" name="pregunta7[]" value="3048">
                    <label for="opcion57">3048</label><br>

                    <input type="checkbox" id="opcion58" name="pregunta7[]" value="4051">
                    <label for="opcion58">4051</label><br>

                    <input type="checkbox" id="opcion59" name="pregunta7[]" value="4059">
                    <label for="opcion59">4059</label><br>

                    <input type="checkbox" id="opcion60" name="pregunta7[]" value="4059W">
                    <label for="opcion60">4059W</label><br>

                    <input type="checkbox" id="opcion61" name="pregunta7[]" value="5010">
                    <label for="opcion61">5010</label><br>

                    <input type="checkbox" id="opcion62" name="pregunta7[]" value="5020">
                    <label for="opcion62">5020</label><br>

                    </div>
                  
                </div>     <!--FIN PREGUNTA--->

                <div class="cuadro ">
                    <p>8. ¿Que tan probable es que recomiende  Botas SAGA? </p>
                   <div class="campo campo-label">
                    <fieldset>
                    <input type="radio" id="opcion63" name="pregunta8" value="Muy probable">
                    <label for="opcion63">a. Muy Probable, los productos son de excelente calidad</label><br>

                    <input type="radio" id="opcion64" name="pregunta8" value="Probable">
                    <label for="opcion64">b. Probable, los productos son buenos  </label><br>

                    <input type="radio" id="opcion65" name="pregunta8" value="Poco probable">
                    <label for="opcion65">c. poco probable, se presentan algunos inconvenientes con el producto</label><br>

                    <input type="radio" id="opcion66" name="pregunta8" value="No lo recomiendo">
                    <label for="opcion66">d. No lo recomiendo, el producto no cumple con sus expectativas</label><br>

                    </div>
                  
                </div>     <!--FIN PREGUNTA--->

                <h3>Nos gustaría conocer sus sugerencias o recomendaciones sobre el diseño y modelo de las Botas Industriales SAGA</h3>
                
                <div class="cuadro ">
                    <p>9. De los siguientes atributos cual considera que podrimos mejorar en el calzado de seguridad SAGA: </p>
                     <div class="campo campo-label">
                        <fieldset>
                        <input type="radio" id="opcion67" name="pregunta9" value="Diseños">
                        <label for="opcion67">Ver diseños modernos y estéticamente atractivos en el calzado de seguridad</label><br>

                        <input type="radio" id="opcion68" name="pregunta9" value="materiales">
                        <label for="opcion68">La integración de materiales livianos en el diseño del calzado de seguridad </label><br>

                        <input type="radio" id="opcion69" name="pregunta9" value="Mayor confort">
                        <label for="opcion69">Mayor confort y comodidad del calzado</label><br>

                        <input type="radio" id="opcion70" name="pregunta9" value="Mayor resistencia antideslizantes">
                        <label for="opcion70">Mayor resistencia antideslizantes en la suela del calzado de seguridad</label><br>

                        <input type="radio" id="opcion71" name="pregunta9" value="Mayor resistencia al agua y quimicos">
                        <label for="opcion71">Mayor resistente al agua y a sustancias químicas del calzado de seguridad</label><br>

                    </div>
                </div>

                <div class="cuadro">
                 <p>10. ¿Qué otras características o innovaciones le gustaría ver en el diseño del calzado de seguridad para mejorar su experiencia de uso y protección en el trabajo?</p><br>
                    <div class="campo">
                    <textarea type="text" id="textofinal" name="pregunta10" placeholder="Ingresa tus sugerencias"></textarea>
                    </div>
                    
                </div>

                <p class="parrafo">Apreciamos sus comentarios y sugerencias! Su opinión es sumamente valiosa para nosotros, ya que nos ayuda a mejorar continuamente nuestros productos y servicios en Industria SAGA. Gracias por compartir su perspectiva, ¡la tomaremos en cuenta para seguir creciendo y brindarle la mejor experiencia posible!</p>

            </fieldset>

                <div class="contenedor-boton-verde">
                <a class="boton-verde" href="inicio-empresa.php">Volver</a>
                </div>


                <input type="submit" name="submit" value="Enviar Formulario" class="boton-azul">
            </form>
            </div>
        </div>
    </div>
 

</body>
</html>
