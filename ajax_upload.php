<?php
if(isset($_POST['submit'])){
  // echo '<script> alert("'.$_POST['doc']'")</script>';
	//move_uploaded_file();
	foreach($_FILES['doc']['name'] as $key=>$val){
		move_uploaded_file($_FILES['doc']['tmp_name'][$key],'uploads/'.$val);
		//insert into table(image) values('$file');
	}
}
?>
