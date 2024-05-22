<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reservations By Month</title>
</head>

<body>

<?php 
	include 'create.php';
	include 'menu.php';

	$months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
?>

<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #F0E0BF; /* Header row color */
    }
    tr:nth-child(even) {
        background-color: #FFFFE0; /* Lighter yellow for even rows */
    }
    tr:nth-child(odd) {
        background-color: #FFFFFF; /* White for odd rows */
    }
    tr:hover {
        background-color: #ddd;
    }


    input[type="submit"] {
  background-color: #f0e0bf;
  color: black;
  border: none;
  border-radius: 3px;
  padding: 10px 10px;
  cursor: pointer;
  font-size: 16px;
}
</style>

<form method="post" action="<?php $_PHP_SELF ?>" class="reservationsByMonth">
    	<h2>Select a month:</h2> 
    	&nbsp &nbsp<select name="month">
                  <?php
                  	foreach ($months as $month) {
                  	 	echo "<option value='$month'>$month</option>";
    			  	}
    			  ?> 
    	</select> &nbsp &nbsp
    	<input type="submit" name='submit' value="Check Reservations" class="buttonCheckReservationsByMonth">
</form>

<?php 
	if(isset($_POST['submit'])) {
		$month = $_POST['month'];

		switch ($month) {
			case 'January':
				$monthNumber = '01';
				break;
			
			case 'February':
				$monthNumber = '02';
				break;

			case 'March':
				$monthNumber = '03';
				break;

			case 'April':
				$monthNumber = '04';
				break;

			case 'May':
				$monthNumber = '05';
				break;

			case 'June':
				$monthNumber = '06';
				break;

			case 'July':
				$monthNumber = '07';
				break;

			case 'August':
				$monthNumber = '08';
				break;

			case 'September':
				$monthNumber = '09';
				break;

			case 'October':
				$monthNumber = '10';
				break;

			case 'November':
				$monthNumber = '11';
				break;

			case 'December':
				$monthNumber = '12';
				break;
		}

		$sql = "SELECT rooms.roomNumber, rt.roomType, res.startDate 
				FROM reservations res
				INNER JOIN rooms rooms on res.roomId = rooms.roomId
				INNER JOIN roomtypes rt on rooms.roomTypeId = rt.roomTypeId 
				WHERE substr(res.startDate, 6, 2) = '$monthNumber'";

		$result = mysqli_query($dbConn,$sql);


		echo "<table border='1'>
		<h1 style='text-align:center'><strong> $month </strong><h1>
    	<tr>
        <th>Room Number</th>
        <th>Room Type</th>
        <th>Start Date</th>
    	</tr>";

    	if (mysqli_num_rows($result) > 0) {
   			while($row = mysqli_fetch_assoc($result)) {
   				echo "<tr>";
   				echo "<td>" . $row['roomNumber'] . "</td>";
			    echo "<td>" . $row['roomType'] . "</td>";
			    echo "<td>" . date("d M Y", strtotime($row['startDate'])) . "</td>";
			    echo "</tr>";
			}
		}
	}

 ?>

<a href="startPage.php" style="position: fixed; bottom: 10px; left: 10px;">
    <img src="arrow2.png" width="50" height="35" align="left"></a><br>

</body>
</html>