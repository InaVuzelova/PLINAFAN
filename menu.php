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

.make-reservation {
  margin-top: 25px; /* Adjust this value according to your needs */
  left: 20px;
}

.make-reservation:hover a {
  color: #f2dbaa;
}

.small-logo {
  margin-top: -14px;
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
  <div class="dropdown small-logo">
    <?php if($role=="Administrator" || $role=="Client") { ?>
      <a href="startPage.php">
        <img src="CutLogo.png" width="60" height="60">
      </a>
    <?php } ?>
  </div>
  <div class="dropdown-container">
    <div class="dropdown">
      <?php if($role=="Administrator" || $role=="Client") { ?>
      <img src="menu.png" alt="Menu" width="30" height="30"/>
      <div class="dropdown-content">
        <a href='information.php'>Information</a><br>
        <a href='services.php'>Services</a><br>
        <a href='entertainment.php'>Entertainments</a><br>
        <a href='offers.php'>Offers</a><br>
      </div>
      <?php } ?>
    </div>
  </div>
    <div class="dropdown make-reservation">
      <?php if($role=="Administrator" || $role=="Client") { ?>
      <a href='makeReservation.php'> Make Reservation </a><br>
      <?php } ?>
    </div> 
</div>
</style>
</body>
</html>