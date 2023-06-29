<?php
include 'dp.php';
include 'login.php';
include 'reg.php';
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
                            <li><a href = "index.php"><i class="fa fa-home fa-lg"></i> Home</a></li>
                            <li><a href = "discover.php"><i class="fa fa-users fa-lg"></i> Discover</a></li>
                            <li class = "active"><a href = "register.php"><i class="fa fa-gears fa-lg fa-spin" style = "color: #f43333"></i> Register</a></li>
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
            	
                <!--Vasak pool-->
                <div class = "col-sm-3">
                </div>
                
                <!--Keskmine-->
            	<div class = "col-sm-6">
                	<?php
						if(!$username) {
					?>
                	<h2>Register</h2>
                	<div class = "panel panel-default">
                    	<div class = "panel-body">
                        	<?php
								if(!empty($reg)){
									echo $reg;
								} else {
									echo '<div class="warning alert alert-info">
                        	<p><strong>Register now!</strong> Make love happen!</p>
                        </div>';	
								}
							?>
                        	<form method = "POST">
                            	<input type = "text" name="username2" id="username2" class="form-control inputField" placeholder="Username*" autocomplete="off" />
                                <input type = "password" name="password" id="password" class="form-control inputField" placeholder="Password*"/>
                                
                                <input type = "text" name="fullname" id="fullname" class="form-control inputField" placeholder="First and last name*" autocomplete="off" />
                                
                                  <input type="radio" name="gender" value="Male" >Male
<input type="radio" name="gender" value="Female">Female
                                
                                <input type = "email" name="email" id="email" class="form-control inputField" placeholder="E-mail*" autocomplete="off" />
                             	<input type = "submit" class = "btn btn-info" value = "Register" />
                            </form>
            			</div>
        	        </div>
                    <?php
						} else {
					?>
                    <h2>Register</h2>
                    <div class = "panel panel-default">
                    	<div class = "panel-body">
                        	<div class = "page-header">
                                <?php
									echo "<h3>User <strong>($username)</strong> is already logged in!</h3>"
								?>
                            </div>
                            <a href = "logout.php" class = "btn btn-danger">Log out</a>
                        </div>
                    </div>
                    <?php
						}
					?>
                </div> <!-- Keskmine lõpp-->

                <!--Parem pool-->   
                <div class = "col-sm-3">
                </div> <!--Parem pool lõpp-->  
            	
            </div>            
        </div>
        

</body>
</html>