<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" type="text/css" href="makeReservationButtonCSS.css">
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
  top: 50px;
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

.all-reservations {
  margin-top: 24px;
  left: 500px;
}

.reservations-by-month {
  margin-top: 24px;
  left: 550px;
}

.all-reservations-dropdown a:hover {
  color: #f2dbaa;
}

.reservations-by-month-dropdown a:hover {
  color: #f2dbaa;
}

.contacts {
  position: fixed;
  display: inline-block;
  right: 20px;
  bottom: 40px; /* Adjust this value to move the icon slightly lower */
  top: -1px;
}


/* Dropdown styles */
.contacts-dropdown {
  display: none;
  position: absolute;
  background: linear-gradient(to bottom, #97f0e2, #0e59ed);
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
  border-radius: 8px;
  font-family: 'Monserrat';
  transition: color 0.3s ease-in-out;
  /* Adjust positioning to align with the contacts icon */
  top: 50px; /* Adjust this value according to your design */
  right: 0; /* Align with the right side of the contacts icon */
}

/* Show the dropdown when hovering over the contacts icon */
.contacts:hover .contacts-dropdown {
  display: block;
}

/* Dropdown links */
.contacts-dropdown a {
  display: block;
  padding: 6px 0;
  color: #666;
  text-decoration: none;
  transition: color 0.2s ease-in-out;
}

/* Hover effect for dropdown links */
.contacts-dropdown a:hover {
  color: #f2dbaa;
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
      <!--<a href='makeReservation.php'> Make Reservation </a><br>-->
      <button onclick="window.location.href='makeReservation.php'">Make Reservation
  <div class="star-1">
    <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><defs></defs><g id="Layer_x0020_1"><metadata id="CorelCorpID_0Corel-Layer"></metadata><path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path></g></svg>
  </div>
  <div class="star-2">
    <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><defs></defs><g id="Layer_x0020_1"><metadata id="CorelCorpID_0Corel-Layer"></metadata><path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path></g></svg>
  </div>
  <div class="star-3">
    <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><defs></defs><g id="Layer_x0020_1"><metadata id="CorelCorpID_0Corel-Layer"></metadata><path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path></g></svg>
  </div>
  <div class="star-4">
    <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><defs></defs><g id="Layer_x0020_1"><metadata id="CorelCorpID_0Corel-Layer"></metadata><path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path></g></svg>
  </div>
  <div class="star-5">
    <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><defs></defs><g id="Layer_x0020_1"><metadata id="CorelCorpID_0Corel-Layer"></metadata><path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path></g></svg>
  </div>
  <div class="star-6">
    <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><defs></defs><g id="Layer_x0020_1"><metadata id="CorelCorpID_0Corel-Layer"></metadata><path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path></g></svg>
  </div>
</button>
      <?php } ?>
    </div> 


    <div class="dropdown all-reservations all-reservations-dropdown">
      <?php if($role=="Administrator") { ?>
      <a href='allReservations.php'> All Reservations </a><br>
      <?php } ?>
    </div>

    <div class="dropdown reservations-by-month reservations-by-month-dropdown">
      <?php if($role=="Administrator") { ?>
      <a href='reservationsByMonth.php'> Reservations by month</a><br>
      <?php } ?>
    </div>


    <div class="dropdown contacts">
  <?php if($role=="Administrator" || $role=="Client") { ?>
  <img src="contactIcon.png" alt="Contacts" width="30" height="30"/>
  <div class="dropdown-content contacts-dropdown">
    <a href='https://www.facebook.com/stefanspirov00?locale=bg_BG' target='_blank'>Facebook</a><br>
    <a href='https://www.instagram.com/stefanspirov/' target='_blank'>Instagram</a><br>
    <a href='https://www.gmail.com' target='_blank'>plinafan@gmail.com</a><br>
    <a>0895450365</a><br>
  </div>
<?php } ?>
</div>

</div>


</style>
</body>
</html>