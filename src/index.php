<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

$titol = "La meva primera aplicació PHP";

$quantitat = 5;
$preu = 20;

$total = $quantitat * $preu;

?>

<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <title>Primers passos amb PHP</title>
</head>

<body>

    <h1><?= $titol ?></h1>

    <p>Quantitat: <?= $quantitat ?></p>

    <p>Preu unitari: <?= $preu ?> €</p>

    <p>Total: <?= $total ?> €</p>

</body>
</html>