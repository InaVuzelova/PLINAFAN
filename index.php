<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log In</title>
</head>
<body class="custom-body">
<?php include 'create.php'; ?>
    <h2>LOGIN: </h2>
    <form method="post" action="index.php" class="custom">
        Username/email: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        You are: <select name="role">
              <option value="Client">Client</option>
              <option value="Administrator">Administrator</option>  
              </select><br><br>
        <input type="submit" name='submit' value="Log In">
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        Don't have an account? <a href="signup.php" class="sign-up-link">Sign up </a>
    </form>

<?php 
    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        $sql = "SELECT id FROM login WHERE username = '$username' AND password = '$password' AND role = '$role'";
        $result = mysqli_query($dbConn, $sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $id_login = $row['id'];

            $_SESSION['role'] = $role;
            $_SESSION['username'] = $username;
            header("Location: startPage.php"); // Replace welcome.php with the page you want to redirect after login.
            exit(); 
        } else {
            echo 'There is not a registration with these username, password, and role. Please try again or sign up!';
        }
     }
    ?>
</body>
</html>
