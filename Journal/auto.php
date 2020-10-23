<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Journal</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">Adviser Journal</a>
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item active mr-2">
          <a class="nav-link li-hov" href="auto.php">Log in<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link li-hov" href="reg.php">Registration<span class="sr-only"></span></a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="container shift">
  <div class="col-6 offset-3">
    <form method="POST">
      <h2 class="text-center mb-4 shift">Authorization</h2>
          <div class="form-group">
              <p>Login</p> 
              <input required type="text" class="form-control" name="login">
          </div>
          <div class="form-group">
            <p>Password</p> 
            <input required type="password" class="form-control" name="password">
          </div>
          <div><a href="reg.php">Have no account?</a></div>

          <div class="text-center">
            <button class="btn btn-dark mt-3 px-5 text-center" name="btn">Log in</button>
          </div>


          <?php
            if (isset($_POST['btn'])) {
              if($_POST['password'] == 'qwerty') {
                if($_POST['login'] == 'admin') {
                  header("Location: AdminPage.php");
                }
                else
                {
                  $file = fopen("files/auto.txt", "w") or die("Unkown file");
                  $login = "";

                  if(isset($_POST['login']))
                    $login = $_POST['login'];

                  fwrite($file, $login);
                  fclose($file);

                  header("Location: main.php");
                }
              }
              else
                echo 
                '<div class="alert alert-danger text-center mt-4" role="alert">
                  Wrong password
                </div>';
            }
          ?>
        </form>
  </div>
</div>


</body>
</html>