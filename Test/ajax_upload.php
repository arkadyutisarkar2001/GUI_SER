<?php
if(isset($_POST['submit'])){
	//move_uploaded_file();
	foreach($_FILES['doc']['name'] as $key=>$val){
	      
		move_uploaded_file($_FILES['doc']['tmp_name'][$key],'uploads/'.$val);
		//shell_exec('python -u "c:\xampp\htdocs\Test\MFCC (1).py"');
		//insert into table(image) values('$file');
	}
}
?>
