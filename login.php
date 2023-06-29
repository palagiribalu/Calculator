<?php
session_start();
$login = 'false';
$logMsg = '';
$saved = '';
$comment_tweet_id = '';
if (isset($_POST['username']) && isset($_POST['password'])) {
	if ($login == 'false') {
		$login_user = $_POST['username'];
		$login_pw = $_POST['password'];
		$result = mysqli_query($con, "SELECT * FROM users WHERE " . "username = '$login_user' AND " . "password = '$login_pw'");
		if (mysqli_num_rows($result) == 1) {
            
			// Salvestab postitatud data sessiooni
			$_SESSION['username'] = $_POST['username'];
			$logMsg = 'success';
			$login = 'true';
		} else {
			$logMsg = '<div class = "alert alert-danger">
                        	<p><strong>Unsuccess!</strong> Parool ja kasutajanimi ei sobinud!</p>
                        </div>';
			$login = 'false';
		}
	}
}

// Otsib kasutaja pärisnime
if (isset($_SESSION['username'])) {
	$username = $_SESSION['username'];
	$result = mysqli_query($con, "SELECT * FROM users WHERE " . "username = '$username'");
	while ($rows = mysqli_fetch_array($result)):
		$fullname = $rows['fullname'];
	endwhile;
} else {
	$username = '';	
}


// Kontrollib, kas profiili pilt on lisatud
$resultr = mysqli_query($con, "SELECT * FROM users WHERE " . "username = '$username'");
while ($rowr = mysqli_fetch_assoc($resultr)):
	$tmpr = $rowr['picture'];
endwhile;
if(!empty($tmpr)){
	$picture_set = 'true';
	$picture = $tmpr;
} else {
	$picture_set = 'false';
	$picture = '';
}

// Kontrollib, kas description on lisatud
$resultr = mysqli_query($con, "SELECT * FROM users WHERE " . "username = '$username'");
while ($rowr = mysqli_fetch_assoc($resultr)):
	$tmpr = $rowr['description'];
endwhile;
if(!empty($tmpr)){
	$description_set = 'true';
	$description = $tmpr;
} else {
	$description_set = 'false';
	$description = '';
}


// Gender
$resultr = mysqli_query($con, "SELECT * FROM users WHERE " . "username = '$username'");
while ($rowr = mysqli_fetch_assoc($resultr)):
	$tmpr = $rowr['gender'];
endwhile;
if(!empty($tmpr)){
	$gender_set = 'true';
	$gender = $tmpr;
} else {
	$gender_set = 'false';
	$description = '';
}
?>


