<?php
include 'dp.php';
include 'login.php';

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tinder</title>
<link href="./css/bootstrap.css" rel="stylesheet">
<link href="./css/style.css" rel="stylesheet">
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
</head>

<body>

<!--Menüü algus-->
    	<div class = "navbar navbar-inverse navbar-fixed-top"><!--fixed-->
        	<div class = "navbar-inner">
                <div class = "container">
                
                	<a class="brand" href="index.php"> <img class = "img-responsive" src="./img/logo2.png"></a>
                    <button class = "navbar-toggle" data-toggle = "collapse" data-target  = ".navHeaderCollapse">
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                    </button>
                    
                    <!--Menüü items-->
                    <div class = "collapse navbar-collapse navHeaderCollapse">
                        <ul class = "nav navbar-nav navbar-right">
                            <li class = "active"><a href = "index.php"><i class="fa fa-home fa-lg fa-spin" style = "color: #f43333"></i> Home</a></li>
                            <li><a href = "discover.php"><i class="fa fa-users fa-lg"></i> Discover</a></li>
                            <li><a href = "register.php"><i class="fa fa-gears fa-lg"></i> Register</a></li>
                            <li><a href = "me.php"><i class="fa fa-user fa-lg"></i> My profile</a></li>
                        </ul>
                    </div>
                    
                </div>
        	</div>
        </div> <!--Menüü lõpp-->
        
        <!--Tühi rida-->
        <div class = "empty-space">
        </div><!--Tühi rida lõpp-->
        
        <!--Sisu-->
        <div class = "container">
        	<div class = "row text-center">
            	 
                <!-- Vasak pool-->
            	<div class = "col-sm-3">
                	<?php
						if(!$username) {	
					?>
                	<h2>Log in</h2>
                	<div class = "panel panel-default">
                    	<div class = "panel-body">
                        	<?php
								echo $logMsg;
							?>
                        	<form method = "POST">
                            	<input type = "text" name="username" id="username" class="form-control inputField" placeholder="Username" autocomplete="off" />
                                <input type = "password" name="password" id="password" class="form-control inputField" placeholder="Password"/>
                                <a href = "register.php" class = "btn btn-default">Register</a>
                             	<input type = "submit" class = "btn btn-info" value = "Log in" />
                            </form>
            			</div>
        	        </div>
                    <?php
						} else {
					?>
                    <h2>My Profile</h2>
                    <div class = "panel panel-default">
                    	<div class = "panel-body">
                        	<div class = "page-header">
                                <?php
									echo "<h3><small>Welcome, </small>$fullname</h3>"
								?>
                            </div>
                            <div class = "userInfo">
                            	<p class = "pInfo">
                            	<?php
								if($picture_set == 'true') {
									echo '<img src = "pic/' .$picture. '" class = "img-responsive img-thumbnail" /><br />';
									echo '<a href = "upload.php">Change picture</a> <br> <br>';
								} else {
									echo 'Profile picture has not been uploaded yet!<br />';
									echo '<a href = "upload.php">Upload picture</a>';
								}
								?>
                                </p>
                            </div>
                                
                                <div class = "userInfo">
                                <?php
								if($description_set == 'true') {
									echo " $description <br>";
									echo '<a href = "description.php">Change description</a> <br> <br>';
								} else {
									echo 'Description has not been written yet!<br />';
									echo '<a href = "description.php">Add a description</a>';
								}
								?>
                                </div>
                            
                        	<div class = "col-md-12 userInfo">
                            	<?php
								echo '<p>' . $gender . '</p>';
								?>
                            </div>
                          
                            <a href = "discover.php"  class = "btn btn-info">Start tindering</a>
                            <a href = "logout.php" class = "btn btn-danger">Log out</a>
                        </div>
                    </div>
                    <?php
						}
					?>
                </div> <!-- Vasak pool lõpp-->

                <!--Parem pool-->   
                <div class = "col-sm-9">
                	<h2>Tinder</h2>
					
					<!--Tinder-->
                    <?php
					if(!$username) {
						echo "<div class = 'alert alert-info'>
                        	<p><strong>To use Tinder register or log in!</strong></p>
                        </div>";		
					} else {
					?>
                    <?php
						echo "<div class='alert alert-info'>
                        	<p><strong>You haven't started tindering yet.</strong> Click <a href = 'discover.php'>here</a>, to make love happen!</p>
                        </div>";	
					}
					?>
                    

</body>
</html>