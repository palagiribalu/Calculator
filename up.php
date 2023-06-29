<?php
include 'dp.php';
include 'login.php';
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/JPG")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 4000000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
	echo "<a href = 'me.php'>Back</a>";
    }
  else
    {
    if (file_exists("pic/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists! <br />
	  		<a href = 'me.php'>Back</a>";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "pic/" . $_FILES["file"]["name"]);
	  $picture = $_FILES["file"]["name"];
	  mysqli_query($con,"UPDATE users SET picture = '$picture' WHERE username = '$username'");
      // Salvestatud
        echo "Picture added!  ";
        echo "<a href = 'index.php'>Back</a>";
	  
	  die();
      }
    }
  }
else
  {
  echo "Wrong format!";
  echo "<a href = 'me.php'>Back</a>";
  }
?>