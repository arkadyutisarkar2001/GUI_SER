<?php
iif(isset($_POST['submit'])){
   echo '<script> alert("'.$_POST['doc']'")</script>'
	//move_uploaded_file();
	foreach($_FILES['doc']['name'] as $key=>$val){
		$rand=rand('11111111','99999999');
		$file=$rand.'_'.$val;
		move_uploaded_file($_FILES['doc']['tmp_name'][$key],'uploads/'.$file);
		//insert into table(image) values('$file');
	}
?>
