<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<!-- <header class="header" style="height: 50px; background-color: #353A40">
<h1 class="text-center" style="color:white">Admin Panel</h1>
</header> -->
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
<br><br><br>
<div class="container">
	<h3>Creating new group</h3>
	<br>
    <form action="" method="post">
        <div class="form-group row">
            <label for="group_name" class="col-xs-3 col-form-label mr-4">Group name</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="group_name" name="group_name" required>
            </div>
        </div>
                <div class="form-group row">
            <div class="offset-xs-3 col-xs-9">
                <button type="submit" class="btn btn-primary" style="background-color: #353A40; border-color: black ">Add</button>
            </div>
        </div>
    </form>
    <br><br>
    <h3>Adding students</h3>
    <br>
            <div class="form-group row">
            <label for="name" class="col-xs-3 col-form-label mr-4">Name of group</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
        </div>
                    <div class="form-group row">
            <label for="name" class="col-xs-3 col-form-label mr-4">Student name</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
        </div>
        <br>
                        <div class="form-group row">
            <div class="offset-xs-3 col-xs-9">
                <button type="submit" class="btn btn-primary" style="background-color: #353A40; border-color: black ">Add</button>
            </div>
        </div>
</div>