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
<title>v-meet up: Project Submission Portal</title>
<link rel="icon" href="../images/favicon.png" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/home.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>

<nav class="navbar container well">
  <div class="container-fluid">
   
   
    <div class="navbar-header">
     <img src="../images/vit logo (2).png" width="200" height="100">
    </div>
   
   
   
   <div class="navbar-header">
     <img src="../vmeetup.png" width="auto" height="auto">
    </div>
   
    <div>
      
      <ul class="nav navbar-nav navbar-right">

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
    <li><a href="index.php">Home</a></li>
  </ul>
</div>
        
      </ul>
    </div>
  </div>
</nav>
  















<div class="container well">
    <ul class="nav nav-tabs nav-justified">
    <li class="active"><a data-toggle="tab" href="#home">Profile</a></li>
    <li><a data-toggle="tab" href="#menu1">Update Profile</a></li>
   
    </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      
    <h1>Profile:</h1>
      <p>
      
      
        <?php 
  $det = mysql_query("select * from internal_guide where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());
while ($row = mysql_fetch_array($det)) {
echo "Name: ".$row['g_name']."<br> "."Faculty ID:".$row['g_id']."<br> "."E-Mail: ".$row['g_mail']."<br><br>";
}
  
  ?>
      </p>
      
    </div>
    
    
    
    
    
    <div id="menu1" class="tab-pane fade">
          
    
    
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
      
   



<div class="container">
 
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg well" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
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

