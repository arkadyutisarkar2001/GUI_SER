<?php
if(isset($_POST['submit'])){
 //  echo '<script> alert("'.$_POST['doc'].'")</script>';
	//move_uploaded_file();
	foreach($_FILES['doc']['name'] as $key=>$val){

		move_uploaded_file($_FILES['doc']['tmp_name'][$key],'uploads/'.$val);
    
		//insert into table(image) values('$file');
	}
  shell_exec('python -u "c:\xampp\htdocs\Test\MFCC (1).py"');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>CDAC project</title>
</head>

<body style="background-color: #8EC5FC;background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);">
<?php
$uri= $_SERVER['HTTP_HOST'];
   echo" <nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
        <div class='container-fluid'>
          <a class='navbar-brand' href='#'>Testing</a>
          <div class='collapse navbar-collapse' id='navbarNav'>
          <ul class='navbar-nav'>
            <li class='nav-item'>
              <a class='nav-link active' aria-current='page' href='/'>Back</a>
            </li>
          </ul>
        </div>       
        </div>
      </nav>";
    echo"<div>
        <img class='logo mt-3 ml-3 '  src='cdac.png'width='100px'height='100px'>
       
        <img align='right' class='logo mt-3 mr-3' src='Bp_poddar.png'width='100px'height='100px' >
    </div>
    ";
    
//    //echo"<div class='container'>
//    //<form method='post'class='input-group mb-3'id='myForm'>
//    <input type='file' class='form-control'style='background-color: transparent;' id='myFile'>
//    <button type='submit'>Upload</button>
//  </form>
//  </div>";

//  echo"<div class='container'>
//  <form method='post' enctype='multipart/form-data'>
// 	<input type='file' name='doc[]' multiple/>
// 	<input type='submit' name='submit'/>
// </form>
// </div>";
?>
<div class="container center">
 <form id="upload-form" method="post" enctype="multipart/form-data">
    <input type="file" name="doc[]" id="myFile" directory webkitdirectory multiple>
    <button type="submit" name="submit" id="upload-button">Upload Folder</button>
</from>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



</html>