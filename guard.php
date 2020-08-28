<?php
session_start();
include('config/db_connect.php');
$GNM=$_SESSION['GNAME'];
if(isset($_POST['sub'])){

  $gname=$_POST['GName'];
  $ggen=$_POST['GGender'];
  $gpur=$_POST['GPurpose'];
  $gpho=$_POST['GPhone'];
  $grid=$_POST['GRid'];
  $GID=$_SESSION['gid'];
  $GNO=$_SESSION['gate'];
  $query = "INSERT INTO guest VALUES('', '$gname', '$ggen', '$gpho', '$grid', '$gpur')";
  $result= mysqli_query($conn, $query);
  $query1= "SELECT Guestid from guest where GuestName='$gname'";
  $result1= mysqli_query($conn, $query1);
  while($row= mysqli_fetch_array($result1)){
    $guestID=$row['Guestid'];
  }
  $query2 = "INSERT INTO logs VALUES('$guestID', '$gname', '$GID', '$GNO', NOW(), Null)";

  $result2= mysqli_query($conn, $query2);

  if( $result1)
  {
    echo "<script>alert('Guest Added!!!')</script>";
  }else{
    echo "<script>alert('Error !!!')</script> \n mysqli_error()";
  }
}
?>
<!DOCTYPE html>
<html>
<head> <title>SGEDMS</title>
<link rel="stylesheet" href="css/theme.css">
</head>

<body>
<!-- Header -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="dashboard.php" class="w3-bar-item w3-button">SGEDMS</a>
      <div class="w3-right w3-hide-small">
        <a href="guard.php " class="w3-bar-item w3-button">Welcome <?php echo ' '.$GNM; ?></a>
        <a href="guest.php " class="w3-bar-item w3-button">view Guest</a>
        <a href="dashboard.php" class="w3-bar-item w3-button">Logout</a>
      </div>  
  </div>
</div>
<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="image/Welcome.jpeg" alt="" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Add Guest</b></span></h1>

     <!-- Guest form -->
  <div class="w3-container w3-padding-32" id="contact">
    
    <form method="POST">
     <!--  <input class="w3-input w3-border" type="number" placeholder="Guest id" name="Gid"> -->
      <input class="w3-input w3-section w3-border" type="text" placeholder="Guest Name" name="GName">
      <input class="w3-input w3-section w3-border" type="text" placeholder="gender" name="GGender">
      <input class="w3-input w3-section w3-border" type="number" placeholder="Phone" name="GPhone">
      <input class="w3-input w3-section w3-border" type="number" placeholder="Reference-id" name="GRid">
      <input class="w3-input w3-section w3-border" type="text" placeholder="purpose" name="GPurpose">
    
      <button class="w3-button w3-black w3-section" name="sub" type="submit">
      <i class="fa fa-paper-plane"></i> submit 
      </button>
    </form>
  </div>
    <!-- About Section -->
</div>

  <footer class="w3-center w3-black w3-padding-16">
    <div class="copyright" align="center">
        &copy; <span class="current-year margin-bottom center"></span><span class="text-bold text-uppercase"> SGEDMS</span>. <span>All rights reserved</span>
        </div>
  </footer>
</div>


</body>
</html>
