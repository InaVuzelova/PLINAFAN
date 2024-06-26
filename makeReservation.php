<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php include 'create.php'; 
include 'menu.php';

$sqlSelectRoomTypes = "SELECT roomType FROM roomtypes";
$resultRoomTypes = mysqli_query($dbConn, $sqlSelectRoomTypes);
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

    <?php

    if(isset($_POST['submit'])) {
      $startDate = $_POST['startDate'];
      $duration = $_POST['duration'];
      $clientName = $_POST['clientName'];
      $clientPhone = $_POST['clientPhone'];
      $people = $_POST['people'];
      $roomType = $_POST['roomType'];

      $counter = 0;

      $sqlCheckPeopleForRoom = "SELECT roomType FROM roomtypes where '$people' <= maxPeople";
      $resultCheckPeopleForRoom = mysqli_query($dbConn, $sqlCheckPeopleForRoom);
      while($row = mysqli_fetch_assoc($resultCheckPeopleForRoom)) {
        $possibleRoom = $row['roomType'];
        if($possibleRoom == $roomType){
          $counter = $counter + 1;
        }
      }

      if($counter<1){
        echo "<h2>The selected room is too small for the chosen number of people.</h2>";
        echo "<h3>The only possible rooms are: </h3>";
        $sqlCheckPeopleForRoom = "SELECT roomType FROM roomtypes where '$people' <= maxPeople";
        $resultCheckPeopleForRoom = mysqli_query($dbConn, $sqlCheckPeopleForRoom);
        while($row = mysqli_fetch_assoc($resultCheckPeopleForRoom)) {
          $possibleRoom = $row['roomType'];
          echo $possibleRoom . ", ";
        }

      } else {

        $dbConn->begin_transaction();

        $sqlChosenRoomTypeId = "SELECT roomTypeId FROM roomtypes where roomType = '$roomType'";
        $resultChosenRoomTypeId = mysqli_query($dbConn, $sqlChosenRoomTypeId);
        $row = mysqli_fetch_array($resultChosenRoomTypeId);
        $roomTypeId = $row['roomTypeId'];

        $sqlChosenRoomId = "SELECT roomId FROM rooms where roomTypeId = '$roomTypeId' and isFree = '1'";
        $resultChosenRoomId = mysqli_query($dbConn, $sqlChosenRoomId);

        if(mysqli_num_rows($resultChosenRoomId) > 0) {
          $row = mysqli_fetch_array($resultChosenRoomId);
          $roomId = $row['roomId'];
        } else {
          echo "<h2>Sorry, no rooms are available for the selected room type.</h2>";
          exit();
        }

        //if(CURDATE() >= $startDate AND CURDATE() <= DATE_ADD($startDate, INTERVAL $duration DAY)){
          $sqlUpdateRoomAvailability = "UPDATE rooms SET isFree='0' where roomId = '$roomId'";
          $resultsqlUpdateRoomAvailability = mysqli_query($dbConn, $sqlUpdateRoomAvailability);
        //}

        try {
          $stmt = mysqli_prepare($dbConn, "INSERT INTO reservations (startDate, duration, people, roomId, clientName, clientPhone) VALUES (?, ?, ?, ?, ?, ?)");
          mysqli_stmt_bind_param($stmt, 'sisiss', $startDate, $duration, $people, $roomId, $clientName, $clientPhone);  
    
          if (mysqli_stmt_execute($stmt)) {
              echo "<br><br><h2>Резервацията е направена успешно!</h2>";
              $dbConn->commit();
          } else {
          echo "<br><br><h2>Грешка при правенето на резервацията!</h2>" . mysqli_error($dbConn);
          }
        } catch (Exception $e) {
          $dbConn->rollback();
          echo "Transaction failed: " . $e->getMessage();
        }
    
        mysqli_stmt_close($stmt);
    }
  }

    ?>
<br><a href="startPage.php">
        <img src="arrow2.png" width="50" height="35" align="left"></a>
</body>
</html>