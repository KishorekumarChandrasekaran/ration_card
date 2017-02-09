<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <script src="../js/jquery-2.2.3.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/login.css">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
  <script src="../js/login.js"></script>
</head>
<body><h1>Log In</h1>
    
 
  <div class="container">
    <form action="../controller/login_controller.php" method="POST">
      <input type="text" name="name" class="form-control" placeholder="Name" required >
      <input type="password" name="password"  class ="form-control" placeholder="Password" required >
      <input type="submit" class="btn btn-success" value="Login">      
    </form>
  </div>


</body>
</html>