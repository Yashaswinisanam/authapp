<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>

<title>Auth App</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/style.css">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark px-4">

<a class="navbar-brand">Auth App</a>

<div class="ms-auto">

<?php if(isset($_SESSION['user'])){ ?>

<a class="btn btn-outline-light me-2" href="dashboard.php">Dashboard</a>
<a class="btn btn-danger" href="logout.php">Logout</a>

<?php } else { ?>

<a class="btn btn-outline-light me-2" href="login.php">Login</a>
<a class="btn btn-primary" href="register.php">Register</a>

<?php } ?>

</div>

</nav>

<div class="hero">

<h1>Secure Modern Authentication System</h1>

<a href="register.php" class="btn btn-primary mt-3">Get Started</a>

</div>

<div class="container mb-5">

<h2 class="text-center mb-4">Features</h2>

<div class="row">

<div class="col-md-4">

<div class="glass-card text-center">

<h4>User Login</h4>
<p>Secure authentication system</p>

<a href="login.php" class="btn btn-primary">Open</a>

</div>

</div>

<div class="col-md-4">

<div class="glass-card text-center">

<h4>Dashboard</h4>
<p>Access your private dashboard</p>

<a href="login.php" class="btn btn-primary">View</a>

</div>

</div>

<div class="col-md-4">

<div class="glass-card text-center">

<h4>User Profile</h4>
<p>Manage account details</p>

<a href="login.php" class="btn btn-primary">Open</a>

</div>

</div>

</div>

</div>

</body>
</html>