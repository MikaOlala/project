<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Journal</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
  $adviser = array();

      $adviser[0]['name'] = "Ergaly Kairov";
      $adviser[0]['group'] = "CSSE-1803";
      $adviser[1]['name'] = "Sharbanu Ulpanova";
      $adviser[1]['group'] = "CSSE-1806";
      $adviser[2]['name'] = "Aibek Tokishev";
      $adviser[2]['group'] = "CSSE-1801";
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">Adviser Journal</a>
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item mr-2">
          <a class="nav-link li-hov" href="auto.php">Log in<span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link li-hov" href="reg.php">Registration<span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="container shift">
  <div class="col-6 offset-3">
    <form method="POST">
      
        <?php
          if (isset($_POST['btn'])) {
            if($_POST['password'] == $_POST['repassword']) {
              $count = 0;
              foreach ($adviser as $ad) {
                if($ad['name']==$_POST["login"])
                  $count++;
              }
              if($count == 0) {
                header("Location: auto.php");
              }
              else {
                echo 
                '<div class="alert alert-danger text-center" role="alert">
                  This login is already using by someone
                </div>';
              }
            }
            else
              echo 
              '<div class="alert alert-danger text-center" role="alert">
                  Passwords are different!
              </div>';
          }
        ?>
      

      <h2 class="text-center my-4">Registration</h2>
          <div class="form-group">
              <p>Login</p> 
              <input required type="text" class="form-control" name="login">
          </div>
          <div class="form-group">
            <p>Password</p> 
            <input required type="password" class="form-control" name="password">
          </div>
          <div class="form-group">
            <p>Repeat Password</p> 
            <input required type="password" class="form-control" name="repassword">
          </div>

          <div class="text-center">
            <button class="btn btn-dark mt-3 px-5 text-center" name="btn">Sign up</button>
          </div>

          
        </form>
  </div>
</div>


</body>
</html>