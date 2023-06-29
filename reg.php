<?php
if (isset($_POST['username2']) && isset($_POST['password']) && isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['gender'])) { 
	$reg_user = $_POST['username2'];
	$reg_pw = $_POST['password'];
	$reg_full_name = $_POST['fullname'];
	$reg_email = $_POST['email'];
    $reg_email = $_POST['email'];
    $reg_gender = $_POST['gender'];
	if(!empty($reg_user) && !empty($reg_pw) && !empty($reg_full_name) && !empty($reg_email) && !empty($reg_gender)) {
		$rslt = mysqli_query($con, "SELECT * FROM users WHERE " . " username = '$reg_user'");
		$asd = array();
		while ($rows = mysqli_fetch_array($rslt)):
			$asd[] = $rows['username'];
		endwhile;
		if(empty($asd)){
			mysqli_query($con,"INSERT INTO users (username, password, fullname, email, gender) 
VALUES ('$reg_user', '$reg_pw', '$reg_full_name', '$reg_email', '$reg_gender')");  
			$reg = '<div class="alert alert-success">
                        	<p><strong>Success!</strong> Now you can log in!</p>
                        </div>';
		} else {
			$reg = '<div class = "alert alert-danger">
                        	<p><strong>Unsuccess!</strong> Pick new username!</p>
                        </div>';
		}
	} else {
		$reg = '<div class = "alert alert-danger">
                        	<p><strong>Unsuccess!</strong> You have to fill out all the fields!</p>
                        </div>';
	}
}
?>
