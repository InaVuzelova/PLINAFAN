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
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  /*background-color: #97f0e2; /* dropdown fon */
  background: linear-gradient(to bottom, #97f0e2, #03a9f4);
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
  background: linear-gradient(to right, #97f0e2, #03a9f4);
  padding: 10px;
  color: #fff;
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
      top: 10px;
      right: 20px;
      width: 400px;
      height: 300px;
    }

    .image {
      width: 350px;
      height: 200px;
      border-radius: 0px;
      position: fixed;
    }

body {
  font-family: Arial, sans-serif;
  background-color: lavenderblush;
  background-image: url("startPageBackground.png");
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
    <div class="dropdown">
      <?php if($role=="Administrator") { ?>
      <span>Input</span>
      <div class="dropdown-content">
        <a href='input_book.php'>books</a><br>
        <a href='input_reader.php'>readers</a><br>
        <a href='input_publisher.php'>publishers</a><br>
        <a href='input_author.php'>authors</a><br>
        <a href='input_genre.php'>genres</a><br>
        <?php if($role=="Administrator") { ?>
        <a href='input_employee.php'>employees</a><br>
        <a href='input_position.php'>positions</a>
        <?php } ?>
      </div>
      <?php } ?>
    </div>

    <div class="dropdown">
      <span>Queries</span>
      <div class="dropdown-content">
        <a href='checkedOutBooksByReader.php'>Checked-out books by reader</a><br>
        <a href='checkedOutBookOrderedByReturnDate.php'>Checked-out books, ordered by return date</a><br>
        <a href='freeBooks.php'>Free books, ordered by number of check-outs</a><br>
        <a href='mostCheckedOutBooks.php'>Most checked-out books</a><br>
        <a href='top5employeesByBooks.php'>Top 5 employees by given books</a><br>
        <a href='top5readersByBooks.php'>Top 5 readers by given books</a>
      </div>
    </div>

    <div class="dropdown">
      <?php if($role=="Administrator") { ?>
      <span>Checkout</span>
      <div class="dropdown-content">
        <a href='input_check-out.php'>Request a check-out</a><br>
        <a href='input_check-out_book.php'>Book check-out</a>
      </div>
      <?php } ?>
    </div>

    <div class="dropdown">
      <span>Search</span>
      <div class="dropdown-content">
        <a href='search_forms.php'>Search books</a>
        <a href='view_all_books.php'>View all books</a>
      </div>
    </div>
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