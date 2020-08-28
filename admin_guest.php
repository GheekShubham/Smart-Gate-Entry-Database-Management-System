<?php
session_start();
$ANM=$_SESSION['ANAME'];
include('config/db_connect.php');
$query1="CREATE VIEW V_logs AS SELECT L.Guestid, G.GuestName, L.Guardid, L.GateNo, L.Login, L.LogOut from Guest G, logs L WHERE L.Guestid=G.Guestid";
$result1=mysqli_query($conn, $query1);
$query="SELECT * FROM V_logs";
$result=mysqli_query($conn, $query);


?>


<!DOCTYPE html>
<html>
<head> <title>SGEDMS</title>
<link rel="stylesheet" href="css/theme.css">
</head>

<body>
<!-- Header -->
<header>
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
</header>

<main>
<!-- <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home"> -->
 <img class="#" alt="" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>All Guests</b></span></h1>

  <table border="1px">
    <tr>
      <th>Guest id</th>
      <th>Guest Name</th>
      <th>Guard id</th>
      <th>Gate No </th>
      <th>Login time </th>
      <th>Logout time </th>
    </tr>
    <?php
      if($result->num_rows > 0) {
        while($row = $result -> fetch_assoc()){
          echo "<tr><td>". $row['Guestid'] ."</td><td>". $row['GuestName'] ."</td><td>". $row['Guardid'] ."</td><td>". $row['GateNo'] ."</td><td>". $row['Login'] ."</td><td>". $row['LogOut']."</td></tr>";
        }
        echo "</table>";
      }else{
        echo "0 result";
      }
      $conn->close();

    ?>
  </table>
</div>

</main>



<footer class="w3-center w3-black w3-padding-16">
  <div class="copyright" align="center">
      Copyright &copy; <span class="current-year margin-bottom center">2019</span><span class="text-bold text-uppercase"> SGEDMS</span>
  </div>
</footer>
</body>
</html>
