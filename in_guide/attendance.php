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
     <img src="../images/vmeetup/v (1).png" ondragstart="return false" onContextMenu="return false;" width="200" height="100">
    </div>
   
   
   
   <div class="navbar-header">
     <img src="../images/vmeetup/v (4).png" class="img-responsive" onContextMenu="return false;" ondragstart="return false" width="auto" height="auto">
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
    <li><a href="profile.php">Profile</a></li>
    <li><a href="../account/logout.php">Logout</a></li>
    
  </ul>
</div>
        
      </ul>
    </div>
  </div>
</nav>
  












<div class="container well">
    <ul class="nav nav-tabs nav-pills nav-justified">
    <li><a data-toggle="tab" href="#menu1">Winter</a></li>
    <li><a data-toggle="tab" href="#menu2">Fall</a></li>
    </ul>

    <div class="container-fluid">
     <div class="form-group">
 
<!--   <select class="form-control" id="student" name="studentname"> -->
    
    <?php  
        
        
//    $q2 = mysql_query("select * from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());

//  echo  '<select name="choiceitem" class="btn btn-default btn-primary dropdown-toggle"  required>';
   
//  while ($row = mysql_fetch_array($q2)) {
		
// 	echo "	<option name='".$row['in_id']."' value='".$row['in_id']."'> ".$row['in_name']."&nbsp;&nbsp;".$row['in_id']."</option>";
// 	}
//   echo " </select> ";
 
 ?> 
 
    
<!--     </select> -->
</div>
    
    </div>
    
    
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
  
  <div class="panel-group" id="accordionjul">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
         <!--  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Collapsible Group 1</a> -->
          <button type="button"  data-toggle="collapse" data-parent="#accordionjul" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week1july"><h4>Week 1: 01 - 05</h4></button>
        </h4>
      </div>
      <div id="week1july" class="panel-collapse collapse">
        <div class="panel-body">
        
        <?php 
        $query1 = mysql_query("select * from attendance where g_id='".$_SESSION['uname']."' and week='july1' order by in_id")or die ('Query is invalid: ' . mysql_error());
        //echo  '<b>Total Students: '.mysql_num_rows($instu);
        if(mysql_num_rows($query1)>0){
        	echo 'Attendance History:';
        	while ($row1 = mysql_fetch_array($query1)) {
		
	echo "<ul>".$row1['in_id']."&nbsp;&nbsp;was present on&nbsp;&nbsp;".$row1['date']."</ul>";
	}
        }
        else echo "Not yet posted!<br>";
        ?>
        
        
         <form role="form" method="post" action="#">
  <?php 
   $q2 = mysql_query("select * from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());

 echo  '<select name="choiceitem" class="dropdown-toggle form-control"  required>';
   
 while ($row = mysql_fetch_array($q2)) {
		
	echo "	<option name='".$row['in_id']."' value='".$row['in_id']."'> ".$row['in_name']."&nbsp;&nbsp;".$row['in_id']."</option>";
	}
  echo " </select> ";
 ?>
  <div class="form-group">
  <label class="radio-inline"><input type="checkbox" name="present" value="present" checked required>&nbsp;&nbsp;present</label>
<!-- <label class="radio-inline"><input type="radio" name="optradio" value="absent">absent</label> -->
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-07-01" name="jul1[]">&nbsp;&nbsp;1 - July - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-07-02" name="jul1[]">&nbsp;&nbsp;2 - July - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-07-03" name="jul1[]">&nbsp;&nbsp;3 - July - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-07-04" name="jul1[]">&nbsp;&nbsp;4 - July - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-07-05" name="jul1[]">&nbsp;&nbsp;5 - July - 2015</label>
    
  </div>
  <button type="submit" name="july1" class="btn btn-default">Submit</button>
</form>



<?php 


//INSERT INTO `v_meetup`.`attendance` (`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`)
// VALUES (NULL, '2015-09-08', '', '14MCB1006', NOW(), '50007');

$stu = $_POST['choiceitem'];
$ck = $_POST['jul1'];
$sta=$_POST['present'];
if(isset($_POST["july1"])){
	
	for($i=0;$i<sizeof($ck);$i++){
		//INSERT INTO `attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES ([value-1])
		$query = "INSERT INTO `v_meetup`.`attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES (NULL,'".$ck[$i]."','$sta','$stu',NOW(),'".$_SESSION['uname']."','july1')";
		mysql_query($query) or die(mysql_error());
		
		
	}

	echo '
	
		<a id="gLink" href="success.php"></a>
	<script>
    document.getElementById("gLink").click()
</script>
	
		';
	
	
}

?>


        
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionjul" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week2july"><h4>Week 2: 06 - 12</h4></button>
        </h4>
      </div>
      <div id="week2july" class="panel-collapse collapse">
        <div class="panel-body">
        <?php 
        $query1 = mysql_query("select * from attendance where g_id='".$_SESSION['uname']."' and week='july2' order by in_id")or die ('Query is invalid: ' . mysql_error());
        //echo  '<b>Total Students: '.mysql_num_rows($instu);
        if(mysql_num_rows($query1)>0){
        	echo 'Attendance History:';
        	while ($row1 = mysql_fetch_array($query1)) {
		
	echo "<ul>".$row1['in_id']."&nbsp;&nbsp;was present on&nbsp;&nbsp;".$row1['date']."</ul>";
	}
        }
        else echo "Not yet posted!<br><br>";
        ?>
        <form role="form" method="post" action="#">
  <?php 
   $q2 = mysql_query("select * from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());

 echo  '<select name="choiceitem" class="dropdown-toggle form-control"  required>';
   
 while ($row = mysql_fetch_array($q2)) {
		
	echo "	<option name='".$row['in_id']."' value='".$row['in_id']."'> ".$row['in_name']."&nbsp;&nbsp;".$row['in_id']."</option>";
	}
  echo " </select> ";
 ?>
  <div class="form-group">
  <label class="radio-inline"><input type="checkbox" name="present" value="present" checked required>&nbsp;&nbsp;present</label>
<!-- <label class="radio-inline"><input type="radio" name="optradio" value="absent">absent</label> -->
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-07-06" name="jul2[]">&nbsp;&nbsp;6 - July - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-07-07" name="jul2[]">&nbsp;&nbsp;7 - July - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-07-08" name="jul2[]">&nbsp;&nbsp;8 - July - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-07-09" name="jul2[]">&nbsp;&nbsp;9 - July - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-07-10" name="jul2[]">&nbsp;&nbsp;10 - July - 2015</label>
    
  </div>
 <div class="form-group">
    <label><input type="checkbox" value="2015-07-11" name="jul2[]">&nbsp;&nbsp;11 - July - 2015</label>
    
  </div>
 <div class="form-group">
    <label><input type="checkbox" value="2015-07-12" name="jul2[]">&nbsp;&nbsp;12 - July - 2015</label>
    
  </div>
  <button type="submit" name="july2" class="btn btn-default">Submit</button>
</form>



<?php 


//INSERT INTO `v_meetup`.`attendance` (`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`)
// VALUES (NULL, '2015-09-08', '', '14MCB1006', NOW(), '50007');

$stu = $_POST['choiceitem'];
$ck = $_POST['jul2'];
$sta=$_POST['present'];
if(isset($_POST["july2"])){
	
	for($i=0;$i<sizeof($ck);$i++){
		//INSERT INTO `attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES ([value-1])
		$query = "INSERT INTO `v_meetup`.`attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES (NULL,'".$ck[$i]."','$sta','$stu',NOW(),'".$_SESSION['uname']."','july2')";
		mysql_query($query) or die(mysql_error());
	}
	

	echo '
	
		<a id="g" href="success.php"></a>
	<script>
    document.getElementById("g").click()
</script>
	
		';
}

?>

       
       
       
       
       </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionjul" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week3july"><h4>Week 3: 13 - 19</h4></button>
        </h4>
      </div>
      <div id="week3july" class="panel-collapse collapse">
        <div class="panel-body">
         <?php 
        $query1 = mysql_query("select * from attendance where g_id='".$_SESSION['uname']."' and week='july3' order by in_id")or die ('Query is invalid: ' . mysql_error());
        //echo  '<b>Total Students: '.mysql_num_rows($instu);
        if(mysql_num_rows($query1)>0){
        	echo 'Attendance History:';
        	while ($row1 = mysql_fetch_array($query1)) {
		
	echo "<ul>".$row1['in_id']."&nbsp;&nbsp;was present on&nbsp;&nbsp;".$row1['date']."</ul>";
	}
        }
        else echo "Not yet posted!<br><br>";
        ?>
               
        <form role="form" method="post" action="#">
  <?php 
   $q2 = mysql_query("select * from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());

 echo  '<select name="choiceitem" class="dropdown-toggle form-control"  required>';
   
 while ($row = mysql_fetch_array($q2)) {
		
	echo "	<option name='".$row['in_id']."' value='".$row['in_id']."'> ".$row['in_name']."&nbsp;&nbsp;".$row['in_id']."</option>";
	}
  echo " </select> ";
 ?>
  <div class="form-group">
  <label class="radio-inline"><input type="checkbox" name="present" value="present" checked required>&nbsp;&nbsp;present</label>
<!-- <label class="radio-inline"><input type="radio" name="optradio" value="absent">absent</label> -->
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-07-13" name="jul3[]">&nbsp;&nbsp;13 - July - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-07-14" name="jul3[]">&nbsp;&nbsp;14 - July - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-07-15" name="jul3[]">&nbsp;&nbsp;15 - July - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-07-16" name="jul3[]">&nbsp;&nbsp;16 - July - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-07-17" name="jul3[]">&nbsp;&nbsp;17 - July - 2015</label>
    
  </div>
 <div class="form-group">
    <label><input type="checkbox" value="2015-07-18" name="jul3[]">&nbsp;&nbsp;18 - July - 2015</label>
    
  </div>
 <div class="form-group">
    <label><input type="checkbox" value="2015-07-19" name="jul3[]">&nbsp;&nbsp;19 - July - 2015</label>
    
  </div>
  <button type="submit" name="july3" class="btn btn-default">Submit</button>
</form>



<?php 


//INSERT INTO `v_meetup`.`attendance` (`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`)
// VALUES (NULL, '2015-09-08', '', '14MCB1006', NOW(), '50007');

$stu = $_POST['choiceitem'];
$ck = $_POST['jul3'];
$sta=$_POST['present'];
if(isset($_POST["july3"])){
	
	for($i=0;$i<sizeof($ck);$i++){
		//INSERT INTO `attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES ([value-1])
		$query = "INSERT INTO `v_meetup`.`attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES (NULL,'".$ck[$i]."','$sta','$stu',NOW(),'".$_SESSION['uname']."','july3')";
		mysql_query($query) or die(mysql_error());
	}
	

	echo '
	
		<a id="gLnk" href="success.php"></a>
	<script>
    document.getElementById("gLnk").click()
</script>
	
		';
}

?>

       
       
        
        
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionjul" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week4july"><h4>Week 4: 20 - 26</h4></button>
        </h4>
      </div>
      <div id="week4july" class="panel-collapse collapse">
        <div class="panel-body">
                <?php 
        $query1 = mysql_query("select * from attendance where g_id='".$_SESSION['uname']."' and week='july4' order by in_id")or die ('Query is invalid: ' . mysql_error());
        //echo  '<b>Total Students: '.mysql_num_rows($instu);
        if(mysql_num_rows($query1)>0){
        	echo 'Attendance History:';
        	while ($row1 = mysql_fetch_array($query1)) {
		
	echo "<ul>".$row1['in_id']."&nbsp;&nbsp;was present on&nbsp;&nbsp;".$row1['date']."</ul>";
	}
        }
        else echo "Not yet posted!<br><br>";
        ?>
        <form role="form" method="post" action="#">
  <?php 
   $q2 = mysql_query("select * from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());

 echo  '<select name="choiceitem" class="dropdown-toggle form-control"  required>';
   
 while ($row = mysql_fetch_array($q2)) {
		
	echo "	<option name='".$row['in_id']."' value='".$row['in_id']."'> ".$row['in_name']."&nbsp;&nbsp;".$row['in_id']."</option>";
	}
  echo " </select> ";
 ?>
  <div class="form-group">
  <label class="radio-inline"><input type="checkbox" name="present" value="present" checked required>&nbsp;&nbsp;present</label>
<!-- <label class="radio-inline"><input type="radio" name="optradio" value="absent">absent</label> -->
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-07-20" name="jul4[]">&nbsp;&nbsp;20 - July - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-07-21" name="jul4[]">&nbsp;&nbsp;21 - July - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-07-22" name="jul4[]">&nbsp;&nbsp;22 - July - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-07-23" name="jul4[]">&nbsp;&nbsp;23 - July - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-07-24" name="jul4[]">&nbsp;&nbsp;24 - July - 2015</label>
    
  </div>
 <div class="form-group">
    <label><input type="checkbox" value="2015-07-25" name="jul4[]">&nbsp;&nbsp;25 - July - 2015</label>
    
  </div>
 <div class="form-group">
    <label><input type="checkbox" value="2015-07-26" name="jul4[]">&nbsp;&nbsp;26 - July - 2015</label>
    
  </div>
  <button type="submit" name="july4" class="btn btn-default">Submit</button>
</form>



<?php 


//INSERT INTO `v_meetup`.`attendance` (`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`)
// VALUES (NULL, '2015-09-08', '', '14MCB1006', NOW(), '50007');

$stu = $_POST['choiceitem'];
$ck = $_POST['jul4'];
$sta=$_POST['present'];
if(isset($_POST["july4"])){
	
	for($i=0;$i<sizeof($ck);$i++){
		//INSERT INTO `attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES ([value-1])
		$query = "INSERT INTO `v_meetup`.`attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES (NULL,'".$ck[$i]."','$sta','$stu',NOW(),'".$_SESSION['uname']."','july4')";
		mysql_query($query) or die(mysql_error());
	}


	echo '
	
		<a id="gLinkj4" href="success.php"></a>
	<script>
    document.getElementById("gLinkj4").click()
</script>
	
		';

}

?>

       
       
        
        
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionjul" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week5july"><h4>Week 5: 27 - 31</h4></button>
        </h4>
      </div>
      <div id="week5july" class="panel-collapse collapse">
        <div class="panel-body">
         <?php 
        $query1 = mysql_query("select * from attendance where g_id='".$_SESSION['uname']."' and week='july5' order by in_id")or die ('Query is invalid: ' . mysql_error());
        //echo  '<b>Total Students: '.mysql_num_rows($instu);
        if(mysql_num_rows($query1)>0){
        	echo 'Attendance History:';
        	while ($row1 = mysql_fetch_array($query1)) {
		
	echo "<ul>".$row1['in_id']."&nbsp;&nbsp;was present on&nbsp;&nbsp;".$row1['date']."</ul>";
	}
        }
        else echo "Not yet posted!<br><br>";
        ?>
               
        <form role="form" method="post" action="#">
  <?php 
   $q2 = mysql_query("select * from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());

 echo  '<select name="choiceitem" class="dropdown-toggle form-control"  required>';
   
 while ($row = mysql_fetch_array($q2)) {
		
	echo "	<option name='".$row['in_id']."' value='".$row['in_id']."'> ".$row['in_name']."&nbsp;&nbsp;".$row['in_id']."</option>";
	}
  echo " </select> ";
 ?>
  <div class="form-group">
  <label class="radio-inline"><input type="checkbox" name="present" value="present" checked required>&nbsp;&nbsp;present</label>
<!-- <label class="radio-inline"><input type="radio" name="optradio" value="absent">absent</label> -->
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-07-27" name="jul5[]">&nbsp;&nbsp;27 - July - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-07-28" name="jul5[]">&nbsp;&nbsp;28 - July - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-07-29" name="jul5[]">&nbsp;&nbsp;29 - July - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-07-30" name="jul5[]">&nbsp;&nbsp;30 - July - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-07-31" name="jul5[]">&nbsp;&nbsp;31 - July - 2015</label>
    
  </div>
 
  <button type="submit" name="july5" class="btn btn-default">Submit</button>
</form>



<?php 


//INSERT INTO `v_meetup`.`attendance` (`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`)
// VALUES (NULL, '2015-09-08', '', '14MCB1006', NOW(), '50007');

$stu = $_POST['choiceitem'];
$ck = $_POST['jul5'];
$sta=$_POST['present'];
if(isset($_POST["july5"])){
	
	for($i=0;$i<sizeof($ck);$i++){
		//INSERT INTO `attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES ([value-1])
		$query = "INSERT INTO `v_meetup`.`attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES (NULL,'".$ck[$i]."','$sta','$stu',NOW(),'".$_SESSION['uname']."','july5')";
		mysql_query($query) or die(mysql_error());
	}
	

	echo '
	
		<a id="gLink123" href="success.php"></a>
	<script>
    document.getElementById("gLink123").click()
</script>
	
		';
}

?>

       
       
        
        
        </div>
      </div>
    </div>
  </div> 
</div>
      
      
      
      </div>

       
       <div id="aug" class="tab-pane fade">

       
       <div class="container-fluid">
  
  <div class="panel-group" id="accordionaug">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
         <!--  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Collapsible Group 1</a> -->
          <button type="button"  data-toggle="collapse" data-parent="#accordionaug" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week1aug"><h4>Week 1: 01 - 02</h4></button>
        </h4>
      </div>
      <div id="week1aug" class="panel-collapse collapse">
        <div class="panel-body">
         <?php 
        $query1 = mysql_query("select * from attendance where g_id='".$_SESSION['uname']."' and week='aug1' order by in_id")or die ('Query is invalid: ' . mysql_error());
        //echo  '<b>Total Students: '.mysql_num_rows($instu);
        if(mysql_num_rows($query1)>0){
        	echo 'Attendance History:';
        	while ($row1 = mysql_fetch_array($query1)) {
		
	echo "<ul>".$row1['in_id']."&nbsp;&nbsp;was present on&nbsp;&nbsp;".$row1['date']."</ul>";
	}
        }
        else echo "Not yet posted!<br><br>";
        ?>
        <form role="form" method="post" action="#">
  <?php 
   $q2 = mysql_query("select * from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());

 echo  '<select name="choiceitem" class="dropdown-toggle form-control"  required>';
   
 while ($row = mysql_fetch_array($q2)) {
		
	echo "	<option name='".$row['in_id']."' value='".$row['in_id']."'> ".$row['in_name']."&nbsp;&nbsp;".$row['in_id']."</option>";
	}
  echo " </select> ";
 ?>
  <div class="form-group">
  <label class="radio-inline"><input type="checkbox" name="present" value="present" checked required>&nbsp;&nbsp;present</label>
<!-- <label class="radio-inline"><input type="radio" name="optradio" value="absent">absent</label> -->
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-08-01" name="aug1[]">&nbsp;&nbsp;1 - August - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-08-02" name="aug1[]">&nbsp;&nbsp;2 - August - 2015</label>
    
    </div>
  <button type="submit" name="augu1" class="btn btn-default">Submit</button>
</form>



<?php 


//INSERT INTO `v_meetup`.`attendance` (`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`)
// VALUES (NULL, '2015-09-08', '', '14MCB1006', NOW(), '50007');

$stu = $_POST['choiceitem'];
$ck = $_POST['aug1'];
$sta=$_POST['present'];
if(isset($_POST["augu1"])){
	
	for($i=0;$i<sizeof($ck);$i++){
		//INSERT INTO `attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES ([value-1])
		$query = "INSERT INTO `v_meetup`.`attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES (NULL,'".$ck[$i]."','$sta','$stu',NOW(),'".$_SESSION['uname']."','aug1')";
		mysql_query($query) or die(mysql_error());
	}
	

	echo '
	
		<a id="gLink123" href="success.php"></a>
	<script>
    document.getElementById("gLink123").click()
</script>
	
		';
}

?>

       
       
        
        
        
        
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionaug" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week2aug"><h4>Week 2: 03 - 09</h4></button>
        </h4>
      </div>
      <div id="week2aug" class="panel-collapse collapse">
        <div class="panel-body">
      
       <?php 
        $query1 = mysql_query("select * from attendance where g_id='".$_SESSION['uname']."' and week='aug2' order by in_id")or die ('Query is invalid: ' . mysql_error());
        //echo  '<b>Total Students: '.mysql_num_rows($instu);
        if(mysql_num_rows($query1)>0){
        	echo 'Attendance History:';
        	while ($row1 = mysql_fetch_array($query1)) {
		
	echo "<ul>".$row1['in_id']."&nbsp;&nbsp;was present on&nbsp;&nbsp;".$row1['date']."</ul>";
	}
        }
        else echo "Not yet posted!<br><br>";
        ?>
      
      <form role="form" method="post" action="#">
  <?php 
   $q2 = mysql_query("select * from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());

 echo  '<select name="choiceitem" class="dropdown-toggle form-control"  required>';
   
 while ($row = mysql_fetch_array($q2)) {
		
	echo "	<option name='".$row['in_id']."' value='".$row['in_id']."'> ".$row['in_name']."&nbsp;&nbsp;".$row['in_id']."</option>";
	}
  echo " </select> ";
 ?>
  <div class="form-group">
  <label class="radio-inline"><input type="checkbox" name="present" value="present" checked required>&nbsp;&nbsp;present</label>
<!-- <label class="radio-inline"><input type="radio" name="optradio" value="absent">absent</label> -->
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-08-03" name="aug2[]">&nbsp;&nbsp;3 - August - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-08-04" name="aug2[]">&nbsp;&nbsp;4 - August - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-08-05" name="aug2[]">&nbsp;&nbsp;5 - August - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-08-06" name="aug2[]">&nbsp;&nbsp;6 - August - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-08-07" name="aug2[]">&nbsp;&nbsp;7 - August - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-08-08" name="aug2[]">&nbsp;&nbsp;8 - August - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-08-09" name="aug2[]">&nbsp;&nbsp;9 - August - 2015</label>
    
  </div>
  <button type="submit" name="augu2" class="btn btn-default">Submit</button>
</form>



<?php 


//INSERT INTO `v_meetup`.`attendance` (`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`)
// VALUES (NULL, '2015-09-08', '', '14MCB1006', NOW(), '50007');

$stu = $_POST['choiceitem'];
$ck = $_POST['aug2'];
$sta=$_POST['present'];
if(isset($_POST["augu2"])){
	
	for($i=0;$i<sizeof($ck);$i++){
		//INSERT INTO `attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES ([value-1])
		$query = "INSERT INTO `v_meetup`.`attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES (NULL,'".$ck[$i]."','$sta','$stu',NOW(),'".$_SESSION['uname']."','aug2')";
		mysql_query($query) or die(mysql_error());
	}
	

	echo '
	
		<a id="gLink123" href="success.php"></a>
	<script>
    document.getElementById("gLink123").click()
</script>
	
		';
}

?>

       
       
        
        
      
      
      
      
      
       </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionaug" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week3aug"><h4>Week 3: 10 - 16</h4></button>
        </h4>
      </div>
      <div id="week3aug" class="panel-collapse collapse">
        <div class="panel-body">
        
          <?php 
        $query1 = mysql_query("select * from attendance where g_id='".$_SESSION['uname']."' and week='aug3' order by in_id")or die ('Query is invalid: ' . mysql_error());
        //echo  '<b>Total Students: '.mysql_num_rows($instu);
        if(mysql_num_rows($query1)>0){
        	echo 'Attendance History:';
        	while ($row1 = mysql_fetch_array($query1)) {
		
	echo "<ul>".$row1['in_id']."&nbsp;&nbsp;was present on&nbsp;&nbsp;".$row1['date']."</ul>";
	}
        }
        else echo "Not yet posted!<br><br>";
        ?>
      <form role="form" method="post" action="#">
  <?php 
   $q2 = mysql_query("select * from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());

 echo  '<select name="choiceitem" class="dropdown-toggle form-control"  required>';
   
 while ($row = mysql_fetch_array($q2)) {
		
	echo "	<option name='".$row['in_id']."' value='".$row['in_id']."'> ".$row['in_name']."&nbsp;&nbsp;".$row['in_id']."</option>";
	}
  echo " </select> ";
 ?>
  <div class="form-group">
  <label class="radio-inline"><input type="checkbox" name="present" value="present" checked required>&nbsp;&nbsp;present</label>
<!-- <label class="radio-inline"><input type="radio" name="optradio" value="absent">absent</label> -->
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-08-10" name="aug3[]">&nbsp;&nbsp;10 - August - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-08-11" name="aug3[]">&nbsp;&nbsp;11 - August - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-08-12" name="aug3[]">&nbsp;&nbsp;12 - August - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-08-13" name="aug3[]">&nbsp;&nbsp;13 - August - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-08-14" name="aug3[]">&nbsp;&nbsp;14 - August - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-08-15" name="aug3[]">&nbsp;&nbsp;15 - August - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-08-16" name="aug3[]">&nbsp;&nbsp;16 - August - 2015</label>
    
  </div>
  <button type="submit" name="augu3" class="btn btn-default">Submit</button>
</form>



<?php 


//INSERT INTO `v_meetup`.`attendance` (`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`)
// VALUES (NULL, '2015-09-08', '', '14MCB1006', NOW(), '50007');

$stu = $_POST['choiceitem'];
$ck = $_POST['aug3'];
$sta=$_POST['present'];
if(isset($_POST["augu3"])){
	
	for($i=0;$i<sizeof($ck);$i++){
		//INSERT INTO `attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES ([value-1])
		$query = "INSERT INTO `v_meetup`.`attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES (NULL,'".$ck[$i]."','$sta','$stu',NOW(),'".$_SESSION['uname']."','aug3')";
		mysql_query($query) or die(mysql_error());
	}
	

	echo '
	
		<a id="gLink123" href="success.php"></a>
	<script>
    document.getElementById("gLink123").click()
</script>
	
		';
}

?>

       
       
        
        
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionaug" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week4aug"><h4>Week 4: 17 - 23</h4></button>
        </h4>
      </div>
      <div id="week4aug" class="panel-collapse collapse">
        <div class="panel-body">
        <?php 
        $query1 = mysql_query("select * from attendance where g_id='".$_SESSION['uname']."' and week='aug4' order by in_id")or die ('Query is invalid: ' . mysql_error());
        //echo  '<b>Total Students: '.mysql_num_rows($instu);
        if(mysql_num_rows($query1)>0){
        	echo 'Attendance History:';
        	while ($row1 = mysql_fetch_array($query1)) {
		
	echo "<ul>".$row1['in_id']."&nbsp;&nbsp;was present on&nbsp;&nbsp;".$row1['date']."</ul>";
	}
        }
        else echo "Not yet posted!<br><br>";
        ?>
        
      <form role="form" method="post" action="#">
  <?php 
   $q2 = mysql_query("select * from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());

 echo  '<select name="choiceitem" class="dropdown-toggle form-control"  required>';
   
 while ($row = mysql_fetch_array($q2)) {
		
	echo "	<option name='".$row['in_id']."' value='".$row['in_id']."'> ".$row['in_name']."&nbsp;&nbsp;".$row['in_id']."</option>";
	}
  echo " </select> ";
 ?>
  <div class="form-group">
  <label class="radio-inline"><input type="checkbox" name="present" value="present" checked required>&nbsp;&nbsp;present</label>
<!-- <label class="radio-inline"><input type="radio" name="optradio" value="absent">absent</label> -->
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-08-17" name="aug4[]">&nbsp;&nbsp;17 - August - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-08-18" name="aug4[]">&nbsp;&nbsp;18 - August - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-08-19" name="aug4[]">&nbsp;&nbsp;19 - August - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-08-20" name="aug4[]">&nbsp;&nbsp;20 - August - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-08-21" name="aug4[]">&nbsp;&nbsp;21 - August - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-08-22" name="aug4[]">&nbsp;&nbsp;22 - August - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-08-23" name="aug4[]">&nbsp;&nbsp;23 - August - 2015</label>
    
  </div>
  <button type="submit" name="augu4" class="btn btn-default">Submit</button>
</form>



<?php 


//INSERT INTO `v_meetup`.`attendance` (`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`)
// VALUES (NULL, '2015-09-08', '', '14MCB1006', NOW(), '50007');

$stu = $_POST['choiceitem'];
$ck = $_POST['aug4'];
$sta=$_POST['present'];
if(isset($_POST["augu4"])){
	
	for($i=0;$i<sizeof($ck);$i++){
		//INSERT INTO `attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES ([value-1])
		$query = "INSERT INTO `v_meetup`.`attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES (NULL,'".$ck[$i]."','$sta','$stu',NOW(),'".$_SESSION['uname']."','aug4')";
		mysql_query($query) or die(mysql_error());
	}
	

	echo '
	
		<a id="gLink123" href="success.php"></a>
	<script>
    document.getElementById("gLink123").click()
</script>
	
		';
}

?>

       
       
        
       
       
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionaug" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week5aug"><h4>Week 5: 24 - 30</h4></button>
        </h4>
      </div>
      <div id="week5aug" class="panel-collapse collapse">
        <div class="panel-body">
        <?php 
        $query1 = mysql_query("select * from attendance where g_id='".$_SESSION['uname']."' and week='aug5' order by in_id")or die ('Query is invalid: ' . mysql_error());
        //echo  '<b>Total Students: '.mysql_num_rows($instu);
        if(mysql_num_rows($query1)>0){
        	echo 'Attendance History:';
        	while ($row1 = mysql_fetch_array($query1)) {
		
	echo "<ul>".$row1['in_id']."&nbsp;&nbsp;was present on&nbsp;&nbsp;".$row1['date']."</ul>";
	}
        }
        else echo "Not yet posted!<br><br>";
        ?>
        
      <form role="form" method="post" action="#">
  <?php 
   $q2 = mysql_query("select * from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());

 echo  '<select name="choiceitem" class="dropdown-toggle form-control"  required>';
   
 while ($row = mysql_fetch_array($q2)) {
		
	echo "	<option name='".$row['in_id']."' value='".$row['in_id']."'> ".$row['in_name']."&nbsp;&nbsp;".$row['in_id']."</option>";
	}
  echo " </select> ";
 ?>
  <div class="form-group">
  <label class="radio-inline"><input type="checkbox" name="present" value="present" checked required>&nbsp;&nbsp;present</label>
<!-- <label class="radio-inline"><input type="radio" name="optradio" value="absent">absent</label> -->
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-08-24" name="aug5[]">&nbsp;&nbsp;24 - August - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-08-25" name="aug5[]">&nbsp;&nbsp;25 - August - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-08-26" name="aug5[]">&nbsp;&nbsp;26 - August - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-08-27" name="aug5[]">&nbsp;&nbsp;27 - August - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-08-28" name="aug5[]">&nbsp;&nbsp;28 - August - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-08-29" name="aug5[]">&nbsp;&nbsp;29 - August - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-08-30" name="aug5[]">&nbsp;&nbsp;30 - August - 2015</label>
    
  </div>
  <button type="submit" name="augu5" class="btn btn-default">Submit</button>
</form>



<?php 


//INSERT INTO `v_meetup`.`attendance` (`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`)
// VALUES (NULL, '2015-09-08', '', '14MCB1006', NOW(), '50007');

$stu = $_POST['choiceitem'];
$ck = $_POST['aug5'];
$sta=$_POST['present'];
if(isset($_POST["augu5"])){
	
	for($i=0;$i<sizeof($ck);$i++){
		//INSERT INTO `attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES ([value-1])
		$query = "INSERT INTO `v_meetup`.`attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES (NULL,'".$ck[$i]."','$sta','$stu',NOW(),'".$_SESSION['uname']."','aug5')";
		mysql_query($query) or die(mysql_error());
	}
	

	echo '
	
		<a id="gLink123" href="success.php"></a>
	<script>
    document.getElementById("gLink123").click()
</script>
	
		';
}

?>

       
       
        
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionaug" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week6aug"><h4>Week 6: 31</h4></button>
        </h4>
      </div>
      <div id="week6aug" class="panel-collapse collapse">
        <div class="panel-body">
         <?php 
        $query1 = mysql_query("select * from attendance where g_id='".$_SESSION['uname']."' and week='aug6' order by in_id")or die ('Query is invalid: ' . mysql_error());
        //echo  '<b>Total Students: '.mysql_num_rows($instu);
        if(mysql_num_rows($query1)>0){
        	echo 'Attendance History:';
        	while ($row1 = mysql_fetch_array($query1)) {
		
	echo "<ul>".$row1['in_id']."&nbsp;&nbsp;was present on&nbsp;&nbsp;".$row1['date']."</ul>";
	}
        }
        else echo "Not yet posted!<br><br>";
        ?>
      <form role="form" method="post" action="#">
  <?php 
   $q2 = mysql_query("select * from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());

 echo  '<select name="choiceitem" class="dropdown-toggle form-control"  required>';
   
 while ($row = mysql_fetch_array($q2)) {
		
	echo "	<option name='".$row['in_id']."' value='".$row['in_id']."'> ".$row['in_name']."&nbsp;&nbsp;".$row['in_id']."</option>";
	}
  echo " </select> ";
 ?>
  <div class="form-group">
  <label class="radio-inline"><input type="checkbox" name="present" value="present" checked required>&nbsp;&nbsp;present</label>
<!-- <label class="radio-inline"><input type="radio" name="optradio" value="absent">absent</label> -->
  </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-08-31" name="aug6[]">&nbsp;&nbsp;31 - August - 2015</label>
    
  </div>
  <button type="submit" name="augu6" class="btn btn-default">Submit</button>
</form>



<?php 


//INSERT INTO `v_meetup`.`attendance` (`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`)
// VALUES (NULL, '2015-09-08', '', '14MCB1006', NOW(), '50007');

$stu = $_POST['choiceitem'];
$ck = $_POST['aug6'];
$sta=$_POST['present'];
if(isset($_POST["augu6"])){
	
	for($i=0;$i<sizeof($ck);$i++){
		//INSERT INTO `attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES ([value-1])
		$query = "INSERT INTO `v_meetup`.`attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES (NULL,'".$ck[$i]."','$sta','$stu',NOW(),'".$_SESSION['uname']."','aug6')";
		mysql_query($query) or die(mysql_error());
	}
	

	echo '
	
		<a id="gLink123" href="success.php"></a>
	<script>
    document.getElementById("gLink123").click()
</script>
	
		';
}

?>

       
       
        
        </div>
      </div>
    </div>
  </div> 
</div>

      </div>
           <div id="sep" class="tab-pane fade">
           
           <div class="container-fluid">
  
  <div class="panel-group" id="accordionsep">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
         <!--  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Collapsible Group 1</a> -->
          <button type="button"  data-toggle="collapse" data-parent="#accordionsep" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week1sep"><h4>Week 1: 01 - 06</h4></button>
        </h4>
      </div>
      <div id="week1sep" class="panel-collapse collapse">
        <div class="panel-body">
         <?php 
        $query1 = mysql_query("select * from attendance where g_id='".$_SESSION['uname']."' and week='sep1' order by in_id")or die ('Query is invalid: ' . mysql_error());
        //echo  '<b>Total Students: '.mysql_num_rows($instu);
        if(mysql_num_rows($query1)>0){
        	echo 'Attendance History:';
        	while ($row1 = mysql_fetch_array($query1)) {
		
	echo "<ul>".$row1['in_id']."&nbsp;&nbsp;was present on&nbsp;&nbsp;".$row1['date']."</ul>";
	}
        }
        else echo "Not yet posted!<br><br>";
        ?>
<form role="form" method="post" action="#">
  <?php 
   $q2 = mysql_query("select * from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());

 echo  '<select name="choiceitem" class="dropdown-toggle form-control"  required>';
   
 while ($row = mysql_fetch_array($q2)) {
		
	echo "	<option name='".$row['in_id']."' value='".$row['in_id']."'> ".$row['in_name']."&nbsp;&nbsp;".$row['in_id']."</option>";
	}
  echo " </select> ";
 ?>
  <div class="form-group">
  <label class="radio-inline"><input type="checkbox" name="present" value="present" checked required>&nbsp;&nbsp;present</label>
<!-- <label class="radio-inline"><input type="radio" name="optradio" value="absent">absent</label> -->
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-09-01" name="sep1[]">&nbsp;&nbsp;1 - September - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-09-02" name="sep1[]">&nbsp;&nbsp;2 - September - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-09-03" name="sep1[]">&nbsp;&nbsp;3 - September - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-09-04" name="sep1[]">&nbsp;&nbsp;4 - September - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-09-05" name="sep1[]">&nbsp;&nbsp;5 - September - 2015</label>
    
  </div>
 
    <div class="form-group">
    <label><input type="checkbox" value="2015-09-06" name="sep1[]">&nbsp;&nbsp;6 - September - 2015</label>
    
  </div>
  
  <button type="submit" name="sept1" class="btn btn-default">Submit</button>
</form>



<?php 


//INSERT INTO `v_meetup`.`attendance` (`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`)
// VALUES (NULL, '2015-09-08', '', '14MCB1006', NOW(), '50007');

$stu = $_POST['choiceitem'];
$ck = $_POST['sep1'];
$sta=$_POST['present'];
if(isset($_POST["sept1"])){
	
	for($i=0;$i<sizeof($ck);$i++){
		//INSERT INTO `attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES ([value-1])
		$query = "INSERT INTO `v_meetup`.`attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES (NULL,'".$ck[$i]."','$sta','$stu',NOW(),'".$_SESSION['uname']."','sep1')";
		mysql_query($query) or die(mysql_error());
	}
	

	echo '
	
		<a id="gLink123" href="success.php"></a>
	<script>
    document.getElementById("gLink123").click()
</script>
	
		';
}

?>

       
       
        
        
        
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionsep" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week2sep"><h4>Week 2: 07 - 13</h4></button>
        </h4>
      </div>
      <div id="week2sep" class="panel-collapse collapse">
        <div class="panel-body">
        <?php 
        $query1 = mysql_query("select * from attendance where g_id='".$_SESSION['uname']."' and week='sep2' order by in_id")or die ('Query is invalid: ' . mysql_error());
        //echo  '<b>Total Students: '.mysql_num_rows($instu);
        if(mysql_num_rows($query1)>0){
        	echo 'Attendance History:';
        	while ($row1 = mysql_fetch_array($query1)) {
		
	echo "<ul>".$row1['in_id']."&nbsp;&nbsp;was present on&nbsp;&nbsp;".$row1['date']."</ul>";
	}
        }
        else echo "Not yet posted!<br><br>";
        ?>
<form role="form" method="post" action="#">
  <?php 
   $q2 = mysql_query("select * from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());

 echo  '<select name="choiceitem" class="dropdown-toggle form-control"  required>';
   
 while ($row = mysql_fetch_array($q2)) {
		
	echo "	<option name='".$row['in_id']."' value='".$row['in_id']."'> ".$row['in_name']."&nbsp;&nbsp;".$row['in_id']."</option>";
	}
  echo " </select> ";
 ?>
  <div class="form-group">
  <label class="radio-inline"><input type="checkbox" name="present" value="present" checked required>&nbsp;&nbsp;present</label>
<!-- <label class="radio-inline"><input type="radio" name="optradio" value="absent">absent</label> -->
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-09-07" name="sep2[]">&nbsp;&nbsp;7 - September - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-09-08" name="sep2[]">&nbsp;&nbsp;8 - September - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-09-09" name="sep2[]">&nbsp;&nbsp;9 - September - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-09-10" name="sep2[]">&nbsp;&nbsp;10 - September - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-09-11" name="sep2[]">&nbsp;&nbsp;11 - September - 2015</label>
    
  </div>
 
    <div class="form-group">
    <label><input type="checkbox" value="2015-09-12" name="sep2[]">&nbsp;&nbsp;12 - September - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-09-13" name="sep2[]">&nbsp;&nbsp;13 - September - 2015</label>
    
  </div>
  <button type="submit" name="sept2" class="btn btn-default">Submit</button>
</form>



<?php 


//INSERT INTO `v_meetup`.`attendance` (`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`)
// VALUES (NULL, '2015-09-08', '', '14MCB1006', NOW(), '50007');

$stu = $_POST['choiceitem'];
$ck = $_POST['sep2'];
$sta=$_POST['present'];
if(isset($_POST["sept2"])){
	
	for($i=0;$i<sizeof($ck);$i++){
		//INSERT INTO `attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES ([value-1])
		$query = "INSERT INTO `v_meetup`.`attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES (NULL,'".$ck[$i]."','$sta','$stu',NOW(),'".$_SESSION['uname']."','sep2')";
		mysql_query($query) or die(mysql_error());
	}
	

	echo '
	
		<a id="gLink123" href="success.php"></a>
	<script>
    document.getElementById("gLink123").click()
</script>
	
		';
}

?>

       </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionsep" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week3sep"><h4>Week 3: 14 - 20</h4></button>
        </h4>
      </div>
      <div id="week3sep" class="panel-collapse collapse">
        <div class="panel-body">
         <?php 
        $query1 = mysql_query("select * from attendance where g_id='".$_SESSION['uname']."' and week='sep3' order by in_id")or die ('Query is invalid: ' . mysql_error());
        //echo  '<b>Total Students: '.mysql_num_rows($instu);
        if(mysql_num_rows($query1)>0){
        	echo 'Attendance History:';
        	while ($row1 = mysql_fetch_array($query1)) {
		
	echo "<ul>".$row1['in_id']."&nbsp;&nbsp;was present on&nbsp;&nbsp;".$row1['date']."</ul>";
	}
        }
        else echo "Not yet posted!<br><br>";
        ?>
<form role="form" method="post" action="#">
  <?php 
   $q2 = mysql_query("select * from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());

 echo  '<select name="choiceitem" class="dropdown-toggle form-control"  required>';
   
 while ($row = mysql_fetch_array($q2)) {
		
	echo "	<option name='".$row['in_id']."' value='".$row['in_id']."'> ".$row['in_name']."&nbsp;&nbsp;".$row['in_id']."</option>";
	}
  echo " </select> ";
 ?>
  <div class="form-group">
  <label class="radio-inline"><input type="checkbox" name="present" value="present" checked required>&nbsp;&nbsp;present</label>
<!-- <label class="radio-inline"><input type="radio" name="optradio" value="absent">absent</label> -->
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-09-14" name="sep3[]">&nbsp;&nbsp;14 - September - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-09-15" name="sep3[]">&nbsp;&nbsp;15 - September - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-09-16" name="sep3[]">&nbsp;&nbsp;16 - September - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-09-17" name="sep3[]">&nbsp;&nbsp;17 - September - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-09-18" name="sep3[]">&nbsp;&nbsp;18 - September - 2015</label>
    
  </div>
 
    <div class="form-group">
    <label><input type="checkbox" value="2015-09-19" name="sep3[]">&nbsp;&nbsp;19 - September - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-09-20" name="sep3[]">&nbsp;&nbsp;20 - September - 2015</label>
    
  </div>
  <button type="submit" name="sept3" class="btn btn-default">Submit</button>
</form>



<?php 


//INSERT INTO `v_meetup`.`attendance` (`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`)
// VALUES (NULL, '2015-09-08', '', '14MCB1006', NOW(), '50007');

$stu = $_POST['choiceitem'];
$ck = $_POST['sep3'];
$sta=$_POST['present'];
if(isset($_POST["sept3"])){
	
	for($i=0;$i<sizeof($ck);$i++){
		//INSERT INTO `attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES ([value-1])
		$query = "INSERT INTO `v_meetup`.`attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES (NULL,'".$ck[$i]."','$sta','$stu',NOW(),'".$_SESSION['uname']."','sep3')";
		mysql_query($query) or die(mysql_error());
	}
	

	echo '
	
		<a id="gLink123" href="success.php"></a>
	<script>
    document.getElementById("gLink123").click()
</script>
	
		';
}

?>
        
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionsep" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week4sep"><h4>Week 4: 21 - 27</h4></button>
        </h4>
      </div>
      <div id="week4sep" class="panel-collapse collapse">
        <div class="panel-body">
         <?php 
        $query1 = mysql_query("select * from attendance where g_id='".$_SESSION['uname']."' and week='sep4' order by in_id")or die ('Query is invalid: ' . mysql_error());
        //echo  '<b>Total Students: '.mysql_num_rows($instu);
        if(mysql_num_rows($query1)>0){
        	echo 'Attendance History:';
        	while ($row1 = mysql_fetch_array($query1)) {
		
	echo "<ul>".$row1['in_id']."&nbsp;&nbsp;was present on&nbsp;&nbsp;".$row1['date']."</ul>";
	}
        }
        else echo "Not yet posted!<br><br>";
        ?>
<form role="form" method="post" action="#">
  <?php 
   $q2 = mysql_query("select * from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());

 echo  '<select name="choiceitem" class="dropdown-toggle form-control"  required>';
   
 while ($row = mysql_fetch_array($q2)) {
		
	echo "	<option name='".$row['in_id']."' value='".$row['in_id']."'> ".$row['in_name']."&nbsp;&nbsp;".$row['in_id']."</option>";
	}
  echo " </select> ";
 ?>
  <div class="form-group">
  <label class="radio-inline"><input type="checkbox" name="present" value="present" checked required>&nbsp;&nbsp;present</label>
<!-- <label class="radio-inline"><input type="radio" name="optradio" value="absent">absent</label> -->
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-09-21" name="sep4[]">&nbsp;&nbsp;21 - September - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-09-22" name="sep4[]">&nbsp;&nbsp;22 - September - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-09-23" name="sep4[]">&nbsp;&nbsp;23 - September - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-09-24" name="sep4[]">&nbsp;&nbsp;24 - September - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-09-25" name="sep4[]">&nbsp;&nbsp;25 - September - 2015</label>
    
  </div>
 
    <div class="form-group">
    <label><input type="checkbox" value="2015-09-26" name="sep4[]">&nbsp;&nbsp;26 - September - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-09-27" name="sep4[]">&nbsp;&nbsp;27 - September - 2015</label>
    
  </div>
  <button type="submit" name="sept4" class="btn btn-default">Submit</button>
</form>



<?php 


//INSERT INTO `v_meetup`.`attendance` (`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`)
// VALUES (NULL, '2015-09-08', '', '14MCB1006', NOW(), '50007');

$stu = $_POST['choiceitem'];
$ck = $_POST['sep4'];
$sta=$_POST['present'];
if(isset($_POST["sept4"])){
	
	for($i=0;$i<sizeof($ck);$i++){
		//INSERT INTO `attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES ([value-1])
		$query = "INSERT INTO `v_meetup`.`attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES (NULL,'".$ck[$i]."','$sta','$stu',NOW(),'".$_SESSION['uname']."','sep4')";
		mysql_query($query) or die(mysql_error());
	}
	

	echo '
	
		<a id="gLink123" href="success.php"></a>
	<script>
    document.getElementById("gLink123").click()
</script>
	
		';
}

?>
        
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionsep" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week5sep"><h4>Week 5: 28 - 30</h4></button>
        </h4>
      </div>
      <div id="week5sep" class="panel-collapse collapse">
        <div class="panel-body">
         <?php 
        $query1 = mysql_query("select * from attendance where g_id='".$_SESSION['uname']."' and week='sep5' order by in_id")or die ('Query is invalid: ' . mysql_error());
        //echo  '<b>Total Students: '.mysql_num_rows($instu);
        if(mysql_num_rows($query1)>0){
        	echo 'Attendance History:';
        	while ($row1 = mysql_fetch_array($query1)) {
		
	echo "<ul>".$row1['in_id']."&nbsp;&nbsp;was present on&nbsp;&nbsp;".$row1['date']."</ul>";
	}
        }
        else echo "Not yet posted!<br><br>";
        ?>
<form role="form" method="post" action="#">
  <?php 
   $q2 = mysql_query("select * from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());

 echo  '<select name="choiceitem" class="dropdown-toggle form-control"  required>';
   
 while ($row = mysql_fetch_array($q2)) {
		
	echo "	<option name='".$row['in_id']."' value='".$row['in_id']."'> ".$row['in_name']."&nbsp;&nbsp;".$row['in_id']."</option>";
	}
  echo " </select> ";
 ?>
  <div class="form-group">
  <label class="radio-inline"><input type="checkbox" name="present" value="present" checked required>&nbsp;&nbsp;present</label>
<!-- <label class="radio-inline"><input type="radio" name="optradio" value="absent">absent</label> -->
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-09-28" name="sep5[]">&nbsp;&nbsp;28 - September - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-09-29" name="sep5[]">&nbsp;&nbsp;29 - September - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-09-30" name="sep5[]">&nbsp;&nbsp;30 - September - 2015</label>
    
    </div>
  <button type="submit" name="sept5" class="btn btn-default">Submit</button>
</form>



<?php 


//INSERT INTO `v_meetup`.`attendance` (`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`)
// VALUES (NULL, '2015-09-08', '', '14MCB1006', NOW(), '50007');

$stu = $_POST['choiceitem'];
$ck = $_POST['sep5'];
$sta=$_POST['present'];
if(isset($_POST["sept5"])){
	
	for($i=0;$i<sizeof($ck);$i++){
		//INSERT INTO `attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES ([value-1])
		$query = "INSERT INTO `v_meetup`.`attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES (NULL,'".$ck[$i]."','$sta','$stu',NOW(),'".$_SESSION['uname']."','sep5')";
		mysql_query($query) or die(mysql_error());
	}
	

	echo '
	
		<a id="gLink123" href="success.php"></a>
	<script>
    document.getElementById("gLink123").click()
</script>
	
		';
}

?>
        
        </div>
      </div>
    </div>
    
  </div> 
</div>
      
       
       
           
      
      </div>

       
       <div id="oct" class="tab-pane fade">
       
                <div class="container-fluid">
  
  <div class="panel-group" id="accordionoct">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
         <!--  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Collapsible Group 1</a> -->
          <button type="button"  data-toggle="collapse" data-parent="#accordionoct" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week1oct"><h4>Week 1: 01 - 04</h4></button>
        </h4>
      </div>
      <div id="week1oct" class="panel-collapse collapse">
        <div class="panel-body">
         <?php 
        $query1 = mysql_query("select * from attendance where g_id='".$_SESSION['uname']."' and week='oct1' order by in_id")or die ('Query is invalid: ' . mysql_error());
        //echo  '<b>Total Students: '.mysql_num_rows($instu);
        if(mysql_num_rows($query1)>0){
        	echo 'Attendance History:';
        	while ($row1 = mysql_fetch_array($query1)) {
		
	echo "<ul>".$row1['in_id']."&nbsp;&nbsp;was present on&nbsp;&nbsp;".$row1['date']."</ul>";
	}
        }
        else echo "Not yet posted!<br><br>";
        ?>
<form role="form" method="post" action="#">
  <?php 
   $q2 = mysql_query("select * from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());

 echo  '<select name="choiceitem" class="dropdown-toggle form-control"  required>';
   
 while ($row = mysql_fetch_array($q2)) {
		
	echo "	<option name='".$row['in_id']."' value='".$row['in_id']."'> ".$row['in_name']."&nbsp;&nbsp;".$row['in_id']."</option>";
	}
  echo " </select> ";
 ?>
  <div class="form-group">
  <label class="radio-inline"><input type="checkbox" name="present" value="present" checked required>&nbsp;&nbsp;present</label>
<!-- <label class="radio-inline"><input type="radio" name="optradio" value="absent">absent</label> -->
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-10-01" name="oct1[]">&nbsp;&nbsp;1 - October - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-10-02" name="oct1[]">&nbsp;&nbsp;2 - October - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-10-03" name="oct1[]">&nbsp;&nbsp;3 - October - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-10-04" name="oct1[]">&nbsp;&nbsp;4 - October - 2015</label>
    
  </div>
  
  <button type="submit" name="octo1" class="btn btn-default">Submit</button>
</form>



<?php 


//INSERT INTO `v_meetup`.`attendance` (`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`)
// VALUES (NULL, '2015-09-08', '', '14MCB1006', NOW(), '50007');

$stu = $_POST['choiceitem'];
$ck = $_POST['oct1'];
$sta=$_POST['present'];
if(isset($_POST["octo1"])){
	
	for($i=0;$i<sizeof($ck);$i++){
		//INSERT INTO `attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES ([value-1])
		$query = "INSERT INTO `v_meetup`.`attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES (NULL,'".$ck[$i]."','$sta','$stu',NOW(),'".$_SESSION['uname']."','oct1')";
		mysql_query($query) or die(mysql_error());
	}
	

	echo '
	
		<a id="gLink123" href="success.php"></a>
	<script>
    document.getElementById("gLink123").click()
</script>
	
		';
}

?>
        
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionoct" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week2oct"><h4>Week 2: 05 - 11</h4></button>
        </h4>
      </div>
      <div id="week2oct" class="panel-collapse collapse">
        <div class="panel-body">
        <?php 
        $query1 = mysql_query("select * from attendance where g_id='".$_SESSION['uname']."' and week='oct2' order by in_id")or die ('Query is invalid: ' . mysql_error());
        //echo  '<b>Total Students: '.mysql_num_rows($instu);
        if(mysql_num_rows($query1)>0){
        	echo 'Attendance History:';
        	while ($row1 = mysql_fetch_array($query1)) {
		
	echo "<ul>".$row1['in_id']."&nbsp;&nbsp;was present on&nbsp;&nbsp;".$row1['date']."</ul>";
	}
        }
        else echo "Not yet posted!<br><br>";
        ?>
<form role="form" method="post" action="#">
  <?php 
   $q2 = mysql_query("select * from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());

 echo  '<select name="choiceitem" class="dropdown-toggle form-control"  required>';
   
 while ($row = mysql_fetch_array($q2)) {
		
	echo "	<option name='".$row['in_id']."' value='".$row['in_id']."'> ".$row['in_name']."&nbsp;&nbsp;".$row['in_id']."</option>";
	}
  echo " </select> ";
 ?>
  <div class="form-group">
  <label class="radio-inline"><input type="checkbox" name="present" value="present" checked required>&nbsp;&nbsp;present</label>
<!-- <label class="radio-inline"><input type="radio" name="optradio" value="absent">absent</label> -->
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-10-05" name="oct2[]">&nbsp;&nbsp;5 - October - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-10-06" name="oct2[]">&nbsp;&nbsp;6 - October - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-10-07" name="oct2[]">&nbsp;&nbsp;7 - October - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-10-08" name="oct2[]">&nbsp;&nbsp;8 - October - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-10-09" name="oct2[]">&nbsp;&nbsp;9 - October - 2015</label>
    
  </div>
 
    <div class="form-group">
    <label><input type="checkbox" value="2015-10-10" name="oct2[]">&nbsp;&nbsp;10 - October - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-10-11" name="oct2[]">&nbsp;&nbsp;11 - October - 2015</label>
    
  </div>
  <button type="submit" name="octo2" class="btn btn-default">Submit</button>
</form>



<?php 


//INSERT INTO `v_meetup`.`attendance` (`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`)
// VALUES (NULL, '2015-09-08', '', '14MCB1006', NOW(), '50007');

$stu = $_POST['choiceitem'];
$ck = $_POST['oct2'];
$sta=$_POST['present'];
if(isset($_POST["octo2"])){
	
	for($i=0;$i<sizeof($ck);$i++){
		//INSERT INTO `attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES ([value-1])
		$query = "INSERT INTO `v_meetup`.`attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES (NULL,'".$ck[$i]."','$sta','$stu',NOW(),'".$_SESSION['uname']."','oct2')";
		mysql_query($query) or die(mysql_error());
	}
	

	echo '
	
		<a id="gLink123" href="success.php"></a>
	<script>
    document.getElementById("gLink123").click()
</script>
	
		';
}

?>
       
       </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionoct" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week3oct"><h4>Week 3: 12 - 18</h4></button>
        </h4>
      </div>
      <div id="week3oct" class="panel-collapse collapse">
        <div class="panel-body">
        <?php 
        $query1 = mysql_query("select * from attendance where g_id='".$_SESSION['uname']."' and week='oct3' order by in_id")or die ('Query is invalid: ' . mysql_error());
        //echo  '<b>Total Students: '.mysql_num_rows($instu);
        if(mysql_num_rows($query1)>0){
        	echo 'Attendance History:';
        	while ($row1 = mysql_fetch_array($query1)) {
		
	echo "<ul>".$row1['in_id']."&nbsp;&nbsp;was present on&nbsp;&nbsp;".$row1['date']."</ul>";
	}
        }
        else echo "Not yet posted!<br><br>";
        ?>
<form role="form" method="post" action="#">
  <?php 
   $q2 = mysql_query("select * from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());

 echo  '<select name="choiceitem" class="dropdown-toggle form-control"  required>';
   
 while ($row = mysql_fetch_array($q2)) {
		
	echo "	<option name='".$row['in_id']."' value='".$row['in_id']."'> ".$row['in_name']."&nbsp;&nbsp;".$row['in_id']."</option>";
	}
  echo " </select> ";
 ?>
  <div class="form-group">
  <label class="radio-inline"><input type="checkbox" name="present" value="present" checked required>&nbsp;&nbsp;present</label>
<!-- <label class="radio-inline"><input type="radio" name="optradio" value="absent">absent</label> -->
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-10-12" name="oct3[]">&nbsp;&nbsp;12 - October - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-10-13" name="oct3[]">&nbsp;&nbsp;13 - October - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-10-14" name="oct3[]">&nbsp;&nbsp;14 - October - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-10-15" name="oct3[]">&nbsp;&nbsp;15 - October - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-10-16" name="oct3[]">&nbsp;&nbsp;16 - October - 2015</label>
    
  </div>
 
    <div class="form-group">
    <label><input type="checkbox" value="2015-10-17" name="oct3[]">&nbsp;&nbsp;17 - October - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-10-18" name="oct3[]">&nbsp;&nbsp;18 - October - 2015</label>
    
  </div>
  <button type="submit" name="octo3" class="btn btn-default">Submit</button>
</form>



<?php 


//INSERT INTO `v_meetup`.`attendance` (`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`)
// VALUES (NULL, '2015-09-08', '', '14MCB1006', NOW(), '50007');

$stu = $_POST['choiceitem'];
$ck = $_POST['oct3'];
$sta=$_POST['present'];
if(isset($_POST["octo3"])){
	
	for($i=0;$i<sizeof($ck);$i++){
		//INSERT INTO `attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES ([value-1])
		$query = "INSERT INTO `v_meetup`.`attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES (NULL,'".$ck[$i]."','$sta','$stu',NOW(),'".$_SESSION['uname']."','oct3')";
		mysql_query($query) or die(mysql_error());
	}
	

	echo '
	
		<a id="gLink123" href="success.php"></a>
	<script>
    document.getElementById("gLink123").click()
</script>
	
		';
}

?>
       
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionoct" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week4oct"><h4>Week 4: 19 - 25</h4></button>
        </h4>
      </div>
      <div id="week4oct" class="panel-collapse collapse">
        <div class="panel-body">
         <?php 
        $query1 = mysql_query("select * from attendance where g_id='".$_SESSION['uname']."' and week='oct4' order by in_id")or die ('Query is invalid: ' . mysql_error());
        //echo  '<b>Total Students: '.mysql_num_rows($instu);
        if(mysql_num_rows($query1)>0){
        	echo 'Attendance History:';
        	while ($row1 = mysql_fetch_array($query1)) {
		
	echo "<ul>".$row1['in_id']."&nbsp;&nbsp;was present on&nbsp;&nbsp;".$row1['date']."</ul>";
	}
        }
        else echo "Not yet posted!<br><br>";
        ?>
<form role="form" method="post" action="#">
  <?php 
   $q2 = mysql_query("select * from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());

 echo  '<select name="choiceitem" class="dropdown-toggle form-control"  required>';
   
 while ($row = mysql_fetch_array($q2)) {
		
	echo "	<option name='".$row['in_id']."' value='".$row['in_id']."'> ".$row['in_name']."&nbsp;&nbsp;".$row['in_id']."</option>";
	}
  echo " </select> ";
 ?>
  <div class="form-group">
  <label class="radio-inline"><input type="checkbox" name="present" value="present" checked required>&nbsp;&nbsp;present</label>
<!-- <label class="radio-inline"><input type="radio" name="optradio" value="absent">absent</label> -->
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-10-19" name="oct4[]">&nbsp;&nbsp;19 - October - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-10-20" name="oct4[]">&nbsp;&nbsp;20 - October - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-10-21" name="oct4[]">&nbsp;&nbsp;21 - October - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-10-22" name="oct4[]">&nbsp;&nbsp;22 - October - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-10-23" name="oct4[]">&nbsp;&nbsp;23 - October - 2015</label>
    
  </div>
 
    <div class="form-group">
    <label><input type="checkbox" value="2015-10-24" name="oct4[]">&nbsp;&nbsp;24 - October - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-10-25" name="oct4[]">&nbsp;&nbsp;25 - October - 2015</label>
    
  </div>
  <button type="submit" name="octo4" class="btn btn-default">Submit</button>
</form>



<?php 


//INSERT INTO `v_meetup`.`attendance` (`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`)
// VALUES (NULL, '2015-09-08', '', '14MCB1006', NOW(), '50007');

$stu = $_POST['choiceitem'];
$ck = $_POST['oct4'];
$sta=$_POST['present'];
if(isset($_POST["octo4"])){
	
	for($i=0;$i<sizeof($ck);$i++){
		//INSERT INTO `attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES ([value-1])
		$query = "INSERT INTO `v_meetup`.`attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES (NULL,'".$ck[$i]."','$sta','$stu',NOW(),'".$_SESSION['uname']."','oct4')";
		mysql_query($query) or die(mysql_error());
	}
	

	echo '
	
		<a id="gLink123" href="success.php"></a>
	<script>
    document.getElementById("gLink123").click()
</script>
	
		';
}

?>
        
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionoct" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week5oct"><h4>Week 5: 26 - 31</h4></button>
        </h4>
      </div>
      <div id="week5oct" class="panel-collapse collapse">
        <div class="panel-body">
         <?php 
        $query1 = mysql_query("select * from attendance where g_id='".$_SESSION['uname']."' and week='oct5' order by in_id")or die ('Query is invalid: ' . mysql_error());
        //echo  '<b>Total Students: '.mysql_num_rows($instu);
        if(mysql_num_rows($query1)>0){
        	echo 'Attendance History:';
        	while ($row1 = mysql_fetch_array($query1)) {
		
	echo "<ul>".$row1['in_id']."&nbsp;&nbsp;was present on&nbsp;&nbsp;".$row1['date']."</ul>";
	}
        }
        else echo "Not yet posted!<br><br>";
        ?>
<form role="form" method="post" action="#">
  <?php 
   $q2 = mysql_query("select * from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());

 echo  '<select name="choiceitem" class="dropdown-toggle form-control"  required>';
   
 while ($row = mysql_fetch_array($q2)) {
		
	echo "	<option name='".$row['in_id']."' value='".$row['in_id']."'> ".$row['in_name']."&nbsp;&nbsp;".$row['in_id']."</option>";
	}
  echo " </select> ";
 ?>
  <div class="form-group">
  <label class="radio-inline"><input type="checkbox" name="present" value="present" checked required>&nbsp;&nbsp;present</label>
<!-- <label class="radio-inline"><input type="radio" name="optradio" value="absent">absent</label> -->
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-10-26" name="oct5[]">&nbsp;&nbsp;26 - October - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-10-27" name="oct5[]">&nbsp;&nbsp;27 - October - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-10-28" name="oct5[]">&nbsp;&nbsp;28 - October - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-10-29" name="oct5[]">&nbsp;&nbsp;29 - October - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-10-30" name="oct5[]">&nbsp;&nbsp;30 - October - 2015</label>
    
  </div>
 
    <div class="form-group">
    <label><input type="checkbox" value="2015-10-31" name="oct5[]">&nbsp;&nbsp;31 - October - 2015</label>
    
  </div>
  
  <button type="submit" name="octo5" class="btn btn-default">Submit</button>
</form>



<?php 


//INSERT INTO `v_meetup`.`attendance` (`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`)
// VALUES (NULL, '2015-09-08', '', '14MCB1006', NOW(), '50007');

$stu = $_POST['choiceitem'];
$ck = $_POST['oct5'];
$sta=$_POST['present'];
if(isset($_POST["octo5"])){
	
	for($i=0;$i<sizeof($ck);$i++){
		//INSERT INTO `attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES ([value-1])
		$query = "INSERT INTO `v_meetup`.`attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES (NULL,'".$ck[$i]."','$sta','$stu',NOW(),'".$_SESSION['uname']."','oct5')";
		mysql_query($query) or die(mysql_error());
	}
	

	echo '
	
		<a id="gLink123" href="success.php"></a>
	<script>
    document.getElementById("gLink123").click()
</script>
	
		';
}

?>
        
        </div>
      </div>
    </div>
    
  </div> 
</div>
      
      </div>
           <div id="nov" class="tab-pane fade">
           
                  
       <div class="container-fluid">
  
  <div class="panel-group" id="accordionnov">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
         <!--  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Collapsible Group 1</a> -->
          <button type="button"  data-toggle="collapse" data-parent="#accordionnov" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week1nov"><h4>Week 1: 01</h4></button>
        </h4>
      </div>
      <div id="week1nov" class="panel-collapse collapse">
        <div class="panel-body">
        <?php 
        $query1 = mysql_query("select * from attendance where g_id='".$_SESSION['uname']."' and week='nov1' order by in_id")or die ('Query is invalid: ' . mysql_error());
        //echo  '<b>Total Students: '.mysql_num_rows($instu);
        if(mysql_num_rows($query1)>0){
        	echo 'Attendance History:';
        	while ($row1 = mysql_fetch_array($query1)) {
		
	echo "<ul>".$row1['in_id']."&nbsp;&nbsp;was present on&nbsp;&nbsp;".$row1['date']."</ul>";
	}
        }
        else echo "Not yet posted!<br><br>";
        ?>
<form role="form" method="post" action="#">
  <?php 
   $q2 = mysql_query("select * from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());

 echo  '<select name="choiceitem" class="dropdown-toggle form-control"  required>';
   
 while ($row = mysql_fetch_array($q2)) {
		
	echo "	<option name='".$row['in_id']."' value='".$row['in_id']."'> ".$row['in_name']."&nbsp;&nbsp;".$row['in_id']."</option>";
	}
  echo " </select> ";
 ?>
  <div class="form-group">
  <label class="radio-inline"><input type="checkbox" name="present" value="present" checked required>&nbsp;&nbsp;present</label>
<!-- <label class="radio-inline"><input type="radio" name="optradio" value="absent">absent</label> -->
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-11-01" name="nov1[]">&nbsp;&nbsp;1 - November - 2015</label>
    
    </div>
  
    
  <button type="submit" name="novo1" class="btn btn-default">Submit</button>
</form>



<?php 


//INSERT INTO `v_meetup`.`attendance` (`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`)
// VALUES (NULL, '2015-09-08', '', '14MCB1006', NOW(), '10007');

$stu = $_POST['choiceitem'];
$ck = $_POST['nov1'];
$sta=$_POST['present'];
if(isset($_POST["novo1"])){
	
	for($i=0;$i<sizeof($ck);$i++){
		//INSERT INTO `attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES ([value-1])
		$query = "INSERT INTO `v_meetup`.`attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES (NULL,'".$ck[$i]."','$sta','$stu',NOW(),'".$_SESSION['uname']."','nov1')";
		mysql_query($query) or die(mysql_error());
	}
	

	echo '
	
		<a id="gLink123" href="success.php"></a>
	<script>
    document.getElementById("gLink123").click()
</script>
	
		';
}

?>
       
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionnov" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week2nov"><h4>Week 2: 02 - 08</h4></button>
        </h4>
      </div>
      <div id="week2nov" class="panel-collapse collapse">
        <div class="panel-body">
        <?php 
        $query1 = mysql_query("select * from attendance where g_id='".$_SESSION['uname']."' and week='nov2' order by in_id")or die ('Query is invalid: ' . mysql_error());
        //echo  '<b>Total Students: '.mysql_num_rows($instu);
        if(mysql_num_rows($query1)>0){
        	echo 'Attendance History:';
        	while ($row1 = mysql_fetch_array($query1)) {
		
	echo "<ul>".$row1['in_id']."&nbsp;&nbsp;was present on&nbsp;&nbsp;".$row1['date']."</ul>";
	}
        }
        else echo "Not yet posted!<br><br>";
        ?>
<form role="form" method="post" action="#">
  <?php 
   $q2 = mysql_query("select * from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());

 echo  '<select name="choiceitem" class="dropdown-toggle form-control"  required>';
   
 while ($row = mysql_fetch_array($q2)) {
		
	echo "	<option name='".$row['in_id']."' value='".$row['in_id']."'> ".$row['in_name']."&nbsp;&nbsp;".$row['in_id']."</option>";
	}
  echo " </select> ";
 ?>
  <div class="form-group">
  <label class="radio-inline"><input type="checkbox" name="present" value="present" checked required>&nbsp;&nbsp;present</label>
<!-- <label class="radio-inline"><input type="radio" name="optradio" value="absent">absent</label> -->
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-11-02" name="nov2[]">&nbsp;&nbsp;2 - November - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-11-03" name="nov2[]">&nbsp;&nbsp;3 - November - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-11-04" name="nov2[]">&nbsp;&nbsp;4 - November - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-11-05" name="nov2[]">&nbsp;&nbsp;5 - November - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-11-06" name="nov2[]">&nbsp;&nbsp;6 - November - 2015</label>
    
  </div>
 
    <div class="form-group">
    <label><input type="checkbox" value="2015-11-07" name="nov2[]">&nbsp;&nbsp;7 - November - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-11-08" name="nov2[]">&nbsp;&nbsp;8 - November - 2015</label>
    
  </div>
  <button type="submit" name="novo2" class="btn btn-default">Submit</button>
</form>



<?php 


//INSERT INTO `v_meetup`.`attendance` (`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`)
// VALUES (NULL, '2015-09-08', '', '14MCB1006', NOW(), '10007');

$stu = $_POST['choiceitem'];
$ck = $_POST['nov2'];
$sta=$_POST['present'];
if(isset($_POST["novo2"])){
	
	for($i=0;$i<sizeof($ck);$i++){
		//INSERT INTO `attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES ([value-1])
		$query = "INSERT INTO `v_meetup`.`attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES (NULL,'".$ck[$i]."','$sta','$stu',NOW(),'".$_SESSION['uname']."','nov2')";
		mysql_query($query) or die(mysql_error());
	}
	

	echo '
	
		<a id="gLink123" href="success.php"></a>
	<script>
    document.getElementById("gLink123").click()
</script>
	
		';
}

?>
       
       </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionnov" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week3nov"><h4>Week 3: 09 - 15</h4></button>
        </h4>
      </div>
      <div id="week3nov" class="panel-collapse collapse">
        <div class="panel-body">
         <?php 
        $query1 = mysql_query("select * from attendance where g_id='".$_SESSION['uname']."' and week='nov3' order by in_id")or die ('Query is invalid: ' . mysql_error());
        //echo  '<b>Total Students: '.mysql_num_rows($instu);
        if(mysql_num_rows($query1)>0){
        	echo 'Attendance History:';
        	while ($row1 = mysql_fetch_array($query1)) {
		
	echo "<ul>".$row1['in_id']."&nbsp;&nbsp;was present on&nbsp;&nbsp;".$row1['date']."</ul>";
	}
        }
        else echo "Not yet posted!<br><br>";
        ?>
<form role="form" method="post" action="#">
  <?php 
   $q2 = mysql_query("select * from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());

 echo  '<select name="choiceitem" class="dropdown-toggle form-control"  required>';
   
 while ($row = mysql_fetch_array($q2)) {
		
	echo "	<option name='".$row['in_id']."' value='".$row['in_id']."'> ".$row['in_name']."&nbsp;&nbsp;".$row['in_id']."</option>";
	}
  echo " </select> ";
 ?>
  <div class="form-group">
  <label class="radio-inline"><input type="checkbox" name="present" value="present" checked required>&nbsp;&nbsp;present</label>
<!-- <label class="radio-inline"><input type="radio" name="optradio" value="absent">absent</label> -->
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-11-09" name="nov3[]">&nbsp;&nbsp;9 - November - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-11-10" name="nov3[]">&nbsp;&nbsp;10 - November - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-11-11" name="nov3[]">&nbsp;&nbsp;11 - November - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-11-12" name="nov3[]">&nbsp;&nbsp;12 - November - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-11-13" name="nov3[]">&nbsp;&nbsp;13 - November - 2015</label>
    
  </div>
 
    <div class="form-group">
    <label><input type="checkbox" value="2015-11-14" name="nov3[]">&nbsp;&nbsp;14 - November - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-11-15" name="nov3[]">&nbsp;&nbsp;15 - November - 2015</label>
    
  </div>
  <button type="submit" name="novo3" class="btn btn-default">Submit</button>
</form>



<?php 


//INSERT INTO `v_meetup`.`attendance` (`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`)
// VALUES (NULL, '2015-09-08', '', '14MCB1006', NOW(), '10007');

$stu = $_POST['choiceitem'];
$ck = $_POST['nov3'];
$sta=$_POST['present'];
if(isset($_POST["novo3"])){
	
	for($i=0;$i<sizeof($ck);$i++){
		//INSERT INTO `attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES ([value-1])
		$query = "INSERT INTO `v_meetup`.`attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES (NULL,'".$ck[$i]."','$sta','$stu',NOW(),'".$_SESSION['uname']."','nov3')";
		mysql_query($query) or die(mysql_error());
	}
	

	echo '
	
		<a id="gLink123" href="success.php"></a>
	<script>
    document.getElementById("gLink123").click()
</script>
	
		';
}

?>
        
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionnov" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week4nov"><h4>Week 4: 16 - 22</h4></button>
        </h4>
      </div>
      <div id="week4nov" class="panel-collapse collapse">
        <div class="panel-body">
         <?php 
        $query1 = mysql_query("select * from attendance where g_id='".$_SESSION['uname']."' and week='nov4' order by in_id")or die ('Query is invalid: ' . mysql_error());
        //echo  '<b>Total Students: '.mysql_num_rows($instu);
        if(mysql_num_rows($query1)>0){
        	echo 'Attendance History:';
        	while ($row1 = mysql_fetch_array($query1)) {
		
	echo "<ul>".$row1['in_id']."&nbsp;&nbsp;was present on&nbsp;&nbsp;".$row1['date']."</ul>";
	}
        }
        else echo "Not yet posted!<br><br>";
        ?>
<form role="form" method="post" action="#">
  <?php 
   $q2 = mysql_query("select * from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());

 echo  '<select name="choiceitem" class="dropdown-toggle form-control"  required>';
   
 while ($row = mysql_fetch_array($q2)) {
		
	echo "	<option name='".$row['in_id']."' value='".$row['in_id']."'> ".$row['in_name']."&nbsp;&nbsp;".$row['in_id']."</option>";
	}
  echo " </select> ";
 ?>
  <div class="form-group">
  <label class="radio-inline"><input type="checkbox" name="present" value="present" checked required>&nbsp;&nbsp;present</label>
<!-- <label class="radio-inline"><input type="radio" name="optradio" value="absent">absent</label> -->
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-11-16" name="nov4[]">&nbsp;&nbsp;16 - November - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-11-17" name="nov4[]">&nbsp;&nbsp;17 - November - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-11-18" name="nov4[]">&nbsp;&nbsp;18 - November - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-11-19" name="nov4[]">&nbsp;&nbsp;19 - November - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-11-20" name="nov4[]">&nbsp;&nbsp;20 - November - 2015</label>
    
  </div>
 
    <div class="form-group">
    <label><input type="checkbox" value="2015-11-21" name="nov4[]">&nbsp;&nbsp;21 - November - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-11-22" name="nov4[]">&nbsp;&nbsp;22 - November - 2015</label>
    
  </div>
  <button type="submit" name="novo4" class="btn btn-default">Submit</button>
</form>



<?php 


//INSERT INTO `v_meetup`.`attendance` (`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`)
// VALUES (NULL, '2015-09-08', '', '14MCB1006', NOW(), '10007');

$stu = $_POST['choiceitem'];
$ck = $_POST['nov4'];
$sta=$_POST['present'];
if(isset($_POST["novo4"])){
	
	for($i=0;$i<sizeof($ck);$i++){
		//INSERT INTO `attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES ([value-1])
		$query = "INSERT INTO `v_meetup`.`attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES (NULL,'".$ck[$i]."','$sta','$stu',NOW(),'".$_SESSION['uname']."','nov4')";
		mysql_query($query) or die(mysql_error());
	}
	

	echo '
	
		<a id="gLink123" href="success.php"></a>
	<script>
    document.getElementById("gLink123").click()
</script>
	
		';
}

?>
        
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionnov" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week5nov"><h4>Week 5: 23 - 29</h4></button>
        </h4>
      </div>
      <div id="week5nov" class="panel-collapse collapse">
        <div class="panel-body">
        <?php 
        $query1 = mysql_query("select * from attendance where g_id='".$_SESSION['uname']."' and week='nov5' order by in_id")or die ('Query is invalid: ' . mysql_error());
        //echo  '<b>Total Students: '.mysql_num_rows($instu);
        if(mysql_num_rows($query1)>0){
        	echo 'Attendance History:';
        	while ($row1 = mysql_fetch_array($query1)) {
		
	echo "<ul>".$row1['in_id']."&nbsp;&nbsp;was present on&nbsp;&nbsp;".$row1['date']."</ul>";
	}
        }
        else echo "Not yet posted!<br><br>";
        ?>
<form role="form" method="post" action="#">
  <?php 
   $q2 = mysql_query("select * from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());

 echo  '<select name="choiceitem" class="dropdown-toggle form-control"  required>';
   
 while ($row = mysql_fetch_array($q2)) {
		
	echo "	<option name='".$row['in_id']."' value='".$row['in_id']."'> ".$row['in_name']."&nbsp;&nbsp;".$row['in_id']."</option>";
	}
  echo " </select> ";
 ?>
  <div class="form-group">
  <label class="radio-inline"><input type="checkbox" name="present" value="present" checked required>&nbsp;&nbsp;present</label>
<!-- <label class="radio-inline"><input type="radio" name="optradio" value="absent">absent</label> -->
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-11-23" name="nov5[]">&nbsp;&nbsp;23 - November - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-11-24" name="nov5[]">&nbsp;&nbsp;24 - November - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-11-25" name="nov5[]">&nbsp;&nbsp;25 - November - 2015</label>
    
    </div>
    <div class="form-group">
    <label><input type="checkbox" value="2015-11-26" name="nov5[]">&nbsp;&nbsp;26 - November - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-11-27" name="nov5[]">&nbsp;&nbsp;27 - November - 2015</label>
    
  </div>
 
    <div class="form-group">
    <label><input type="checkbox" value="2015-11-28" name="nov5[]">&nbsp;&nbsp;28 - November - 2015</label>
    
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-11-29" name="nov5[]">&nbsp;&nbsp;29 - November - 2015</label>
    
  </div>
  <button type="submit" name="novo5" class="btn btn-default">Submit</button>
</form>



<?php 


//INSERT INTO `v_meetup`.`attendance` (`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`)
// VALUES (NULL, '2015-09-08', '', '14MCB1006', NOW(), '10007');

$stu = $_POST['choiceitem'];
$ck = $_POST['nov5'];
$sta=$_POST['present'];
if(isset($_POST["novo5"])){
	
	for($i=0;$i<sizeof($ck);$i++){
		//INSERT INTO `attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES ([value-1])
		$query = "INSERT INTO `v_meetup`.`attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES (NULL,'".$ck[$i]."','$sta','$stu',NOW(),'".$_SESSION['uname']."','nov5')";
		mysql_query($query) or die(mysql_error());
	}
	

	echo '
	
		<a id="gLink123" href="success.php"></a>
	<script>
    document.getElementById("gLink123").click()
</script>
	
		';
}

?>
       
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionnov" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week6nov"><h4>Week 6: 30</h4></button>
        </h4>
      </div>
      <div id="week6nov" class="panel-collapse collapse">
        <div class="panel-body">
         <?php 
        $query1 = mysql_query("select * from attendance where g_id='".$_SESSION['uname']."' and week='nov6' order by in_id")or die ('Query is invalid: ' . mysql_error());
        //echo  '<b>Total Students: '.mysql_num_rows($instu);
        if(mysql_num_rows($query1)>0){
        	echo 'Attendance History:';
        	while ($row1 = mysql_fetch_array($query1)) {
		
	echo "<ul>".$row1['in_id']."&nbsp;&nbsp;was present on&nbsp;&nbsp;".$row1['date']."</ul>";
	}
        }
        else echo "Not yet posted!<br><br>";
        ?>
<form role="form" method="post" action="#">
  <?php 
   $q2 = mysql_query("select * from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());

 echo  '<select name="choiceitem" class="dropdown-toggle form-control"  required>';
   
 while ($row = mysql_fetch_array($q2)) {
		
	echo "	<option name='".$row['in_id']."' value='".$row['in_id']."'> ".$row['in_name']."&nbsp;&nbsp;".$row['in_id']."</option>";
	}
  echo " </select> ";
 ?>
  <div class="form-group">
  <label class="radio-inline"><input type="checkbox" name="present" value="present" checked required>&nbsp;&nbsp;present</label>
<!-- <label class="radio-inline"><input type="radio" name="optradio" value="absent">absent</label> -->
  </div>
  <div class="form-group">
    <label><input type="checkbox" value="2015-11-30" name="nov6[]">&nbsp;&nbsp;30 - November - 2015</label>
    
    </div>
    
  <button type="submit" name="novo6" class="btn btn-default">Submit</button>
</form>



<?php 


//INSERT INTO `v_meetup`.`attendance` (`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`)
// VALUES (NULL, '2015-09-08', '', '14MCB1006', NOW(), '10007');

$stu = $_POST['choiceitem'];
$ck = $_POST['nov6'];
$sta=$_POST['present'];
if(isset($_POST["novo6"])){
	
	for($i=0;$i<sizeof($ck);$i++){
		//INSERT INTO `attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES ([value-1])
		$query = "INSERT INTO `v_meetup`.`attendance`(`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`,`week`) VALUES (NULL,'".$ck[$i]."','$sta','$stu',NOW(),'".$_SESSION['uname']."','nov6')";
		mysql_query($query) or die(mysql_error());
	}
	

	echo '
	
		<a id="gLink123" href="success.php"></a>
	<script>
    document.getElementById("gLink123").click()
</script>
	
		';
}

?>
        
        </div>
      </div>
    </div>
  </div> 
</div>
      
      </div>

       
       <div id="dec" class="tab-pane fade">
      <h4>End Of Sem</h4>
      </div>
      
      
      
      </div>
      
      </div>
       
      
      </div>
      
      </div>
      </div>

     
     



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