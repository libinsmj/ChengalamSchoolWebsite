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
    <link rel="stylesheet" href="css/templatemo_style.css">
    
    
  
 
  
    

    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<!-- templatemo 410 circle -->
</head>
<body>

    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	//********************************************************** Database Connection *********************************************************** 
	$conn=mysqli_connect('localhost','root','');
	if(!$conn)
	{ die('Could not connect:'.mysqli_error()); }
	$check=mysqli_select_db($conn,'cghss_db');
	if(!$check)
	{ die('Could not connect'.mysqli_error()); }
	
	// select loggedin users detail
	$res=mysqli_query($conn,"SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysqli_fetch_array($res);



	

	
	?>
	
    
    
    
    
    
    
    
    
	
    
    

   
        
        

<nav class="navbar navbar-default navbar-fixed-top" style="opacity: 0.9; background:#000000; height:5px">
      <div class="container" >
        <div class="navbar-header"></div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown" >
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:#d8aa46;">
			  <span class="glyphicon glyphicon-user"></span><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="logout.php?logout" style="color:#d8aa46;"><span class="glyphicon glyphicon-log-out" ></span>&nbsp;Sign Out</a></li>
                <li>
                 <a href="register.php" style="color:#d8aa46;"><span class="glyphicon glyphicon-lock" ></span>&nbsp;Settings</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
</nav> 
    
     <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 
 
 
 <div id="leftcontent">
  <div class="container-fluid">
        <div class="row">
        
 <div class="col-md-4 col-sm-12" style="width:auto;">
                <div class="sidebar-menu">
                    
                    <div class="logo-wrapper">
                       
                            <a href="content_manager1.php"><img id="logooooo" src="images/logo.png" alt="Circle Template" width="220" height="160">
                            </a>                      
                    </div> <!-- /.logo-wrapper -->
                    <br>
                   
 <input type="submit" id="butt" value="News Management" name="news_manage">
<input type="submit" id="butt" value="Event Management" name="event_manage">
<input type="submit"id="butt"  value="Staff Management" name="staff_manage">
<input type="submit" id="butt" value="Gallery Management" name="gallery_manage"><br>
                           
                           
               
                      
              </div> <!-- /.menu-wrapper -->

                    <!--Arrow Navigation-->
                    <a id="prevslide" class="load-item"><i class="fa fa-angle-left"></i></a>
                    <a id="nextslide" class="load-item"><i class="fa fa-angle-right"></i></a>

</div> <!-- /.sidebar-menu -->
            </div> <!-- /.col-md-4 -->

    
    
    
                            
                            
                            
                     
                </div> <!-- /#menu-container -->

            </div> <!-- /.col-md-8 -->

        </div> <!-- /.row -->
 
 </div>
 
 
 
 </div> <!-- /.container-fluid -->
    
    
    
    
    
    
  
              
              
              
              
              
              
             

                 
</div><!-- /.footer --> 
        </div>
</div><!-- /.container-fluid -->
 
 
 
 
 
 
 <div id="rightcontent">
 <br><br>
 
  <div class="col-md-12 col-sm-12">
                                <div class="toggle-content text-center" style="width:500px;" >
   
        <?php
	
	
//******************************************* News Management ********************************************************************************************
if(isset($_POST["news_manage"]))
{
echo"<h1 align=center>News Management</h1><br><br><br>";
for($i=1;$i<=5;$i++)
	{
	$retval=mysqli_query($conn,"select * from news_tbl where news_id=$i") or die(mysqli_error());	
	while($ob=mysqli_fetch_array($retval))
	{
		if($i==1)
		{
		$news1=$ob['news'];
		}
		else if($i==2)
		{
		$news2=$ob['news'];
		}
		else if($i==3)
		{
		$news3=$ob['news'];
		}
		else if($i==4)
		{
		$news4=$ob['news'];
		}
		else if($i==5)
		{
		$news5=$ob['news'];
		}
		else
		{
		echo"Error";
		}
		}
		}
?>
<div align="center">
<textarea  name="txt_field1" rows="5" cols="50" required><?php echo"$news1"; ?> </textarea><br>
<textarea  name="txt_field2" rows="5" cols="50" required><?php echo"$news2"; ?></textarea><br>
<textarea  name="txt_field3" rows="5" cols="50" required><?php echo"$news3"; ?></textarea><br>
<textarea  name="txt_field4" rows="5" cols="50" required><?php echo"$news4"; ?></textarea><br>
<textarea  name="txt_field5" rows="5" cols="50" required><?php echo"$news5"; ?></textarea><br>
<input type="submit" value="Update" id="butt" name="news_update"> <a href="content_manager1.php" class="fa fa-arrow-circle-left" style="font-size:50px;"></a>
</div>
<?php
}




//***************************************************************** News Updation **************************************************************************
else if(isset($_POST["news_update"]))
	{
	echo"<h1 align=center>News Updation</h1><br><br><br>";
		 $n1=$_POST["txt_field1"];
		 $n2=$_POST["txt_field2"];
		 $n3=$_POST["txt_field3"];
 		 $n4=$_POST["txt_field4"];
		 $n5=$_POST["txt_field5"];
		 $update_query1="update news_tbl set news='".$n1."' where news_id=1";
		 $update_query2="update news_tbl set news='".$n2."' where news_id=2";
		 $update_query3="update news_tbl set news='".$n3."' where news_id=3";
		 $update_query4="update news_tbl set news='".$n4."' where news_id=4";
		 $update_query5="update news_tbl set news='".$n5."' where news_id=5";
		 mysqli_query($conn,$update_query1); mysqli_query($conn,$update_query2);  mysqli_query($conn,$update_query3); mysqli_query($conn,$update_query4); mysqli_query($conn,$update_query5);
		 if(!$update_query1 && !$update_query2 && !$update_query3 && !$update_query4 && !$update_query5)
			{
				echo"Updation Failed";
 			}
		else
		{
		echo "<div align=center>Updation Success";
		echo"<br><br><input type=button onclick=this.form.submit(); value=OK id=butt> </div>";
		
		}
}






//*****************************Event Management (Addition & Updation) ***************************************************************************************

else if(isset($_POST["event_manage"]))
{ 
?>
<div align="center">
<h1>Event Management</h1>
<br><br><input type="submit" value="Add new event" id="butt" name="event_add">
<input type="submit" value="Update current event"  id="butt" name="event_update">
 <a href="content_manager1.php" class="fa fa-arrow-circle-left" style="font-size:50px;"></a>
</div>
<?php
}





//*********************************************** *Event Addition ****************************************************************
else if(isset($_POST["event_add"]))
{
echo"<h1 align=center>Event Addition</h1><br><br><br>";
?>
<div align="center">
<input type="text" placeholder="event title" name="event_text" required><br><br>
<textarea rows="6" cols="30" required name="event_desc" placeholder="event description"></textarea><br><br>
<table>
<tr>
<td>Date:</td><td><input type="date" name="event_date" required></td></tr>
<tr>
<td>Starting time:</td><td><input type="time" name="event_start_time" required></td></tr>
<tr>
<td>Ending time:</td><td><input type="time" name="event_end_time" required></td>
</tr>

</table>
<input type="text" name="event_loc" placeholder="Enter Location" required>
<br><br><input type="submit" id="butt" value="Add" name="add"><br>
<a href="content_manager1.php" class="fa fa-arrow-circle-left" style="font-size:50px;"></a>
</div>
<?php
}
else if(isset($_POST["add"]))
{
 $evnt=$_POST["event_text"];
 $event_desc=$_POST["event_desc"];
 $event_d=$_POST["event_date"];
 $event_start=$_POST["event_start_time"];
 $event_end=$_POST["event_end_time"];
 $loc=$_POST["event_loc"];
 $sql_add_event="insert into event_tbl(event_name,event_desc,event_date,start_time,end_time,location)values('".$evnt."','".$event_desc."','".$event_d."','".$event_start."','".$event_end."','".$loc."')";
 mysqli_query($conn,$sql_add_event);
 if(!$sql_add_event)
 {
  echo "Failed";
 }
 else 
 {
   echo "<div align=center>Success";
   echo"<br><br><input type=button onclick=this.form.submit(); value=OK id=butt> </div>";
 }
}







// ***************************Event Updation*****************************************************************************************
else if(isset($_POST['event_update']))
{
echo"<h1 align=center>Event Updation</h1><br><br><br>";
echo"<div align=center>";
echo"<h2 align=center>Update Event</h2>";
//*************************************First Option Box****************************************************
$selectup=mysqli_query($conn,"select * from event_tbl");
echo"<div align=center><select name=optionup onchange=this.form.submit();>";
echo"<option>Select Event</option>";
while($ob1=mysqli_fetch_array($selectup))
{
$evid=$ob1['event_id'];
$evname=$ob1['event_name'];
$evndesc=$ob1['event_disc'];
$eventdate=$ob1['event_date'];
$eventstart=$ob1['start_time'];
$eventend=$ob1['end_time'];
$loc=$ob1['location'];
echo"<option value=$evid>$evname</option>";
}
echo"</select>";
?> <br><br><a href="content_manager1.php" class="fa fa-arrow-circle-left" style="font-size:50px;"></a><?php
echo"</div>";
}
//*************************************** Updation Of The Event******************************************
else if(isset($_POST['eventupdate1']))
{
echo"<h1 align=center>Event Updation</h1><br><br><br>";
$eventid1=$_POST['eventid'];
$eventname1=$_POST['eventname_txt'];
$evndesc1=$_POST['evndesc_txt'];
$eventdate1=$_POST['eventdate_txt'];
$eventstart1=$_POST['start_time_txt'];
$eventend1=$_POST['end_time_txt'];
$loc1=$_POST['loc_txt'];
$updateeventquery="update event_tbl set event_name='".$eventname1."',event_desc='".$evndesc1."',event_date='".$eventdate1."',start_time='".$eventstart1."',end_time='".$eventend1."',location='".$loc1."' where event_id='".$eventid1."'";
$updateevent=mysqli_query($conn,$updateeventquery);
if(!$updateevent)
{
echo"Could not connect !!!! Updation failed";
}
else
{

echo"<div align=center>";
echo"Updation Success";
echo"<br><br><input type=button onclick=this.form.submit(); value=OK id=butt> </div>";
}

;
}
//*************************************************** Second option Box ***********************************************************
else if(isset($_POST["optionup"]))
{
echo"<h1 align=center>Event Updation</h1><br><br><br>";
echo"<div align=center>";
echo"<h2 align=center>Update Event</h2>";
$selectup=mysqli_query($conn,"select * from event_tbl");
echo"<div align=center><select name=optionup onchange=this.form.submit();>";
echo"<option>Select Event</option>";
while($ob1=mysqli_fetch_array($selectup))
{
$evid=$ob1['event_id'];
$evname=$ob1['event_name'];
$evndesc=$ob1['event_desc'];
$eventdate=$ob1['event_date'];
$eventstart=$ob1['start_time'];
$eventend=$ob1['end_time'];
$loc=$ob1['location'];

echo"<option value=$evid>$evname</option>";
}
echo"</select>";
echo"</div>";
$opvalue=$_POST['optionup'];
$selectup1=mysqli_query($conn,"select * from event_tbl where event_id='$opvalue'");
while($obup1=mysqli_fetch_array($selectup1))
{
$evid=$obup1['event_id'];
$evname=$obup1['event_name'];
$evndesc=$obup1['event_desc'];
$eventdate=$obup1['event_date'];
$eventstart=$obup1['start_time'];
$eventend=$obup1['end_time'];
$loc=$obup1['location'];
}
?>
<div align=center>
<input type=hidden name=eventid value="<?php echo"$evid"; ?>"><br><br>
<input type=text name="eventname_txt" value="<?php echo"$evname"; ?>" required><br><br>
<textarea required row="6" cols="30" name="evndesc_txt"><?php echo "$evndesc";?></textarea><br><br>
<input type="date" name="eventdate_txt" value="<?php echo "$eventdate"?>" required><br><br>
<input type="time" name="start_time_txt" value="<?php echo "$eventstart"?>" required><br><br>
<input type="time" name="end_time_txt" value="<?php echo "$eventend"?>" required><br><br>
<input type="text" name="loc_txt" value="<?php echo "$loc"?>" required>
<input type="submit" id="butt" value="UPDATE" name="eventupdate1">
<input type=reset id="butt">
 <a href="content_manager1.php" class="fa fa-arrow-circle-left" style="font-size:50px;"></a>
</div>
<?php
}



//************************************************** Staff Management ***********************************************************
else if(isset($_POST["staff_manage"]))
{
echo "<h1 align=center>Staff Management</h1><br><br>";
?>
<div align="center">
<input type="submit" name="principal" id="butt" value="Principal management">
<input type="submit" name="faculty" id="butt"  value="Faculty Management">
 <a href="content_manager1.php" class="fa fa-arrow-circle-left" style="font-size:50px;"></a>

</div>
<?php
}
//******************************************** principle ****************************************************
else if(isset($_POST["principal"]))
{
 $retval=mysqli_query($conn,"select * from p_table where p_id=1") or die(mysqli_error());
 while($ob=mysqli_fetch_array($retval))
 {
  
  $name=$ob['p_name'];
  $email=$ob['p_mail'];
  $num=$ob['p_number'];
  $msg=$ob['p_message'];
  $image=$ob['p_image'];
  
 }
?>
<div align="center">
<h1>Princlipal</h1><br><br>
<img src="data:image/jpeg;base64,<?php echo base64_encode($image); ?>" style="width:150px;height:200px" />
<table>
<tr>
<td><input type="text" name="txt_p_name" value="<?php echo $name?>" required></td>
</tr>
<tr>
<td><input type="email" name="txt_p_email" value="<?php echo $email?>" required></td>
</tr>
<tr>
<td><input type="text" name="txt_p_number" value="<?php echo $num?>" pattern="^[0-9]{6}|[0-9]{8}|[0-9]{10}$" required></td>
</tr>
<tr>
<td><textarea rows="10" cols="30" required name="p_message"><?php echo $msg ?></textarea></td>
</tr>
</table>
<input type="submit" id="butt" value="Click to Update" name="p_up">
<input type="submit" id="butt" name="priciplepic" value="upload pic"></div>
<a href="content_manager1.php" class="fa fa-arrow-circle-left" style="font-size:50px;"></a>


<?php
}

else if(isset($_POST["p_up"]))
{
 $name=$_POST["txt_p_name"];
 $mail=$_POST["txt_p_email"];
 $ph=$_POST["txt_p_number"];
 $msg=$_POST["p_message"];
 $qry="update p_table set p_name='".$name."',p_mail='".$mail."',p_number=".$ph.",p_message='".$msg."' where p_id=1";
 mysqli_query($conn,$qry);
 if(!$qry)
 {
  echo "<div align=center>Failed</div>";
 }
 else
 {
  echo"<div align=center>Success</div>";
 
 echo"<div align=center><br><br><input type=button onclick=this.form.submit(); value=OK id=butt> </div>";
}
}
//*********************principle pic*******************************************************
else if(isset($_POST["priciplepic"]))
{

echo "<input type=hidden name=MAX_FILE_SIZE value=10000000 >";
echo "<input name=userfile type=file>";
echo "<input type=submit name=pripicc value=Submit id=butt>";
?><br> <a href="content_manager1.php" class="fa fa-arrow-circle-left" style="font-size:50px;"></a><?php
}
else if(isset($_POST["pripicc"]))
{

if(!isset($_FILES['userfile']))
{
    echo '<p>Please select a file</p>';
	echo"<div align=center><br><br><input type=button onclick=this.form.submit(); value=OK id=butt> </div>";
}
else
{
    $maxsize = 10000000; //set to approx 10 MB

   
    if($_FILES['userfile']['error']==UPLOAD_ERR_OK) {

      
        if(is_uploaded_file($_FILES['userfile']['tmp_name'])) {    

           
            if( $_FILES['userfile']['size'] < $maxsize) {  
  
            
                 $finfo = finfo_open(FILEINFO_MIME_TYPE);
                if(strpos(finfo_file($finfo, $_FILES['userfile']['tmp_name']),"image")===0) {    

                  
                    $imgData =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));

               
                 
				
                   $sql= mysqli_query($conn,"update p_table set p_image='".$imgData."' where p_id=1;");
				   if(!$sql)
{
echo"Could not connect !!!! Updation failed";
}
else
{

echo"<div align=center>";
echo"Updation Success";
echo"<br><br><input type=button onclick=this.form.submit(); value=OK id=butt> </div>";
}
                   
                }
                else
                    "<p>Uploaded file is not an image.</p>";
            }
             else {
                // if the file is not less than the maximum allowed, print an error
                $msg='<div>File exceeds the Maximum File limit</div>
                <div>Maximum File limit is '.$maxsize.' bytes</div>
                <div>File '.$_FILES['userfile']['name'].' is '.$_FILES['userfile']['size'].
                ' bytes</div><hr />';
                }
        }
        else
            $msg="File not uploaded successfully.";

    }
    else {
        $msg= file_upload_error_message($_FILES['userfile']['error']);
    }
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
}



}

//********************** facultyyy (add update delet) *****************



else if(isset($_POST['faculty']))
{

?>
<div align="center">
<h1>Faculty Management</h1>
<br><br><br><br><br><br><input type="submit" id="butt" value="Add faculty" name="add_faculty">
<input type="submit" id="butt" value="Update Faculty" name="Up_faculty">
<input type="submit" id="butt" value="Delete Faculty" name="dlt_faculty">
<a href="content_manager1.php" class="fa fa-arrow-circle-left" style="font-size:50px;"></a>

</div>
<?php

}
//****************************** Add Faculty **************************
else if(isset($_POST['add_faculty']))
{
// pattern="^[0-9]{10}$" oninvalid="setCustomValidity('Type valid phone number')"
?>
<div align="center">
<h1>Faculty Insertion</h1>
<br><br><br><input type="text" name="txt_f_name" value"" placeholder="Enter name" required><br><br>
Date of Joining: <input type="date" name="txt_f_doj" value"" required><br><br>
<input type="text" name="txt_f_designation" value"" placeholder="Designation" required><br><br>
<input type="email" name="txt_f_email" value"" placeholder="Email" ><br><br>
<input type="text" name="txt_f_number" value"" required placeholder="Phone number" required oninvalid="setCustomValidity('Type valid phone number')"><br><br>
<input type="hidden" name="MAX_FILE_SIZE" value=30000000 >
<input name="userfile_faculty" type=file required><br><br>
<input type="submit" name= "submit_faculty" value="ADD" id="butt">
<input type="reset" id="butt" value="RESET">
<a href="content_manager1.php" class="fa fa-arrow-circle-left" style="font-size:50px;"></a>



<?php

}

else if(isset($_POST['submit_faculty']))
{
 $name=$_POST["txt_f_name"];
 $dat=$_POST["txt_f_doj"];
 $des=$_POST["txt_f_designation"];
 $email=$_POST["txt_f_email"];
 $num=$_POST["txt_f_number"];
  
 if(!isset($_FILES['userfile_faculty']))
{
 echo '<p>Please select a file</p>';
}
else
{
   
   if(!isset($_FILES['userfile_faculty']))
{
    echo '<p>Please select a file</p>';
	echo"<div align=center><br><br><input type=button onclick=this.form.submit(); value=OK id=butt> </div>";
}
else
{
    $maxsize = 10000000; //set to approx 10 MB

   
    if($_FILES['userfile_faculty']['error']==UPLOAD_ERR_OK) {

      
        if(is_uploaded_file($_FILES['userfile_faculty']['tmp_name'])) {    

           
            if( $_FILES['userfile_faculty']['size'] < $maxsize) {  
  
            
                 $finfo = finfo_open(FILEINFO_MIME_TYPE);
                if(strpos(finfo_file($finfo, $_FILES['userfile_faculty']['tmp_name']),"image")===0) {    

                  
                    $imgData =addslashes (file_get_contents($_FILES['userfile_faculty']['tmp_name']));

               
                 
				$sql= mysqli_query($conn,"INSERT INTO staff_tbl(staff_name,date_of_joining,staff_designation,staff_email,staff_number,f_image,f_image_name) VALUES('".$name."','".$dat."','".$des."','".$email."',".$num.",'".$imgData."','".$_FILES['userfile_faculty']['name']."');");
if(!$sql)
{
echo"Could not connect !!!! Updation failed";
}
else
{

echo"<div align=center>";
echo"Updation Success";
echo"<br><br><input type=button onclick=this.form.submit(); value=OK id=butt> </div>";
}
                   
                }
                else
                    "<p>Uploaded file is not an image.</p>";
            }
             else {
                // if the file is not less than the maximum allowed, print an error
                $msg='<div>File exceeds the Maximum File limit</div>
                <div>Maximum File limit is '.$maxsize.' bytes</div>
                <div>File '.$_FILES['userfile']['name'].' is '.$_FILES['userfile']['size'].
                ' bytes</div><hr />';
                }
        }
        else
            $msg="File not uploaded successfully.";

    }
    else {
        $msg= file_upload_error_message($_FILES['userfile']['error']);
    }
 
  } 
  }
}
//*************************************** UPDATE FACULTY *********************************

else if(isset($_POST["Up_faculty"]))
{
echo"<h1 align=center>Faculty Updation</h1><br><br><br>";
//*************************************Faculty First Option Box****************************************************
$foption=mysqli_query($conn,"select * from staff_tbl");
echo"<div align=center><select name=staffoption onchange=this.form.submit();>";
echo"<option>Select Faculty</option>";
while($ob1=mysqli_fetch_array($foption))
{
$id=$ob1['staff_id'];
$name=$ob1['staff_name'];
$staffdoj=$ob1['date_of_joining'];
$staffdes=$ob1['staff_designation'];
$staffemail=$ob1['staff_email'];
$staffnum=$ob1['staff_number'];
$fimage=$ob1['f_image'];
echo"<option value=$id>$name</option>";
}
echo"</select>";
?><br><br><a href="content_manager1.php" class="fa fa-arrow-circle-left" style="font-size:50px;"></a><?php
echo"</div>";

}




//*************** pic updation*****************************
else if(isset($_POST['f_pic_update']))
{
$fidd=$_POST['fid'];

echo "<input type=hidden name=fid1 value=$fidd >";
echo "<input type=hidden name=MAX_FILE_SIZE value=10000000 >";
echo "<input name=userfile_faculty_update type=file required>";
echo "<input type=submit name=fsubmit value=Upload id=butt>";
?><br><a href="content_manager1.php" class="fa fa-arrow-circle-left" style="font-size:50px;"></a><?php
}
else if(isset($_POST["fsubmit"]))
{
$id1=$_POST['fid1'];
echo $id;
if(!isset($_FILES['userfile_faculty_update']))
{
    echo '<p>Please select a file</p>';
	echo"<div align=center><br><br><input type=button onclick=this.form.submit(); value=OK id=butt> </div>";
}
else
{

     $maxsize = 10000000; //set to approx 10 MB
    
	
    //check associated error code
    if($_FILES['userfile_faculty_update']['error']==UPLOAD_ERR_OK) {

        //check whether file is uploaded with HTTP POST
        if(is_uploaded_file($_FILES['userfile_faculty_update']['tmp_name'])) {    

            //checks size of uploaded image on server side
            if( $_FILES['userfile_faculty_update']['size'] < $maxsize) {  
  
               //checks whether uploaded file is of image type
              //if(strpos(mime_content_type($_FILES['userfile']['tmp_name']),"image")===0) {
                 $finfo = finfo_open(FILEINFO_MIME_TYPE);
                if(strpos(finfo_file($finfo, $_FILES['userfile_faculty_update']['tmp_name']),"image")===0) {    

                    // prepare the image for insertion
                    $imgData =addslashes (file_get_contents($_FILES['userfile_faculty_update']['tmp_name']));

                    // put the image in the db...
                    // database connection
                   // mysql_connect($host, $user, $pass) OR DIE (mysql_error());

                    // select the db
                    //mysql_select_db ($db) OR DIE ("Unable to select db".mysql_error());

                    // our sql query
                    $sql = "update staff_tbl set f_image='".$imgData."',f_image_name='".$_FILES['userfile_faculty_update']['name']."' where staff_id=$id1;";
					

                    // insert the image
                   $query=mysqli_query($conn,$sql) or die("Error in Query: " . mysqli_error());
 if(!$query)
{
echo"Could not connect !!!! Updation failed";
}
else
{
echo"<div align=center>";
echo"Updation Success";
echo"<br><br><input type=button onclick=this.form.submit(); value=OK id=butt> </div>";
}
					
                }
                else
                    $msg="<p>Uploaded file is not an image.</p>";
            }
             else {
                // if the file is not less than the maximum allowed, print an error
                $msg='<div>File exceeds the Maximum File limit</div>
                <div>Maximum File limit is '.$maxsize.' bytes</div>
                <div>File '.$_FILES['userfile_faculty_update']['name'].' is '.$_FILES['userfile_faculty_update']['size'].
                ' bytes</div><hr />';
                }
        }
        else
            $msg="File not uploaded successfully.";

    }
    else {
        $msg= file_upload_error_message($_FILES['userfile_faculty_update']['error']);
    }
    
}

}
//**************Faculty real updation*********************
else if(isset($_POST["upfac"]))
{
echo"<h1 align=center>Faculty Updation</h1><br><br><br>";
$id=$_POST['fid'];
$sname=$_POST['fname'];
$doj=$_POST['fdoj'];
$des=$_POST['staff_des_txt'];
$smail=$_POST['staffmail'];
$snum=$_POST['staffnum'];
$staffupdation="update staff_tbl set staff_name='".$sname."',date_of_joining='".$doj."',staff_designation='".$des."',staff_email='".$smail."',staff_number=".$snum." where staff_id='".$id."'";
$staffupdationn=mysqli_query($conn,$staffupdation);
if(!$staffupdationn)
{
echo"Could not connect !!!! Updation failed";
echo"<div align=center><br><br><input type=button onclick=this.form.submit(); value=OK id=butt> </div>";
}
else
{
echo"<div align=center>";
echo"Updation Success";
echo"<div align=center><br><br><input type=button onclick=this.form.submit(); value=OK id=butt> </div>";
}

}




//**************second option*********************
else if(isset($_POST["staffoption"]))
{
	echo"<h1 align=center>Faculty Updation</h1><br><br><br>";
	echo"<div align=center>";

	$fupqry=mysqli_query($conn,"select * from staff_tbl");
	echo"<div align=center><select name=staffoption onchange=this.form.submit();>";
	echo"<option>Select Faculty</option>";
	while($ob1=mysqli_fetch_array($fupqry))
	{
		$id=$ob1['staff_id'];
		$name=$ob1['staff_name'];
		$staffdoj=$ob1['date_of_joining'];
		$staffdes=$ob1['staff_designation'];
		$staffemail=$ob1['staff_email'];
		$staffnum=$ob1['staff_number'];
		$fimage=$ob1['f_image'];
		echo"<option value=$id>$name</option>";
	}
	echo"</select>";
	echo"</div>";
	$opva=$_POST['staffoption'];
	$qryup=mysqli_query($conn,"select * from staff_tbl where staff_id='$opva'");
	while($obup1=mysqli_fetch_array($qryup))
	{
		$id=$obup1['staff_id'];
		$name=$obup1['staff_name'];
		$staffdoj=$obup1['date_of_joining'];
		$staffdes=$obup1['staff_designation'];
		$staffemail=$obup1['staff_email'];
		$staffnum=$obup1['staff_number'];
		$fimage=$obup1['f_image'];
	}
	
?>
<div align=center>

<input type="hidden" name=fid value="<?php echo"$id";?>"><br><br>
<img src="data:image/jpeg;base64,<?php echo base64_encode($fimage); ?>" style="width:160px;height:200px" /><br>

<input type=text name= fname value="<?php echo"$name"; ?>" required><br><br>
Date of Joining: <input type=date name=fdoj value="<?php echo"$staffdoj";?>" required><br><br>
<input type=text name=staff_des_txt value="<?php echo"$staffdes";?>" required><br><br>
<input type=email name=staffmail value="<?php echo"$staffemail"; ?>" required><br><br>
<input type=text name=staffnum value="<?php echo"$staffnum"; ?>" required><br><br>
<input type="submit" id ="butt" value="update" name="upfac"><br>
<input type=reset id ="butt">
<input type="submit" name="f_pic_update" value="Update pic" id ="butt">
<a href="content_manager1.php" class="fa fa-arrow-circle-left" style="font-size:50px;"></a>
</div>
<?php

}


//***************************** DELETION ************************

else if(isset($_POST['dlt_faculty']))
{
echo"<h1 align=center>Faculty Deletion</h1><br><br><br>";
echo"<div align=center>";
echo"<h2 align=center>Delete Faculty</h2>";
//*************************************Delete First Option Box****************************************************
$dltfaculty=mysqli_query($conn,"select * from staff_tbl");
echo"<div align=center><select name=fdelete onchange=this.form.submit();>";
echo"<option>Select Faculty</option>";
while($ob1=mysqli_fetch_array($dltfaculty))
{
		$id=$ob1['staff_id'];
		$name=$ob1['staff_name'];
		$staffdoj=$ob1['date_of_joining'];
		$fimage=$ob1['f_image'];
		//$staffemail=$ob1['staff_email'];
		//$staffnum=$ob1['staff_number'];
		echo"<option value=$id>$name</option>";
		
}
echo"</select>";
?><br><br><a href="content_manager1.php" class="fa fa-arrow-circle-left" style="font-size:50px;"></a><?php
echo"</div>";
}




//*************************************** Deletion Of The faculty******************************************
else if(isset($_POST['deletfaculty']))
{
echo"<h1 align=center>Faculty Deletion</h1><br><br><br>";
$id=$_POST['facultyid'];
$deleteqry="delete from staff_tbl where staff_id='".$id."'";
$deleteqry1=mysqli_query($conn,$deleteqry);
if(!$deleteqry1)
{
echo"Could not connect !!!! Updation failed";
echo"<div align=center><br><br><input type=button onclick=this.form.submit(); value=OK id=butt> </div>";
}
else
{
echo"<div align=center>";
echo"Deletion Success";

echo"<div align=center><br><br><input type=button onclick=this.form.submit(); value=OK id=butt> </div>";
}
}








//***************************************************Faculty delete Second option Box ***********************************************************
else if(isset($_POST["fdelete"]))
{
echo"<h1 align=center>Faculty Deletion</h1><br><br><br>";
echo"<div align=center>";
//echo"<h2> <align=center>Delete Faculty</h2>";
$selectfaculty=mysqli_query($conn,"select * from staff_tbl");
echo"<div <align=center><select name=fdelete onchange=this.form.submit();>";
echo"<option>Select Faculty</option>";
while($obu1=mysqli_fetch_array($selectfaculty))
{
		$id=$obu1['staff_id'];
		$name=$obu1['staff_name'];
		$staffdoj=$obu1['date_of_joining'];
		$fimage=$ob1['f_image'];
		//$staffemail=$obu1['staff_email'];
		//$staffnum=$obu1['staff_number'];
		echo"<option value=$id>$name</option>";
}
echo"</select>";
echo"</div>";
$op=$_POST['fdelete'];
$selectup1=mysqli_query($conn,"select * from staff_tbl where staff_id='$op'");
while($obup1=mysqli_fetch_array($selectup1))
{
		$id=$obup1['staff_id'];
		$name=$obup1['staff_name'];
		$staffdoj=$obup1['date_of_joining'];
		$fimage=$obup1['f_image'];
		//$staffemail=$obup1['staff_email'];
		//$staffnum=$obup1['staff_number'];
}
?>

<div align=center>
<input type=hidden name=facultyid value="<?php echo"$id";?>"><br>
<img src="data:image/jpeg;base64,<?php echo base64_encode($fimage); ?>" style="width:160px;height:200px" /><br><br >
<input type=text name= fname value="<?php echo"$name"; ?>" disabled required><br><br>
Date of Joining: <input type=date name=fdoj value="<?php echo"$staffdoj";?>" disabled required><br><br>

<input type="submit" id ="butt" value="Delete" name="deletfaculty">
<input type=reset id ="butt">
<a href="content_manager1.php" class="fa fa-arrow-circle-left" style="font-size:50px;"></a>
</div>
<?php
}











//*************************************************  GALLERY ****************************************************************************
else if (isset($_POST['gallery_manage']))
{
echo "<h1 align=center>Gallery Management</h1><br><br>";
	?>
    <div align="center">
    <input type="submit" value="Add to Existing Album" name="gallery_existing" id="butt">
    <input type="submit" value="Create New Album" name="gallery_new" id="butt">  
 <a href="content_manager1.php" class="fa fa-arrow-circle-left" style="font-size:50px;"></a>
    </div> 

<?php
}



else if(isset($_POST['gallery_new']))
{
	?>
    <div align="center">
    <h1> Gallery Management </h1><br><br>
    <input type="text"  name="new_album_txt" placeholder="enter new album name" required><br>
    <input type="hidden" name="MAX_FILE_SIZE" value="10000000" ><br>
    <input name="gallery_userfile" type="file" required> <br>
    <input type="submit" name="gallery_submit_new" value="Submit">
   <a href="content_manager1.php" class="fa fa-arrow-circle-left" style="font-size:50px;"></a>
    </div> 
    <?php	
}
else if(isset($_POST['gallery_submit_new']))
{
		
	 $g_cat=$_POST['new_album_txt'];
	echo "$gcategory";
	if(!isset($_FILES['gallery_userfile']))
	{
    	echo '<p>Please select a file</p>';
		echo"<div align=center><br><br><input type=button onclick=this.form.submit(); value=OK id=butt> </div>";
		
	}
	else
	{
	    $maxsize = 20000000; //set to approx 20 MB
    
	
    //check associated error code
    if($_FILES['gallery_userfile']['error']==UPLOAD_ERR_OK){

        //check whether file is uploaded with HTTP POST
        if(is_uploaded_file($_FILES['gallery_userfile']['tmp_name'])) {    

            //checks size of uploaded image on server side
            if( $_FILES['gallery_userfile']['size'] < $maxsize) {  
  
               //checks whether uploaded file is of image type
              //if(strpos(mime_content_type($_FILES['userfile']['tmp_name']),"image")===0) {
                 $finfo = finfo_open(FILEINFO_MIME_TYPE);
                if(strpos(finfo_file($finfo, $_FILES['gallery_userfile']['tmp_name']),"image")===0) {    

                    // prepare the image for insertion
                    $imgData =addslashes (file_get_contents($_FILES['gallery_userfile']['tmp_name']));

                    // put the image in the db...
                    // database connection
                    //mysql_connect($host, $user, $pass) OR DIE (mysql_error());

                    // select the db
                   // mysql_select_db ($db) OR DIE ("Unable to select db".mysql_error());

                    // our sql query
                    $sql = "INSERT INTO gallery_tbl(g_category,image_name,image)VALUES('".$g_cat."','".$_FILES['gallery_userfile']['name']."', '".$imgData."');";

                    // insert the image
                   $query=mysqli_query($conn,$sql) or die("Error in Query: " . mysqli_error());
if(!$query)
{
echo"Could not connect !!!! Updation failed";
}
else
{
echo"<div align=center>";
echo"Updation Success";
echo"<br><br><input type=button onclick=this.form.submit(); value=OK id=butt> </div>";
}
                }
                else
                    echo"<p>Uploaded file is not an image.</p>";
            }
             else {
                // if the file is not less than the maximum allowed, print an error
                echo"File exceeds the Maximum File limit Maximum File limit is $maxsize bytes File $_FILES[gallery_userfile][name] is $_FILES[gallery_userfile][size] bytes";
                }
        }
        else
            echo"File not uploaded successfully.";

    }
    else {
        $msg= file_upload_error_message($_FILES['gallery_userfile']['error']);
    }
  
}

	}		



else if(isset($_POST['gallery_existing']))
{
?>
	<div align=center>
	<h1 align=center>Gallery Management </h1>
	<br><br><br>
	
	<select name="select_g_category">
	<option>Select Category</option>
    <?php
	$catsql=mysqli_query($conn,"select distinct g_category from gallery_tbl");
	while($obg=mysqli_fetch_array($catsql))
	{
		$gid=$obg['g_id'];
		$gcat=$obg['g_category'];
		echo"<option value=$gcat>$gcat</option>";	
	}
?>
	</select><br><br><br>
	<input type="hidden" name="MAX_FILE_SIZE" value="10000000">
	<input name="gallery_userfile" type="file" required><br>
	<br><input type=submit name="gallery_submit" value="Submit" id="butt">
    <a href="content_manager1.php" class="fa fa-arrow-circle-left" style="font-size:50px;"></a>
    </div>
<?php
}
else if(isset($_POST["gallery_submit"])) 
{

	 $g_cat=$_POST['select_g_category'];
	 
	 if($g_cat!='Select Category')
	 {
	 if(!isset($_FILES['gallery_userfile']))
	 {
	     echo "<p>Please select a file</p>";
	 }
	 else
	{
	    $maxsize = 20000000; //set to approx 20 MB
    
	
    //check associated error code
    if($_FILES['gallery_userfile']['error']==UPLOAD_ERR_OK){

        //check whether file is uploaded with HTTP POST
        if(is_uploaded_file($_FILES['gallery_userfile']['tmp_name'])) {    

            //checks size of uploaded image on server side
            if( $_FILES['gallery_userfile']['size'] < $maxsize) {  
  
               //checks whether uploaded file is of image type
              //if(strpos(mime_content_type($_FILES['userfile']['tmp_name']),"image")===0) {
                 $finfo = finfo_open(FILEINFO_MIME_TYPE);
                if(strpos(finfo_file($finfo, $_FILES['gallery_userfile']['tmp_name']),"image")===0) {    

                    // prepare the image for insertion
                    $imgData =addslashes (file_get_contents($_FILES['gallery_userfile']['tmp_name']));

                    // put the image in the db...
                    // database connection
                    //mysql_connect($host, $user, $pass) OR DIE (mysql_error());

                    // select the db
                   // mysql_select_db ($db) OR DIE ("Unable to select db".mysql_error());

                    // our sql query
                    $sql = "INSERT INTO gallery_tbl(g_category,image_name,image)VALUES('".$g_cat."','".$_FILES['gallery_userfile']['name']."', '".$imgData."');";

                    // insert the image
                   $query=mysqli_query($conn,$sql) or die("Error in Query: " . mysqli_error());
if(!$query)
{
echo"Could not connect !!!! Updation failed";
}
else
{
echo"<div align=center>";
echo"Updation Success";
echo"<br><br><input type=button onclick=this.form.submit(); value=OK id=butt> </div>";
}
                }
                else
                    echo"<p>Uploaded file is not an image.</p>";
            }
             else {
                // if the file is not less than the maximum allowed, print an error
               echo"File exceeds the Maximum File limit Maximum File limit is $maxsize bytes File $_FILES[gallery_userfile][name] is $_FILES[gallery_userfile][size] bytes";
                }
        }
        else
            echo"File not uploaded successfully.";

    }
    else {
        $msg= file_upload_error_message($_FILES['gallery_userfile']['error']);
    }
  
}


}
else
{
 echo "<div align=center>";
 echo "<h3>please choose a category</h3>";
 echo"<br><br><input type=button onclick=this.form.submit(); value=OK id=butt> </div>";
 echo "</div>";
}
}









//*************************************************** The First View *********************************************************************
else
{
?>
<div align="center">
<h1>CONTENT MANAGER</h1>
</div>
<?php

}







// Function to return error message based on error code

function file_upload_error_message($error_code) {
    switch ($error_code) {
        case UPLOAD_ERR_INI_SIZE:
            return 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
        case UPLOAD_ERR_FORM_SIZE:
            return 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
        case UPLOAD_ERR_PARTIAL:
            return 'The uploaded file was only partially uploaded';
        case UPLOAD_ERR_NO_FILE:
            return 'No file was uploaded';
        case UPLOAD_ERR_NO_TMP_DIR:
            return 'Missing a temporary folder';
        case UPLOAD_ERR_CANT_WRITE:
            return 'Failed to write file to disk';
        case UPLOAD_ERR_EXTENSION:
            return 'File upload stopped by extension';
        default:
            return 'Unknown upload error';
    }
}
?>
</div></div>  
</div>



 
<style>
#leftcontent {

width:50px;

float:left;
}
#rightcontent {
padding:0px 250px;



float:right;
}
#butt
{
border-radius:20px;
background:#d8aa46;
font-style:oblique;
font-family:"Times New Roman", Times, serif;
font-size:18px
}
body
{
font-family:"Times New Roman", Times, serif;
font-style:oblique;
}
@media screen and (max-width:850px){
#logooooo
{
width:50%;
height:auto;
}
#leftcontent {
padding:10px;
width:100%;


}
#rightcontent {
padding:10px;




}
}
</style>     




  

        
     
        
  
        
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
  



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
    
    	<!-- Google Map -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>
        <!-- Google Map Init-->
        <script type="text/javascript">
           function templatemo_map() {
                $('.google-map').gmap3({
                    marker:{
                        address: '9.5949,76.4681' 
                    },
                        map:{
                        options:{
                        zoom: 15,
                        scrollwheel: false,
                        streetViewControl : true
                        }
                    }
                });
            }
        </script>
        <?php
mysqli_close($conn);
?>
</body>
</html>