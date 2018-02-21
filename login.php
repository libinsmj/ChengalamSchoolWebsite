<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	
	// it will never let you open index(login) page if session is set
	if ( isset($_SESSION['user'])!="" ) {
		header("Location: content_manager1.php");
		exit;
	}
	
	$error = false;
	
	if( isset($_POST['btn-login']) ) {	
		
		// prevent sql injections/ clear user invalid inputs
		$email = trim($_POST['email']);
		$email = strip_tags($email);
		$email = htmlspecialchars($email);
		
		$pass = trim($_POST['pass']);
		$pass = strip_tags($pass);
		$pass = htmlspecialchars($pass);
		// prevent sql injections / clear user invalid inputs
		
		if(empty($email)){
			$error = true;
			$emailError = "Please enter your email address.";
		} else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
			$error = true;
			$emailError = "Please enter valid email address.";
		}
		
		if(empty($pass)){
			$error = true;
			$passError = "Please enter your password.";
		}
		
		// if there's no error, continue to login
		if (!$error) {
			
			$password = hash('sha256', $pass); // password hashing using SHA256
		
			$res=mysql_query("SELECT userId, userName, userPass FROM users WHERE userEmail='$email'");
			$row=mysql_fetch_array($res);
			$count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
			
			if( $count == 1 && $row['userPass']==$password ) {
				$_SESSION['user'] = $row['userId'];
				header("Location: content_manager1.php");
			} else {
				$errMSG = "Incorrect Credentials, Try again...";
			}
				
		}
		
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <title>Government H.S.S</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width"> 
    <link rel="shortcut icon" type="image/png" href="images/logo.png"/>
    
    <!-- 
    Circle Template 
    http://www.templatemo.com/preview/templatemo_410_circle 
    -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/templatemo_misc.css">
    <link rel="stylesheet" href="css/templatemo_style.css">
    
    
  
 
  
    

    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<!-- templatemo 410 circle -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div class="col-md-12 col-sm-12">
                                <div class="toggle-content text-center" style="opacity: 0.9; background:#000000; color:#FF0000; width:100%;" >
                                  
                                  
         <a href="index.php">  <img src="images/logo.png" alt="CGHSS" style="width:25%; opacity: 1.0; "></a>
            

	<div id="login-form">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
    
    	
    	<div class="col-md-12">
        
        	<div class="form-group">
            	<h4 style="color:#CCCC00">Sign In</h4>
            </div>
        
        	<div class="form-group">
            	<hr />
            </div>
            
            <?php
			if ( isset($errMSG) ) {
				
				?>
				<div class="form-group">
            	<div class="alert alert-danger">
				<span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
            	</div>
                <?php
			}
			?>
            
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
            	<input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $email; ?>" maxlength="40" style="opacity: 1.0; color:#3376DB;" />
                </div>
                <span class="text-danger"><?php echo $emailError; ?></span>
            </div>
            
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            	<input type="password" name="pass" class="form-control" placeholder="Your Password" maxlength="15" style="opacity: 1.0; color:#3376DB;" />
                </div>
                <span class="text-danger"><?php echo $passError; ?></span>
            </div>
            
            <div class="form-group">
            	<hr />
            </div>
            
            <div class="form-group">
            	<button type="submit" class="btn btn-block btn-primary" name="btn-login" style="opacity: 1.0;">Sign In</button>
            </div>
        </div>
   
    </form>
    </div>	



</div>
</div>
	
    <script src="js/vendor/jquery-1.10.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="js/jquery.easing-1.3.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
            
			jQuery(function ($) {

                $.supersized({

                      // Functionality
                    slide_interval: 5000, // Length between transitions
                    transition: 1, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                    transition_speed: 700, // Speed of transition

                    // Components                           
                    slide_links: 'blank', // Individual links for each slide (Options: false, 'num', 'name', 'blank')
                    slides: [ // Slideshow Images
                        
						{
                            image: 'images/slide-1.jpg'
                        }, {
                            image: 'images/slide-2.jpg'
                        },{
                            image: 'images/slide-3.jpg'
                        },{
                            image: 'images/slide-4.jpg'
                        },{
                            image: 'images/slide-5.jpg'
                        },{
                            image: 'images/slide-6.jpg'
                        },{
                            image: 'images/slide-7.jpg'
                        },{
                            image: 'images/slide-8.jpg'
                        }
                    ]

                });
            });
            
    </script>
</body>
</html>
<?php ob_end_flush(); ?>