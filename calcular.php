<?php

$altura = $_POST['altura'];
$peso   = $_POST['peso'];

$altura_m = $altura / 100;

$imc = $peso / ($altura_m * $altura_m);
$imc = number_format($imc, 2);

$categoria = "";
$color = "";

if ($imc < 18.5) {
    $categoria = "Por debajo del peso";
    $color = "purple";
}
elseif ($imc >= 18.5 && $imc < 25) {
    $categoria = "Peso normal";
    $color = "green";
}
elseif ($imc >= 25 && $imc < 30) {
    $categoria = "Sobrepeso";
    $color = "orange";
}
else {
    $categoria = "Obesidad";
    $color = "red";
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado IMC</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="resultado">
    <h2>¡Felicidades! Su IMC es:</h2>
    <p class="valor-imc" style="color: <?= $color ?>;"><?= $imc ?></p>
    <p class="categoria">Estás en: <strong><?= $categoria ?></strong></p>
</div>

</body>
</html>
