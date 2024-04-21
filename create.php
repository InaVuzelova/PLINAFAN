<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
include 'config.php';

    //Създаване на таблица roomTypes
    $sqlCreateTableRoomTypes = "CREATE TABLE IF NOT EXISTS roomTypes(
        roomTypeId INT(6) UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
        roomType    VARCHAR(255),
        price        DECIMAL(10,2) 
    ) ENGINE=INNODB DEFAULT CHARSET=utf8";

    $result2 = mysqli_query($dbConn, $sqlCreateTableRoomTypes);
    if(!$result2) {
        die("<br>Грешка при създаване на таблица ROOM TYPES: " . mysqli_error($dbConn));
    }


    //Създаване на таблица rooms
    $sqlCreateTableRooms = "CREATE TABLE IF NOT EXISTS rooms(
        roomId                 INT(6) UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
        roomNumber             INT(6),
        roomTypeId             INT(6) UNSIGNED,
        FOREIGN KEY (roomTypeId) REFERENCES roomTypes(roomTypeId)
    ) ENGINE=INNODB DEFAULT CHARSET=utf8";

    $result3 = mysqli_query($dbConn, $sqlCreateTableRooms);
    if(!$result3) {
        die("<br>Грешка при създаване на таблица ROOMS: " . mysqli_error($dbConn));
    }


    //Създаване на таблица reservations
    $sqlCreateTableReservations = "CREATE TABLE IF NOT EXISTS reservations(
        reservationId INT(6) UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
        startDate DATE DEFAULT NULL,
        duration INT(6) DEFAULT NULL,
        people INT(6) DEFAULT NULL,
        roomId INT(6) UNSIGNED DEFAULT NULL,
        clientName VARCHAR(255) DEFAULT NULL,
        clientPhone VARCHAR(20) DEFAULT NULL,
        FOREIGN KEY (roomId) REFERENCES rooms(roomId)
    ) ENGINE=INNODB DEFAULT CHARSET=utf8";

    $result1 = mysqli_query($dbConn, $sqlCreateTableReservations);
    if(!$result1) {
        die("<br>Грешка при създаване на таблица RESERVATIONS: " . mysqli_error($dbConn));
    }


    //Създаване на таблица login
    $sqlCreateTableLogin = "CREATE TABLE IF NOT EXISTS login (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    role VARCHAR(15) NOT NULL
    ) ENGINE=INNODB DEFAULT CHARSET=utf8";

    $result4 = mysqli_query($dbConn, $sqlCreateTableLogin);
    if (!$result4) {
        die("<br>Грешка при създаване на таблица login: " . mysqli_error($dbConn));
    }
 ?>
</body>
</html>