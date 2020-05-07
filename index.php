<?php

use App\middleware;

session_start(); 

 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-10">
      <div class="row">
		  <?php 
				$response = file_get_contents('https://jsonplaceholder.typicode.com/posts');
				$decoded_response  =json_decode($response);
				for($index = 0; $index<12;$index++){
					$obj_array =(array)$decoded_response[$index];
					$array_obj = array ($obj_array);
				

		  ?>
  		<div class = "col-md-4">
		  <div class="card">
		<h5 class="card-header">Featured</h5>
		<div class="card-body">
		<h5 class="card-title"><?php echo $array_obj[0]['title'];?></h5>
		<p class="card-text"><?php echo $array_obj[0]['body'];?></p>
		<a href="#" class="btn btn-primary">Go somewhere</a>
		</div>
		</div>
		</div>
				<?php } ?>
	  </div>
    </div>
  	<div class= "col-md-2">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;" id = "logout">logout</a> </p>
    <?php endif ?>
	  </div>
  </div>
</div>

		
</body>
</html>