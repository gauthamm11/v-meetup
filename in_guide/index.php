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
 
 .box{
 
 height: 300px;
 overflow-y: scroll;
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
    
    
    <li><a href="profile.php">Profile</a></li>
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
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Bulletin Board</a></li>
    <li><a data-toggle="tab" href="#menu2">Status Update</a></li>
    <li><a data-toggle="tab" href="#menu3">Review</a></li>
    </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h1><u>Student Details</u></h1>
      
      <h2>Inhouse Students:</h2>
    <p>  
  <?php 
  $instu = mysql_query("select * from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());
  echo  '<b>Total Students: '.mysql_num_rows($instu).'</b><br><br>';
while ($row23 = mysql_fetch_array($instu)) {
echo "<b>Name:</b> ".$row23['in_name']."<br> "."<b>Reg ID:</b>".$row23['in_id']."<br> "."<b>Project Title:</b> ".$row23['in_pro']."<br> "."<b>Project Abstract:</b> ".$row23['abstract']."<br><br>";
$in=$row23['in_name'];
}
  

  ?>
      </p>
      <h2>Internship Students:</h2>
 <p> 
 
  <?php 
  $intstu = mysql_query("select * from intern_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());
  echo  '<b>Total Students: '.' '.mysql_num_rows($intstu).'</b><br><br>';
while ($row = mysql_fetch_array($intstu)) {
echo "<b>Name:</b> ".$row['int_name']."<br> "."<b>Reg ID:</b>".$row['int_id']."<br> "."<b>Project Title:</b> ".$row['int_pro']."<br> "."<b>Project Abstract:</b> ".$row['abstract']."<br><br>";
$int=$row['int_name'];
}
  
  ?>
 
 </p>     
  
      <br><br>
      
      
      <h1><u>Eligible Students for Review 1</u></h1>
      
    <h2>Inhouse Students:</h2>  
    <?php 
   
    //$instue = mysql_query("select * from mainreview1statusinhouse where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());
    $instue = mysql_query(" select * from inhouse_student inner join mainreview1statusinhouse using (in_id,g_id) where g_id=".$_SESSION['uname']."");
    echo  '<b>Total Students: '.' '.mysql_num_rows($instue).'</b><br><br>';
while ($rowe1 = mysql_fetch_array($instue)) {
echo "<b>Name:</b> ".$rowe1['in_name']."&nbsp;&nbsp;&nbsp;"."<b>Reg ID:</b>".$rowe1['in_id']."<br>";

}
?>
<h2>Intern Students:</h2>  
    <?php 
    $instuee = mysql_query("select * from intern_student inner join mainreview1statusintern using (int_id,g_id) where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());
    echo  '<b>Total Students: '.' '.mysql_num_rows($instuee).'</b><br><br>';
while ($rowe = mysql_fetch_array($instuee)) {
echo "<b>Name:</b> ".$rowe['int_name']."&nbsp;&nbsp;&nbsp;"."<b>Reg ID:</b>".$rowe['int_id']."<br>";
//	echo "Reg ID:".$rowe['in_id']."<br><br>";
}
?>

<br><br>
<!--  -->
      <h4>Inhouse Student:</h4><br>
<?php
     
     
     $q21 = mysql_query("select * from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());
     
     echo '<form action="#" method="post" class="form-group">';
     
     echo  '<select name="instur" class="form-control"  required>';
      
     while ($roww = mysql_fetch_array($q21)) {
     
     	echo "	<option name='".$roww['in_id']."' value='".$roww['in_id']."'> ".$roww['in_name']." </option>";
     	
     }
     echo " </select> ";
     echo "<br><center><input type='submit' class='btn btn-success' name='s' value='Approve'></center>";
     echo "</form>";
     
     ?>
     
     <?php 
     

     $eli = $_POST['instur'];
     
     if(isset($_POST['s'])){
     
     	//INSERT INTO `v_meetup`.`common_status` (`slno`, `message`, `time`, `g_id`, `e_id`, `off_id`)
     	// VALUES (NULL, '', CURRENT_TIMESTAMP, '50185', NULL, NULL);
     
     	$msginsert = "insert into `mainreview1statusinhouse` (`in_id`, `status`,`g_id`) 
     	values('$eli','Eligible','".$_SESSION['uname']."')" ;
     
     
     	mysql_query($msginsert) or die ('Query is invalid: ' . mysql_error());
     
     	echo '
     
		<a id="gLink" href="success.php"></a>
     
     
		';
     
     
     }
     
     
     ?>
     
     
     <br>
     <h4>Internship Student:</h4><br>
<?php
     
     
     $q2q = mysql_query("select * from intern_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());
     
     echo '<form action="#" method="post" class="form-group">';
     
     echo  '<select name="intstur" class="form-control"  required>';
      
     while ($rowq = mysql_fetch_array($q2q)) {
     
     	echo "	<option name='".$rowq['int_id']."' value='".$rowq['int_id']."'> ".$rowq['int_name']." </option>";
     	
     	$r2 = $rowq['int_id'];
     }
     echo " </select> ";
     echo "<br><center><input type='submit' class='btn btn-success' name='s2' value='Approve'></center>";
     echo "</form>";
     
     ?>
     
     
     <?php 
     
     
     
     $eli2 = $_POST['intstur'];
      
     if(isset($_POST['s2'])){
     	 
     	//INSERT INTO `v_meetup`.`common_status` (`slno`, `message`, `time`, `g_id`, `e_id`, `off_id`)
     	// VALUES (NULL, '', CURRENT_TIMESTAMP, '50185', NULL, NULL);
     	 
     	$msginsert23 = "insert into `mainreview1statusintern` (`int_id`, `status`,`g_id`)
     	 values('$eli2','Eligible','".$_SESSION['uname']."')" ;
     	 
     	 
     	mysql_query($msginsert23) or die ('Query is invalid: ' . mysql_error());
     	 
     	echo '
   
		<a id="gLink" href="success.php"></a>
   
   
		';
     	 
     	 
     }
     
     
     
     
     
     ?>
     
     
     
     
     
     
     
     
    </div>
    
    
    
    
    
    <div id="menu1" class="tab-pane fade">
    
<!--       <p> -->
      
      <h1><u>Your Posts</u></h1>
      <div class="container-fluid box">
        <?php 

        $det = mysql_query("select * from common_status where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());
 while ($row = mysql_fetch_array($det)) {
 //echo "<ul>".$row['message']."&nbsp;<sub><i>".$row['time']."</i></sub></ul>"."<br>";
 	echo "<ul>&nbsp;"."<b>".$row['postedby'].":</b>&nbsp&nbsp".$row['message']."&nbsp<sub><i>".$row['time']."</i></sub>"."</ul>";
 
 }
  
//   ?>

 </div>
 <br><br>

<h1><u>Project Coordinator</u></h1>   
<div class="container-fluid box">   
    <?php 
    
    $det2 = mysql_query("select * from common_status where off_id='project coordinator'")or die ('Query is invalid: ' . mysql_error());
    while ($row = mysql_fetch_array($det2)) {
    	//echo "<ul>".$row['message']."&nbsp;<sub><i>".$row['time']."</i></sub></ul>"."<br>";
    echo "<ul>&nbsp;"."<b>".$row['postedby'].":</b>&nbsp&nbsp".$row['message']."&nbsp<sub><i>".$row['time']."</i></sub>"."</ul>";
 
    
    }
    
    ?>  
     </div> 
      </div>


       
       
       
       
       
       
       
       
       
       <div id="menu2" class="tab-pane fade">
      
      



<div class="form-group">
 <!-- <label for="pwd">Status:</label>-->
 <form action="#" method="post"><br><br>
 <textarea class="form-control" name="messageaa" rows="5" id="comment" required placeholder="post your common status here...."></textarea>
<br>
 <center><button type="submit" class="btn btn-success" name="postbg">Post</button></center>
</form>
 </div>
<br><br>
<h1><u>Weekly Status</u></h1><br>
<h4>Inhouse Student:</h4><br>
<?php
     
     
     $q2 = mysql_query("select * from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());
     
     echo '<form action="review.php" method="post" id="myform" class="form-group">';
     
     echo  '<select name="instu" class="form-control"  required>';
      
     while ($row = mysql_fetch_array($q2)) {
     
     	echo "	<option name='".$row['in_id']."' value='".$row['in_id']."'> ".$row['in_name']." </option>";
     }
     echo " </select> ";
     echo "<br><center><input type='submit' class='btn btn-success' value='submit'></center>";
     echo "</form>";
     
     ?>
     <br><br>
     <h4>Internship Student:</h4><br>
<?php
     
     
     $q2 = mysql_query("select * from intern_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());
     
     echo '<form action="intreview.php" method="post" id="myform2" class="form-group">';
     
     echo  '<select name="instu2" class="form-control"  required>';
      
     while ($row = mysql_fetch_array($q2)) {
     
     	echo "	<option name='".$row['int_id']."' value='".$row['int_id']."'> ".$row['int_name']." </option>";
     }
     echo " </select> ";
     echo "<br><center><input type='submit' class='btn btn-success' value='submit'></center>";
     echo "</form>";
     
     ?>
      </div>
      
      <div id="menu3" class="tab-pane fade">
      <br>
      <h1><u>Review 1</u></h1><br><br>
      <b>Please select a Student from the list</b><br><br>

      
      
      <h4>Inhouse Student:</h4><br>
<?php
     
     
     $q2 = mysql_query("select * from inhouse_student")or die ('Query is invalid: ' . mysql_error());
     
     echo '<form action="review/index.php" method="post" id="myformr" class="form-group">';
     
     echo  '<select name="inhstur" class="form-control"  required>';
      
     while ($row = mysql_fetch_array($q2)) {
     
     	echo "	<option name='".$row['in_id']."' value='".$row['in_id']."'> ".$row['in_name']."&nbsp;&nbsp;-&nbsp;&nbsp;".$row['in_id']." </option>";
     }
     echo " </select> ";
     echo "<br><center><input type='submit' class='btn btn-success' value='submit'></center>";
     echo "</form>";
     
     ?>
     <br><br>
     <h4>Internship Student:</h4><br>
<?php
     
     
     $q2 = mysql_query("select * from intern_student")or die ('Query is invalid: ' . mysql_error());
     
     echo '<form action="review/intrev.php" method="post" id="myform2r" class="form-group">';
     
     echo  '<select name="intstur" class="form-control"  required>';
      
     while ($row = mysql_fetch_array($q2)) {
     
     	echo "	<option name='".$row['int_id']."' value='".$row['int_id']."'> ".$row['int_name']."&nbsp;&nbsp;-&nbsp;&nbsp;".$row['int_id']."</option>";
     }
     echo " </select> ";
     echo "<br><center><input type='submit' class='btn btn-success' value='submit'></center>";
     echo "</form>";
     
     ?>
      
     
    </div>
      
      
      </div>
      </div>
<?php 

$msgaa = $_POST['messageaa'];
if(isset($_POST['postbg'])){

	//INSERT INTO `v_meetup`.`common_status` (`slno`, `message`, `time`, `g_id`, `e_id`, `off_id`)
	// VALUES (NULL, '', CURRENT_TIMESTAMP, '50185', NULL, NULL);

	$msginsert = "insert into `common_status` (`message`, `g_id`,`postedby`) values('$msgaa','".$_SESSION['uname']."','$name')" ;


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