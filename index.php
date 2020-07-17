


<!DOCTYPE html>
<html lang="en">

<?php include('inc/head.php'); ?>
<body>
  <div class="container">
    <nav>
      <h1><a href="#">Login</a></h1>
      <div class="login">
        <a href="#" id="LoginUser">Login</a>
        <a href="#" id="regUser">Registro</a>
      </div>
    </nav>

    <div class="addUser" id="ADDuser">
    <?php include('addUser.php'); ?>  
    </div>
    <div class="loginUser" id="LOGuser">
    <?php include('login-user.php'); ?>  
    </div>
    <!-- error-->
    <div id="msg_error" class="alert alert-danger" role="alert" style="display:none">

    </div>
    




  </div>
  
  <?php include('inc/footer.php'); ?> 
</body>
</html>