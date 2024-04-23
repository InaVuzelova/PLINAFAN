<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>
</head>
<body class="custom-body">
<?php include 'create.php'; ?>
	<h2>SIGN UP: </h2>
	<form method="post" action="signup.php" class="custom">
		Username/email: <input type="text" name="username" required><br>
		Password: <input type="password" name="password" required><br>
		You are: <select name="role">
   		      <option value="Client">Client</option>
   	     	  <!--<option value="Administrator">Administrator</option> -->
   	     	   
			  </select><br><br>
		<input type="submit" name='submit' value="Sign Up">
	</form>

<?php 
	if(isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$role = $_POST['role'];

		$sql="SELECT * from login where username = '$username'"; 
		$result=mysqli_query($dbConn,$sql);
		if(mysqli_num_rows($result) > 0){
			echo 'There is already a user with this username. Please try again!';
		} else {
			$sql = "INSERT INTO login (username,password,role) VALUES ('$username', '$password', '$role')";
			if(mysqli_query($dbConn, $sql)) {
				echo "<br><br>Successful registration!";
			} else {
				echo "<br><br>Error with registration!" . mysqli_error($dbConn);
			}
		}
	}
?>

	<br><a href="index.php">
        <img src="arrow.png" width="50" height="35" align="left">
</body>
</html>