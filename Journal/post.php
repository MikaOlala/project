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
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="main.php">Home <span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="post.php">Send Email<span class="sr-only"></span></a>
        </li>
      </ul>
      <form method="POST" class="form-inline my-2 my-lg-0">
        <button class="btn btn-outline-danger my-2 my-sm-0" name="btn">Exit</button>
      <?php
              if (isset($_POST['btn'])) {
                header("Location: auto.php");
              }
            ?>

      </form>
    </div>
  </div>
</nav>


<div class="container shift">
  <div class="col-6 offset-3">
    <form action="main.php" method="POST">
      <h2 class="text-center mb-4 shift">Send an Email</h2>
          <div class="form-group">
              <p>Receiver</p> 
              <input required type="text" class="form-control" name="to">
          </div>
          <div class="form-group">
            <p>Message</p> 
            <textarea class="form-control" rows="5" name="msg"></textarea>
          </div>

          <div class="text-center">
            <button class="btn btn-dark mt-3 px-5 text-center" name="btn">Send</button>
          </div>


          <?php
            if (isset($_POST['btn'])) {
                $to = $_POST['to'];
                $from = "kaori.uchiha13@gmail.com";
                $subject = "Форма отправки сообщений с сайта";
                $message = " Оставили сообщение:" . "\n\n" . $_POST['msg'];
                $headers = "Content-type: text/plain; windows-1251";

                mail($to,$subject,$message,$headers);

                echo "Сообщение отправлено";


                ?>

                <script language="JavaScript" type="text/javascript">
                  function changeurl(){eval(self.location="http://localhost/Journal/main.php");}
                  window.setTimeout("changeurl();",1000);
                </script>
                <?php
            }
          ?>
          
        </form>


        

  </div>
</div>


</body>
</html>