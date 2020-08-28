<?php
session_start();
$GNM=$_SESSION['GNAME'];
include('config/db_connect.php');

// $query="CREATE VIEW V_logs AS SELECT L.Guestid, G.GuestName, L.Guardid, L.GateNo, L.Login FROM Guest G, logs L WHERE L.Guestid=G.Guestid and L.LogOut=Null";  
// $result=mysqli_query($conn, $query);

// while($row = $result -> fetch_assoc()){
//   $gid=$row['Guestid'];
//   if(isset($_POST[$gid])){
//       $query2="UPDATE logs SET LogOut=NOW() WHERE Guestid='$gid'";
//       $result2=mysqli_query($conn, $query2);
//   }
// }


?>


<!DOCTYPE html>
<html>
<head> <title>SGEDMS</title>
<link rel="stylesheet" href="css/theme.css">
</head>

<body>
<!-- Header -->
<header>
  <div class="w3-top">
    <div class="w3-bar w3-white w3-wide w3-padding w3-card">
      <a href="dashboard.php" class="w3-bar-item w3-button">SGEDMS</a>
        <div class="w3-right w3-hide-small">
          <a href="guard.php " class="w3-bar-item w3-button">Welcome <?php echo ' '.$GNM; ?></a>
          <a href="dashboard.php " class="w3-bar-item w3-button">Logout</a>
        </div>  
    </div>
  </div>
</header>

<main>
<!-- <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home"> -->
 <img class="#" alt="" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>All Guests</b></span></h1>
<form method="post">
  <table border="1px">
    <tr>
      <th>Guest id</th>
      <th>Guest Name</th>
      <th>Guard id</th>
      <th>Gate No </th>
      <th>Login time </th>
      <th>Action </th>
    </tr>
    <?php

        $query="SELECT * FROM logs"; 
        $result=mysqli_query($conn, $query);
        if($result) {
        while($row = $result -> fetch_assoc()){
          
          $gid=$row['Guestid'];
           if(isset($_POST[$gid])){
          $query2="UPDATE logs SET LogOut=NOW() WHERE Guestid='$gid'";
          $result2=mysqli_query($conn, $query2);
          echo "<script>alert('guest logged out')</script>";
          echo "<script>location.href='guest.php'</script>";
        }
        $log=$row['LogOut'];
          if($log==Null){
          echo "<tr><td>". $row['Guestid'] ."</td><td>". $row['GuestName'] ."</td><td>". $row['Guardid'] ."</td><td>". $row['GateNo'] ."</td><td>". $row['Login'] ."</td>";
          echo "<td><button class='w3-padding w3-bar' name='$gid' >Exit</button></td>";
        }
      }
    }
    
       echo "</table>";
      // $query="CREATE VIEW V_logs AS SELECT L.Guestid, G.GuestName, L.Guardid, L.GateNo, L.Login FROM Guest G, logs L WHERE L.Guestid=G.Guestid and L.LogOut=Null";  
      // $result=mysqli_query($conn, $query);


      // $conn->close();
    ?>
  </table>
  </form>
</div>

</main>



<footer class="w3-center w3-black w3-padding-16">
  <div class="copyright" align="center">
      Copyright &copy; <span class="current-year margin-bottom center">2019</span><span class="text-bold text-uppercase"> SGEDMS</span>
  </div>
</footer>
</body>
</html>
