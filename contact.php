<?php
include('config/db_connect.php');
if(isset($_POST['submit'])){
  $name=$_POST['Name'];
  $email=$_POST['Email'];
  $subject=$_POST['Subject'];
  $comment=$_POST['Comment'];
  $query="INSERT INTO contact VALUES('$name', '$email', '$subject', '$comment')";
  $result = mysqli_query($conn, $query);
  if($result){
    echo "<script>alert('Thanks, We will catch you soon !!!')</script>";
  }else{
    echo "<script>alert('Error !!!')</script> \n mysqli_error()";
  }
}
?>

<!DOCTYPE html>
<html>
<head> <title>Contact</title> 
<link rel="stylesheet" href="css/theme.css">
</head>

<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="dashboard.php" class="w3-bar-item w3-button">SGEDMS</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="dashboard.php" class="w3-bar-item w3-button">About</a>
    </div>
  </div>
</div>


<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="" src="images/Welcome.jpeg" alt="Architecture" width="1500" height="700">
</header>
  <div class="w3-display-middle w3-margin-top w3-center">

    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Contact</b></span> <span class="w3-hide-small w3-text-light-grey"><br></span></h1>
     <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">

    <form method="POST" >
      <input class="w3-input w3-border" type="text" placeholder="Name" name="Name">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Email" name="Email">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Subject" name="Subject">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Comment" name="Comment">
      <button class="w3-button w3-black w3-section" type="submit" name="submit">
        <i class="fa fa-paper-plane"></i> SEND MESSAGE
      </button>
    </form>
  </div>
  </div>

<footer class="w3-center w3-bottom w3-black w3-padding-16">
  <div class="copyright" align="center">
  
            &copy; <span class="current-year margin-bottom center"></span><span class="text-bold text-uppercase"> SGEDMS</span>. <span>All rights reserved</span>
          
        </div>
</footer>

</body>
</html>
