<?php
session_start();

$codigoProducto = $_POST['codigoProducto'];
$cantidad = (int)$_POST['cantidad'];

if (isset($_SESSION['productos'][$codigoProducto])) {
    $_SESSION['productos'][$codigoProducto] += $cantidad;
    $_SESSION['mensaje'] = "Devolución agregada: +$cantidad unidades";
}

header('Location: index.php');
?>
