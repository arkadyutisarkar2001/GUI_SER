<?php

$emotion=$_POST["emo"];
$cmd="python -u \"c:/xampp/htdocs/MFCC (1).py\" $emotion";
//echo "<script>console.log('Debug Objects: " . $emotion . "' );</script>";
shell_exec($cmd);
		//insert into table(image) values('$file');
	 

?>
