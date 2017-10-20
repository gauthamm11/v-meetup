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

if ($_SESSION['type']=='extguide')
{
	header("Location: ../ext_guide/index.php");
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
  $uiname = mysql_query("SELECT off_name FROM vit_officials WHERE off_id='".$_SESSION['uname']."'") or die ('Query is invalid: ' . mysql_error());
  while ($row = mysql_fetch_array($uiname)) {
  	echo $row['off_name'];
  	$name = $row['off_name'];
  }
  
  ?>
  
  
  <span class="caret"></span></button>
   <ul class="dropdown-menu">
    
    
<!--     <li><a href="profile.php">Profile</a></li> -->
<!--     <li><a href="attendance.php">Roster</a></li> -->
    <li><a href="../account/logout.php">Logout</a></li>
    
  </ul>
</div>
        
      </ul>
    </div>
  </div>
</nav>
  















<div class="container well">
    <ul class="nav nav-tabs nav-pills nav-justified">
    <li class="active"><a data-toggle="tab" href="#home">Students</a></li>
    <li><a data-toggle="tab" href="#menu1">Guides</a></li>
    <li><a data-toggle="tab" href="#menu2">Status Update</a></li>
    </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h1>Student Details:</h1>
      
      <h2>Internship Students:</h2>
 <p> 
 
  <?php 
  $intstu = mysql_query("select * from intern_student")or die ('Query is invalid: ' . mysql_error());
while ($row = mysql_fetch_array($intstu)) {
echo "Name: ".$row['int_name']."<br> "."Reg ID:".$row['int_id']."<br> "."Project Title: ".$row['int_pro']."<br>"."Project Domain: ".$row['int_domain']."<br><br>";
}
  
  ?>
 
 </p>     
    
         <h2>In house Students:</h2>
 <p> 
 
  <?php 
  $instu = mysql_query("select * from inhouse_student")or die ('Query is invalid: ' . mysql_error());
while ($row = mysql_fetch_array($instu)) {
echo "Name: ".$row['in_name']."<br> "."Reg ID:".$row['in_id']."<br> "."Project Title: ".$row['in_pro']."<br>"."Project Domain: ".$row['in_domain']."<br><br>";
}
  
  ?>
 
 </p>  
     
     
     
     
     
     
     
     
     
    </div>
    <div id="menu1" class="tab-pane fade">
      <h1>Guides:</h1>
      
      <h2>VIT Guides:</h2>
      <p>
      
      
        <?php 
  $det = mysql_query("select * from internal_guide")or die ('Query is invalid: ' . mysql_error());
while ($row = mysql_fetch_array($det)) {
echo "Name: ".$row['g_name']."<br> "."Faculty ID:".$row['g_id']."<br> "."E-Mail: ".$row['g_mail']."<br>"."Intercom: ".$row['g_intercom']."<br>"."Cabin: ".$row['g_cabin']."<br><br>";
}
  
  ?>
      
      
      
      
      </p>
      
      
           <h2>External Guides:</h2>
      <p>
      
      
        <?php 
  $det = mysql_query("select * from external_guide")or die ('Query is invalid: ' . mysql_error());
while ($row = mysql_fetch_array($det)) {
echo "Name: ".$row['e_name']."<br> "."Company:".$row['e_company']."<br> "."E-Mail: ".$row['e_mail']."<br><br>";
}
  
  ?>
      
      
      
      
      </p>
      
      </div>


       
       
       
       
       
       
       
       
       
       <div id="menu2" class="tab-pane fade">
      <h1>Status:</h1>
      <p>



<div class="form-group">
 <!-- <label for="pwd">Status:</label>-->
 <form action="#" method="post">
 <textarea class="form-control" rows="5" id="comment" name="message" required></textarea><br>
<center><button type="submit" class="btn btn-success" name="post">Post</button></center>
</form>
</div>


        

      </div>
      </div>
      </div>
      
      
      
      
      
      <?php 

$msgaa = $_POST['message'];
if(isset($_POST['post'])){

	//INSERT INTO `v_meetup`.`common_status` (`slno`, `message`, `time`, `g_id`, `e_id`, `off_id`)
	// VALUES (NULL, '', CURRENT_TIMESTAMP, '50185', NULL, NULL);

	$msginsert = "insert into `common_status` (`message`, `off_id`) values('$name :   $msgaa','".$_SESSION['uname']."')" ;


	mysql_query($msginsert) or die ('Query is invalid: ' . mysql_error());

	echo '
		
		<a id="gLink" href="success.php"></a>
		
		
		';
	

}

?>
 <script>
    document.getElementById("gLink").click()
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
     <img src="../images/developers/rajiv.png" onContextMenu="return false;" ondragstart="return false;" alt="Prof. Rajiv Vincent" class="thumbnail img-responsive" style="width:150px;height:150px">
      <p align="center">Prof. Rajiv Vincent<br>Project Head</p> 
    </div>
    <div class="col-sm-4">
        <img src="../images/developers/maheshwari.png" ondragstart="return false;" onContextMenu="return false;" alt="Prof. Maheshwari" class="thumbnail img-responsive" style="width:150px;height:150px">
        <p align="center">Prof. Maheshwari Ashok<br>Project Head</p>
     
    </div>
    <div class="col-sm-4">
        <img src="../images/developers/gautham.jpg" ondragstart="return false;" onContextMenu="return false;" alt="Mindala Gautham Asok" class="thumbnail img-responsive" style="width:150px;height:150px">
        <p align="center">Mindala Gautham Asok<br>Key Developer</p>
    </div>
    <div class="col-sm-4">
        <img src="../images/developers/harish.jpg" ondragstart="return false;" onContextMenu="return false;" alt="Thadakamdla Harish Kumar" class="thumbnail img-responsive" style="width:150px;height:150px">
        <p align="center">Thadakamdla Harish Kumar<br>Marketing</p>
    </div>
    <div class="col-sm-4">
        <img src="../images/developers/sibhi.png" ondragstart="return false;" onContextMenu="return false;" alt="S Sibhi Kumar" class="thumbnail img-responsive" style="width:150px;height:150px">
        <p align="center">Sibhi Kumar S <br>UI/UX Designer</p>
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