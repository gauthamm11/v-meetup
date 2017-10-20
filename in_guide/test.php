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
// get name of guide
// $guiname = mysql_query("SELECT g_name FROM internal_guide WHERE g_id='".$_SESSION['uname']."'") or die ('Query is invalid: ' . mysql_error());
// while ($row = mysql_fetch_array($guiname)) {
// echo $row['g_name']."<br>";
// }
// echo "<br>";
// // get names of in house students
// $inhdata = mysql_query("select in_name from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());
// while ($row = mysql_fetch_array($inhdata)) {
// echo $row['in_name']."<br>";
// }
// echo "<br><br><br>";
// // get names of intern students
// $intdata = mysql_query("select * from intern_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());
// while ($row = mysql_fetch_array($intdata)) {
// echo $row['int_name']." ".$row['int_id']." ".$row['int_pro']."<br>";
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





 <div class="container-fluid">
  
  <h3>M.Tech Project Review 1- Guidelines:</h3>
  
  <b>PPT Presentation requirement:</b>
  <br>
  <ul>
  <li>The presentation must have a minimum of 8 slides but not more than 10 slides.
  </li>
  <li>Presentation will be for 15 minutes, followed by Q&amp; A for 5 minutes.</li>
  </ul>
  
  <b>Project Plan presentation:</b>
  <br>
  <ul>
  <li>Motivation &amp; Problem Statement</li>
  <li>Analysis / Architectural Design for Proposed System </li>
  <li>ER Diagram/ DFD /Use case diagram/ any other relevant diagrams  </li>
  <li>Proposed Algorithms / Techniques in the project</li>
  <li>Modules description and its current status (Snap shot/ screens , etc)</li>
  <li>Expected results </li>
  <li>
  Work packages and milestones (include at least a Gantt Chart)
  <ul>
  <li>
  An exact definition of the work packages: dates, responsibilities,    deliverables, for which task, for which goal, description of work package,...
  </li>
  </ul>
  </li>
  <li>References</li>
  </ul>
  
  
  
  
  </div>













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
    <li><a href="ing_page1.php">second</a></li>
    <li><a href="chat.php">chat</a></li>
    <li><a href="review.php">Review</a></li>
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
      
      <h2>Intership Students:</h2>
 <p> 
 
  <?php 
  $intstu = mysql_query("select * from intern_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());
while ($row = mysql_fetch_array($intstu)) {
echo "Name: ".$row['int_name']."<br> "."Reg ID:".$row['int_id']."<br> "."Project Title: ".$row['int_pro']."<br><br>";
}
echo  'No. of Students'.' '.mysql_num_rows($intstu);  
  ?>
 
 </p>     
      
      <h2>Inhouse Students:</h2>
      
  <?php 
  $instu = mysql_query("select * from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());
while ($row = mysql_fetch_array($instu)) {
echo "Name: ".$row['in_name']."<br> "."Reg ID:".$row['in_id']."<br> "."Project Title: ".$row['in_pro']."<br><br>";
}
echo  'No. of Students '.mysql_num_rows($instu);  

  ?>
      
      
     
    </div>
    <div id="menu1" class="tab-pane fade">
      <h1>Profile:</h1>
      <p>
      
      
        <?php 
  $det = mysql_query("select * from internal_guide where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());
while ($row = mysql_fetch_array($det)) {
echo "Name: ".$row['g_name']."<br> "."Faculty ID:".$row['g_id']."<br> "."E-Mail: ".$row['g_mail']."<br><br>";
}
  
  ?>
      </p>
      
      
            <?php  
        
        
        $q2 = mysql_query("select * from inhouse_student where g_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());

 echo '      <form action="review/index.php" method="post" id="myform">';
        
 echo  '<select name="choiceitem" class="btn btn-default btn-primary dropdown-toggle"  required>';
   
 while ($row = mysql_fetch_array($q2)) {
		
	echo "	<option name='".$row['in_id']."' value='".$row['in_id']."'> ".$row['in_name']." </option>";
	}
  echo " </select> ";
  echo "<input type='submit' value='submit'>";
  echo "</form>";

 ?> 
 
 
 
      
      
      
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
      
   



<div class="container">
  <h2>Modal Example</h2>
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