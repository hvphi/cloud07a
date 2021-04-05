<html lang="en-US">
  <head>
  <title>Profile</title>
  <link rel="stylesheet" href="../CSS/bootstrap.min.css">
  <link rel="stylesheet" href="../CSS/style.css">
  </head>
  <?php
  include 'config.php';
  session_start();

$userid = $_SESSION["username"];
$sql = "SELECT * FROM users1 where username='$userid'";

$query=mysqli_query($link, $sql) or die(mysqli_error());
$row=mysqli_fetch_array($query);
  ?>
  
  <h1>User Profile</h1>
      <div class="profile-input-field">
        <h3>Please Fill-out All Fields</h3>
        <img src="<?php echo $row['picture']; ?>" width="80px" height="120px">
       
      </div>
        <table class="table table-bordered">
             <tr>
		<td>Fullname</td><td style="text-align:left;"><?php echo $row['FullName']; ?></td>
             </tr>
             <tr>
		<td>Email</td><td  style="text-align:left;"><?php echo$row['email']; ?></td>
             </tr>
             <tr>
		<td>Phone</td><td  style="text-align:left;"><?php echo $row['phone']; ?></td>
            </tr>
        </table>
  <table>
      <tr>
          <td>
              <a href="EditProfile.php">Edit</a>
          </td>
          <td>
              <a href="http://scv.udn.vn/hvphivku">Detail</a>
          </td>
          <td>
              <a href="logout.php">Log out</a>
          </td>
      </tr>
  </table>
   </html>
      
