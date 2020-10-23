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
		$adviser = array();

		$adviser[0]['name'] = "Ergaly Kairov";
		$adviser[0]['group'] = "CSSE-1803";
		$adviser[1]['name'] = "Sharbanu Ulpanova";
		$adviser[1]['group'] = "CSSE-1806";
		$adviser[2]['name'] = "Aibek Tokishev";
		$adviser[2]['group'] = "CSSE-1801";

		$file = fopen("files/auto.txt", "r");
		while(!feof($file))
		{
		    $str = htmlentities(fgets($file));
		}
		fclose($file);
	?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
	<div class="container">
	  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
	    <a class="navbar-brand" href="#">Adviser Journal</a>
	    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	      <li class="nav-item active">
	        <a class="nav-link" href="main.php">Home <span class="sr-only">(current)</span></a>
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

  			<h2 class="mb-4">
  				<?php
  				$gr = '';
  				foreach ($adviser as $ad) {
  					if($ad['name'] == $str) {
  						$gr = $ad['group'];
  						echo $str .' - your group - ' .$ad['group'];
  					}
  				}
  					
  				?>
  			</h2>

  			<table class="table table-bordered">
			  <thead class="text-center">
			    <tr>
			      <th scope="col">Student</th>
			      <th scope="col">Java</th>
			      <th scope="col">Python</th>
			      <th scope="col">C++</th>
			      <th scope="col">WEB</th>
			      <th scope="col">Kazakh</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  		foreach ($groups as $g) {
			  			if($g['group'] == $gr) {
			  				?>
			  				<tr>
						    <th class="bg-th"><a href="student.php?id=<?=$g['id']?> " id="id">
							    <div class="row"> 
							      <img class="mx-4 s-img rounded" src=<?= $g['pic'] ?>>
							      <div class="my-auto">
							      	<p class="p-s">Name: <?= $g['name'] ?> </p>
							      	<p class="lead">ID: <?= $g['id'] ?> </p>
							      	<p class="lead">Age: <?= $g['age'] ?> </p>
							      </div>
						  		</div>
						  		</a>
						  	</th>
						  		<?php
						  		foreach ($mark as $m) {
						  			if($g['id'] == $m['st_id']) {
						  				?>
						  				<td <?php if($m['java'] <= 50) { ?> class="red" <?php } ?>><?= $m['java'] ?></td>
						  				<td <?php if($m['python'] <= 50) { ?> class="red" <?php } ?>><?= $m['python'] ?></td>
						  				<td <?php if($m['c'] <= 50) { ?> class="red" <?php } ?>><?= $m['c'] ?></td>
						  				<td <?php if($m['web'] <= 50) { ?> class="red" <?php } ?>><?= $m['web'] ?></td>
						  				<td <?php if($m['kazakh'] <= 50) { ?> class="red" <?php } ?>> <?= $m['kazakh'] ?></td>
						  				<?php
						  			}
						  		}
						  		?>
						    </tr>
				   	 		<?php
				   	 	}
			  		}
			  	?>
			  </tbody>
			</table>
		</div>
	</div>
</body>
</html>