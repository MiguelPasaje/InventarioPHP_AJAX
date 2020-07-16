<?php
//echo('add.php')
    include('../utils/conexionBD.php');

    if(isset($_POST['marca'])){
        //echo($_POST['marca']);
        $marca = $_POST['marca'];
        $proveedor = $_POST['proveedor'];
        $zona = $_POST['zona'];
        $codigo = $_POST['codigo'];
        $descripcionP = $_POST['descripcionP'];
        $precio = $_POST['precio'];

        $query = "insert into productos (marca,descripcion) values ('$marca','$proveedor','$zona','$codigo','$descripcionP','$precio')";

        $result = mysqli_query($connection, $query);

        if (!$result) {
            die('Query Failed.');
          }
        
          echo "Task Added Successfully";


    }
?>