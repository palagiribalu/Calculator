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
                            <li class = "active"><a href = "me.php"><i class="fa fa-user fa-lg fa-spin" style = "color: #f43333"></i> My profile</a></li>
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
                	<h2>Description</h2>
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
                            <h2>Log in to write a description!</h2>
            			</div>
        	        </div>
                    <?php
						} else {
					?>
                    <h2>Description</h2>
                    <div class = "panel panel-default">
                    	<div class = "panel-body">
                        	<div class = "page-header">
                                <?php
									echo "<h3>Write a description for user <strong>$username</strong></h3>"
								?>
                            </div>
                            <?php
							if($saved == ''){
								echo '<form action = "desc.php" method = "POST" enctype="multipart/form-data">
									<input type="text" name="description" id="description" class="form-control inputField" /><br>
									<input type="submit" class = "btn btn-info" name="submit" value="Save" />
								</form>';
                        
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