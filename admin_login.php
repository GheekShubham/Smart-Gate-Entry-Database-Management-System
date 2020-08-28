<?php
include('config/db_connect.php');
session_start();

if(isset($_POST['submit'])){
  $aid=$_POST['id'];
  $apass=$_POST['Password'];

  $query = "SELECT * FROM admin";
  $result=mysqli_query($conn,$query);
  while($row= mysqli_fetch_array($result)){
    if($aid==$row['id'] && $apass==$row['Password']){
      $aname=$row['Name'];
      $_SESSION['ANAME']=$aname;  
      Header('Location:admin.php');
    }
  }
  echo "<script> alert('Wrong Credential !!!')</script>";
}
?>

<!DOCTYPE html>
<html>
<title>login</title>

<link rel="stylesheet" href="css/theme.css">
<body>

<div class="top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card ">
    <a href="dashboard.php" class="button">SGEDMS</a>
      <div class="w3-right w3-hide-small">
        <a href="dashboard.php" class="button">About</a>
        <a href="Contact.php" class="button">Contact</a>
      </div>
  </div>
</div>


<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img src="images/Welcome.jpeg" alt="Welcome" width="1500" height="700">
  <div class="w3-display-middle w3-margin-top w3-center></div>

 <h1> class="w3-xxlarge w3-text-white">
 		<span class="w3-padding w3-black w3-opacity-min"><b>Admin Login</b></span> 
 </h1>
    <form method="post">
    	<div align="w3-center"; font-color:Black;>
        <br>

      		 <input class="w3-input w3-border" type="text" placeholder="Admin id" name="id">
      		 <input class="w3-input w3-section w3-border" type="password" placeholder="Password" name="Password">
      	</div>
          <input type="submit" name="submit" value="login">
    </form>
	</div>
  </div>
  <!--Footer-->
	<footer class="w3-center w3-black w3-padding-16">
 		<div class="copyright" align="center">
  		&copy; <span class="current-year margin-bottom center"></span><span class="text-bold text-uppercase"> SGEDMS</span>. <span>All rights reserved</span>
    </div>
	</footer>

</body>
</html>