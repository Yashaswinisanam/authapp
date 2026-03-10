<?php
session_start();
include("db.php");

if(isset($_POST['login'])){

$email=$_POST['email'];
$password=$_POST['password'];

$result=mysqli_query($conn,"SELECT * FROM users11 WHERE email='$email'");
$user=mysqli_fetch_assoc($result);

if($user && password_verify($password,$user['password'])){

$_SESSION['user']=$user['name'];

header("Location: dashboard.php");
exit();

}else{

$msg="Invalid login";

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

<h3><b>LOGIN</b></h3>

<?php if(isset($msg)) echo "<p>$msg</p>"; ?>

<form method="POST">

<input class="form-control" name="email" placeholder="Email" required>

<input type="password" class="form-control" name="password" placeholder="Password" required>

<button class="btn btn-success w-100" name="login"><b>Login</b></button>

</form>
<br>

<a href="register.php">Create account</a>

</div>

</div>

</body>
</html>