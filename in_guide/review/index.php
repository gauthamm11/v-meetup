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





$seloption1 = $_POST['inhstur'];
//$seloption2 = $_POST['intstur'];



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
 input{
    text-align:center;
}
 
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
     <img src="../../images/vmeetup/v (1).png" ondragstart="return false" width="200" height="100">
    </div>
   
   
   
   <div class="navbar-header">
     <img src="../../images/vmeetup/v (4).png" class="img-responsive" ondragstart="return false" width="auto" height="auto">
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
    
    <li><a href="../index.php">Home</a></li>
    <li><a href="../profile.php">Profile</a></li>
    <li><a href="../attendance.php">Roster</a></li>
    <li><a href="../account/logout.php">Logout</a></li>
    
  </ul>
</div>
        
      </ul>
    </div>
  </div>
</nav>









<div class="container well">
  <h2><center>REVIEW 1 EVALUATION FORM</center></h2>
  
  
  
  
    
 <br><br>
  
  
  
  
  
  
  
  
  
  <!-- <form class="form-horizontal" role="form"> -->
  <form action="#" method="post" class="form-group form-horizontal">
  <?php 
  
  echo '<h4><b>Student Details:</b></h4>';

  echo '<input type="hidden" class="form-control" id="gid" name="gid" value="'.$_SESSION['uname'].'">';
  echo '<input type="hidden" class="form-control" id="gname" name="gname" value="'.$name.'">';

  
  $q3 = mysql_query("select * from inhouse_student natural join internal_guide where in_id='".$seloption1."'")or die ('Query is invalid: ' . mysql_error());
   
  while ($row2 = mysql_fetch_array($q3)) {
  
  	
  	echo '<b>Name:</b> '.$row2['in_name'].'<br>'.'<b>Reg ID:</b> '.$row2['in_id'].'<br>';echo '<b>Type:</b> Inhouse Student<br>';
  	echo '<b>Project Name: </b>'.$row2['in_pro'].'<br><b>Project Domain:</b> '.$row2['in_domain'].'<br><b>Project Abstract:</b> '.$row2['abstract'];
  	echo '<br><b>VIT Guide:</b> '.$row2['g_name'];
  	echo '<input type="hidden" class="form-control" id="snameinh" name="snameinh" value="'.$row2['in_name'].'">';
  	echo '<input type="hidden" class="form-control" id="sidinh" name="sidinh" value="'.$row2['in_id'].'">';
  	
  }
  
  echo '<br><h3>Status : &nbsp;&nbsp;&nbsp;';
  $q21 = mysql_query("select * from mainreview1statusinhouse where in_id='".$seloption1."'")or die ('Query is invalid: ' . mysql_error());
   
  while ($row2 = mysql_fetch_array($q21)) {
  
  	
  	echo $row2['status'];
  	 
  }
  echo '</h3>';
  
  
  
  
  $q212 = mysql_query("select * from mainreview1 where s_id='".$seloption1."'")or die ('Query is invalid: ' . mysql_error());

  
  
  
  if(mysql_num_rows($q212)>0){
  	echo '<h3>Review Status : Posted</h3>';
  	while ($row222 = mysql_fetch_array($q212)) {
  		echo 
  	
  		
  		
  		
  		
  		
  		'<div class="container-fluid">
  		<div class="table-responsive">
  		<table class="table  table-bordered table-hover">
  		<thead>
  		<tr>
  		<th><center>Sl No.</center></th>
  		<th><center>Component</center></th>
  		<th><center>Reviewer\'s Mark<br>(1-4)</center></th>
  		
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Critical understanding of the research area /Project work:
-Is the objective, technique and problem definition clearly done?
        </td>
        <td>
        <input type="number" class="form-control" readonly value="'.$row222['q1'].'" >
        </td>
  		
      </tr>
    </tbody>
    <tbody>
      <tr>
        <td>2</td>
        <td>
        Analysis / Architectural Design for Proposed System effectively done and summarized?
        </td>
        <td>
        <input type="number"  class="form-control"  readonly value="'.$row222['q2'].'">
        </td>
  		
      </tr>
    </tbody>
    <tbody>
      <tr>
        <td>3</td>
        <td>
        Proposed Algorithms / Techniques in the project , Modules description and its current
        status (Snap shot/ screens if any, etc)
  		
        </td>
        <td>
        <input type="number" class="form-control" readonly value="'.$row222['q3'].'">
        </td>
  		
      </tr>
    </tbody>
    <tbody>
      <tr>
        <td>4</td>
        <td>
        Quality and quantity of work done so far &amp; Action Plan
        </td>
        <td>
        <input type="number"  class="form-control" readonly value="'.$row222['q4'].'" >
        </td>
  		
      </tr>
    </tbody>
    <tbody>
      <tr>
        <td>5</td>
        <td>
        Presentation and Ability to answer questions
        </td>
        <td>
        <input type="number" class="form-control" readonly  value="'.$row222['q5'].'" >
        </td>
  		
      </tr>
    </tbody>
  		
    <tbody>
    <tr>
    <td colspan="2"><br><b><center>Is this a valid project ?</center></b><br></td>
  <td>
  <br>
    <center>
   
		 '.$row222['valid'].'
		
		
		
  </center>
  <br>
  </td>
  		
  </tr>
  		
    </tbody>
    <tbody>
    <tr>
    <td colspan="3">
    <br>
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" readonly>'.$row222['comment'].'</textarea>
  		
  		
    </td>
  		
    </tr>
  		
    </tbody>
   
  </table>
  </div>
</div>';
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  	}	
  }else echo '
  
 
  
  
  
  <br>
  <center>
    Please review the Presentation based on the following criteria (1 to 4):
1- Needs more Improvement, 2- Satisfactory, 3- Good Work, 4- Excellent. <br>
(0 will be awarded if any of the fields is left blank)    
    </center><br><br>
  
    
  
  <div class="container-fluid">
  <div class="table-responsive">          
  <table class="table  table-bordered table-hover">
    <thead>
      <tr>
        <th><center>Sl No.</center></th>
        <th><center>Component</center></th>
        <th><center>Reviewer\'s Mark<br>(1-4)</center></th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Critical understanding of the research area /Project work:
-Is the objective, technique and problem definition clearly done?
        </td>
        <td>
        <input type="number"  name="q1" class="form-control" max="4" min="1">
        </td>
        
      </tr>
    </tbody>
    <tbody>
      <tr>
        <td>2</td>
        <td>
        Analysis / Architectural Design for Proposed System effectively done and summarized?
        </td>
        <td>
        <input type="number"  name="q2" class="form-control" max="4" min="1">
        </td>
        
      </tr>
    </tbody>
    <tbody>
      <tr>
        <td>3</td>
        <td>
        Proposed Algorithms / Techniques in the project , Modules description and its current 
        status (Snap shot/ screens if any, etc)
        
        </td>
        <td>
        <input type="number"  name="q3" class="form-control" max="4" min="1">
        </td>
        
      </tr>
    </tbody>
    <tbody>
      <tr>
        <td>4</td>
        <td>
        Quality and quantity of work done so far &amp; Action Plan
        </td>
        <td>
        <input type="number"  name="q4" class="form-control" max="4" min="1">
        </td>
        
      </tr>
    </tbody>
    <tbody>
      <tr>
        <td>5</td>
        <td>
        Presentation and Ability to answer questions
        </td>
        <td>
        <input type="number" name="q5" class="form-control" max="4" min="1">
        </td>
        
      </tr>
    </tbody>
    
    <tbody>
    <tr>
    <td colspan="2"><br><b><center>Is this a valid project ?</center></b><br></td>
  <td> 
  <br>
    <center>
   <label class="radio-inline"><input type="radio" name="yesno" value="Yes" required>Yes</label>
<label class="radio-inline"><input type="radio" name="yesno" value="No">No</label>
  </center>
  <br>
  </td>
  
  </tr>
    
    </tbody>
    <tbody>
    <tr>
    <td colspan="3">
    <br>
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" id="comments" name="comments" required></textarea>
    
    
    </td>
    
    </tr>
    
    </tbody>
    <tbody>
    <tr>
    <td colspan="3">
    <center>
    <button type="submit" class="btn btn-success" name="submit">Submit</button>
    </center>
    </td>
    </tr>
    </tbody>
  </table>
  </div>
</div>
  </form>';
  
    		?>
  <?php 
  //snameinh
  $sname = $_POST['snameinh'];
  $sid = $_POST['sidinh'];
  $gid = $_POST['gid'];
  $gname = $_POST['gname'];
  $q1 = $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 = $_POST['q3'];
  $q4 = $_POST['q4'];
  $q5 = $_POST['q5'];
  $b = $_POST['yesno'];
  $c = $_POST['comments'];
  
  //INSERT INTO `mainreview1`(`slno`, `s_name`, `s_id`, `g_id`, `g_name`, `time`, `q1`, `q2`, `q3`, `q4`, `q5`, `bestpro`, `comment`) 
  //VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13])
  
  if(isset($_POST['submit'])){
  
  	$msginsert = "insert into `mainreview1` (`s_name`, `s_id`, `g_id`, `g_name`, `q1`, `q2`, `q3`, `q4`, `q5`, `valid`, `comment`, `stype`,`pstatus`)
  	
  	
  	values ('$sname','$sid','$gid','$gname','$q1','$q2','$q3','$q4','$q5','$b','$c','inhouse','Posted')" ;
  
  	mysql_query($msginsert) or die ('<h3>Status has already posted for '.$sname.' - '.$sid.'</h3> ');
  
  	echo '
  
		<a id="gLink" href="../success.php"></a>
  
  
		';
  
  
  }
  
  
  ?>
  
   <script>
    document.getElementById("gLink").click()
</script>
      
      
  

  
  
  
  
  
  
  
  
  
  
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
     <img src="../../images/developers/rajiv.png" onContextMenu="return false;" ondragstart="return false;" alt="Prof. Rajiv Vincent" class="thumbnail img-responsive" style="width:150px;height:150px">
      <p align="center">Prof. Rajiv Vincent<br>Project Head</p> 
    </div>
    <div class="col-sm-4">
        <img src="../../images/developers/maheshwari.png" ondragstart="return false;" onContextMenu="return false;" alt="Prof. Maheshwari" class="thumbnail img-responsive" style="width:150px;height:150px">
        <p align="center">Prof. Maheshwari Ashok<br>Project Head</p>
     
    </div>
    <div class="col-sm-4">
        <img src="../../images/developers/gautham.jpg" ondragstart="return false;" onContextMenu="return false;" alt="Mindala Gautham Asok" class="thumbnail img-responsive" style="width:150px;height:150px">
        <p align="center">Mindala Gautham Asok<br>Key Developer</p>
    </div>
    <div class="col-sm-4">
        <img src="../../images/developers/harish.jpg" ondragstart="return false;" onContextMenu="return false;" alt="Thadakamdla Harish Kumar" class="thumbnail img-responsive" style="width:150px;height:150px">
        <p align="center">Thadakamdla Harish Kumar<br>Marketing</p>
    </div>
    <div class="col-sm-4">
        <img src="../../images/developers/sibhi.png" ondragstart="return false;" onContextMenu="return false;" alt="S Sibhi Kumar" class="thumbnail img-responsive" style="width:150px;height:150px">
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


<?php 
        
        //         	$my_id = mysql_insert_id();
        //         	echo '<li id="item_'.$my_id.'">';
        //         	echo $contentToSave.'</li>';
        
        ?>
        