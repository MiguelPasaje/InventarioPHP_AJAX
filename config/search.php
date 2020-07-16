<?php

include('../utils/conexionBD.php');


$search = $_POST['txt_search'];
if(!empty($search)) {
  $query = "SELECT * FROM productos WHERE descripcion_producto LIKE '%$search%'";

  //$query = "SELECT * FROM task WHERE nombre LIKE '%$search%'";
  $result = mysqli_query($connection, $query);
  
  if(!$result) {
    die('Query Error' . mysqli_error($connection));
  }
  
  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(

      'id_producto'   => $row['id_producto'],
            'idMarca' => $row['idMarca'],
            'id_proveerdor'   => $row['id_proveerdor'],
            'id_zona' => $row['id_zona'],
            'codigo' => $row['codigo'],
            'descripcion_producto'=> $row['descripcion_producto'],
            'precio'   => $row['precio']
    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;
}

?>