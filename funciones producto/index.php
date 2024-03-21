<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Gestión de Inventario</title>
</head>
<body>
    <h1>Sistema de Gestión de Inventario</h1>
    
    <form action="acciones.php" method="post">
        <label for="codigoProducto">Código del Producto:</label>
        <input type="text" id="codigoProducto" name="codigoProducto" required>
        <br><br>
        
        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" required>
        <br><br>
        
        <select name="accion">
            <option value="agregarPedido">Pedido</option>
            <option value="agregarDevolucion">Devolución</option>
            <option value="salidaVenta">Salida por Venta</option>
            <option value="salidaDeterioro">Salida por Deterioro</option>
            <option value="consultarExistencia">Consultar Existencia</option>
        </select>
        <br><br>
        
        <button type="submit">Realizar Acción</button>
    </form>
    
    <div id="resultado">
        <?php
            session_start();
            if (isset($_SESSION['mensaje'])) {
                echo $_SESSION['mensaje'];
                unset($_SESSION['mensaje']);
            }
        ?>
    </div>
</body>
</html>
