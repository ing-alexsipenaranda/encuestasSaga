<?php
        require 'database.php';


function ingresar_datos_clienteFinal($nombreEmpresa,$ciudadEmpresa, $nombre, $celular,$cargo,$email,$categoria,$otro_categoria, $pregunta1, $pregunta2,$pregunta3,$pregunta4,$pregunta4_1,$pregunta5,$pregunta6,$pregunta6_1,$pregunta7,$pregunta8){             

    try {
        require 'database.php';
        $categoria = empty($categoria) ? 'NO RESPONDE' : $categoria;
        $otro_categoria = empty($otro_categoria) ? 'NO RESPONDE' : $otro_categoria;
        $pregunta1 = empty($pregunta1) ? 'NO RESPONDE' : $pregunta1;
        $pregunta2 = empty($pregunta2) ? 'NO RESPONDE' : $pregunta2;
        $pregunta3 = empty($pregunta3) ? 'NO RESPONDE' : $pregunta3;
        $pregunta4 = empty($pregunta4) ? 'NO RESPONDE' : $pregunta4;
        $pregunta4_1 = empty($pregunta4_1) ? 'NO RESPONDE' : $pregunta4_1;
        $pregunta5 = empty($pregunta5) ? 'NO RESPONDE' : $pregunta5;
        $pregunta6 = empty($pregunta6) ? 'NO RESPONDE' : $pregunta6;
        $pregunta6_1 = empty($pregunta6_1) ? 'NO RESPONDE' : $pregunta6_1;
        $pregunta7 = empty($pregunta7) ? 'NO RESPONDE' : $pregunta7;
        $pregunta8 = empty($pregunta8) ? 'NO RESPONDE' : $pregunta8;

        $nombreEmpresa = mysqli_real_escape_string($db, $nombreEmpresa);
        $ciudadEmpresa = mysqli_real_escape_string($db, $ciudadEmpresa);
        $nombre = mysqli_real_escape_string($db, $nombre);
        $celular = mysqli_real_escape_string($db, $celular);
        $cargo = mysqli_real_escape_string($db, $cargo);
        $email = mysqli_real_escape_string($db, $email);
        $categoria = mysqli_real_escape_string($db, $categoria);
        $otro_categoria = mysqli_real_escape_string($db, $otro_categoria);
        $pregunta1 = mysqli_real_escape_string($db, $pregunta1);
        $pregunta2 = mysqli_real_escape_string($db, $pregunta2);
        $pregunta3 = mysqli_real_escape_string($db, $pregunta3);
        $pregunta4 = mysqli_real_escape_string($db, $pregunta4);
        $pregunta4_1 = mysqli_real_escape_string($db, $pregunta4_1);
        $pregunta5 = mysqli_real_escape_string($db, $pregunta5);
        $pregunta6 = mysqli_real_escape_string($db, $pregunta6);
        $pregunta6_1 = mysqli_real_escape_string($db, $pregunta6_1);
        $pregunta7 = mysqli_real_escape_string($db, $pregunta7);
        $pregunta8 = mysqli_real_escape_string($db, $pregunta8);


        $sql = "INSERT INTO ClienteFinal ( nombreEmpresa, ciudadEmpresa, nombre, celular, cargo, email, categoria, otro_categoria, pregunta1, pregunta2, pregunta3, pregunta4, pregunta4_1, pregunta5, pregunta6, pregunta6_1, pregunta7, pregunta8) VALUES ('$nombreEmpresa', '$ciudadEmpresa', '$nombre', $celular ,'$cargo','$email','$categoria', '$otro_categoria', '$pregunta1', '$pregunta2','$pregunta3', '$pregunta4', '$pregunta4_1','$pregunta5', '$pregunta6', '$pregunta6_1', '$pregunta7', '$pregunta8');";  
        $consulta2 = mysqli_query($db, $sql);

        if ($consulta2) {
            // El INSERT INTO se realizó correctamente
            
            header('Location: /agradecimiento.php?resultado=1');
            
        } else {
            // Error al ejecutar el INSERT INTO
            echo "Error al realizar el registro.";
        }

        return $consulta2;
    
    } catch (\Throwable $th) {
        var_dump($th);
    }
    
}

//INGRESAR DATOS EMPRESA

//obtener_total();

//DISTRIBUIDORES


function ingresar_datos_distribuidores($nombreDistribuidor,$ciudadDistribuidor, $nombre, $celular,$cargo,$email, $pregunta1, $pregunta2_1, $pregunta2_2,$pregunta2_3, $pregunta2_4, $pregunta2_5, $pregunta2_6,$pregunta2_7,$pregunta2_8,$pregunta2_9, $pregunta3,$pregunta4,$pregunta5,$pregunta6,$pregunta7,$pregunta8){                   

    try {
        require 'database.php';
        $pregunta1 = empty($pregunta1) ? 'NO RESPONDE' : $pregunta1;
        $pregunta2 = empty($pregunta2) ? 'NO RESPONDE' : $pregunta2;
        $pregunta2_1 = empty($pregunta2_1) ? 'NO RESPONDE' : $pregunta2_1;
        $pregunta2_2 = empty($pregunta2_2) ? 'NO RESPONDE' : $pregunta2_2;
        $pregunta2_3 = empty($pregunta2_3) ? 'NO RESPONDE' : $pregunta2_3;
        $pregunta2_4= empty($pregunta2_4) ? 'NO RESPONDE' : $pregunta2_4;
        $pregunta2_5 = empty($pregunta2_5) ? 'NO RESPONDE' : $pregunta2_5;
        $pregunta2_6 = empty($pregunta2_6) ? 'NO RESPONDE' : $pregunta2_6;
        $pregunta2_7 = empty($pregunta2_7) ? 'NO RESPONDE' : $pregunta2_7;
        $pregunta2_8 = empty($pregunta2_8) ? 'NO RESPONDE' : $pregunta2_8;
        $pregunta2_9 = empty($pregunta2_9) ? 'NO RESPONDE' : $pregunta2_9;
        $pregunta3 = empty($pregunta3) ? 'NO RESPONDE' : $pregunta3;
        $pregunta4 = empty($pregunta4) ? 'NO RESPONDE' : $pregunta4;
        $pregunta5 = empty($pregunta5) ? 'NO RESPONDE' : $pregunta5;
        $pregunta6 = empty($pregunta6) ? 'NO RESPONDE' : $pregunta6;
        $pregunta7 = empty($pregunta7) ? 'NO RESPONDE' : $pregunta7;
        $pregunta8 = empty($pregunta8) ? 'NO RESPONDE' : $pregunta8;

        $nombreDistribuidor = mysqli_real_escape_string($db, $nombreDistribuidor);
        $ciudadDistribuidor = mysqli_real_escape_string($db, $ciudadDistribuidor);
        $nombre = mysqli_real_escape_string($db, $nombre);
        $celular = mysqli_real_escape_string($db, $celular);
        $cargo = mysqli_real_escape_string($db, $cargo);
        $email = mysqli_real_escape_string($db, $email);
        $pregunta1 = mysqli_real_escape_string($db, $pregunta1);//satisfecho
        $pregunta2_1 = mysqli_real_escape_string($db, $pregunta2_1);
        $pregunta2_2 = mysqli_real_escape_string($db, $pregunta2_2);
        $pregunta2_3 = mysqli_real_escape_string($db, $pregunta2_3);
        $pregunta2_4 = mysqli_real_escape_string($db, $pregunta2_4);
        $pregunta2_5 = mysqli_real_escape_string($db, $pregunta2_5);
        $pregunta2_6 = mysqli_real_escape_string($db, $pregunta2_6);
        $pregunta2_7 = mysqli_real_escape_string($db, $pregunta2_7);
        $pregunta2_8 = mysqli_real_escape_string($db, $pregunta2_8);
        $pregunta2_9 = mysqli_real_escape_string($db, $pregunta2_9);
        $pregunta3 = mysqli_real_escape_string($db, $pregunta3);
        $pregunta4 = mysqli_real_escape_string($db, $pregunta4);
        $pregunta5 = mysqli_real_escape_string($db, $pregunta5);
        $pregunta6 = mysqli_real_escape_string($db, $pregunta6);
        $pregunta7 = mysqli_real_escape_string($db, $pregunta7);
        $pregunta8 = mysqli_real_escape_string($db, $pregunta8);


        $sql = "INSERT INTO Distribuidor( nombreDistribuidor, ciudadDistribuidor, nombre, 
        celular, cargo, email, satisfecho, calidad, disponibilidad, precio, calidad_servicio, especificaciones_tecnicas, capacitacion_tecnica, portafolio, atencion_qrs, atencion_personal, logistica_y_entrega, condiciones_comerciales, nivel_participacion, atributos_relevantes, recomendacion, sugerencia) 
        VALUES ('$nombreDistribuidor','$ciudadDistribuidor','$nombre','$celular','$cargo','$email','$pregunta1','$pregunta2_1','$pregunta2_2','$pregunta2_3','$pregunta2_4','$pregunta2_5','$pregunta2_6','$pregunta2_7','$pregunta2_8','$pregunta2_9','$pregunta3','$pregunta4','$pregunta5','$pregunta6','$pregunta7','$pregunta8');";  
       
       $consulta3= mysqli_query($db, $sql);

        if ($consulta3) {
            // El INSERT INTO se realizó correctamente
            header('Location: /agradecimiento.php?resultado=1');
            
        } else {
            // Error al ejecutar el INSERT INTO
            echo "Error al realizar el registro.";
        }

        return $consulta3;
    
    } catch (\Throwable $th) {
        var_dump($th);
    }
    
}




//EMPRESAS 

function ingresar_datos_empresa($nombreEmpresa,$sectorEconomico, $nombre,
$celular,$cargo,$email,$distribuidor,$ciudad,$asesor, $pregunta1, $pregunta2,$pregunta3,
$pregunta3_1, $pregunta3_2, $pregunta3_3, $pregunta3_4, $pregunta3_5, $pregunta3_6, $pregunta3_7, $pregunta3_8,
$pregunta4,$pregunta5,$pregunta6,$pregunta7,$pregunta8,$pregunta9,$pregunta10) {                   

    try {
        require 'database.php';
        $pregunta1 = empty($pregunta1) ? 'NO RESPONDE' : $pregunta1;
        $pregunta2 = empty($pregunta2) ? 'NO RESPONDE' : $pregunta2;
        $pregunta3 = empty($pregunta3) ? 'NO RESPONDE' : $pregunta3;
        $pregunta3_1 = empty($pregunta3_1) ? 'NO RESPONDE' : $pregunta3_1;
        $pregunta3_2 = empty($pregunta3_2) ? 'NO RESPONDE' : $pregunta3_2;
        $pregunta3_3 = empty($pregunta3_3) ? 'NO RESPONDE' : $pregunta3_3;
        $pregunta3_4= empty($pregunta3_4) ? 'NO RESPONDE' :  $pregunta3_4;
        $pregunta3_5 = empty($pregunta3_5) ? 'NO RESPONDE' : $pregunta3_5;
        $pregunta3_6 = empty($pregunta3_6) ? 'NO RESPONDE' : $pregunta3_6;
        $pregunta3_7 = empty($pregunta3_7) ? 'NO RESPONDE' : $pregunta3_7;
        $pregunta3_8 = empty($pregunta3_8) ? 'NO RESPONDE' : $pregunta3_8;
        $pregunta4 = empty($pregunta4) ? 'NO RESPONDE' : $pregunta4;
        $pregunta5 = empty($pregunta5) ? 'NO RESPONDE' : $pregunta5;
        $pregunta6 = empty($pregunta6) ? 'NO RESPONDE' : $pregunta6;
        $pregunta7 = empty($pregunta7) ? 'NO RESPONDE' : $pregunta7;
        $pregunta8 = empty($pregunta8) ? 'NO RESPONDE' : $pregunta8;
        $pregunta9 = empty($pregunta8) ? 'NO RESPONDE' : $pregunta9;
        $pregunta10 = empty($pregunta8) ? 'NO RESPONDE' : $pregunta10;

        $nombreEmpresa = mysqli_real_escape_string($db, $nombreEmpresa);
        $sectorEconomico = mysqli_real_escape_string($db, $sectorEconomico);
        $nombre = mysqli_real_escape_string($db, $nombre);
        $celular = mysqli_real_escape_string($db, $celular);
        $cargo = mysqli_real_escape_string($db, $cargo);
        $distribuidor = mysqli_real_escape_string($db, $distribuidor);
        $email = mysqli_real_escape_string($db, $email);
        $asesor = mysqli_real_escape_string($db, $asesor);
        $pregunta1 = mysqli_real_escape_string($db, $pregunta1);//satisfecho
        $pregunta2 = mysqli_real_escape_string($db, $pregunta2);//satisfecho
        $pregunta3 = mysqli_real_escape_string($db, $pregunta3);//satisfecho
        $pregunta3_1 = mysqli_real_escape_string($db, $pregunta3_1);
        $pregunta3_2 = mysqli_real_escape_string($db, $pregunta3_2);
        $pregunta3_3 = mysqli_real_escape_string($db, $pregunta3_3);
        $pregunta3_4 = mysqli_real_escape_string($db, $pregunta3_4);
        $pregunta3_5 = mysqli_real_escape_string($db, $pregunta3_5);
        $pregunta3_6 = mysqli_real_escape_string($db, $pregunta3_6);
        $pregunta3_7 = mysqli_real_escape_string($db, $pregunta3_7);
        $pregunta3_8 = mysqli_real_escape_string($db, $pregunta3_8);
        $pregunta3_9 = mysqli_real_escape_string($db, $pregunta3_9);
        $pregunta4 = mysqli_real_escape_string($db, $pregunta4);
        $pregunta5 = mysqli_real_escape_string($db, $pregunta5);
        $pregunta6 = mysqli_real_escape_string($db, $pregunta6);
        $pregunta7 = mysqli_real_escape_string($db, $pregunta7);
        $pregunta8 = mysqli_real_escape_string($db, $pregunta8);
        $pregunta9 = mysqli_real_escape_string($db, $pregunta9);
        $pregunta10 = mysqli_real_escape_string($db, $pregunta10);


        $sql = "INSERT INTO Empresa (
            nombreEmpresa, sectorEconomico, nombre, celular, cargo, email, distribuidor, ciudad,
            nivel_satisfecho, puntaje_cumplimiento, calidadBota, precioBota, disponibilidadBota,
            especificacionesTecnicas, atencionDistribuidor, logisticaBota, presentacionBota, acompañamientoAsesor, comunicacionAsesor, atributoRelevante, frecuenciaCambio,
            cantColaboradores, modelosUsadosEmpresa, recomendacion, atributosMejorar, sugerencia
        ) VALUES (
            '$nombreEmpresa', '$sectorEconomico', '$nombre', $celular, '$cargo', '$email',
            '$distribuidor', '$ciudad', '$pregunta1', '$pregunta2', '$pregunta3', '$pregunta3_1',
            '$pregunta3_2', '$pregunta3_3', '$pregunta3_4', '$pregunta3_5', '$pregunta3_6',
            '$pregunta3_7', '$pregunta3_8', '$pregunta4', '$pregunta5', '$pregunta6', '$pregunta7',
            '$pregunta8', '$pregunta9', '$pregunta10')";

       $consulta3= mysqli_query($db, $sql);

        if ($consulta3) {
            // El INSERT INTO se realizó correctamente
            header('Location: /agradecimiento.php?resultado=1');
            
        } else {
            // Error al ejecutar el INSERT INTO
            echo "Error al realizar el registro.";
        }

        return $consulta3;
    
    } catch (\Throwable $th) {
        var_dump($th);
    }
    
}



?>

