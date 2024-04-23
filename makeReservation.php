<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
include 'create.php';
include 'menu.php';
?>

<h2>MAKE A RESERVATION: </h2>
    <form method="post" action="makeReservation.php" class="custom">
    	Start Date: <input type="date" name="startDate" required><br>
    	Duration: <select name="duration">
                  <?php
                  	for ($i = 1; $i <= 30; $i++) {
        		  		echo "<option value='$i'>$i</option>";
    			  	}
    			  ?> <br>
        Full Name: <input type="text" name="fullName" required><br>
        Number of guests: <select name="people">
                  		  <?php
                  		  	for ($i = 1; $i <= 5; $i++) {
        		  				echo "<option value='$i'>$i</option>";
    			  		  	}
    			  		  ?> <br>
    	Room type: 
        <input type="submit" name='submit' value="Log In">
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        Don't have an account? <a href="signup.php" class="sign-up-link">Sign up </a>
    </form>
<br><a href="startPage.php">
        <img src="arrow.png" width="50" height="35" align="left">
</body>
</html>