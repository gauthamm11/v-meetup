 <?php
@ session_start(); 
//external guide
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
if($_SESSION['type']=='intstu')
{
	header("Location: ../int_student/index.php");
}
if ($_SESSION['type']=='inhousestu')
{
	header("Location: ../in_student/index.php");
}

if ($_SESSION['type']=='proco')
{
	header("Location: ../coordinator/index.php");
}

 ?>


<?php



// session_start();
//  echo "User ID is: " . $_SESSION['uname'];
// echo "<br>";

// // //int guide
// echo 'external guide   <a href="../account/logout.php">Logout</a><br>';

error_reporting(0);
//connect to the database
mysql_connect ("localhost","root","gautham") or die ('Cannot connect to MySQL: ' . mysql_error());
mysql_select_db ("v_meetup") or die ('Cannot connect to the database: ' . mysql_error());

// //query
// $query = mysql_query("SELECT e_name FROM external_guide WHERE e_id='".$_SESSION['uname']."'") or die ('Query is invalid: ' . mysql_error());

// //write the results

// while ($row = mysql_fetch_array($query)) {
// 	echo $row['e_name']."<br>";
	
// // close the loop
// }

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
<!-- 
<nav class="navbar navbar-static">
   <div class="container">
    <div class="navbar-header">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="images/vitlogofinal.png" width="200" height="100"></a>
      <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="glyphicon glyphicon-chevron-down"></span>
      </a>
</div>    
    </div>
      <div class="navbar-collapse collapse">
        

        <ul class="nav navbar-right navbar-nav">
           <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i>Prof. Rajiv Vincent
              <i class="glyphicon glyphicon-chevron-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="index.html">Logout</a></li>
             </ul>
          </li>
        </ul>
      </div>
    </div>
</nav>
-->


<nav class="navbar container well">
  <div class="container-fluid">
    <div class="navbar-header">
     <img src="../images/vit logo (2).png" width="200" height="100">
    </div>
    <div>
      
      <ul class="nav navbar-nav navbar-right">

<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
  Welcome
  <?php 
  $uiname = mysql_query("SELECT e_name FROM external_guide WHERE e_id='".$_SESSION['uname']."'") or die ('Query is invalid: ' . mysql_error());
  while ($row = mysql_fetch_array($uiname)) {
  	echo $row['e_name'];
  }
  
  ?>
  
  
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="../account/logout.php">Logout</a></li>
  </ul>
</div>
        
      </ul>
    </div>
  </div>
</nav>
  















<div class="container well">
    <ul class="nav nav-tabs nav-justified">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Profile</a></li>
    <li><a data-toggle="tab" href="#menu2">Status Approval</a></li>
    </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h1>Student Details:</h1>
      
      <h2>Internship Students:</h2>
 <p> 
 
  <?php 
  $intstu = mysql_query("select * from intern_student where e_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());
while ($row = mysql_fetch_array($intstu)) {
echo "Name: ".$row['int_name']."<br> "."Reg ID:".$row['int_id']."<br> "."Project Title: ".$row['int_pro']."<br><br>";
}
  
  ?>
 
 </p>     
    
      
     
    </div>
    <div id="menu1" class="tab-pane fade">
      <h1>Profile:</h1>
      <p>
      
      
        <?php 
  $det = mysql_query("select * from external_guide where e_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());
while ($row = mysql_fetch_array($det)) {
echo "Name: ".$row['e_name']."<br> "."Faculty ID:".$row['e_id']."<br> "."E-Mail: ".$row['e_mail']."<br><br>";
}
  
  ?>
      
      
      
      
      </p>
      </div>


       
       
       
       
       
       
       
       
       
       <div id="menu2" class="tab-pane fade">
      <h1>Status:</h1>
      <p>



<div class="form-group">
 <!-- <label for="pwd">Status:</label>-->
 <textarea class="form-control" rows="5" id="comment"></textarea>

</div>


        <button type="button" class="btn btn-success">Approve</button>
<button type="button" class="btn btn-danger">Decline</button>
      </div>
      </div>
      </div>
      
   



</body>
</html>