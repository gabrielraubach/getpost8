<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Calculo veículo</title>
</head>

<body>

    <form method="POST">

        <p> tempo em Horas: <input name="tempo" type="number" /> </p>
        <p> Velocidade em Km: <input name="veloci" type="number" /> </p>

        <input type="submit" value="Calcular" name="btncalc" />

    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<?php
if (isset($_POST['btncalc'])) {
   
    $d = 0;
    $l = 0;
    $tempo = $_POST['tempo'];
    $veloci = $_POST['veloci'];
    $calcular = $_POST['btncalc'];
   
    $d = $tempo * $veloci; 
    $l = number_format($d / 12,2);
    
    echo"<h4> A distância percorrida foi de: ".$d." Km"."</h4>";
    echo"<h4> A velocidade média foi de: ".$veloci." Km/h"."</h4>";
    echo"<h4> O tempo gasto foi de: ".$tempo." Hrs"."</h4>";
    echo "<h4> A quantidade de litros usados foi e: : ".$l." Litros"."</h4>";

} 
   

?>
</html>