<?php
include("db.php");

if(isset($_POST['register'])){

$name=$_POST['name'];
$email=$_POST['email'];
$password=password_hash($_POST['password'], PASSWORD_DEFAULT);

$check=mysqli_query($conn,"SELECT * FROM users11 WHERE email='$email'");

if(mysqli_num_rows($check)>0){

$msg="Email already exists";

}else{

mysqli_query($conn,"INSERT INTO users11(name,email,password)
VALUES('$name','$email','$password')");

$msg="Registration successful";

}

}
?>

<!DOCTYPE html>
<html>

<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/style.css">

</head>

<body>

<div class="container mt-5">

<div class="glass-card col-md-4 mx-auto">

<h3><b>REGISTER<b></h3>

<?php if(isset($msg)) echo "<p>$msg</p>"; ?>

<form method="POST">

<input class="form-control" name="name" placeholder="Name" required>

<input class="form-control" name="email" placeholder="Email" required>

<input type="password" class="form-control" name="password" placeholder="Password" required>

<button class="btn btn-primary w-100" name="register">Register</button>

</form>
<br>

<a href="login.php">Already registered? Login</a>

</div>

</div>

</body>
</html>