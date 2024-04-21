<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
 	$servername = "localhost";
    $username = "root";
    $password = "";

    //Създаване на връзка със сървъра
    $dbConn = mysqli_connect($servername, $username, $password);

    //Проверка за успешна връзка
    if (!$dbConn) {
        die("<br>Connection failed: " . mysqli_error());
    }
    //echo "<br>Successful connection!";

    //Създаване на базата данни
    $sql = 'CREATE DATABASE IF NOT EXISTS plinafanHotel';
    if ($queryResource=mysqli_query($dbConn, $sql)){
        //echo "<br>The database is created.";
    } else {
        echo "<br>Error when creating database." . mysqli_error();
    }

    //Селектиране на базата данни
    if (!mysqli_select_db($dbConn, 'plinafanHotel')){
		die('<br>Не може да се селектира базата от данни:'. mysqli_error());
 	}

    //Затваряне на връзката със сървъра
	//mysqli_close($dbConn);
 ?>
</body>
</html>