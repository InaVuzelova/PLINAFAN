<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>All Reservations</title>
</head>
<body>

<?php 
include 'create.php';
include 'menu.php';
 ?>

	<h2><br>All reservations active at the moment:</h2>

	<?php 
		$sql = "SELECT * FROM reservations
        	    WHERE CURDATE() BETWEEN startDate AND DATE_ADD(startDate, INTERVAL duration DAY)";

		$result = mysqli_query($dbConn,$sql);
		if (mysqli_num_rows($result) > 0) {
   		while($row = mysqli_fetch_assoc($result)) {
   			echo "<br>Reservation ID " . $row['reservationId'] . ": <br>&nbsp&nbsp&nbsp start date - " . $row['startDate'] . "<br>&nbsp&nbsp&nbsp duration - " . $row['duration'] . "<br>&nbsp&nbsp&nbsp people - " . $row['people'] . "<br>&nbsp&nbsp&nbsp room ID - " . $row['roomId'] . "<br>&nbsp&nbsp&nbsp name - " . $row['clientName'] . "<br>&nbsp&nbsp&nbsp phone number - " . $row['clientPhone'];
   		}
	}

	?>

</body>
</html>