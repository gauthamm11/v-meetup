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






error_reporting(0);
//connect to the database
mysql_connect ("localhost","root","gautham") or die ('Cannot connect to MySQL: ' . mysql_error());
mysql_select_db ("v_meetup") or die ('Cannot connect to the database: ' . mysql_error());



?>




<?php
if(isset($_GET['id'])) 
{
// if id is set then get the file with the id from database
$id    = $_GET['id'];
$query1 = "SELECT name, type, size, content " .
         "FROM upload WHERE id = '$id'";

$result1 = mysql_query($query1) or die('Error, query failed');
list($name, $type, $size, $content) =      mysql_fetch_array($result1);

header("Content-length: $size");
header("Content-type: $type");
header("Content-Disposition: attachment; filename=$name");
echo $content;

 
exit;
}

?>