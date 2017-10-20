

<?php 
error_reporting(0);
@ session_start();
if(isset($_SESSION['uname']))
{
header("Location: ../index.php");

}
else{
echo '';
error_reporting(0);
mysql_connect ("localhost","root","gautham") or die ('Cannot connect to MySQL: ' . mysql_error());
mysql_select_db ("v_meetup") or die ('Cannot connect to the database: ' . mysql_error());
?>
		<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8">
<title>v-meet up: Project Submission Portal</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="icon" href="../images/favicon.png" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<!--end of head ; start of body-->
<body class="img-responsive">

<header>
<img src="../images/vmeetup/v (4).png" width="auto" height="120" alt="VIT logo" ondragstart="return false" onContextMenu="return false;">
</header>
<br><br><br><br>
<div class="login-card">

<!-- <h1>Log-in</h1><br>  -->  
    <br><br>
  <form action="#" method="post" name="login_form">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    
   <select name="choiceitem" class="btn btn-default btn-primary dropdown-toggle" required>
  <option value="" selected>Designation</option>
		<option value="intstu">Internship Student</option>
  <option value="inhousestu">Internal Student</option>
		<option value="vitguide">VIT Guide</option>
		<option value="extguide">External Guide</option>
		<option value="proco">Project Coordiantor</option>
  </select>

<input type="submit" name="login" class="login login-submit" value="login">
  </form>
		
<a href="#"  data-toggle="modal" data-target="#myModal">Forgot Password</a>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
 
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        
        </div>
        
        <div class="form-group well">
 <form action="#" method="post">
 
<div>
 <br>
 
 <input type="email" class="form-control" id="usr" name="mail" placeholder="Enter your registered E-mail ID" required>
 <br>
 <div class="center-block">
 <label class="radio-inline">
      <input type="radio" name="optradio" value="inhouse_student">In-house Student
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="intern_student">Internship Student
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="internal_guide">VIT Guide
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" id="myRadio" value="external_guide" required>External Guide
    </label>
    </div>
 <br><br>
  <button class="btn btn-default btn-lg btn-success center-block" type="submit" name="forgot" onclick="myFunction()" aria-haspopup="true" aria-expanded="false">
    Submit 
  </button>
  
  </div>
  
  </form>
</div>
      </div>
      
    </div>
  </div>
		
<?php
$mail = $_POST['mail']; 
$typefg = $_POST['optradio'];
if(isset($_POST['forgot'])){

	//INSERT INTO `v_meetup`.`password_recovery` 
	//(`slno`, `type`, `email`, `time`) VALUES (NULL, '', '', CURRENT_TIMESTAMP);
	
	$msginsert = "insert into `password_recovery` (`type`, `email`) values('$typefg','$mail')" ;


	mysql_query($msginsert) or die ('Query is invalid: ' . mysql_error());


}


?>












		
		<!-- need help-->




		

<a href="#"  class="help" data-toggle="modal" data-target="#myModal2">Need Help</a>

  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
 
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Help</h4>
        
        </div>
        
        <div class="form-group well">
 Give your details correctly
</div>
      </div>
      
    </div>
  </div>

















<!--<span class="help"><a href="#">Need Help ?</a></span>-->
</div>
<script>
function myFunction() {
    var x = document.getElementById("myRadio").required;
  //  document.getElementById("demo").innerHTML = x;
}
</script>

</body>

</html>
		

<?php 
error_reporting(0);


if(isset($_REQUEST['login']))
{

	error_reporting(E_ALL ^ E_DEPRECATED);
	if(isset($_POST["login"]))
	{
		$name=$_POST["username"];
		$pass=$_POST["password"];
		$type=$_POST['choiceitem'];
		$con=mysql_connect("localhost","root","gautham");
		mysql_select_db("v_meetup");
	
		//session_start();
		
		$_SESSION['type']=$type;
		
// 		if($_SESSION['type']=='instu')
// 		{
			
// 		}
		if($type=='intstu')
		{
		$sql="SELECT * FROM intern_student WHERE int_id='".$name."' && int_password='".$pass."'";
		}
		elseif ($type=='inhousestu'){
			$sql="SELECT * FROM inhouse_student WHERE in_id='".$name."' && in_password='".$pass."'";
						}
		elseif ($type=='vitguide'){
			$sql="SELECT * FROM internal_guide WHERE g_id='".$name."' && g_password='".$pass."'";
				
		}
		//proco
		elseif ($type=='proco'){
			$sql="SELECT * FROM vit_officials WHERE off_id='".$name."' && off_password='".$pass."'";
		
		}
		else {
			$sql="SELECT * FROM external_guide WHERE e_id='".$name."' && e_password='".$pass."'";
					}
		
 		$intern_stu="SELECT int_name FROM intern_student WHERE int_id='".$name."'";
		$inhouse_stu="SELECT in_name FROM inhouse_student WHERE in_id='".$name."'";
 		$int_gui="SELECT g_name FROM internal_guide WHERE g_id='".$name."'";
 		$ext_gui="SELECT e_name FROM external_guide WHERE e_id='".$name."'";
 		$off="SELECT off_name FROM vit_officials WHERE off_id='".$name."'";
 		error_reporting(0);
		$rs=mysql_query($sql,$con);
		if(mysql_num_rows($rs)==1)
		{
			$_SESSION["uname"]=$name;
			
	//		echo '<script>window.location.href="../?user='.$name.'";</script>';
			
			
 			if($type=='intstu')
 			{
 				$rs=mysql_query($intern_stu,$con);
 				$nam=mysql_fetch_array($rs);
 				$_SESSION['user']=$nam;
 				echo '<script>window.location.href="../?user='.$nam['int_name'].'";</script>';
 			}
 			elseif ($type=='inhousestu'){
 				$rs=mysql_query($inhouse_stu,$con);
 				$nam=mysql_fetch_array($rs);
 				$_SESSION['user']=$nam;
 				echo '<script>window.location.href="../?user='.$nam['in_name'].'";</script>';
 				
 				
 			}
		elseif ($type=='vitguide'){
 				$rs=mysql_query($int_gui,$con);
 				$nam=mysql_fetch_array($rs);
 				$_SESSION['user']=$nam;
 				echo '<script>window.location.href="../?user='.$nam['g_name'].'";</script>';
 			}
 			elseif ($type=='proco'){
 				$rs=mysql_query($int_gui,$con);
 				$nam=mysql_fetch_array($rs);
 				$_SESSION['user']=$nam;
 				echo '<script>window.location.href="../?user='.$nam['off_name'].'";</script>';
 			}
 			else {
 				$rs=mysql_query($ext_gui,$con);
 				$nam=mysql_fetch_array($rs);
 				$_SESSION['user']=$nam;
 				echo '<script>window.location.href="../?user='.$nam['e_name'].'";</script>';
 			}
		
		
		
		
		
		
		
		
		}
			
		else
		{
	//	echo "<h1>Username or password not correct</h1>";
		
	    echo '
      		
      		<button  type="button"  data-toggle="modal" data-target="#myModalm"  id="myButtonm">
       
    </button>
<style>
      		
      		#myButtonm{
		display: none;
		
		}
      		</style>

    <script>

        $(document).ready(function(){
            document.getElementById("myButtonm").click();
        });

    </script>
      		
      		';
		
	    
	    echo '
				
				<div class="modal fade" id="myModalm" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>
        <div class="modal-body">
          <center>Invalid Login Credentials</center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
				
				
				';
	    
		
		}
	}
}
}
?>





