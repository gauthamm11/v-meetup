 <?php
@ session_start(); 
//internal guide
if(!isset($_SESSION['uname']))
{
	//echo '<script>window.location.href="account/login.php?status=login-required"</script>';
	//die();
	header("Location: ../account/login.php");
		
}


if($_SESSION['type']=='intstu')
{
	header("Location: ../int_student/index.php");
}
if ($_SESSION['type']=='inhousestu')
{
	header("Location: ../in_student/index.php");
}
if ($_SESSION['type']=='extguide')
{
	header("Location: ../ext_guide/index.php");
}
if ($_SESSION['type']=='proco')
{
	header("Location: ../coordinator/index.php");
}







error_reporting(0);
//connect to the database
mysql_connect ("localhost","root","gautham") or die ('Cannot connect to MySQL: ' . mysql_error());
mysql_select_db ("v_meetup") or die ('Cannot connect to the database: ' . mysql_error());



?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome to V-Meet'Up :Project Submission Portal</title>
<link rel="icon" href="../images/favicon.png" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/home.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
</head>
<style type="text/css">
 
 
 .mycss{
 padding-right: 2%;
 }
 
 
 
 </style>
<body>

<nav class="navbar container well">
  <div class="container-fluid">
   
   
    <div class="navbar-header">
     <img src="../images/vmeetup/v (1).png" ondragstart="return false" width="200" height="100">
    </div>
   
   
   
   <div class="navbar-header">
     <img src="../images/vmeetup/v (4).png" class="img-responsive" ondragstart="return false" width="auto" height="auto">
    </div>
   
    <div>
      
      
      <div class="nav navbar-nav navbar-right well" id="time">
      
        <?php
// echo date("d/m/Y") . "<br>";
// echo date("l");
// echo "<br>";
// echo date("h:i:sa");
        date_default_timezone_set('Asia/Kolkata');
       // echo date('d-m-Y H:i');
       // echo "<br>";
       
        echo date('d-l-Y');
?>
    </div>
      
      <ul class="nav navbar-nav navbar-right mycss">

<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
  Welcome
  <?php 
  $uiname = mysql_query("SELECT g_name FROM internal_guide WHERE g_id='".$_SESSION['uname']."'") or die ('Query is invalid: ' . mysql_error());
  while ($row = mysql_fetch_array($uiname)) {
  	echo $row['g_name'];
  	$name = $row['g_name'];
  }
  
  ?>
  
  
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    
    
    <li><a href="index.php">Home</a></li>
    <li><a href="attendance.php">Roster</a></li>
    <li><a href="../account/logout.php">Logout</a></li>
    
  </ul>
</div>
        
      </ul>
    </div>
  </div>
</nav>
  










<div class="container well">
    <ul class="nav nav-tabs nav-pills nav-justified">
    <li class="active"><a data-toggle="tab" href="#home">Profile</a></li>
    <li><a data-toggle="tab" href="#menu1">Update Profile</a></li>
   
    </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      
    <h1><u>Profile</u></h1>
      <p>
      
      
        <?php 
  $det = mysql_query("select * from internal_guide where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());
while ($row = mysql_fetch_array($det)) {
echo "<b>Name: </b>".$row['g_name']."<br> ".
"<b>Designation: </b>".$row['g_designation']."<br>".
"<b>Faculty ID:</b>".$row['g_id']."<br> ".
"<b>E-Mail:</b> ".$row['g_mail'].

"<br>"."<b>Mobile:</b> ".$row['g_mobile']."<br>".
"<b>Cabin:</b> ".$row['g_cabin'].
"<br>"."<b>Intercom:</b> ".$row['g_intercom']
."<br><br>";
}
  
  ?>
      </p>
      
    </div>
    
    
    
    
    
    <div id="menu1" class="tab-pane fade">
          
    
    
    <div class="container-fluid">
  <h2><u>Update</u></h2>
  <form class="form-horizontal" role="form" method="post" action="#">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" 
        
        value="<?php 
$formname = mysql_query("SELECT g_name FROM internal_guide WHERE g_id='".$_SESSION['uname']."'") or die ('Query is invalid: ' . mysql_error());
while ($row = mysql_fetch_array($formname)) {
echo $row['g_name'];
}?>">
        
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="mail" placeholder="Enter email" 
        
        value="<?php 
$formmail = mysql_query("SELECT g_mail FROM internal_guide WHERE g_id='".$_SESSION['uname']."'") or die ('Query is invalid: ' . mysql_error());
while ($row = mysql_fetch_array($formmail)) {
echo $row['g_mail'];
}?>">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="mobile">Mobile:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile" 
        value="<?php 
$formmobile = mysql_query("SELECT g_mobile FROM internal_guide WHERE g_id='".$_SESSION['uname']."'") or die ('Query is invalid: ' . mysql_error());
while ($row = mysql_fetch_array($formmobile)) {
echo $row['g_mobile'];
}?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password" 
        value="<?php 
$formpass = mysql_query("SELECT g_password FROM internal_guide WHERE g_id='".$_SESSION['uname']."'") or die ('Query is invalid: ' . mysql_error());
while ($row = mysql_fetch_array($formpass)) {
echo $row['g_password'];
}?>">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="show">Show Password:</label>
      <div class="checkbox col-xs-4">          
        <input type="checkbox"  id="show" name="show" onchange="document.getElementById('pwd').type=this.checked ? 'text' : 'password' "> 
      
      </div>
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-2" for="dsg">Designation:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="dsg" name="designation" placeholder="Enter Designation" 
        value="<?php 
$formdesig = mysql_query("SELECT g_designation FROM internal_guide WHERE g_id='".$_SESSION['uname']."'") or die ('Query is invalid: ' . mysql_error());
while ($row = mysql_fetch_array($formdesig)) {
echo $row['g_designation'];
}?>">
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="intercom">Intercom:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="intercom" name="intercom" placeholder="Enter Intercom" 
        value="<?php 
$forminter = mysql_query("SELECT g_intercom FROM internal_guide WHERE g_id='".$_SESSION['uname']."'") or die ('Query is invalid: ' . mysql_error());
while ($row = mysql_fetch_array($forminter)) {
echo $row['g_intercom'];
}?>">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="cabin">Cabin:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="cabin" name="cabin" placeholder="Enter Cabin" 
        value="<?php 
$formcabin = mysql_query("SELECT g_cabin FROM internal_guide WHERE g_id='".$_SESSION['uname']."'") or die ('Query is invalid: ' . mysql_error());
while ($row = mysql_fetch_array($formcabin)) {
echo $row['g_cabin'];
}?>">
        
      </div>
    </div>
    
    
    
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <!--button type="submit" class="btn btn-default btn-success center-block">Update</button-->
        <input type="submit" class="btn btn-default btn-success center-block" value="Update" name="submit">
        
      </div>
    </div>
  </form>
</div>
    
    
      </div>


       
       
       
       
       
       
       
       
       
       </div>
      </div>
      



<?php 
if(isset($_POST["submit"]))
{
// Get values from form
$name = $_POST['name'];
$mail = $_POST['mail'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$designation = $_POST['designation'];
$intercom = $_POST['intercom'];
$cabin = $_POST['cabin'];


// $order = "update internal_guide set 
// 	g_name='$name', g_mail='$mail', g_password='$password',g_designation='$designation',g_intercom='$intercom',g_cabin='$cabin',g_mobile='$mobile'
// 			where g_id='".$_SESSION['uname']."'
// 			";


// //declare in the order variable
// $result = mysql_query($order);	//order executes

$msginsert = "
		update internal_guide set 
g_name='$name', g_mail='$mail', g_password='$password',g_designation='$designation',g_intercom='$intercom',g_cabin='$cabin',g_mobile='$mobile'
 			where g_id='".$_SESSION['uname']."'
		
		" ;


mysql_query($msginsert) or die ('Query is invalid: ' . mysql_error());

echo '

		<a id="gLink" href="success.php"></a>


		';





}
?>

   
<script>
    document.getElementById("gLink").click()
</script>
      
 <script>
    document.getElementById("gLink1").click()
</script>
      


 <div class="container alert alert-info">
 
  <!-- Trigger the modal with a button -->
<a data-toggle="modal" href="#myModal"><center>
<span class="glyphicon glyphicon-copyright-mark"> </span> 2015 All Rights Reserved Team AXIOMS</center></a>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Team AXIOMS</h4>
        </div>
        <div class="modal-body">
        
        <!-- body -->
                
                
                
                
                
<div class="container-fluid">
  <div class="row">
    
    <div class="col-sm-4">
     <img src="../images/developers/rajiv.png" alt="Prof. Rajiv Vincent" class="thumbnail img-responsive" style="width:150px;height:150px">
      <p>Prof. Rajiv Vincent<br>Project Head</p> 
    </div>
    <div class="col-sm-4">
        <img src="../images/developers/maheshwari.png" alt="Prof. Maheshwari" class="thumbnail img-responsive" style="width:150px;height:150px">
        <p>Prof. Maheshwari Ashok<br>Project Head</p>
     
    </div>
    <div class="col-sm-4">
        <img src="../images/developers/gautham.jpg" alt="Mindala Gautham Asok" class="thumbnail img-responsive" style="width:150px;height:150px">
        <p>Mindala Gautham Asok<br>Key Developer</p>
    </div>
    <div class="col-sm-4">
        <img src="../images/developers/harish.jpg" alt="Thadakamdla Harish Kumar" class="thumbnail img-responsive" style="width:150px;height:150px">
        <p>Thadakamdla Harish Kumar<br>Marketing</p>
    </div>
    <div class="col-sm-4">
        <img src="../images/developers/sibhi.png" alt="S Sibhi Kumar" class="thumbnail img-responsive" style="width:150px;height:150px">
        <p>Sibhi Kumar S <br>UI/UX Designer</p>
    </div>
    
  </div>
</div>
                
                
                
                
                
                
                
                
                
                
        <!-- body --> 
        </div>
        <div class="modal-footer"><center>
        <a href="http://chennai.vit.ac.in/" target="_blank" style="text-decoration: none">VIT UNIVERSITY - Chennai Campus</a></center>
          
        </div>
      </div>
      
    </div>
  </div>
  
</div>
 
 

      
</body>
</html>



 