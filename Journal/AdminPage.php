<!DOCTYPE html>
<html>
<head>
	<?php 
    include "MiniDb.php"
     ?>
	<title>Admin page</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="AdminPage.php">Admin Panel</a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="AdminPage.php">Home <span class="sr-only">(current)</span></a>
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
<body>

<br><br><br>
<div class="container">
<form method="post">
<a href="addPage.php" type="submit" class="btn btn-primary" style="background-color: #353A40 ; border-color: black ">Add new group</a>
</form>

<br>



<!--   <table border="1" width="100%" cellpadding="5">
   <tr>
    <th>Ячейка 1</th>
    <th>Ячейка 2</th>
    <th>Ячейка x</th>
   </tr>
   <tr>
    <td>Ячейка 3</td>
    <td>Ячейка 4</td>
  </tr>
 </table> -->
     <table class = "table">
        <tr><th>Adviser</th><th>Group</th><th>Number of students</th></tr>
    <?php

        foreach ($news as $val){
        echo "<tr><td>{$val['Adviser']}</td>
              <td>{$val['group']}</td>
              <td>{$val['Number of students']}</td></tr>";
    }

    ?>
    </table>
    </div>
</body>
</html>