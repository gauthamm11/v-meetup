<?php
@ session_start();
error_reporting(0);
//include db configuration file



$username = "root"; //mysql username
$password = "gautham"; //mysql password
$hostname = "localhost"; //hostname
$databasename = 'v_meetup'; //databasename

$connecDB = mysql_connect($hostname, $username, $password)or die('could not connect to database');
mysql_select_db($databasename,$connecDB);


$optionl = $_POST["pid"];
$op = $_POST["comment"];

if(isset($_POST["msgpost"]))
{
	//$contentToSave = filter_var($_POST["content_txt"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

        
        $msginsert = "INSERT INTO `inhouse_review` (`in_id`, `g_id`, `message`) VALUES('$optionl','".$_SESSION['uname']."','.$op')" ;
        
        
       //INSERT INTO `inhouse_review`(`slno`, `in_id`, `g_id`, `time`, `message`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])
        

        if(mysql_query($msginsert))
        {
//         	$my_id = mysql_insert_id();
//         	echo '<li id="item_'.$my_id.'">';
//         	echo $contentToSave.'</li>';
        	header("Location: ../index.php");
        }


        mysql_query($msginsert) or die ('Query is invalid: ' . mysql_error());
}
        
 
?>