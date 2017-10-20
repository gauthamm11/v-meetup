 <?php
@ session_start(); 
//internal guide
if(!isset($_SESSION['uname']))
{
	//echo '<script>window.location.href="account/login.php?status=login-required"</script>';
	//die();
	header("Location: ../account/login.php");
		
}


if($_SESSION['type']=='vitguide')
{
	header("Location: ../in_guide/index.php");
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
  











<div class="container well well-lg">
    
    <div class="alert alert-danger">
    <span class="glyphicon glyphicon-remove"> </span><strong> failed</strong>
  </div>
    
    
</div>
    
</body>
</html>






