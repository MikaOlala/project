<!DOCTYPE html>
<html>
<head>
	<?php include "points.php" ?>
	<meta charset="UTF-8">
	<title>Journal</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<style>
		<?php include 'style.css'; ?>
	</style>
</head>
<body>

	<?php
		$groups = array();
		$groups[0]['id'] = 26355;
		$groups[0]['group'] = "CSSE-1803";
		$groups[0]['name'] = "Tanko Tyan";
		$groups[0]['pic'] = "files/ava4.png";
		$groups[0]['email'] = "tanko@gmail.com";
		$groups[0]['age'] = 20;
		$groups[0]['avg'] = 78;

		$groups[1]['id'] = 26533;
		$groups[1]['group'] = "CSSE-1806";
		$groups[1]['name'] = "Mika Tyan";
		$groups[1]['pic'] = "files/ava1.png";
		$groups[1]['email'] = "mika@gmail.com";
		$groups[1]['age'] = 20;
		$groups[1]['avg'] = 78;

		$groups[2]['id'] = 26531;
		$groups[2]['group'] = "CSSE-1806";
		$groups[2]['name'] = "Dimash Orazaly";
		$groups[2]['pic'] = "files/ava2.png";
		$groups[2]['email'] = "dimash@gmail.com";
		$groups[2]['age'] = 20;
		$groups[2]['avg'] = 78;

		$groups[3]['id'] = 26521;
		$groups[3]['group'] = "CSSE-1806";
		$groups[3]['name'] = "Tracer Oxton";
		$groups[3]['pic'] = "files/ava3.png";
		$groups[3]['email'] = "tracer@gmail.com";
		$groups[3]['age'] = 20;
		$groups[3]['avg'] = 78;

	?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
	<div class="container">
	  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
	    <a class="navbar-brand" href="#">Adviser Journal</a>
	    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	      <li class="nav-item">
	        <a class="nav-link" href="main.php">Home <span class="sr-only"></span></a>
	      </li>
	      <li class="nav-item">
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

	<div class="container">
  		<div class="col-12">
  			<h2 class="mb-4">Student's academic performance</h2>
  			<h2 class="mb-4">
  				<?php
  					$id = $_GET['id'];
  					foreach ($groups as $g) {
  						if($g['id'] == $id) {
  							?>
  							<div class="jumbotron jumbotron-fluid">
							  <div class="container">
							    <div class="row"> 
							      <img class="mx-4 rounded float-left" src=<?= $g['pic'] ?>>
							      <div class="my-auto">
							      	<p class="p-s">Name: <?= $g['name'] ?> </p>
							      	<p class="lead">Age: <?= $g['age'] ?> </p>
							      	<p class="lead">Email: <?= $g['email'] ?> </p>
							      </div>
						  		</div>
							  </div>
							</div>
							<?php
  						}
  					}
  				?>

  			<h2>Java</h2>
  			<table class="table table-bordered">
			    <tr class="text-center bg-tr">
			      <th scope="col">Task</th>
			      <th scope="col">Mark</th>
			      <th scope="col">Deadline</th>
			    </tr>
			    <?php

			        foreach ($java as $j){
			        	if ($j['st_id'] == $id) {
			        echo "<tr><td>{$j['lab']}</td>
			              <td>{$j['mark']}</td>
			              <td>{$j['deadline1']}</td></tr>";
			    		}
			    	}
			    ?>
			</table>
			<h2 class="mt-4">Python</h2>
  			<table class="table table-bordered">
			    <tr class="text-center bg-tr">
			      <th scope="col">Task</th>
			      <th scope="col">Mark</th>
			      <th scope="col">Deadline</th>
			    </tr>
			    <?php

			        foreach ($python as $p){
			        	if ($p['st_id'] == $id) {
			        echo "<tr><td>{$p['lab']}</td>
			              <td>{$p['mark']}</td>
			              <td>{$p['deadline1']}</td></tr>";
			    		}
			    	}
			    ?>
			</table>
			<h2 class="mt-4">C++</h2>
  			<table class="table table-bordered">
			    <tr class="text-center bg-tr">
			      <th scope="col">Task</th>
			      <th scope="col">Mark</th>
			      <th scope="col">Deadline</th>
			    </tr>
			    <?php

			        foreach ($c as $c){
			        	if ($c['st_id'] == $id) {
			        echo "<tr><td>{$c['lab']}</td>
			              <td>{$c['mark']}</td>
			              <td>{$c['deadline1']}</td></tr>";
			    		}
			    	}
			    ?>
			</table>



		</div>
	</div>
</body>
</html>