<?php
session_start();
error_reporting(0);
include('config/db_connect.php');
error_reporting(0);
$ANM=$_SESSION['ANAME'];
?>
<!DOCTYPE html>
<html >
<head> 
    <title>Admin</title>
    <link href="css/theme.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="top">
        <div class="w3-bar w3-white w3-wide w3-padding w3-card ">
            <a href="dashboard.php" class="button">SGEDMS</a>
            <div class="w3-right w3-hide-small">
                <a href="admin.php" class="button">Welcome <?php echo ''.$ANM; ?></a>
                <a href="admin_login.php" class="button">Log out</a>
                <a href="dashboard.php" class="button">About</a>
            </div>
        </div>
    </div>

<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img src="images/Welcome.jpeg" alt="Welcome" width="1500" height="700">
  <div class="w3-display-middle w3-margin-top w3-center></div>


 <h1> class="w3-xxlarge w3-text-white"></h1>
<div align="center">
    <a href="add_guard.php">
        <button class="w3-padding w3-bar" >Add Guard</button>
    </a><br>
    <a href="remove_guard.php">
        <button class="w3-padding w3-bar">Remove Guard</button>
    </a><br>
    <a href="add_gate.php">
        <button class="w3-padding w3-bar">Add Gate</button>
    </a><br>
    <a href="remove_gate.php">
        <button class="w3-padding w3-bar">Remove Gate</button>
    </a><br>
    <a href="admin_guest.php">
        <button class="w3-padding w3-bar">View All Guest</button>
    </a><br>
    <a href="admin_query.php">
        <button class="w3-padding w3-bar">Queries</button>
    </a><br>
</div>
    </div>
  </div>

</header>
<footer class="w3-center w3-black w3-padding-16">
    <div class="copyright" align="center">
      &copy; <span class="current-year margin-bottom center"></span><span class="text-bold text-uppercase"> SGEDMS</span>. <span>All rights reserved</span>
    </div>
</footer>
</body>
</html>