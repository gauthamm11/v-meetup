  <?php
@ session_start(); 
// inhouse student
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



 //session_start();
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
  $uiname = mysql_query("SELECT * FROM inhouse_student WHERE in_id='".$_SESSION['uname']."'") or die ('Query is invalid: ' . mysql_error());
  while ($row = mysql_fetch_array($uiname)) {
  	echo $row['in_name'];
  	$name = $row['in_name'];
  	$guide = $row['g_id'];
  }
  
  ?>
  
  
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    
    
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
    <li class="active"><a data-toggle="tab" href="#board">Bulliten Board</a></li>
    <li><a data-toggle="tab" href="#weekstatus">Weekly Status</a></li>
    <li><a data-toggle="tab" href="#attendance">Attendance</a></li>
    <li><a data-toggle="tab" href="#review1">Review Status</a></li>
    </ul>

  <div class="tab-content">
    <div id="board" class="tab-pane fade in active">
      
    
    
    <h1><u>VIT Guide Posts</u></h1>
      <div class="container-fluid box">
        <?php 

        $det = mysql_query("select * from common_status where g_id='".$guide."'")or die ('Query is invalid: ' . mysql_error());
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
    
    
    
    
    
    
    
    
    
    
    
    
    <div id="weekstatus" class="tab-pane fade">
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      <div class="container-fluid well">
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
		
// 	echo "	<option name='".$row['in_id']."' value='".$row['in_id']."'> ".$row['in_name']." </option>";
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
        
        <form action="#" method="post" id="julyw1" class="julyw1">
        <div class="form-group">
        
        <?php 
       
        //WHERE FirstName = 'John' AND LastName = 'Smith';
        //FirstName = 'John' AND (LastName = 'Smith' OR LastName = 'Jones');
        echo '<h4>Status:</h4><br>';
        $q2222 = mysql_query("select * from inhouse_review where in_id='".$_SESSION['uname']."' and week='july1'")or die ('Query is invalid: ' . mysql_error());
        
        while ($row = mysql_fetch_array($q2222)) {
        	 
        	echo "<ul>"."<b>".$row['postedby'].":</b>&nbsp&nbsp<mark><u>".$row['status']."</u></mark>&nbsp".$row['message']."&nbsp<sub><i>".$row['date']."</i></sub>"."</ul>";

        }
        
        ?>
        
        
        <br><br>
  
    <br>
   
  <textarea class="form-control" rows="3" id="comment1" name="comment1" placeholder="type your status of this week....."></textarea><br>
  <button class="btn btn-default btn-success" type="submit" name="submitjw1">Submit</button>
  
</div>
       
       </form>
       <?php
       //week , status
       //$seloption
      // $kv1 = $_POST['kv'];
        $option = $_POST["pid1"];
        $comment = $_POST["comment1"];
        //`g_id`, `in_id`, `message`, `date`, `week`, `status`
        if(isset($_POST["submitjw1"]))
        {
        	$msg = "INSERT INTO `inhouse_review` (`in_id`, `g_id`, `message`,`week`,`postedby`) VALUES('".$_SESSION['uname']."','$guide','$comment','july1','$name')" ;

//         	if(mysql_query($msginsert))
//         	{
//         		header("Location: ../index.php");
//         	}
//         else 
//         	echo 'error';
mysql_query($msg) or die ('Query is invalid: ' . mysql_error());

echo '

		<a id="gLink" href="success.php"></a>


		';

}
?>

   
<script>
    document.getElementById("gLink").click()
</script>   
        
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
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      </div>


       <div id="attendance" class="tab-pane fade">
      <h1>Attendance Status:</h1><br>
      <strong>Present Days:</strong><br>
      <?php 
    
    $att = mysql_query("select * from attendance where in_id='".$_SESSION['uname']."' order by date") or die ('Query is invalid: ' . mysql_error());
    while ($row = mysql_fetch_array($att)) {
    	//echo "<ul>".$row['message']."&nbsp;<sub><i>".$row['time']."</i></sub></ul>"."<br>";
    echo "<ul>".$row['date']."&nbsp;</ul>";
 
    
    }
    
    ?>  
      
      
      
      </div>
      
      
      
      
      
      
      <div id="review1" class="tab-pane fade">
      

      
      <h1><u>Review 1- Guidelines</u></h1><br>
      <b>PPT Presentation requirement:</b>

      <ul>
      <li>The presentation must have a minimum of 8 slides but not more than 10 slides.</li>
      <li>Presentation will be for 15 minutes, followed by Q &amp; A for 5 minutes.</li>
      
      </ul>
      <b>Project Plan Presentation:</b>
      <ul>

      <li>      Motivation & Problem Statement.</li>
      <li>Analysis / Architectural Design for Proposed System.</li> 
      <li>ER Diagram/ DFD /Use case diagram/ any other relevant diagrams.</li>  
      <li>Proposed Algorithms / Techniques in the project.</li>
      <li>Modules description and its current status (Snap shot/ screens , etc).</li>
      <li>Expected results. </li>
      <li>
      Work packages and milestones (include at least a Gantt Chart)
  <ul>    <li>An exact definition of the work packages: dates, responsibilities,   deliverables, for which task, for which goal, description of work package,...</li></ul>
      </li>
      <li>References.</li>
      </ul>
      <br><br>
      
     <!--   <h3>Upload your Review 1 PPT</h3>
      
         <form action="#" method="post" enctype="multipart/form-data">
<p>
<label for="file">Select a file:</label> <input type="file" name="userfile" id="file"> <br />
<button>Upload File</button>
<p>
</form>-->
      
    
      
      
      
       <?php 
       echo "<h3>Comments:</h3>";
       $u = mysql_query("SELECT comment,g_name FROM mainreview1 WHERE s_id='".$_SESSION['uname']."'") or die ('Query is invalid: ' . mysql_error());
  while ($row = mysql_fetch_array($u)) {
   echo $row['g_name'];
   echo "<br>";
  	echo $row['comment'];
  
  }
  
  ?>
      
      
      
      
   <?php
  
//    $target_path = "review1/";
//    $target_path = $target_path . basename( $_FILES['userfile']['name']);
//    //for upload file this function we use
//    if(move_uploaded_file($_FILES['userfile']['tmp_name'], $target_path)) {
//    	echo "The file ". basename( $_FILES['userfile']['name']).
//    	" has been uploaded";
//    } else{
//    	echo "";
//    }
   
?>
      
      
      
      
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