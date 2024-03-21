<?php
session_start();

$codigoProducto = $_POST['codigoProducto'];
$cantidad = (int)$_POST['cantidad'];

if (isset($_SESSION['productos'][$codigoProducto]) && $_SESSION['productos'][$codigoProducto] >= $cantidad) {
    $_SESSION['productos'][$codigoProducto] -= $cantidad;
    $_SESSION['mensaje'] = "Salida por Deterioro: -$cantidad unidades";
} else {
    $_SESSION['mensaje'] = "No hay suficiente existencia para realizar esta operación.";
}

header('Location: index.php');
?>
