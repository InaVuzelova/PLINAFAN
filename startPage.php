<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home page</title>
  <style>  
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

.small-logo {
  margin-top: -14px;
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
<?php 
include 'create.php';
include 'menu.php';
?>

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