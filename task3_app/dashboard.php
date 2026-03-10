<?php
session_start();

if(!isset($_SESSION['user'])){
header("Location: login.php");
exit();
}
?>

<!DOCTYPE html>
<html>

<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/style.css">

</head>

<body>

<nav class="navbar navbar-dark px-4">

<a class="navbar-brand">Dashboard</a>

<a class="btn btn-danger" href="logout.php">Logout</a>

</nav>

<div class="container mt-5">

<div class="row">

<div class="col-md-4">

<div class="glass-card text-center">

<h4>Profile</h4>

<a href="profile.php" class="btn btn-primary">Open</a>

</div>

</div>

<div class="col-md-4">

<div class="glass-card text-center">

<h4>Home</h4>

<a href="index.php" class="btn btn-primary">View</a>

</div>

</div>

<div class="col-md-4">

<div class="glass-card text-center">

<h4>Logout</h4>

<a href="logout.php" class="btn btn-danger">Logout</a>

</div>

</div>

</div>

</div>

</body>
</html>