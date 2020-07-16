<?php

    include('../utils/conexionBD.php');

    $id =$_POST['id'];

    $query = "select * from productos inner join marca 
    on productos.idMarca=marca.id_marca join zonas 
    on productos.id_zona = zonas.id_zona JOIN proveedor 
    on productos.id_proveerdor=proveedor.id_proveedor where id_producto=$id ";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('query pq-list failed'.mysqli_error($connection));
    }

    $json = array();
    while($row = mysqli_fetch_array($result)){
        $json[] = array(
            'id_producto'   => $row['id_producto'],
            'idMarca' => $row['nombre_marca'],
            'id_proveerdor'   => $row['descripcion_proveedor'],
            'id_zona' => $row['descripcion_zona'],
            'codigo' => $row['codigo'],
            'descripcion_producto'=> $row['descripcion_producto'],
            'precio'   => $row['precio']           

        );

    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
?>