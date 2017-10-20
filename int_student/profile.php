 <?php
@ session_start(); 
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
    <li class="active"><a data-toggle="tab" href="#home">Profile</a></li>
    <li><a data-toggle="tab" href="#menu1">Guides Profile</a></li>
    <li><a data-toggle="tab" href="#menu2">Update Profile</a></li>
   
    </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      
    <h1>Profile:</h1>
      <p>
      
      
        <?php 
  $det = mysql_query("select * from intern_student where int_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());
while ($row = mysql_fetch_array($det)) {
echo "Name: ".$row['int_name']."<br> "."Reg ID:".$row['int_id']."<br> "."E-Mail: ".$row['int_email']."<br> "."Mobile: ".$row['int_mobile']."<br><br>";
}
  
  ?>
      </p>
      
      <h1>Project Details:</h1>
      <p>
      
      
        <?php 
  $det2 = mysql_query("select * from intern_student where int_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());
while ($row = mysql_fetch_array($det2)) {
echo "Project Title: ".$row['int_pro']."<br> "."Project Domain: ".$row['int_domain']."<br> "."Abstract: ".$row['abstract']."<br><br>";
}
  
  ?>
      </p>
      <br><br>
      
      <h3>Upload your Abstract</h3>
      
         <form action="#" method="post" enctype="multipart/form-data">
<p>
<label for="file">Select a file:</label> <input type="file" name="userfile" id="file"> <br />
<button>Upload File</button>
<p>
</form>
      
      
      
   <?php
  
   $target_path = "abstract/";
   $target_path = $target_path . basename( $_FILES['userfile']['name']);
   //for upload file this function we use
   if(move_uploaded_file($_FILES['userfile']['tmp_name'], $target_path)) {
   	echo "The file ". basename( $_FILES['userfile']['name']).
   	" has been uploaded";
   } else{
   	echo "";
   }
   
   
   
   
?>
    </div>
    
    <div id="menu1" class="tab-pane fade">
    
<!--      select * from intern_student natural join internal_guide where int_id='14mcb1001'; -->
    <h1>
    VIT Guide:
    </h1>
    <p>
    <?php 
    
    $vit = mysql_query("select * from intern_student natural join internal_guide where int_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());
    while ($row = mysql_fetch_array($vit)) {
    	echo "Name: ".$row['g_name']."<br> "."Faculty ID:".$row['g_id']."<br> "."E-Mail: ".$row['g_mail']."<br> "."Cabin: ".$row['g_cabin']."<br><br>";
    }
    
    ?>
    
    </p>
    <h1>
    Internship Guide:
    </h1>
    <p>
    <?php 
    $vit2 = mysql_query("select * from intern_student natural join external_guide where int_id='".$_SESSION['uname']."'")or die ('Query is invalid: ' . mysql_error());
    while ($row = mysql_fetch_array($vit2)) {
    	echo "Name: ".$row['e_name']."<br> "."Company: ".$row['e_company']."<br> "."E-Mail: ".$row['e_mail']."<br> "."Mobile: ".$row['e_mobile']."<br><br>";
    }
    
    ?>
    </p>
    
    </div>
    
    
    
    <div id="menu2" class="tab-pane fade">
          
    
    
    <div class="container-fluid">
  <h2>Profile:</h2>
  <form class="form-horizontal" role="form" method="post" action="#">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" 
        
        value="<?php 
$formname = mysql_query("SELECT int_name FROM intern_student where int_id='".$_SESSION['uname']."'") or die ('Query is invalid: ' . mysql_error());
while ($row = mysql_fetch_array($formname)) {
echo $row['int_name'];
}?>">
        
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="mail" placeholder="Enter email" 
        
        value="<?php 
$formmail = mysql_query("SELECT int_email FROM intern_student WHERE int_id='".$_SESSION['uname']."'") or die ('Query is invalid: ' . mysql_error());
while ($row = mysql_fetch_array($formmail)) {
echo $row['int_email'];
}?>">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="mobile">Mobile:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile" 
        value="<?php 
$formmobile = mysql_query("SELECT int_mobile FROM intern_student WHERE int_id='".$_SESSION['uname']."'") or die ('Query is invalid: ' . mysql_error());
while ($row = mysql_fetch_array($formmobile)) {
echo $row['int_mobile'];
}?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password" 
        value="<?php 
$formpass = mysql_query("SELECT int_password FROM intern_student WHERE int_id='".$_SESSION['uname']."'") or die ('Query is invalid: ' . mysql_error());
while ($row = mysql_fetch_array($formpass)) {
echo $row['int_password'];
}?>">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="show">Show Password:</label>
      <div class="checkbox col-xs-4">          
        <input type="checkbox"  id="show" name="show" onchange="document.getElementById('pwd').type=this.checked ? 'text' : 'password' "> 
      
      </div>
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-2" for="abs">Abstract:</label>
      <div class="col-sm-10">          
        <textarea class="form-control" id="abs" name="abs" rows="5" placeholder="Enter Abstract" 
        ><?php 
$formabs = mysql_query("SELECT abstract FROM intern_student WHERE int_id='".$_SESSION['uname']."'") or die ('Query is invalid: ' . mysql_error());
while ($row = mysql_fetch_array($formabs)) {
echo $row['abstract'];
}?></textarea>
        
      </div>
    </div>
     
    
    
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <!--button type="submit" class="btn btn-default btn-success center-block">Update</button-->
        <input type="submit" class="btn btn-default btn-success center-block" value="Update" name="submit">
        
      </div>
    </div>
  </form>
</div>
    
    
      </div>


       
       
       
       
       
       
       
       
       
   



<?php 
if(isset($_POST["submit"]))
{
// Get values from form
$name = $_POST['name'];
$mail = $_POST['mail'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$abs = $_POST['abs'];

//update guide set gmail='rajiv.vincent1', gname='rajiv' where gid='1';

//inserting data order
// $order = "INSERT INTO internal_guide
// (g_name, g_mail, g_password,g_designation,g_intercom,g_cabin,g_mobile)
// VALUES
// ('$name','$mail','$password','$designation','$intercom','$cabin','$mobile')";

$order = "update intern_student set 
	int_name='$name', int_email='$mail', int_password='$password',int_mobile='$mobile',abstract='$abs'
			where int_id='".$_SESSION['uname']."'
			";

mysql_query($order) or die ('Query is invalid: ' . mysql_error());

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

      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
</body>
</html>

 