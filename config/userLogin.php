<?php
    include('../utils/conexionBD.php');

    session_start();
    

    if (isset($_POST['user'])) {
        
        $user = $_POST['user'];
        $pwd   = $_POST['pwd'];

        //echo($pwd);

        $buscar_user = ("select * from usuarios where usuario = '$user' ");
        $buscar_result = mysqli_query($connection,$buscar_user);

        

        $num = mysqli_num_rows($buscar_result);

        //echo("zxzxz ".$num);

        if ($num) {
            
            $email_pass = mysqli_fetch_assoc($buscar_result);
            $db_pass = $email_pass['password'];

            $_SESSION['usuario'] = $user;

            $pass_decode = password_verify($pwd, $db_pass);

            if ($pass_decode) {
                //echo "login correcto";    
                echo "1";
            }else{
                echo ("password incorecto");
            }
        }
        else{
            echo "email incorrecto";

        }
    }
        //admin1234
    


?> 