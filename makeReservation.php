<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<<<<<<< HEAD
<?php include 'create.php'; 

$sqlSelectRoomTypes = "SELECT roomType FROM roomtypes";
$resultRoomTypes = mysqli_query($dbConn, $sqlSelectRoomTypes);

=======
<?php 
include 'create.php';
include 'menu.php';
>>>>>>> f37ea544fc8b63133ef1ec993f77b336f4edce37
?>

<h2>MAKE A RESERVATION: </h2>
    <form method="post" action="makeReservation.php" class="custom">
    	Start Date: <input type="date" name="startDate" required><br>
    	Duration: <select name="duration">
                  <?php
                  	for ($i = 1; $i <= 30; $i++) {
        		  		echo "<option value='$i'>$i</option>";
    			  	}
    			  ?> </select> <br>
        Full Name: <input type="text" name="clientName" required><br>
        Phone Number <input type="tel" name="clientPhone"><br>
        Number Of Guests: <select name="people">
                  		  <?php
                  		  	for ($i = 1; $i <= 5; $i++) {
        		  				echo "<option value='$i'>$i</option>";
    			  		  	}
    			  		  ?> </select> <br>
    	Room Type: <select name="roomType">
                  <?php while ($row = mysqli_fetch_array($resultRoomTypes)):;?>
                  <option value="<?php echo $row[0];?>"> <?php echo $row[0];?> </option>
                  <?php endwhile; ?>
                  </select><br>
        <input type="submit" name='submit' value="Submit">
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        <!--Don't have an account? <a href="signup.php" class="sign-up-link">Sign up </a> -->
    </form>
<br><a href="startPage.php">
        <img src="arrow.png" width="50" height="35" align="left">
</body>
</html>