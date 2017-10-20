upload ppt in stu

<!--  <form method='post' enctype='multipart/form-data' action='#'> -->
<!--     File: <input type='file' name='file_upload'> -->
<!--     <input type='submit'> -->
<!-- </form> -->
      
      <form action="#" method="post" enctype="multipart/form-data">
<p>
<label for="file">Select a file:</label> <input type="file" name="userfile" id="file"> <br />
<button>Upload File</button>
<p>
</form>
      
      
      
   <?php
  
   $target_path = "upload/";
   $target_path = $target_path . basename( $_FILES['userfile']['name']);
   //for upload file this function we use
   if(move_uploaded_file($_FILES['userfile']['tmp_name'], $target_path)) {
   	echo "The file ". basename( $_FILES['userfile']['name']).
   	" has been uploaded";
   } else{
   	echo "There was an error uploading the file, please try again!";
   }
   
   
   
   
?>





















   <h3>Upload Abstract</h3><br>
      
<form method="post" enctype="multipart/form-data">

<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
<input name="userfile" type="file" id="userfile"> 
<input name="upload" type="submit" class="box" id="upload" value="Upload">
</form>
    
    <?php 
    if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
    {
    	$fileName = $_FILES['userfile']['name'];
    	$tmpName  = $_FILES['userfile']['tmp_name'];
    	$fileSize = $_FILES['userfile']['size'];
    	$fileType = $_FILES['userfile']['type'];
    
    	$fp      = fopen($tmpName, 'r');
    	$content = fread($fp, filesize($tmpName));
    	$content = addslashes($content);
    	fclose($fp);
    
    	if(!get_magic_quotes_gpc())
    	{
    		$fileName = addslashes($fileName);
    	}
   
    	$query = "INSERT INTO upload (name, size, type, content ) ".
    			"VALUES ('$fileName', '$fileSize', '$fileType', '$content')";
    
    	mysql_query($query) or die('Error, query failed');
    	
    
    	echo "<br>File $fileName uploaded<br>";
    }
    
    
    ?>
    
    
    
    
    
    <!--  -->
    
    <?php

$query1 = "SELECT id, name FROM upload";
$result1 = mysql_query($query1) or die('Error, query failed');
if(mysql_num_rows($result1) == 0)
{
echo "Database is empty <br>";
} 
else
{
while(list($id, $name) = mysql_fetch_array($result1))
{
?>
<a href="download.php?id=<?php $id; ?>"><?php $name;?></a> <br>
<?php 
}
}

?>
    
    