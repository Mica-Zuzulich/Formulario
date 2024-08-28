<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Style.css">
    <link rel="stylesheet" href="../css/resultado.css">
    <title>Resultados del Formulario</title>
</head>
<body>
<?php

$claseresultado='resultado';
echo('<div class="'.$claseresultado . '">');
    //print_r($_POST);
    if(!empty($_POST)){
        $nombre=htmlspecialchars($_POST['nombre']);
        $apellido=htmlspecialchars($_POST['apellido']);
        $edad=htmlspecialchars($_POST['edad']);
        $genero=htmlspecialchars($_POST['genero']);
        $pais=htmlspecialchars($_POST['pais']);
        $intereses=isset($_POST['intereses']) ? $_POST['intereses'] :[];
        

        echo('<p> Nombre: ' .$nombre. '</p>');
        echo('<p> Apellido: '.$apellido. '</p>');
        echo('<p> Edad: '.$edad. '</p>');
        echo('<p>Genero: '.$genero. '</p>');
        echo('<p>País: '.$pais. '</p>');
    }
    if(!empty($intereses)){
        echo '<p> Intereses: '.implode(', ',$intereses).'</p>';
      
    }
    echo'</div>';
 
?>
<!--
<form method="POST" action="formu02.php">
    <label>Nombre: </label><input type="text" name="nombre" /></label>
    <label>Apellido: </label><input type="text" name="apellido" /></label>
    <label>Edad: </label><input type="text" name="edad" /></label>
    <input type="submit">
</form>
-->

 <a href="index.html" class="Volver">Volver</a>
 </body>
</html>