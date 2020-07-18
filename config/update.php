<?php
    include('../utils/conexionBD.php');

    $id = $_POST['id'];
    $marca = $_POST['marca'];
    $proveedor = $_POST['proveedor'];
    $zona = $_POST['zona'];
    $codigo = $_POST['codigo'];
    $descripcionP = $_POST['descripcionP'];
    $precio = $_POST['precio'];

    //echo($marca);

    $query = "UPDATE `productos` SET  `idMarca` = '$marca', `id_proveerdor` = '$proveedor', `id_zona` = '$zona', `codigo` = '$codigo', `descripcion_producto` = '$descripcionP', `precio` = '$precio' WHERE `productos`.`id_producto` = $id";

    //echo('aaa'.$query);
     $result = mysqli_query($connection,$query);

        if (!$result) {
            die('producto-update failed');
        }
        echo "data successfully update";
 
?>