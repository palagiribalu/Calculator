<?php
include 'dp.php';
include 'login.php';
include 'functions.php';
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
                            <li><a href = "register.php"><i class="fa fa-gears fa-lg"></i> Register</a></li>
                            <li class = "active"><a href = "me.php"><i class="fa fa-user fa-lg fa-spin" style = "color: #afd687"></i> My profile</a></li>
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
            	
                <!--Vaskak pool-->
                <div class = "col-sm-3">
                </div>
                
                <!--Keskmine-->
            	<div class = "col-sm-6">
                	<?php
						if(!$username) {
					?>
                	<h2>Upload picture</h2>
                	<div class = "panel panel-default">
                    	<div class = "panel-body">
                        	<?php
								if(!empty($reg)){
									echo $reg;
								} else {
									echo '<div class="warning alert alert-info">
                        	<p><strong>Täitke väljad!</strong> Fill all the fields!</p>
                        </div>';	
								}
							?>
                            <h2>Log in to upload a picture!</h2>
            			</div>
        	        </div>
                    <?php
						} else {
					?>
                    <h2>Upload picture</h2>
                    <div class = "panel panel-default">
                    	<div class = "panel-body">
                        	<div class = "page-header">
                                <?php
									echo "<h3>Add profile picture for user <strong>$username</strong></h3>"
								?>
                            </div>
                            
                            <?php
							if($saved == ''){
								echo '<form action = "up.php" method = "POST" enctype="multipart/form-data">
									<label for="file">File name:</label>
									<input type="file" name="file" class = "btn btn-info" id="file" /><br>
									<input type="submit" class = "btn btn-info" name="submit" value="Upload picture" />
								</form>';
							}
							if ($saved == 'true') {
								echo "<div class = 'alert alert-success'>
										<p><strong>Success!</strong></p>
									</div>";
							}
							if ($saved == 'false') {
								echo "<div class = 'alert alert-danger'>
										<p><strong>Unsuccess!</strong>Picture with this name already exists!</p>
									</div>";
							}
							if ($saved == 'invalid') {
								echo "<div class = 'alert alert-warning'>
										<p><strong>Unsuccess!</strong>Wrong format!</p>
									</div>";
							}
							?>
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
        
         <!--Tühi rida-->
        <div class = "empty-space">
        </div><!--Tühi rida lõpp-->
        
    

</body>
</html>