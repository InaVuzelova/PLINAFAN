<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home page</title>
  <style>  
.dropdown {
  position: relative;
  display: inline-block;
  top: -20px;
}

.dropdown-content {
  display: none;
  position: absolute;
  /*background-color: #97f0e2; /* dropdown fon */
  background: linear-gradient(to bottom, #0e59ed, #97f0e2);
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
  border-radius: 8px;
  font-family: 'Monserrat';
  transition: color 0.3s ease-in-out;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.menu {
  display: flex;
  font-family: 'Monserrat';
  font-size: 20px;
  background: linear-gradient(to right, #0e59ed, #97f0e2);
  padding: 10px;
  color: #fff;
  height: 30px;
}

.menu .dropdown {
  margin-right: 10px;
}

.menu .dropdown:last-child {
  margin-right: 0;
}

.menu span {
  cursor: pointer;
  color: #666;
  font-weight: bold;
}

.dropdown-content a {
  display: block;
  padding: 6px 0;
  color: #666;
  text-decoration: none;
  transition: color 0.2s ease-in-out;
}

.dropdown-content a:hover {
  color: #f2dbaa;
}

.container {
  position: relative;
  width: 100%;
  height: 150vh;
  display: flex;
  justify-content: center;
  align-items: center;
  position: fixed;
}

.logo {
  position:relative;
  top: 40px;
  right: 20px;
  width: 600px;
  height: 400px;
}

.image {
  width: 350px;
  height: 200px;
  border-radius: 0px;
  position: fixed;
}

.make-reservation {
  margin-top: 25px; /* Adjust this value according to your needs */
  left: 20px;
}

body {
  font-family: Arial, sans-serif;
  background-color: lavenderblush;
  background-image: url("loginPageBackground2.jpg");
  margin: 10px;
  padding: 0;
}
</style>

<?php
if(isset($_SESSION['role'])) {
    $role = $_SESSION['role'];
    $username = $_SESSION['username'];
}
?>

</head>
<body>
<div class="menu">
  <div class="dropdown-container">
    <div class="dropdown">
      <?php if($role=="Administrator" || $role=="Client") { ?>
      <img src="menu.png" alt="Menu" width="30" height="30"/>
      <div class="dropdown-content">
        <a href='input_book.php'>Information</a><br>
        <a href='input_reader.php'>Services</a><br>
        <a href='input_publisher.php'>Entertainments</a><br>
        <a href='input_author.php'>Offers</a><br>
      </div>
      <?php } ?>
    </div>
  </div>
    <div class="dropdown make-reservation">
      <?php if($role=="Administrator" || $role=="Client") { ?>
      <a href='makeReservation.php'> Make Reservation </a><br>
      <?php } ?>
    </div> 
  <!--</div>-->
</div>

  <img class="logo" src="logo.png">

  <style>
  .logout-link {
    position: fixed;
    bottom: 10px;
    right: 10px;

    display: block;
  }
</style>

<br>
<a href="index.php" class="logout-link">
  <img src="logout.png" width="65" height="70" alt="Logout">
</a>
</body>
</html>