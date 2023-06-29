<?php
include 'dp.php';
include 'login.php';

$description = mysqli_real_escape_string($con, $_POST['description']);

$sql="UPDATE users SET description = '$description' WHERE username = '$username'";
 
if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "Description added!   ";
echo "<a href = 'index.php'>Back</a>";

mysqli_close($con);
?>



