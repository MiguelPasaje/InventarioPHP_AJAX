


<!DOCTYPE html>
<html lang="en">

<?php include('inc/head.php'); ?>
<body>
  <div>
    <nav class="navbar navbar-dark  bg-dark">
      <div class="container">
        <a class="navbar-brand "><h1>Dulces el Zarco</h1></a>
      </div>
      <div class="login h3">
        <a href="#" id="LoginUser" >Login</a>
        <a href="#" id="regUser">Registro</a>
      </div>
    </nav>
  </div>

  <div class=" container card my-4 " style="width: 25rem;">      
    <div class="addUser  form-group col-md-12  h3" id="ADDuser">
      <div class="card-header table-dark text-primary">
        Register User
      </div>
      <div class="my-4">
          <?php include('addUser.php'); ?>  
      </div>
    </div>
  
    <div class="loginUser form-group col-md-12 h3" id="LOGuser">
      <div class="card-header table-dark text-primary">
        Login
      </div>
      <div class="my-4">
        <?php include('login-user.php'); ?>  
      </div>

    </div>
    <!-- error-->
    <div id="msg_error" class="alert alert-danger" role="alert" style="display:none">
    </div>
  </div>
     



  
  
  <?php include('inc/footer.php'); ?> 
</body>
</html>