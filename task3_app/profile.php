<?php
session_start();

if(!isset($_SESSION['user'])){
header("Location: login.php");
exit();
}
?>

<div class="container mt-5">

<div class="glass-card text-center">

<h2>User Profile</h2>

<p>Name: <?php echo $_SESSION['user']; ?></p>

<a class="btn btn-primary" href="dashboard.php">Back</a>

</div>

</div>