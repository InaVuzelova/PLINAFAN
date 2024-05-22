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
</style>



	<h2><br>All active reservations at the moment:</h2>

	<?php 

	echo "<table border='1'>
    <tr>
        <th>Reservation ID</th>
        <th>Start Date</th>
        <th>Duration</th>
        <th>End Date</th>
        <th>People</th>
        <th>Room Number</th>
        <th>Room Type</th>
        <th>Total Price</th>
        <th>Name</th>
        <th>Phone Number</th>
    </tr>";

		$sql = "SELECT res.reservationId, res.startDate, res.duration, res.people, rooms.roomNumber, rt.roomType, rt.price, res.clientName, res.clientPhone FROM reservations res
				INNER JOIN rooms rooms on res.roomId = rooms.roomId
				INNER JOIN roomtypes rt on rt.roomTypeId = rooms.roomTypeId
        	    WHERE CURDATE() BETWEEN startDate AND DATE_ADD(startDate, INTERVAL duration DAY)";

		$result = mysqli_query($dbConn,$sql);
		if (mysqli_num_rows($result) > 0) {
   			while($row = mysqli_fetch_assoc($result)) {
			    echo "<tr>";
			    echo "<td>" . $row['reservationId'] . "</td>";
			    echo "<td>" . date("d M Y", strtotime($row['startDate'])) . "</td>";
			    echo "<td>" . $row['duration'] . " days</td>";
			    echo "<td>" . date('d M Y', strtotime("+" . $row['duration'] . " days", strtotime($row['startDate']))) . "</td>";
			    echo "<td>" . $row['people'] . "</td>";
			    echo "<td>" . $row['roomNumber'] . "</td>";
			    echo "<td>" . $row['roomType'] . "</td>";
			    echo "<td>" . $row['price'] * $row['duration'] . " lv.</td>";
			    echo "<td>" . $row['clientName'] . "</td>";
			    echo "<td>" . $row['clientPhone'] . "</td>";
			    echo "</tr>";
			}
		}

	?>

<a href="startPage.php" style="position: fixed; bottom: 10px; left: 10px;">
    <img src="arrow2.png" width="50" height="35" align="left"></a><br>
</body>
</html>