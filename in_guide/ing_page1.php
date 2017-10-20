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


 ?>
 <?php
 //internal guide
 
//session_start();
// echo "User ID is: " . $_SESSION['uname'];
// echo "<br>";
// echo 'internal guide   <a href="../account/logout.php">Logout</a><br>';

error_reporting(0);
//connect to the database
mysql_connect ("localhost","root","gautham") or die ('Cannot connect to MySQL: ' . mysql_error());
mysql_select_db ("v_meetup") or die ('Cannot connect to the database: ' . mysql_error());


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>v-meet up: Project Submission Portal</title>
<link rel="icon" href="../images/favicon.png" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/home.css">

<!--bootstrap --> 
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 
 <style type="text/css">
 
 
 .mycss{
 padding-right: 2%;
 }
 
 
 
 </style>
 
 <script type="text/javascript">
 
 </script>
 
 
 
 </head>

<body>

<br>

<nav class="navbar container well">
  <div class="container-fluid">
    <div class="navbar-header">
     <img src="../images/vit logo (2).png" width="200" height="100">
    </div>
    
    <div class="navbar-header">
     <img src="../images/vmu.png"  class="img-responsive" width="auto" height="auto">
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
    
    
      <ul class="nav navbar-nav navbar-right  mycss">

<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
  Welcome
  <?php 
  $uiname = mysql_query("SELECT g_name FROM internal_guide WHERE g_id='".$_SESSION['uname']."'") or die ('Query is invalid: ' . mysql_error());
  while ($row = mysql_fetch_array($uiname)) {
  	echo $row['g_name'];
  }
  
  ?>
  
  
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="../account/logout.php">Logout</a></li>
    <li><a href="index.php">home</a></li>
  </ul>
</div>
        
      </ul>
    </div>
  </div>
</nav>
  











<div class="container well">
    <ul class="nav nav-tabs nav-justified">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Attendance</a></li>
    <li><a data-toggle="tab" href="#menu2">Profile Update</a></li>
    </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h1>Student Details:</h1>
      
      <h2>Internship Students:</h2>
 <p> 
 
  <?php 
  $intstu = mysql_query("select * from intern_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());
while ($row = mysql_fetch_array($intstu)) {
echo "Name: ".$row['int_name']."<br> "."Reg ID:".$row['int_id']."<br> "."Project Title: ".$row['int_pro']."<br><br>";
}
  
  ?>
 
 </p>     
      
      <h2>Inhouse Students:</h2>
      
  <?php 
  $instua = mysql_query("select * from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());
while ($row = mysql_fetch_array($instua)) {
echo "Name: ".$row['in_name']."<br> "."Reg ID:".$row['in_id']."<br> "."Project Title: ".$row['in_pro']."<br><br>";
}
  
  ?>
      
      
     
    </div>
    
    
    
    
    
    
    
    
    
    <div id="menu1" class="tab-pane fade">
      <h1>Attendance:</h1>
      
      
     
       <div>
  <?php 
 // $i=0;
   $instu = mysql_query("select in_name,in_id from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());
 $cnt=array();
 echo   '<form action="#" method="post" id="att">';

 while ($row = mysql_fetch_array($instu)) {
 array_push($cnt,$row['in_id'] );
 	echo $row['in_name'].$row['in_id'];
			
 
echo '
  <div class="center-block">
  <label class="radio-inline">
       <input type="radio" name="'.$row['in_id'].'" value="present">Present
     </label>
    
     <label class="radio-inline">
       <input type="radio" name="'.$row['in_id'].'" value="absent">Absent
     </label>
     </div>
'; 
 	//$i=$i+1;
 	
 	
 
 }
 echo '</form>'."<br><br>";
 

 ?>
 
   </div>
  <button class="btn btn-default btn-lg btn-success center-block" type="submit" form="att" aria-expanded="false" name="atte">
    Submit 
  </button>
  
    
 	
      

       
       <?php


if(isset($_POST['atte'])){
//	print_r($cnt);
	
	//	echo($_POST[$i]);
	//echo sizeof($cnt);
foreach ($cnt as $c)
{//echo $_POST[$c]." ".$c."<br>";
date_default_timezone_set('Asia/Kolkata');
	$date = date('Y-m-d');
	if ($_POST[$c]=="present") { 
		$status="present";
	 $order	= "insert into attendance (date,status,in_id,g_id) values('$date','$status','$c','".$_SESSION['uname']."')"
			
;
	}
	else if ($_POST[$c]=="absent") {
	 	$status="absent";
	 	$order	= "insert into attendance (date,status,in_id,g_id) values('$date','$status','$c','".$_SESSION['uname']."')"
	 		
	 	;
	 	
	 }
	


  mysql_query($order) or die ('Query is invalid: ' . mysql_error());	//order executes
} 
  }
  
    


?>

       
       
       </div>
       
       
       
       
       <div id="menu2" class="tab-pane fade">
      

      
<div class="container-fluid">
  <h2>Profile:</h2>
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

</body>
</html>


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


//update guide set gmail='rajiv.vincent1', gname='rajiv' where gid='1';

//inserting data order
// $order = "INSERT INTO internal_guide
// (g_name, g_mail, g_password,g_designation,g_intercom,g_cabin,g_mobile)
// VALUES
// ('$name','$mail','$password','$designation','$intercom','$cabin','$mobile')";

$order = "update internal_guide set 
	g_name='$name', g_mail='$mail', g_password='$password',g_designation='$designation',g_intercom='$intercom',g_cabin='$cabin',g_mobile='$mobile'
			where g_id='".$_SESSION['uname']."'
			";


//declare in the order variable
$result = mysql_query($order);	//order executes
if($result)
{
/*	echo("
Input data is success");*/
}
}
else
{
	/*echo("
Input data is fail");
*/
}
?>








