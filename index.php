<?php
@ session_start(); 

if(!isset($_SESSION['uname']))
{
	//echo '<script>window.location.href="account/login.php?status=login-required"</script>';
	//die();
	header("Location: account/login.php");
	
	
	
	
	
}else{
	echo '<a href="account/logout.php">Logout</a>';

	if($_SESSION['type']=='intstu')
	 		{
	 			header("Location: int_student/index.php");
	}
	elseif ($_SESSION['type']=='inhousestu')
	 		{
	 			header("Location: in_student/index.php");
	}
	elseif ($_SESSION['type']=='vitguide')
	{
		header("Location: in_guide/index.php");
	}
	elseif ($_SESSION['type']=='proco')
	{
		header("Location: coordinator/index.php");
	}
	else
	{
		header("Location: ext_guide/index.php");
	}

}
?>


