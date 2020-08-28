<?php
session_start();
$ANM=$_SESSION['ANAME'];
include('config/db_connect.php');
$query="SELECT * from contact";
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
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>All Queries</b></span></h1>

  <table border="1px" width="1000">
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Subject</th>
      <th>Comment</th>
    </tr>
    <?php
      if($result->num_rows > 0) {
        while($row = $result -> fetch_assoc()){
          echo "<tr><td>". $row['Name'] ."</td><td>". $row['Email'] ."</td><td>". $row['Subject'] ."</td><td>". $row['Comment'] ."</td>";
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
