<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document
</title>
</head>

<body>
<?php
if($_POST['enter']){
include('lib.php');
$name=$_POST['nam'];
$bname=$_POST['bname'];
$cate=$_POST['cat'];
$date=$_POST['dob'];
$blog=$_POST['aas'];



$data=mysql_query("INSERT INTO `readblog` (`Name`,`BlogName`,`category`,`Date`,`Blog`) VALUES
 ('$name','$bname','$cate','$date','$blog')");
 	


	if($data){
	
	
	echo "one row inserted";
		
	header('location:ma.php');
	
	}
	
	}

else{
	
	
	
	header('location:test.php');
	
	
	
	
	}
?>
</body>
</html>