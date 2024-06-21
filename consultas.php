
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO ALMACEN</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="build/css/style.css">
    <link rel="stylesheet" href="build/css/normalize.css">
</head>

<body>

    <img src="build/img/1.jpg" placeholder="Imagen saga">
    <nav class="navegacion">
        <a class="navegacion__enlace" href="index.php">FORMULARIO</a>
    </nav>
    <div class="contenedor-app">
        <div class="app">
            <h1 class="nombre-pagina">FORMULARIO CONSULTAS</h1>
            <p class="descripcion-pagina">Llena el siguiente formulario</p>
            <p class="descripcion-pagina">Este es solo para realizar consultas</p>

            <form class="formulario" method="POST" action="/crear-cuenta">            
                <div class="campo cuadro">
                    <label for="bodega"> CONSULTA BODEGA</label>
                    <input id="txtInputBodega" type="text" placeholder="Ingresa número" oninput="showSuggestions(this.value, 'suggestionListNumber')">
                    <br><br><
                    <div id="suggestionListNumber"></div>
                </div>
                <div class="campo cuadro">
                    <label for="parte"> CONSULTA PARTE</label>
                    <input id="txtInputParte" type="text" placeholder="Ingresa número" oninput="showNewSuggestions(this.value, 'suggestionListNumberNew')">
                    <div id="suggestionListNumberNew"></div>
                </div>

            </form>
        </div>
    </div>
    <div>
    </div>


</body>
</html>
