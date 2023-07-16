<html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Lopez Ramos Guillermo">
    <title>Clima</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>

<body>
    <center>
        <form action="Clima.php" method="post" class="centrar">
            
            <h1><i style="color:white" class="fas fa-cloud"></i>   Clima</h1>
           
            <div>
                 <p>Ingresa El Nombre Del Estado</p>
                <span class="estado" data-role="estado">(Estado)</span>
                <input id="estado" required type="text" name="estado" placeholder= "           Ingresar">
                <br><br>
               
            <div>
                <button type="submit">Busca <i class="fas fa-search"></i> </button>

            </div>
        </form>
</body>

</html>