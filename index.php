<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
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
    <link rel="stylesheet" href="css/templatemo_styleeeeeee.css">
    
    
  
 
  
    

    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<!-- templatemo 410 circle -->
</head>
<body>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
<?php
error_reporting(~E_ALL & ~E_NOTICE & ~E_DEPRECATED);
//********************************************************** Database Connection *********************************************************** 
$conn=mysqli_connect('localhost','root','');
	if(!$conn)
	{ die('Could not connect:'.mysqli_error()); }
	$check=mysqli_select_db($conn,'cghss_db');
	if(!$check)
	{ die('Could not connect'.mysql_error()); }
	
	

	
	for($i=1;$i<=5;$i++)
	{
	$news_retval=mysqli_query($conn,"select * from news_tbl where news_id=$i") or die(mysql_error());	
	while($ob=mysqli_fetch_array($news_retval))
	{
		if($i==1)
		{ $news1=$ob['news']; }
		else if($i==2)
		{ $news2=$ob['news']; }
		else if($i==3) { $news3=$ob['news']; }
		else if($i==4)
		{ $news4=$ob['news']; }
		else if($i==5)
		{ $news5=$ob['news']; }
		else
		{ echo"Error"; }
	}
	}
?>

	
    
    
    
    
    
    
    
    
	
    
    <div class="bg-overlay"></div>
    
    
    <table border="0" id="newstbl" style="color:#d8aa46; width:100%; font-style:oblique; font-family:'Times New Roman', Times, serif; font-size:18px; opacity: 0.7; background:#333333;">
  <tr>
    <td width="51" align="right" valign="middle"><div id="news" align="left">News</div></td>
    <td width="1242" align="left" valign="middle"><marquee onMouseOver="this.stop();" onMouseOut="this.start();" >
      <i class="fa fa-bitbucket"></i><?php echo"$news1"; ?> &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-bitbucket"></i><?php echo"$news2"; ?>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-bitbucket"></i><?php echo"$news3"; ?>  &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-bitbucket"></i><?php echo"$news4"; ?>   &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-bitbucket"></i><?php echo"$news5"; ?>   
    </marquee></td>
  </tr>
</table>

    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-4 col-sm-12">
                <div class="sidebar-menu">
                    
                    <div class="logo-wrapper">
                       
                            <a href="index.php"><img id="logooooo" src="images/logo.png" alt="CGHSS" width="220" height="160">
                            </a>                      
                    </div> <!-- /.logo-wrapper -->
                    
                    <div class="menu-wrapper">
                        <ul class="menu">
                            <li><a class="homebutton" href="#">Home</a></li>
                            <li><a class="show-1" href="#">About</a></li>
                             <li><a class="show-2" href="#" onClick="templatemo_map();">Contact</a></li>
                            <li><a class="show-3" href="#">Our Resources</a></li>
                            <li><a class="show-4" href="#">Event</a></li>
                            <li><a class="show-5" href="#">Gallery</a></li>
                            
                           
                           
                        </ul> <!-- /.menu -->
                        <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
                    </div> <!-- /.menu-wrapper -->

                    <!--Arrow Navigation-->
                    <a id="prevslide" class="load-item"><i class="fa fa-angle-left"></i></a>
                    <a id="nextslide" class="load-item"><i class="fa fa-angle-right"></i></a>

                </div> <!-- /.sidebar-menu -->
            </div> <!-- /.col-md-4 -->

    
    
    
    
            <div class="col-md-8 col-sm-12">
                
                <div id="menu-container">

    
    
    
    
    
                    <div id="menu-1" class="about content">
                        <div class="row">
                            <ul class="tabs">
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab1" class="icon-item">
                                        <i class="fa fa-anchor" style="font-size:22px;">Values</i>
                                    </a> <!-- /.icon-item -->
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab2" class="icon-item">
                                        <i class="fa fa-leaf" style="font-size:22px;">LandMarks</i>
                                    </a> <!-- /.icon-item -->
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab3" class="icon-item">
                                        <i class="fa fa-bell-o" style="font-size:22px;">Utilities</i>
                                    </a> <!-- /.icon-item -->
                                </li>
                                
                            </ul> <!-- /.tabs -->
                            <div class="col-md-12 col-sm-12">
                                <div class="toggle-content text-center" id="tab1">
                                    <h3>Our Vision</h3>
                                    <p style="font-size:15px; color:#000000;">You can easily change icons by <a rel="nofollow" href="http://fontawesome.info/font-awesome-icon-world-map/">Font Awesome</a>. Example: <strong>&lt;<i class=&quot;fa fa-users&quot;&gt;&lt;></i>&gt;</strong> In varius eros ac est interdum, quis scelerisque elit semper. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                    <br><br>Donec mattis enim sit amet nisl faucibus, eu pulvinar nibh facilisis. Aliquam erat volutpat. Vivamus tempus, nisi varius imperdiet molestie, velit mi feugiat felis, sit amet fringilla mi massa sit amet arcu. Mauris dictum nisl id felis lacinia congue. Aliquam lectus nisi, sodales in lacinia quis, lobortis vel sem. Vestibulum elit nisi, placerat eget auctor ut, dictum at libero.</p>
                                    <h3>Our Mission</h3>
                                    <p style="font-size:15px; color:#000000;">You can easily change icons by <a rel="nofollow" href="http://fontawesome.info/font-awesome-icon-world-map/">Font Awesome</a>. Example: <strong>&lt;<i class=&quot;fa fa-users&quot;&gt;&lt;></i>&gt;</strong> In varius eros ac est interdum, quis scelerisque elit semper. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                    <br><br>Donec mattis enim sit amet nisl faucibus, eu pulvinar nibh facilisis. Aliquam erat volutpat. Vivamus tempus, nisi varius imperdiet molestie, velit mi feugiat felis, sit amet fringilla mi massa sit amet arcu. Mauris dictum nisl id felis lacinia congue. Aliquam lectus nisi, sodales in lacinia quis, lobortis vel sem. Vestibulum elit nisi, placerat eget auctor ut, dictum at libero.</p>
                                    <h3>Our Motivation</h3>
                                    <p style="font-size:15px; color:#000000;"> You can easily change icons by <a rel="nofollow" href="http://fontawesome.info/font-awesome-icon-world-map/">Font Awesome</a>. Example: <strong>&lt;<i class=&quot;fa fa-users&quot;&gt;&lt;></i>&gt;</strong> In varius eros ac est interdum, quis scelerisque elit semper. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                    <br><br>Donec mattis enim sit amet nisl faucibus, eu pulvinar nibh facilisis. Aliquam erat volutpat. Vivamus tempus, nisi varius imperdiet molestie, velit mi feugiat felis, sit amet fringilla mi massa sit amet arcu. Mauris dictum nisl id felis lacinia congue. Aliquam lectus nisi, sodales in lacinia quis, lobortis vel sem. Vestibulum elit nisi, placerat eget auctor ut, dictum at libero.</p>
                                </div>

                                <div class="toggle-content text-center" id="tab2">
                                    <h3>Land Marks</h3>
                                    <p style="font-size:15px; color:#000000;">Donec quis orci nisl. Integer euismod lacus nec risus sollicitudin molestie vel semper turpis. In varius imperdiet enim quis iaculis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris ac mauris aliquam magna molestie posuere in id elit. Integer semper metus felis, fringilla congue elit commodo a. Donec eget rutrum libero.
                                    <br><br>Nunc dui elit, vulputate vitae nunc sed, accumsan condimentum nisl. Vestibulum a dui lectus. Vivamus in justo hendrerit est cursus semper sed id nibh. Donec ut dictum lorem, eu molestie nisi. Quisque vulputate quis leo lobortis fermentum. Ut sit amet consectetur dui, vitae porttitor lectus.</p>
                                </div>

                                <div class="toggle-content text-center" id="tab3">
                                    <h3>Our Utilities</h3>
                                    <p style="font-size:15px; color:#000000;">Aliquam erat volutpat. Vivamus tempus, nisi varius imperdiet molestie, velit mi feugiat felis, sit amet fringilla mi massa sit amet arcu. Mauris dictum nisl id felis lacinia congue. Aliquam lectus nisi, sodales in lacinia quis, lobortis vel sem. Vestibulum elit nisi, placerat eget auctor ut, dictum at libero.
                                    <br><br>Proin enim odio, eleifend eget euismod vitae, pharetra sed lacus. Donec at sapien nunc. Mauris vehicula quis diam nec dignissim. Nulla consequat nibh mattis metus sodales, at eleifend tortor tempor. Sed auctor lacus felis. </p>
                                </div>
                            </div> <!-- /.col-md-12 -->
                        </div> <!-- /.row -->
</div>
                        
                    

    
    
    
    
    
    
    
                  

                    <div id="menu-2" class="contact content">
                        <div class="row">
                        	
                            <div class="col-md-12">
                                <div class="toggle-content text-center spacing">
                                    <h3>Contact Us</h3>
                                    <p style="font-size:15px; color:#000000;">We are always value your feedback. We will be at your service whenever you are in a need.
                                    <br><br><strong>Address:</strong> Government Higher Secondary School, Chengalam P.O, Kottayam - 686001, Kerala, India
                                    <br><strong>Email:</strong> info@govthsschengalam.com | <strong>Tel:</strong> 0481-2544866</p>
                                </div>
                            </div> <!-- /.col-md-12 -->
                            
                            <div class="col-md-12">
                                	
										<iframe style="width:100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4642.45358960661!2d76.46767463717305!3d9.59482588541132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf9dfac42484d98ea!2sGovernment+Higher+Secondary+School+Chengalam+South!5e0!3m2!1sen!2sin!4v1491879296242" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div> <!-- /.col-md-12 -->
                            
                            <div class="col-md-12">
                                <div class="contact-form">
                                    <div class="row">
                                    	<form action="#" method="post">
                                            <fieldset class="col-md-4">
                                                <input id="name" type="text" name="name" placeholder="Name">
                                            </fieldset>
                                            <fieldset class="col-md-4">
                                                <input type="email" name="email" id="email" placeholder="Email">
                                            </fieldset>
                                            <fieldset class="col-md-4">
                                                <input type="text" name="subject" id="subject" placeholder="Subject">
                                            </fieldset>
                                            <fieldset class="col-md-12">
                                                <textarea name="message" id="message" placeholder="Message"></textarea>
                                            </fieldset>
                                            <fieldset class="col-md-12">
                                                <input type="submit" name="send" value="Send Message" id="submit" class="button">
                                            </fieldset>
                                            <?php
$name = $_POST['name'];
$sub = $_POST['subject'];
$email = $_POST['email'];
$message = $_POST['message'];
if((!$name)&(!$sub)&(!$email)&(!$message))
{
}
else
{
$formsent = mail('juanmathewsabu@gmail.com','CGHSS Contact form',
				"You have received a new message from your website contact form.\n
				Here are the details-\n
				Name: $name\n
				Subject: $sub\n
				Mail id: $email\n
				Message: $message\n",
				"From: cghsschengalam.com");
		if ($formsent){
			echo "<P> Hi, $FirstName. We have recieved your message, Will respond soon!";
			//header("Location:/home/marar7gc/public_html/index.html");
			
		}else{
			echo"There is a problem with form.";
		}
		}
		?>
                                        </form>
                                    </div> <!-- /.row -->
                                </div> <!-- /.contact-form -->
                            </div> <!-- /.col-md-12 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.contact -->
                    
                    
                    
                    
                    
                    
              
                    
            
                    
                    
    
    
    
    
    
    
    
                    
                    
                    
                    
                    
                    
                    <div id="menu-3" class="our resources content">
                        <div class="row">
                            <ul class="tabs">
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab4" class="icon-item">
                                        <i class="fa fa-key" style="font-size:22px;">Principal</i>
                                    </a> <!-- /.icon-item -->
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab5" class="icon-item">
                                         <i class="fa fa-key" style="font-size:22px;">Teaching</i>
                                    </a> <!-- /.icon-item -->
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab6" class="icon-item">
                                         <i class="fa fa-key" style="font-size:22px;">Non Teaching</i>
                                    </a> <!-- /.icon-item -->
                                </li>
                            </ul> <!-- /.tabs -->
                            <div class="col-md-12 col-sm-12">
                                <div id="tab4">
                                    <?php
					
						$principal_retval=mysqli_query($conn,"select * from  p_table where p_id=1") or die(mysql_error());
						while($ob=mysqli_fetch_assoc($principal_retval))
						{
						$principal_name=$ob['p_name'];
						$principal_mail=$ob['p_mail'];
						$principal_number=$ob['p_number'];
						$principal_message=$ob['p_message'];
						$principal_image=$ob['p_image'];
						
						
						?><div class="col-md-4 col-sm-4" style="opacity: 0.0;">
                                <div class="member-item" style="opacity: 0.0;">
                                    <div class="thumb" style="opacity: 0.0;">
                                    </div>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                           <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="data:image/jpeg;base64,<?php echo base64_encode($principal_image); ?>" alt="Image Not Found">
                                    </div>
                                    <h4><?php echo"$principal_name"?></h4>
                                    <span>PRINCIPAL</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-4" style="opacity: 0.0; height:400px;">
                                <div class="member-item" style="opacity: 0.0;">
                                    <div class="thumb" style="opacity: 0.0;">
                                    </div>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                           <?php } ?>
                           <div class="toggle-content text-center">
                                    <h3>MESSAGE</h3>
                                    <p style="font-size:15px; color:#000000;"><?php echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$principal_message" ?></p><br>
                                    <h3>CONTACT DETAILS</h3>
                                    <h6 class="fa fa-phone-square" style="font-size:16px;"><?php echo"&nbsp;&nbsp;$principal_number" ?></h6><br>
                                    <h6 class="fa fa-envelope-o" style="font-size:16px; text-transform:lowercase;"><?php echo "&nbsp;&nbsp;$principal_mail" ?></h6><br>
                                     <a class="fa fa-linkedin-square" aria-hidden="true" style="font-size:26px;" href="http://www.linkedin.com"></a>&nbsp;&nbsp;&nbsp;
              <a class="fa fa-google-plus-square" style="font-size:26px" aria-hidden="true" href="http://www.plus.google.com"></a>&nbsp;&nbsp;&nbsp;
              <a class="fa fa-facebook-square" style="font-size:26px" aria-hidden="true" href="http://www.fb.com"></a>&nbsp;&nbsp;&nbsp;
              <a class="fa fa-twitter-square" style="font-size:26px" aria-hidden="true" href="http://www.twitter.com"></a>&nbsp;&nbsp;&nbsp;
               <a class="fa fa-instagram" style="font-size:26px" aria-hidden="true" href="http://www.instgram.com"></a>&nbsp;&nbsp;&nbsp;
                                  </div>  
                                </div>

                                <div id="tab5">
                                    <?php
					
						$principal_retval=mysqli_query($conn,"select * from   staff_tbl") or die(mysql_error());
						while($ob=mysqli_fetch_assoc($principal_retval))
						{
						$staff_name=$ob['staff_name'];
						$staff_mail=$ob['staff_email'];
						$staff_number=$ob['staff_number'];
						$staff_doj=$ob['date_of_joining'];
						$staff_image=$ob['f_image'];
						$staff_desig=$ob['staff_designation'];
						
						
						?>
                           <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="data:image/jpeg;base64,<?php echo base64_encode($staff_image); ?>" alt="Image Not Found">
                                    </div>
                                    <h4><?php echo"$staff_name"?></h4>
                                    <span style="font-size:14px;" class="fa fa-user-md"><?php echo"&nbsp;&nbsp;$staff_desig"?></span><br>
                                    <span style="font-size:14px;" class="fa fa-phone-square"><?php echo"&nbsp;&nbsp;$staff_number"?></span><br>
                                    <span style="font-size:12px; text-transform:lowercase;" class="fa fa-envelope-o"><?php echo"&nbsp;&nbsp;$staff_mail"?></span><br>
                                    <span style="font-size:12px; text-transform:capitalize;"><?php echo"Date of Join: $staff_doj"?></span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                            
                           <?php } ?>
                                </div>

                                <div id="tab6">
                                     <?php
					
						$principal_retval=mysqli_query($conn,"select * from   staff_tbl") or die(mysql_error());
						while($ob=mysqli_fetch_assoc($principal_retval))
						{
						$staff_name=$ob['staff_name'];
						$staff_mail=$ob['staff_email'];
						$staff_number=$ob['staff_number'];
						$staff_doj=$ob['date_of_joining'];
					$staff_image=$ob['f_image'];
						$staff_desig=$ob['staff_designation'];
						
						
						?>
                           <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="data:image/jpeg;base64,<?php echo base64_encode($staff_image); ?>" alt="Image Not Found">
                                    </div>
                                    <h4><?php echo"$staff_name"?></h4>
                                    <span style="font-size:14px;" class="fa fa-user-md"><?php echo"&nbsp;&nbsp;$staff_desig"?></span><br>
                                    <span style="font-size:14px;" class="fa fa-phone-square"><?php echo"&nbsp;&nbsp;$staff_number"?></span><br>
                                    <span style="font-size:12px; text-transform:lowercase;" class="fa fa-envelope-o"><?php echo"&nbsp;&nbsp;$staff_mail"?></span><br>
                                    <span style="font-size:12px; text-transform:capitalize;"><?php echo"Date of Join: $staff_doj"?></span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                            
                           <?php } ?>
                                </div>
                            </div> <!-- /.col-md-12 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.services -->
                    
                    
                    
                    
    
    
    
    
    
    
    
     <div id="menu-4" class="event content">
                        <div class="row">
                            
                            <div class="col-md-12 col-sm-12">
                                <div class="toggle-content text-center" id="tab4">
                                <?php
                              //****************************************************** Event Retrival *****************************************************************



$evename=array();
$evedate=array();
$evedes=array();
$evelocation=array();
$evetime=array();
$n=0;
$event_retval=mysqli_query($conn,"select * from event_tbl") or die(mysql_error());
while($ob=mysqli_fetch_assoc($event_retval))
{
$evename[]=$ob['event_name'];
$evedate[]=$ob['event_date'];
$evedes[]=$ob['event_desc'];
$evestarttime[]=$ob['start_time'];
$eveendtime[]=$ob['end_time'];
$evelocation[]=$ob['location'];
$n++;
}
?>

            
              <h3 class="heading underline font-x1 btmspace-30">EVENTS</h3>
                <?php
					for ($i = $n-1; $i >=0; $i--) 
						{
							list($year, $mon, $day) = explode("-",$evedate[$i]);
							$jd=gregoriantojd($mon,$day,$year);
				?>
                
                
                
              
                
                
                <div id="eventstyle">
                <table border="0">
  <tr>
    <td width="175px"> <div id="datetile">
                
                
                
                
               <div id="d_month">
                <i class="fa" style="padding:5px 0px; font-family:Lithos Pro;"  ><?php echo jdmonthname($jd,1); ?></i>
               
                </div>
                
                 <div id="d_day">
                   <i class="fa" style="padding:20px 0px; font-family:Lithos Pro;" ><?php echo $day; ?></i>
                </div>
                
                 <div id="d_year">
                  <i class="fa" style="padding:5px 0px; font-family:Lithos Pro;"><?php echo $year; ?></i>
                </div>
                
                </div></td><br><br>
    <td><h4 style="font-family:Lithos Pro;"><?php echo"$evename[$i]"; ?></h4>
     <i class="fa fa-map-marker" style="color:#000000; font-size:15px; ">&nbsp;&nbsp;<?php echo"$evelocation[$i]"; ?></i><br>
                      <i class="fa fa-clock-o" style="color:#000000; font-size:15px;">&nbsp;&nbsp;<?php echo"$evestarttime[$i] - $eveendtime[$i]"; ?></i><br>
                         <i class="fa fa-info-circle" style="color:#000000; font-size:15px; ">&nbsp;&nbsp;<?php echo"$evedes[$i]"; ?></i>
    </td>
  </tr>
</table>

                </div>
              
 			<br><br>
             
               <?php
			   			}
			   ?>
     
          <style>
		 
#eventstyle
{

border-top-style:dashed;
font-family:l

}
#datetile
{
width:150px;
float:left;
}

#d_month
{
text-align:center;
background:#d8aa46;
height:30px;
font-size:18px;
color:#FFFFFF
}
#d_day
{
text-align:center;
background:#333333;
height:80px;
font-size:36px;
color:#FFFFFF;
}
#d_year
{
text-align:center;
background:#d8aa46;
height:30px;
font-size:18px;
color:#FFFFFF

}
@media screen and (max-width:650px){
#logooooo
{
width:50%;
height:auto;
}
}
</style>
     
                                    
                                    
                                </div>
                            </div> <!-- /.col-md-12 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.services -->
    
    
    
    
    
    
    
    
    
    
    
    
    
    
                    
                    
                    
                    
                    
                      <div id="menu-5" class="gallery content">
                        <div class="row">
                   
                            
                             <?php
					   $galcate=array();
						$n=0;
						$gallerycat_retval=mysqli_query($conn,"select DISTINCT g_category from  gallery_tbl") or die(mysql_error());
						while($ob=mysqli_fetch_assoc($gallerycat_retval))
						{
						$galcate[]=$ob['g_category'];
						$n++;
						}
						?>
						 <ul class="tabs">
                         <li class="col-md-4 col-sm-4">
                                    <a href="<?php echo"#tab7"; ?>" class="icon-item">
                                        <i class="fa fa-camera-retro" style="font-size:22px; text-transform:capitalize;">&nbsp;All photos</i>
                                    </a> <!-- /.icon-item -->
                                </li>
                         <?php
						 
						for($i=0,$j=8;$i<$n;$i++,$j++)
						{
						?>
						 <li class="col-md-4 col-sm-4">
                                    <a href="<?php echo"#tab$j"; ?>" class="icon-item">
                                        <i class="fa fa-camera-retro" style="font-size:22px; text-transform:capitalize;"><?php echo" $galcate[$i]"; ?></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                         <?php
						}
						
						?>
                        <div class="col-md-4 col-sm-4" style="opacity: 0.0; height:1px; width:800px;">
                                <div class="member-item" style="opacity: 0.0;">
                                    <div class="thumb" style="opacity: 0.0;">
                                    </div>
                            </ul> <!-- /.tabs -->
                            <div id="tab7">
                        
                        
                        <?php
					
						$galleryimage_retval=mysqli_query($conn,"select * from  gallery_tbl") or die(mysql_error());
						while($ob=mysqli_fetch_assoc($galleryimage_retval))
						{
						$galimage=$ob['image'];
						$galimagename=$ob['image_name'];
						
						?>
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item" align="center">
                                    <img src="data:image/jpeg;base64,<?php echo base64_encode($galimage); ?>" alt="Image Not Found">
                                    <a data-rel="lightbox" class="overlay" href="data:image/jpeg;base64,<?php echo base64_encode($galimage); ?>">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                           <?php } ?>
                            </div>
                        <?php
                       for($i=0,$j=8;$i<$n;$i++,$j++)
						{
						?>
						
                             <div id="<?php echo"tab$j"; ?>">
                        
                        
                        <?php
					
						$galleryimage_retval=mysqli_query($conn,"select * from  gallery_tbl where g_category='$galcate[$i]'") or die(mysql_error());
						while($ob=mysqli_fetch_assoc($galleryimage_retval))
						{
						$galimage=$ob['image'];
						$galimagename=$ob['image_name'];
						
						?>
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item" align="center">
                                    <img src="data:image/jpeg;base64,<?php echo base64_encode($galimage); ?>" alt="Image Not Found">
                                    <a data-rel="lightbox" class="overlay" href="data:image/jpeg;base64,<?php echo base64_encode($galimage); ?>">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                           <?php } ?>
                            </div>
                            <?php
							}
							?>
                            </div>
                            
                            
                            
                            
                            
                            
            
                            
                            
                            
                            
                            
                            
                            
                         
                        </div> <!-- /.row -->
                    </div> <!-- /.gallery -->

                </div> <!-- /#menu-container -->

            </div> <!-- /.col-md-8 -->

        </div> <!-- /.row -->
        
        
        
        
        
        
        
        
        
  
        
 

  
  
  
  
  
  
  
    </div> <!-- /.container-fluid -->
    
    
    
    
    
    
    
    
    <div class="container-fluid">   
        <div class="row">
            <div class="col-md-12 footer">
              <a class="fa fa-linkedin-square" aria-hidden="true" style="font-size:26px;" href="http://www.linkedin.com"></a>&nbsp;&nbsp;&nbsp;
              <a class="fa fa-google-plus-square" style="font-size:26px" aria-hidden="true" href="http://www.plus.google.com"></a>&nbsp;&nbsp;&nbsp;
              <a class="fa fa-facebook-square" style="font-size:26px" aria-hidden="true" href="http://www.fb.com"></a>&nbsp;&nbsp;&nbsp;
              <a class="fa fa-twitter-square" style="font-size:26px" aria-hidden="true" href="http://www.twitter.com"></a>&nbsp;&nbsp;&nbsp;
               <a class="fa fa-instagram" style="font-size:26px" aria-hidden="true" href="http://www.instgram.com"></a>&nbsp;&nbsp;&nbsp;
                <a class="fa fa-youtube-square" style="font-size:26px" aria-hidden="true" href="http://www.yotube.com"></a>&nbsp;&nbsp;&nbsp;
            
               <a class="fa fa-lock" style="font-size:26px" aria-hidden="true"  href="login.php"></a>
              
              
              
              
              
              
              
              
              
           
  
 
 
  

              
              
              
              
              
              
              
              
             
                <p id="footer-text">
                  
                	Copyright &copy; 2017 CGHSS| design: AIJV 
                 
                 </p>   
                 
            </div><!-- /.footer --> 
        </div>
    </div> <!-- /.container-fluid -->
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
    
    
        <?php
mysqli_close($conn);
?>
</body>
</html>