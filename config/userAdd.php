<?php
    include('../utils/conexionBD.php');

    if (isset($_POST['user'])) {
        //echo $_POST['pwd'];
        $user = $_POST['user'];
        $pwd   = $_POST['pwd'];

        $buscar_user = ("select * from usuarios where usuario = '$user' ");
        $buscar_result = mysqli_query($connection,$buscar_user);

        $num = mysqli_num_rows($buscar_result);

        if ($num > 0) {
            echo 'user existe';
        }
        else{

            $password = password_hash($_POST['pwd'],PASSWORD_DEFAULT);

            $query = " insert into usuarios(usuario, password,tipo_user,estado) values ('$user','$password','1','0')";
            $result = mysqli_query($connection, $query);

            if (!$result) {
            die('query faild');
            }
            echo 'Se han guardado los datos satisfactoriamente';
        }
    }
        
    


?> 