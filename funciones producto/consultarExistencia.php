<?php
session_start();

$codigoProducto = $_POST['codigoProducto'];

if (isset($_SESSION['productos'][$codigoProducto])) {
    $_SESSION['mensaje'] = "Existencia actual: {$_SESSION['productos'][$codigoProducto]} unidades";
} else {
    $_SESSION['mensaje'] = "El código del producto no existe en la lista.";
}

header('Location: index.php');
?>
