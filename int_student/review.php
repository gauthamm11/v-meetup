 <?php
//@ session_start(); 
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
<script src='https://code.jquery.com/jquery-2.1.3.min.js'></script>
 
 
 
 
 </head>

<body>


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
  $uiname = mysql_query("SELECT int_name FROM intern_student WHERE int_id='".$_SESSION['uname']."'") or die ('Query is invalid: ' . mysql_error());
  while ($row = mysql_fetch_array($uiname)) {
  	echo $row['int_name'];
  }
  
  ?>
  
  
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="../account/logout.php">Logout</a></li>
    <li><a href="ing_page1.php">second</a></li>
    <li><a href="index.php">Home</a></li>
  </ul>
</div>
        
      </ul>
    </div>
  </div>
</nav>
  




<?php 
  $uiname = mysql_query("SELECT e_id,g_id FROM intern_student WHERE int_id='".$_SESSION['uname']."'") or die ('Query is invalid: ' . mysql_error());
  while ($row = mysql_fetch_array($uiname)) {
  	$ext_gui= $row['e_id'];
  	$int_gui= $row['g_id'];
  }
  
  ?>
  






<!--  -->
<div class="container well">
    <ul class="nav nav-tabs nav-pills nav-justified">
    <li><a data-toggle="tab" href="#menu1">Winter</a></li>
    <li><a data-toggle="tab" href="#menu2">Fall</a></li>
    </ul>

  <div class="tab-content">
     <div id="menu1" class="tab-pane fade">
      
      
      <!-- months -->
      
      <div class="container-fluid well">
    <ul class="nav nav-tabs nav-pills nav-justified">
    <li><a data-toggle="tab" href="#jan">January</a></li>
    <li><a data-toggle="tab" href="#feb">February</a></li>
    <li><a data-toggle="tab" href="#mar">March</a></li>
    <li><a data-toggle="tab" href="#apr">April</a></li>
    <li><a data-toggle="tab" href="#may">May</a></li>
    <li><a data-toggle="tab" href="#june">June</a></li>
    </ul>

  <div class="tab-content">
     <div id="jan" class="tab-pane fade">
     
      </div>

       
       <div id="feb" class="tab-pane fade">

      </div>
      
           <div id="mar" class="tab-pane fade">
      
      </div>

       
       <div id="apr" class="tab-pane fade">
      
      </div>
           <div id="may" class="tab-pane fade">
      
      </div>

       
       <div id="june" class="tab-pane fade">
      
      </div>
      
      
      
      </div>
      
      </div>
      
      
      <!-- end months -->
      
      </div>

       
       <div id="menu2" class="tab-pane fade">
       
       <!-- months -->
      
      <div class="container-fluid well">
    <ul class="nav nav-tabs nav-pills nav-justified">
    <li><a data-toggle="tab" href="#jul">July</a></li>
    <li><a data-toggle="tab" href="#aug">August</a></li>
    <li><a data-toggle="tab" href="#sep">september</a></li>
    <li><a data-toggle="tab" href="#oct">October</a></li>
    <li><a data-toggle="tab" href="#nov">November</a></li>
    <li><a data-toggle="tab" href="#dec">December</a></li>
    </ul>

  <div class="tab-content">
     <div id="jul" class="tab-pane fade">
     
     <div class="container-fluid">
 
  <form role="form" action="#" method="post">
    <div class="form-group">
      <label for="text">Text:</label>
      <input type="text" class="form-control" id="text" name="statusjuly" placeholder="Enter email">
    </div>
    <button type="submit" name="submitjuly" class="btn btn-default">Submit</button>
  </form>
</div>
     
     <?php

     $textjuly = $_POST['statusjuly'];
 if(isset($_POST['submitjuly'])){
        
        $msginsert = "insert into `intern_review` (`int_id`,`g_id`,`e_id`,`message`) values('".$_SESSION['uname']."','$int_gui','$ext_gui','$textjuly')" ;
        
        
        mysql_query($msginsert) or die ('Query is invalid: ' . mysql_error());
        
        }
?>
     
     
      </div>

       
       <div id="aug" class="tab-pane fade">

      </div>
      
           <div id="sep" class="tab-pane fade">
      
      </div>

       
       <div id="oct" class="tab-pane fade">
      
      </div>
           <div id="nov" class="tab-pane fade">
      
      </div>

       
       <div id="dec" class="tab-pane fade">
      
      </div>
      
      
      
      </div>
      
      </div>
       
      
      </div>
      
      </div>
      </div>

    <!--  --> 
     







</body>
</html>