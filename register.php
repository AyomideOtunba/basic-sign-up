<?php
include 'config.php';

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 	// Get form data...
    $name     = $_POST['name'];
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $birthday = $_POST['birthday'];
    $phone    = $_POST['phone'];
    $gender   = $_POST['gender'];
    
    $sql = "INSERT INTO register (name, username, email, password, birthday, phone, gender)
    VALUES ('$name', '$username', '$email', '$password', '$birthday', '$phone', '$gender')";
        $pdo->query($sql);
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form action="register.php" method="POST">
	<input type="text" name="name" placeholder="Full Name"><br>

	<input type="text" name="username" placeholder="User name"><br>

	<input type="email" name="email" placeholder="Email"><br>

	<input type="password" name="password" placeholder="password"><br>

	<input type="date" name="birthday" placeholder="Birthday"><br>

	<input type="tel" name="phone" placeholder="Phone Number"><br>

	<input type="radio" name="gender" value="Male">Male <br>

	<input type="radio" name="gender" value="Female">Female <br>

	<button type="submit" name="register">Register</button>

</form>
</body>
</html>