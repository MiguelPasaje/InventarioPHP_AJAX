<?php
    include('../utils/conexionBD.php');

    if (isset($_POST['id'])) {
        
        $idProd = $_POST['id'];
    

        $query = "delete from productos where id_producto = $idProd";

        $result = mysqli_query($connection,$query);

        if (!$result) {
            die('producto-delete failed');
        }
        echo "data successfully deleted";
    }
    
?>