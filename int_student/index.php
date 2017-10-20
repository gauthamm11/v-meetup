  <?php
@ session_start(); 
//internship student
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
//session_start();
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
  $uiname = mysql_query("SELECT * FROM intern_student WHERE int_id='".$_SESSION['uname']."'") or die ('Query is invalid: ' . mysql_error());
  while ($row = mysql_fetch_array($uiname)) {
  	echo $row['int_name'];
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

  
  
  
<?php 
  $uiname2 = mysql_query("SELECT * FROM intern_student WHERE int_id='".$_SESSION['uname']."'") or die ('Query is invalid: ' . mysql_error());
  while ($row = mysql_fetch_array($uiname2)) {
  	$ext_gui= $row['e_id'];
  	$int_gui= $row['g_id'];
  	$stu_name = $row['int_name'];
  }
  
  ?>
  
  
<!-- view status wall -->

<!-- post weekly status -->

<div class="container well">
    <ul class="nav nav-pills nav-tabs nav-justified">
    <li class="active"><a data-toggle="tab" href="#home">Bulliten Board</a></li>
    <li><a data-toggle="tab" href="#menu1">Weekly Status</a></li>
    <li><a data-toggle="tab" href="#review1">Review Status</a></li>
  
    </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
     
    </div>
  
  
    <div id="menu1" class="tab-pane fade">
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!--  -->
<div class="container-fluid well">
    <ul class="nav nav-tabs nav-pills nav-justified">
    <li><a data-toggle="tab" href="#winter">Winter</a></li>
    <li><a data-toggle="tab" href="#fall">Fall</a></li>
    </ul>

  <div class="tab-content">
     <div id="fall" class="tab-pane fade">
      
      
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

       
       <div id="winter" class="tab-pane fade">
       
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
          <button type="button"  data-toggle="collapse" data-parent="#accordionjul" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week1july"><h1>Week 1: 1 - 5</h1></button>
        </h4>
      </div>
      <div id="week1july" class="panel-collapse collapse">
        <div class="panel-body">
        
        <div class="container-fluid">
                
                <?php 
                $jul1 = mysql_query("SELECT * FROM intern_review WHERE (int_id='".$_SESSION['uname']."' && week='july1')  ") or die ('Query is invalid: ' . mysql_error());
                 while ($rowjuly1 = mysql_fetch_array($jul1)) {
                 	echo "
 				<ul>".$rowjuly1[message]."</ul>
				
				
 				";
                 }
                
                
                ?>
                
                </div>
        
        <div class="container-fluid">
 
  <form role="form" action="#" method="post">
    <div class="form-group">
      <label for="text">Text:</label>
      <input type="text" class="form-control" id="text" name="tjuly1" placeholder="Enter Text">
    </div>
    <button type="submit" name="sjuly1" class="btn btn-default">Submit</button>
  </form>
</div>
     
     <?php

     $julyw1 = $_POST['tjuly1'];
 if(isset($_POST['sjuly1'])){
        
        $msginsert = "insert into `intern_review` (`int_id`,`g_id`,`e_id`,`message`,`week`) values('".$_SESSION['uname']."','$int_gui','$ext_gui','$julyw1','july1')" ;
        
        
        mysql_query($msginsert) or die ('Query is invalid: ' . mysql_error());
        
      
        }
?>
        
        
        
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionjul" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week2july"><h1>Week 2: 6 - 12</h1></button>
        </h4>
      </div>
      <div id="week2july" class="panel-collapse collapse">
        <div class="panel-body">
        <div class="container-fluid">
                
                <?php 
                $ul2 = mysql_query("SELECT * FROM intern_review WHERE (int_id='".$_SESSION['uname']."' && week='july2')  ") or die ('Query is invalid: ' . mysql_error());
                 while ($row1 = mysql_fetch_array($ul2)) {
                 	echo "
 				<ul>".$row1[message]."</ul>
				
				
 				";
                 }
                
                
                ?>
                
                </div>
        
        <div class="container-fluid">
 
  <form role="form" action="#" method="post">
    <div class="form-group">
      <label for="text">Text:</label>
      <input type="text" class="form-control" id="text" name="statusjulyw2" placeholder="Enter Text">
    </div>
    <button type="submit" name="submitjulyw2" class="btn btn-default">Submit</button>
  </form>
</div>
     
     <?php

     $textjulyw2 = $_POST['statusjulyw2'];
 if(isset($_POST['submitjulyw2'])){
        
        $msginsert = "insert into `intern_review` (`int_id`,`g_id`,`e_id`,`message`,`week`) values('".$_SESSION['uname']."','$int_gui','$ext_gui','posted by $stu_name: $textjulyw2','july2')" ;
        
        
        mysql_query($msginsert) or die ('Query is invalid: ' . mysql_error());
        
        }
?>
        
       </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionjul" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week3july"><h1>Week 3: 13 - 19</h1></button>
        </h4>
      </div>
      <div id="week3july" class="panel-collapse collapse">
        <div class="panel-body">
        <div class="container-fluid">
                
                <?php 
                $ul3 = mysql_query("SELECT * FROM intern_review WHERE (int_id='".$_SESSION['uname']."' && week='july3')  ") or die ('Query is invalid: ' . mysql_error());
                 while ($row1 = mysql_fetch_array($ul3)) {
                 	echo "
 				<ul>".$row1[message]."</ul>
				
				
 				";
                 }
                
                
                ?>
                
                </div>
        
        <div class="container-fluid">
 
  <form role="form" action="#" method="post">
    <div class="form-group">
      <label for="text">Text:</label>
      <input type="text" class="form-control" id="text" name="statusjulyw3" placeholder="Enter email">
    </div>
    <button type="submit" name="submitjulyw3" class="btn btn-default">Submit</button>
  </form>
</div>
     
     <?php

     $textjulyw3 = $_POST['statusjulyw3'];
 if(isset($_POST['submitjulyw3'])){
        
        $msginsert = "insert into `intern_review` (`int_id`,`g_id`,`e_id`,`message`,`week`) values('".$_SESSION['uname']."','$int_gui','$ext_gui','posted by $stu_name: $textjulyw3','july3')" ;
        
        
        mysql_query($msginsert) or die ('Query is invalid: ' . mysql_error());
        
        }
?>
        
        
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionjul" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week4july"><h1>Week 4: 20 - 26</h1></button>
        </h4>
      </div>
      <div id="week4july" class="panel-collapse collapse">
        <div class="panel-body">
        <div class="container-fluid">
                
                <?php 
                $ul4 = mysql_query("SELECT * FROM intern_review WHERE (int_id='".$_SESSION['uname']."' && week='july4')  ") or die ('Query is invalid: ' . mysql_error());
                 while ($row1 = mysql_fetch_array($ul4)) {
                 	echo "
 				<ul>".$row1[message]."</ul>
				
				
 				";
                 }
                
                
                ?>
                
                </div>
        
        <div class="container-fluid">
 
  <form role="form" action="#" method="post">
    <div class="form-group">
      <label for="text">Text:</label>
      <input type="text" class="form-control" id="text" name="statusjulyw4" placeholder="Enter email">
    </div>
    <button type="submit" name="submitjulyw4" class="btn btn-default">Submit</button>
  </form>
</div>
     
     <?php

     $textjulyw4 = $_POST['statusjulyw4'];
 if(isset($_POST['submitjulyw4'])){
        
        $msginsert = "insert into `intern_review` (`int_id`,`g_id`,`e_id`,`message`,`week`) values('".$_SESSION['uname']."','$int_gui','$ext_gui','posted by $stu_name: $textjulyw4','july4')" ;
        
        
        mysql_query($msginsert) or die ('Query is invalid: ' . mysql_error());
        
        }
?>
        
        
        
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionjul" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week5july"><h1>Week 5: 27 - 31</h1></button>
        </h4>
      </div>
      <div id="week5july" class="panel-collapse collapse">
        <div class="panel-body">
        
         <div class="container-fluid">
                
                <?php 
                $ul5 = mysql_query("SELECT * FROM intern_review WHERE (int_id='".$_SESSION['uname']."' && week='july5')  ") or die ('Query is invalid: ' . mysql_error());
                 while ($row1 = mysql_fetch_array($ul5)) {
                 	echo "
 				<ul>".$row1[message]."</ul>
				
				
 				";
                 }
                
                
                ?>
                
                </div>
        
        
        
        <div class="container-fluid">
 
  <form role="form" action="#" method="post">
    <div class="form-group">
      <label for="text">Text:</label>
      <input type="text" class="form-control" id="text" name="statusjulyw5" placeholder="Enter email">
    </div>
    <button type="submit" name="submitjulyw5" class="btn btn-default">Submit</button>
  </form>
</div>
     
     <?php

     $textjulyw5 = $_POST['statusjulyw5'];
 if(isset($_POST['submitjulyw5'])){
        
        $msginsert = "insert into `intern_review` (`int_id`,`g_id`,`e_id`,`message`,`week`) values('".$_SESSION['uname']."','$int_gui','$ext_gui','posted by $stu_name: $textjulyw5','july5')" ;
        
        
        mysql_query($msginsert) or die ('Query is invalid: ' . mysql_error());
        
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
          <button type="button"  data-toggle="collapse" data-parent="#accordionaug" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week1aug"><h1>Week 1: 1 - 2</h1></button>
        </h4>
      </div>
      <div id="week1aug" class="panel-collapse collapse">
        <div class="panel-body">
        
         <div class="container-fluid">
                
                <?php 
                $aug1 = mysql_query("SELECT * FROM intern_review WHERE (int_id='".$_SESSION['uname']."' && week='aug1')  ") or die ('Query is invalid: ' . mysql_error());
                 while ($row1 = mysql_fetch_array($aug1)) {
                 	echo "
 				<ul>".$row1[message]."</ul>
				
				
 				";
                 }
                
                
                ?>
                
                </div>
        
        <div class="container-fluid">
 
  <form role="form" action="#" method="post">
    <div class="form-group">
      <label for="text">Text:</label>
      <input type="text" class="form-control" id="text" name="statusaugw1" placeholder="Enter Post">
    </div>
    <button type="submit" name="submitaugw1" class="btn btn-default">Submit</button>
  </form>
</div>
     
     <?php

     $textaugw1 = $_POST['statusaugw1'];
 if(isset($_POST['submitaugw1'])){
        
        $msginsert = "insert into `intern_review` (`int_id`,`g_id`,`e_id`,`message`,`week`) values('".$_SESSION['uname']."','$int_gui','$ext_gui','posted by $stu_name: $textaugw1','aug1')" ;
        
        
        mysql_query($msginsert) or die ('Query is invalid: ' . mysql_error());
        
        }
?>
        
        
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionaug" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week2aug"><h1>Week 2: 3 - 9</h1></button>
        </h4>
      </div>
      <div id="week2aug" class="panel-collapse collapse">
        <div class="panel-body">
         <div class="container-fluid">
                
                <?php 
                $aug2 = mysql_query("SELECT * FROM intern_review WHERE (int_id='".$_SESSION['uname']."' && week='aug2')  ") or die ('Query is invalid: ' . mysql_error());
                 while ($row1 = mysql_fetch_array($aug2)) {
                 	echo "
 				<ul>".$row1[message]."</ul>
				
				
 				";
                 }
                
                
                ?>
                
                </div>
        <div class="container-fluid">
 
  <form role="form" action="#" method="post">
    <div class="form-group">
      <label for="text">Text:</label>
      <input type="text" class="form-control" id="text" name="statusaugw2" placeholder="Enter Post">
    </div>
    <button type="submit" name="submitaugw2" class="btn btn-default">Submit</button>
  </form>
</div>
     
     <?php

     $textaugw2 = $_POST['statusaugw2'];
 if(isset($_POST['submitaugw2'])){
        
        $msginsert = "insert into `intern_review` (`int_id`,`g_id`,`e_id`,`message`,`week`) values('".$_SESSION['uname']."','$int_gui','$ext_gui','posted by $stu_name: $textaugw2','aug2')" ;
        
        
        mysql_query($msginsert) or die ('Query is invalid: ' . mysql_error());
        
        }
?>
        
        
        
        
       </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionaug" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week3aug"><h1>Week 3: 10 - 16</h1></button>
        </h4>
      </div>
      <div id="week3aug" class="panel-collapse collapse">
        <div class="panel-body">
         <div class="container-fluid">
                
                <?php 
                $aug3 = mysql_query("SELECT * FROM intern_review WHERE (int_id='".$_SESSION['uname']."' && week='aug3')  ") or die ('Query is invalid: ' . mysql_error());
                 while ($row1 = mysql_fetch_array($aug3)) {
                 	echo "
 				<ul>".$row1[message]."</ul>
				
				
 				";
                 }
                
                
                ?>
                
                </div>
        <div class="container-fluid">
 
  <form role="form" action="#" method="post">
    <div class="form-group">
      <label for="text">Text:</label>
      <input type="text" class="form-control" id="text" name="statusaugw3" placeholder="Enter Post">
    </div>
    <button type="submit" name="submitaugw3" class="btn btn-default">Submit</button>
  </form>
</div>
     
     <?php

     $textaugw3 = $_POST['statusaugw3'];
 if(isset($_POST['submitaugw3'])){
        
        $msginsert = "insert into `intern_review` (`int_id`,`g_id`,`e_id`,`message`,`week`) values('".$_SESSION['uname']."','$int_gui','$ext_gui','posted by $stu_name: $textaugw3','aug3')" ;
        
        
        mysql_query($msginsert) or die ('Query is invalid: ' . mysql_error());
        
        }
?>
        
        
        
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionaug" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week4aug"><h1>Week 4: 17 - 23</h1></button>
        </h4>
      </div>
      <div id="week4aug" class="panel-collapse collapse">
        <div class="panel-body">
        <div class="container-fluid">
                
                <?php 
                $aug4 = mysql_query("SELECT * FROM intern_review WHERE (int_id='".$_SESSION['uname']."' && week='aug4')  ") or die ('Query is invalid: ' . mysql_error());
                 while ($row1 = mysql_fetch_array($aug4)) {
                 	echo "
 				<ul>".$row1[message]."</ul>
				
				
 				";
                 }
                
                
                ?>
                
                </div>
        
        <div class="container-fluid">
 
  <form role="form" action="#" method="post">
    <div class="form-group">
      <label for="text">Text:</label>
      <input type="text" class="form-control" id="text" name="statusaugw4" placeholder="Enter Post">
    </div>
    <button type="submit" name="submitaugw4" class="btn btn-default">Submit</button>
  </form>
</div>
     
     <?php

     $textaugw4 = $_POST['statusaugw4'];
 if(isset($_POST['submitaugw4'])){
        
        $msginsert = "insert into `intern_review` (`int_id`,`g_id`,`e_id`,`message`,`week`) values('".$_SESSION['uname']."','$int_gui','$ext_gui','posted by $stu_name: $textaugw4','aug4')" ;
        
        
        mysql_query($msginsert) or die ('Query is invalid: ' . mysql_error());
        
        }
?>
        
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionaug" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week5aug"><h1>Week 5: 24 - 30</h1></button>
        </h4>
      </div>
      <div id="week5aug" class="panel-collapse collapse">
        <div class="panel-body">
        <div class="container-fluid">
                
                <?php 
                $aug5 = mysql_query("SELECT * FROM intern_review WHERE (int_id='".$_SESSION['uname']."' && week='aug5')  ") or die ('Query is invalid: ' . mysql_error());
                 while ($row1 = mysql_fetch_array($aug5)) {
                 	echo "
 				<ul>".$row1[message]."</ul>
				
				
 				";
                 }
                
                
                ?>
                
                </div>
        <div class="container-fluid">
 
  <form role="form" action="#" method="post">
    <div class="form-group">
      <label for="text">Text:</label>
      <input type="text" class="form-control" id="text" name="statusaugw5" placeholder="Enter Post">
    </div>
    <button type="submit" name="submitaugw5" class="btn btn-default">Submit</button>
  </form>
</div>
     
     <?php

     $textaugw5 = $_POST['statusaugw5'];
 if(isset($_POST['submitaugw5'])){
        
        $msginsert = "insert into `intern_review` (`int_id`,`g_id`,`e_id`,`message`,`week`) values('".$_SESSION['uname']."','$int_gui','$ext_gui','posted by $stu_name: $textaugw5','aug5')" ;
        
        
        mysql_query($msginsert) or die ('Query is invalid: ' . mysql_error());
        
        }
?>
        
        
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionaug" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week6aug"><h1>Week 6: 31</h1></button>
        </h4>
      </div>
      <div id="week6aug" class="panel-collapse collapse">
        <div class="panel-body">
        <div class="container-fluid">
                
                <?php 
                $aug6 = mysql_query("SELECT * FROM intern_review WHERE (int_id='".$_SESSION['uname']."' && week='aug6')  ") or die ('Query is invalid: ' . mysql_error());
                 while ($row1 = mysql_fetch_array($aug6)) {
                 	echo "
 				<ul>".$row1[message]."</ul>
				
				
 				";
                 }
                
                
                ?>
                
                </div>
        <div class="container-fluid">
 
  <form role="form" action="#" method="post">
    <div class="form-group">
      <label for="text">Text:</label>
      <input type="text" class="form-control" id="text" name="statusaugw6" placeholder="Enter Post">
    </div>
    <button type="submit" name="submitaugw6" class="btn btn-default">Submit</button>
  </form>
</div>
     
     <?php

     $textaugw6 = $_POST['statusaugw6'];
 if(isset($_POST['submitaugw6'])){
        
        $msginsert = "insert into `intern_review` (`int_id`,`g_id`,`e_id`,`message`,`week`) values('".$_SESSION['uname']."','$int_gui','$ext_gui','posted by $stu_name: $textaugw6','aug6')" ;
        
        
        mysql_query($msginsert) or die ('Query is invalid: ' . mysql_error());
        
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
          <button type="button"  data-toggle="collapse" data-parent="#accordionsep" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week1sep"><h1>Week 1: 1 - 6</h1></button>
        </h4>
      </div>
      <div id="week1sep" class="panel-collapse collapse">
        <div class="panel-body">
        
        <div class="container-fluid">
                
                <?php 
                $sep1 = mysql_query("SELECT * FROM intern_review WHERE (int_id='".$_SESSION['uname']."' && week='sep1')  ") or die ('Query is invalid: ' . mysql_error());
                 while ($row1 = mysql_fetch_array($sep1)) {
                 	echo "
 				<ul>".$row1[message]."</ul>
				
				
 				";
                 }
                
                
                ?>
                
                </div>
        
        <div class="container-fluid">
 
  <form role="form" action="#" method="post">
    <div class="form-group">
      <label for="text">Text:</label>
      <input type="text" class="form-control" id="text" name="statussepw1" placeholder="Enter Post">
    </div>
    <button type="submit" name="submitsepw1" class="btn btn-default">Submit</button>
  </form>
</div>
     
     <?php

     $textsepw1 = $_POST['statussepw1'];
 if(isset($_POST['submitsepw1'])){
        
        $msginsert = "insert into `intern_review` (`int_id`,`g_id`,`e_id`,`message`,`week`) values('".$_SESSION['uname']."','$int_gui','$ext_gui','posted by $stu_name: $textsepw1','sep1')" ;
        
        
        mysql_query($msginsert) or die ('Query is invalid: ' . mysql_error());
        
        }
?>
        
        
        
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionsep" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week2sep"><h1>Week 2: 7 - 13</h1></button>
        </h4>
      </div>
      <div id="week2sep" class="panel-collapse collapse">
        <div class="panel-body">
        <div class="container-fluid">
                
                <?php 
                $sep2 = mysql_query("SELECT * FROM intern_review WHERE (int_id='".$_SESSION['uname']."' && week='sep2')  ") or die ('Query is invalid: ' . mysql_error());
                 while ($row1 = mysql_fetch_array($sep2)) {
                 	echo "
 				<ul>".$row1[message]."</ul>
				
				
 				";
                 }
                
                
                ?>
                
                </div>
        
                <div class="container-fluid">
 
  <form role="form" action="#" method="post">
    <div class="form-group">
      <label for="text">Text:</label>
      <input type="text" class="form-control" id="text" name="statussepw2" placeholder="Enter Post">
    </div>
    <button type="submit" name="submitsepw2" class="btn btn-default">Submit</button>
  </form>
</div>
     
     <?php

     $textsepw2 = $_POST['statussepw2'];
 if(isset($_POST['submitsepw2'])){
        
        $msginsert = "insert into `intern_review` (`int_id`,`g_id`,`e_id`,`message`,`week`) values('".$_SESSION['uname']."','$int_gui','$ext_gui','posted by $stu_name: $textsepw2','sep2')" ;
        
        
        mysql_query($msginsert) or die ('Query is invalid: ' . mysql_error());
        
        }
?>
        
        
       </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionsep" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week3sep"><h1>Week 3: 14 - 20</h1></button>
        </h4>
      </div>
      <div id="week3sep" class="panel-collapse collapse">
        <div class="panel-body">
        
        <div class="container-fluid">
                
                <?php 
                $sep3 = mysql_query("SELECT * FROM intern_review WHERE (int_id='".$_SESSION['uname']."' && week='sep3')  ") or die ('Query is invalid: ' . mysql_error());
                 while ($row1 = mysql_fetch_array($sep3)) {
                 	echo "
 				<ul>".$row1[message]."</ul>
				
				
 				";
                 }
                
                
                ?>
                
                </div>
                <div class="container-fluid">
 
  <form role="form" action="#" method="post">
    <div class="form-group">
      <label for="text">Text:</label>
      <input type="text" class="form-control" id="text" name="statussepw3" placeholder="Enter Post">
    </div>
    <button type="submit" name="submitsepw3" class="btn btn-default">Submit</button>
  </form>
</div>
     
     <?php

     $textsepw3 = $_POST['statussepw3'];
 if(isset($_POST['submitsepw3'])){
        
        $msginsert = "insert into `intern_review` (`int_id`,`g_id`,`e_id`,`message`,`week`) values('".$_SESSION['uname']."','$int_gui','$ext_gui','posted by $stu_name: $textsepw3','sep3')" ;
        
        
        mysql_query($msginsert) or die ('Query is invalid: ' . mysql_error());
        
        }
?>


        
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionsep" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week4sep"><h1>Week 4: 21 - 27</h1></button>
        </h4>
      </div>
      <div id="week4sep" class="panel-collapse collapse">
        <div class="panel-body">
        <div class="container-fluid">
                
                <?php 
                $sep4 = mysql_query("SELECT * FROM intern_review WHERE (int_id='".$_SESSION['uname']."' && week='sep4')  ") or die ('Query is invalid: ' . mysql_error());
                 while ($row1 = mysql_fetch_array($sep4)) {
                 	echo "
 				<ul>".$row1[message]."</ul>
				
				
 				";
                 }
                
                
                ?>
                
                </div>
        
                <div class="container-fluid">
 
  <form role="form" action="#" method="post">
    <div class="form-group">
      <label for="text">Text:</label>
      <input type="text" class="form-control" id="text" name="statussepw4" placeholder="Enter Post">
    </div>
    <button type="submit" name="submitsepw4" class="btn btn-default">Submit</button>
  </form>
</div>
     
     <?php

     $textsepw4 = $_POST['statussepw4'];
 if(isset($_POST['submitsepw4'])){
        
        $msginsert = "insert into `intern_review` (`int_id`,`g_id`,`e_id`,`message`,`week`) values('".$_SESSION['uname']."','$int_gui','$ext_gui','posted by $stu_name: $textsepw4','sep4')" ;
        
        
        mysql_query($msginsert) or die ('Query is invalid: ' . mysql_error());
        
        }
?>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionsep" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week5sep"><h1>Week 5: 28 - 30</h1></button>
        </h4>
      </div>
      <div id="week5sep" class="panel-collapse collapse">
        <div class="panel-body">
        <div class="container-fluid">
                
                <?php 
                $sep5 = mysql_query("SELECT * FROM intern_review WHERE (int_id='".$_SESSION['uname']."' && week='sep5')  ") or die ('Query is invalid: ' . mysql_error());
                 while ($row1 = mysql_fetch_array($sep5)) {
                 	echo "
 				<ul>".$row1[message]."</ul>
				
				
 				";
                 }
                
                
                ?>
                
                </div>
        
                <div class="container-fluid">
 
  <form role="form" action="#" method="post">
    <div class="form-group">
      <label for="text">Text:</label>
      <input type="text" class="form-control" id="text" name="statussepw5" placeholder="Enter Post">
    </div>
    <button type="submit" name="submitsepw5" class="btn btn-default">Submit</button>
  </form>
</div>
     
     <?php

     $textsepw5 = $_POST['statussepw5'];
 if(isset($_POST['submitsepw5'])){
        
        $msginsert = "insert into `intern_review` (`int_id`,`g_id`,`e_id`,`message`,`week`) values('".$_SESSION['uname']."','$int_gui','$ext_gui','posted by $stu_name: $textsepw5','sep5')" ;
        
        
        mysql_query($msginsert) or die ('Query is invalid: ' . mysql_error());
        
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
          <button type="button"  data-toggle="collapse" data-parent="#accordionoct" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week1oct"><h1>Week 1: 1 - 4</h1></button>
        </h4>
      </div>
      <div id="week1oct" class="panel-collapse collapse">
        <div class="panel-body">
        <div class="container-fluid">
                
                <?php 
                $oct1 = mysql_query("SELECT * FROM intern_review WHERE (int_id='".$_SESSION['uname']."' && week='oct1')  ") or die ('Query is invalid: ' . mysql_error());
                 while ($row1 = mysql_fetch_array($oct1)) {
                 	echo "
 				<ul>".$row1[message]."</ul>
				
				
 				";
                 }
                
                
                ?>
                
                </div>
        
                <div class="container-fluid">
 
  <form role="form" action="#" method="post">
    <div class="form-group">
      <label for="text">Text:</label>
      <input type="text" class="form-control" id="text" name="statusoctw1" placeholder="Enter Post">
    </div>
    <button type="submit" name="submitoctw1" class="btn btn-default">Submit</button>
  </form>
</div>
     
     <?php

     $textoctw1 = $_POST['statusoctw1'];
 if(isset($_POST['submitoctw1'])){
        
        $msginsert = "insert into `intern_review` (`int_id`,`g_id`,`e_id`,`message`,`week`) values('".$_SESSION['uname']."','$int_gui','$ext_gui','posted by $stu_name: $textoctw1','oct1')" ;
        
        
        mysql_query($msginsert) or die ('Query is invalid: ' . mysql_error());
        
        }
?>
        
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionoct" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week2oct"><h1>Week 2: 5 - 11</h1></button>
        </h4>
      </div>
      <div id="week2oct" class="panel-collapse collapse">
        <div class="panel-body">
           <div class="container-fluid">
                
                <?php 
                $oct2 = mysql_query("SELECT * FROM intern_review WHERE (int_id='".$_SESSION['uname']."' && week='oct2')  ") or die ('Query is invalid: ' . mysql_error());
                 while ($row2 = mysql_fetch_array($oct2)) {
                 	echo "
 				<ul>".$row2[message]."</ul>
				
				
 				";
                 }
                
                
                ?>
                
                </div>
                
                <div class="container-fluid">
 
  <form role="form" action="#" method="post">
    <div class="form-group">
      <label for="text">Text:</label>
      <input type="text" class="form-control" id="text" name="statusoctw2" placeholder="Enter Post">
    </div>
    <button type="submit" name="submitoctw2" class="btn btn-default">Submit</button>
  </form>
</div>
     
     <?php

     $textoctw2 = $_POST['statusoctw2'];
 if(isset($_POST['submitoctw2'])){
        
        $msginsert = "insert into `intern_review` (`int_id`,`g_id`,`e_id`,`message`,`week`) values('".$_SESSION['uname']."','$int_gui','$ext_gui','posted by $stu_name: $textoctw2','oct2')" ;
        
        
        mysql_query($msginsert) or die ('Query is invalid: ' . mysql_error());
        
        }
?>
        
        
       </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionoct" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week3oct"><h1>Week 3: 12 - 18</h1></button>
        </h4>
      </div>
      <div id="week3oct" class="panel-collapse collapse">
        <div class="panel-body">
        
           <div class="container-fluid">
                
                <?php 
                $oct3 = mysql_query("SELECT * FROM intern_review WHERE (int_id='".$_SESSION['uname']."' && week='oct3')  ") or die ('Query is invalid: ' . mysql_error());
                 while ($row3 = mysql_fetch_array($oct3)) {
                 	echo "
 				<ul>".$row3[message]."</ul>
				
				
 				";
                 }
                
                
                ?>
                
                </div>
                
                <div class="container-fluid">
 
  <form role="form" action="#" method="post">
    <div class="form-group">
      <label for="text">Text:</label>
      <input type="text" class="form-control" id="text" name="statusoctw3" placeholder="Enter Post">
    </div>
    <button type="submit" name="submitoctw3" class="btn btn-default">Submit</button>
  </form>
</div>
     
     <?php

     $textoctw3 = $_POST['statusoctw3'];
 if(isset($_POST['submitoctw3'])){
        
        $msginsert = "insert into `intern_review` (`int_id`,`g_id`,`e_id`,`message`,`week`) values('".$_SESSION['uname']."','$int_gui','$ext_gui','posted by $stu_name: $textoctw3','oct3')" ;
        
        
        mysql_query($msginsert) or die ('Query is invalid: ' . mysql_error());
        
        }
?>
        
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionoct" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week4oct"><h1>Week 4: 19 - 25</h1></button>
        </h4>
      </div>
      <div id="week4oct" class="panel-collapse collapse">
        <div class="panel-body">
           <div class="container-fluid">
                
                <?php 
                $oct4 = mysql_query("SELECT * FROM intern_review WHERE (int_id='".$_SESSION['uname']."' && week='oct4')  ") or die ('Query is invalid: ' . mysql_error());
                 while ($row4 = mysql_fetch_array($oct4)) {
                 	echo "
 				<ul>".$row4[message]."</ul>
				
				
 				";
                 }
                
                
                ?>
                
                </div>
                
                <div class="container-fluid">
 
  <form role="form" action="#" method="post">
    <div class="form-group">
      <label for="text">Text:</label>
      <input type="text" class="form-control" id="text" name="statusoctw4" placeholder="Enter Post">
    </div>
    <button type="submit" name="submitoctw4" class="btn btn-default">Submit</button>
  </form>
</div>
     
     <?php

     $textoctw4 = $_POST['statusoctw4'];
 if(isset($_POST['submitoctw4'])){
        
        $msginsert = "insert into `intern_review` (`int_id`,`g_id`,`e_id`,`message`,`week`) values('".$_SESSION['uname']."','$int_gui','$ext_gui','posted by $stu_name: $textoctw4','oct4')" ;
        
        
        mysql_query($msginsert) or die ('Query is invalid: ' . mysql_error());
        
        }
?>
        
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionoct" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week5oct"><h1>Week 5: 26 - 31</h1></button>
        </h4>
      </div>
      <div id="week5oct" class="panel-collapse collapse">
        <div class="panel-body">
                
                   <div class="container-fluid">
                
                <?php 
                $oct5 = mysql_query("SELECT * FROM intern_review WHERE (int_id='".$_SESSION['uname']."' && week='oct5')  ") or die ('Query is invalid: ' . mysql_error());
                 while ($row5 = mysql_fetch_array($oct5)) {
                 	echo "
 				<ul>".$row5[message]."</ul>
				
				
 				";
                 }
                
                
                ?>
                
                </div>
                
                <div class="container-fluid">
 
  <form role="form" action="#" method="post">
    <div class="form-group">
      <label for="text">Text:</label>
      <input type="text" class="form-control" id="text" name="statusoctw5" placeholder="Enter Post">
    </div>
    <button type="submit" name="submitoctw5" class="btn btn-default">Submit</button>
  </form>
</div>
     
     <?php

     $textoctw5 = $_POST['statusoctw5'];
 if(isset($_POST['submitoctw5'])){
        
        $msginsert = "insert into `intern_review` (`int_id`,`g_id`,`e_id`,`message`,`week`) values('".$_SESSION['uname']."','$int_gui','$ext_gui','posted by $stu_name: $textoctw5','oct5')" ;
        
        
        mysql_query($msginsert) or die ('Query is invalid: ' . mysql_error());
        
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
          <button type="button"  data-toggle="collapse" data-parent="#accordionnov" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week1nov"><h1>Week 1: 1</h1></button>
        </h4>
      </div>
      <div id="week1nov" class="panel-collapse collapse">
        <div class="panel-body">
        
           <div class="container-fluid">
                
                <?php 
                $nov1 = mysql_query("SELECT * FROM intern_review WHERE (int_id='".$_SESSION['uname']."' && week='nov1')  ") or die ('Query is invalid: ' . mysql_error());
                 while ($row1 = mysql_fetch_array($nov1)) {
                 	echo "
 				<ul>".$row1[message]."</ul>
				
				
 				";
                 }
                
                
                ?>
                
                </div>
                
                <div class="container-fluid">
 
  <form role="form" action="#" method="post">
    <div class="form-group">
      <label for="text">Text:</label>
      <input type="text" class="form-control" id="text" name="statusnovw1" placeholder="Enter Post">
    </div>
    <button type="submit" name="submitnovw1" class="btn btn-default">Submit</button>
  </form>
</div>
     
     <?php

     $textnovw1 = $_POST['statusnovw1'];
 if(isset($_POST['submitnovw1'])){
        
        $msginsert = "insert into `intern_review` (`int_id`,`g_id`,`e_id`,`message`,`week`) values('".$_SESSION['uname']."','$int_gui','$ext_gui','posted by $stu_name: $textnovw1','nov1')" ;
        
        
        mysql_query($msginsert) or die ('Query is invalid: ' . mysql_error());
        
        }
?>
        
        
        
        
        
        
        
        
        
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionnov" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week2nov"><h1>Week 2: 2 - 8</h1></button>
        </h4>
      </div>
      <div id="week2nov" class="panel-collapse collapse">
        <div class="panel-body">
         <div class="container-fluid">
                
                <?php 
                $nov2 = mysql_query("SELECT * FROM intern_review WHERE (int_id='".$_SESSION['uname']."' && week='nov2')  ") or die ('Query is invalid: ' . mysql_error());
                 while ($row2 = mysql_fetch_array($nov2)) {
                 	echo "
 				<ul>".$row2[message]."</ul>
				
				
 				";
                 }
                
                
                ?>
                
                </div>
                
                
                <div class="container-fluid">
 
  <form role="form" action="#" method="post">
    <div class="form-group">
      <label for="text">Text:</label>
      <input type="text" class="form-control" id="text" name="statusnovw2" placeholder="Enter Post">
    </div>
    <button type="submit" name="submitnovw2" class="btn btn-default">Submit</button>
  </form>
</div>
     
     <?php

     $textnovw2 = $_POST['statusnovw2'];
 if(isset($_POST['submitnovw2'])){
        
        $msginsert = "insert into `intern_review` (`int_id`,`g_id`,`e_id`,`message`,`week`) values('".$_SESSION['uname']."','$int_gui','$ext_gui','posted by $stu_name: $textnovw2','nov2')" ;
        
        
        mysql_query($msginsert) or die ('Query is invalid: ' . mysql_error());
        
        }
?>
        
        
        
        
       </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionnov" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week3nov"><h1>Week 3: 9 - 15</h1></button>
        </h4>
      </div>
      <div id="week3nov" class="panel-collapse collapse">
        <div class="panel-body">
        
        
                 <div class="container-fluid">
                
                <?php 
                $nov3 = mysql_query("SELECT * FROM intern_review WHERE (int_id='".$_SESSION['uname']."' && week='nov3')  ") or die ('Query is invalid: ' . mysql_error());
                 while ($row3 = mysql_fetch_array($nov3)) {
                 	echo "
 				<ul>".$row3[message]."</ul>
				
				
 				";
                 }
                
                
                ?>
                
                </div>
                
                <div class="container-fluid">
 
  <form role="form" action="#" method="post">
    <div class="form-group">
      <label for="text">Text:</label>
      <input type="text" class="form-control" id="text" name="statusnovw3" placeholder="Enter Post">
    </div>
    <button type="submit" name="submitnovw3" class="btn btn-default">Submit</button>
  </form>
</div>
     
     <?php

     $textnovw3 = $_POST['statusnovw3'];
 if(isset($_POST['submitnovw3'])){
        
        $msginsert = "insert into `intern_review` (`int_id`,`g_id`,`e_id`,`message`,`week`) values('".$_SESSION['uname']."','$int_gui','$ext_gui','posted by $stu_name: $textnovw3','nov3')" ;
        
        
        mysql_query($msginsert) or die ('Query is invalid: ' . mysql_error());
        
        }
?>
        
        
        
        
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionnov" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week4nov"><h1>Week 4: 16 - 22</h1></button>
        </h4>
      </div>
      <div id="week4nov" class="panel-collapse collapse">
        <div class="panel-body">
         <div class="container-fluid">
                
                <?php 
                $nov4 = mysql_query("SELECT * FROM intern_review WHERE (int_id='".$_SESSION['uname']."' && week='nov4')  ") or die ('Query is invalid: ' . mysql_error());
                 while ($row4 = mysql_fetch_array($nov4)) {
                 	echo "
 				<ul>".$row4[message]."</ul>
				
				
 				";
                 }
                
                
                ?>
                
                </div>
                
                
                <div class="container-fluid">
 
  <form role="form" action="#" method="post">
    <div class="form-group">
      <label for="text">Text:</label>
      <input type="text" class="form-control" id="text" name="statusnovw4" placeholder="Enter Post">
    </div>
    <button type="submit" name="submitnovw4" class="btn btn-default">Submit</button>
  </form>
</div>
     
     <?php

     $textnovw4 = $_POST['statusnovw4'];
 if(isset($_POST['submitnovw4'])){
        
        $msginsert = "insert into `intern_review` (`int_id`,`g_id`,`e_id`,`message`,`week`) values('".$_SESSION['uname']."','$int_gui','$ext_gui','posted by $stu_name: $textnovw4','nov4')" ;
        
        
        mysql_query($msginsert) or die ('Query is invalid: ' . mysql_error());
        
        }
?>
        
        
        
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionnov" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week5nov"><h1>Week 5: 23 - 29</h1></button>
        </h4>
      </div>
      <div id="week5nov" class="panel-collapse collapse">
        <div class="panel-body">
         <div class="container-fluid">
                
                <?php 
                $nov5 = mysql_query("SELECT * FROM intern_review WHERE (int_id='".$_SESSION['uname']."' && week='nov5')  ") or die ('Query is invalid: ' . mysql_error());
                 while ($row5 = mysql_fetch_array($nov5)) {
                 	echo "
 				<ul>".$row5[message]."</ul>
				
				
 				";
                 }
                
                
                ?>
                
                </div>
                <div class="container-fluid">
                
                <?php 
                $ul = mysql_query("SELECT * FROM intern_review WHERE (int_id='".$_SESSION['uname']."' && week='nov5')  ") or die ('Query is invalid: ' . mysql_error());
                 while ($row1 = mysql_fetch_array($ul)) {
                 	echo "
 				<ul>".$row1[message]."</ul>
				
				
 				";
                 }
                
                
                ?>
                
                </div>
        
                
                <div class="container-fluid">
 
  <form role="form" action="#" method="post">
    <div class="form-group">
      <label for="text">Text:</label>
      <input type="text" class="form-control" id="text" name="statusnovw5" placeholder="Enter Post">
    </div>
    <button type="submit" name="submitnovw5" class="btn btn-default">Submit</button>
  </form>
</div>
     
     <?php

     $textnovw5 = $_POST['statusnovw5'];
 if(isset($_POST['submitnovw5'])){
        
        $msginsert = "insert into `intern_review` (`int_id`,`g_id`,`e_id`,`message`,`week`) values('".$_SESSION['uname']."','$int_gui','$ext_gui','posted by $stu_name: $textnovw5','nov5')" ;
        
        
        mysql_query($msginsert) or die ('Query is invalid: ' . mysql_error());
        
        }
?>
        
        
        
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
           <button type="button"  data-toggle="collapse" data-parent="#accordionnov" class="btn btn-info container-fluid" data-toggle="collapse" data-target="#week6nov"><h1>Week 6: 30</h1></button>
        </h4>
      </div>
      <div id="week6nov" class="panel-collapse collapse">
        <div class="panel-body">
         <div class="container-fluid">
                
                <?php 
                $nov6 = mysql_query("SELECT * FROM intern_review WHERE (int_id='".$_SESSION['uname']."' && week='nov6')  ") or die ('Query is invalid: ' . mysql_error());
                 while ($row6 = mysql_fetch_array($nov6)) {
                 	echo "
 				<ul>".$row6[message]."</ul>
				
				
 				";
                 }
                
                
                ?>
                
                </div>
        <div class="container-fluid">
                
                <?php 
                $ul = mysql_query("SELECT * FROM intern_review WHERE (int_id='".$_SESSION['uname']."' && week='nov6')  ") or die ('Query is invalid: ' . mysql_error());
                 while ($row1 = mysql_fetch_array($ul)) {
                 	echo "
 				<ul>".$row1[message]."</ul>
				
				
 				";
                 }
                
                
                ?>
                
                </div>
                <div class="container-fluid">
 
  <form role="form" action="#" method="post">
    <div class="form-group">
      <label for="text">Text:</label>
      <input type="text" class="form-control" id="text" name="statusnovw6" placeholder="Enter Post">
    </div>
    <button type="submit" name="submitnovw6" class="btn btn-default">Submit</button>
  </form>
</div>
     
     <?php

     $textnovw6 = $_POST['statusnovw6'];
 if(isset($_POST['submitnovw6'])){
        
        $msginsert = "insert into `intern_review` (`int_id`,`g_id`,`e_id`,`message`,`week`) values('".$_SESSION['uname']."','$int_gui','$ext_gui','posted by $stu_name: $textnovw6','nov6')" ;
        
        
        mysql_query($msginsert) or die ('Query is invalid: ' . mysql_error());
        
        }
?>
        
        
        
        </div>
      </div>
    </div>
  </div> 
</div>
      
      </div>

       
       <div id="dec" class="tab-pane fade">
      <h1>End Of Sem</h1>
      </div>
      
      
      
      </div>
      
      </div>
       
      
      </div>
      
      </div>
      </div>
    
    <!--  --> 
    
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
</form> -->
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
      
   



</body>
</html>
