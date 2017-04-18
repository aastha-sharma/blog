<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body style="background-image:url(pics/img24.jpg); background-size:cover; background-repeat:no-repeat;">
<?php
include('lib.php');
$id2=$_GET['id'];
$data=mysql_query("SELECT * FROM `readblog` WHERE `A_Id` = '$id2' " );
while($row=mysql_fetch_array($data)){
$p=$row['category'];
}
$data1=mysql_query("SELECT * FROM `readblog` WHERE `A_Id` = '$id2' " );
while($row=mysql_fetch_array($data1)){
$q=$row['BlogName'];
}
$data2=mysql_query("SELECT * FROM `readblog` WHERE `A_Id` = '$id2' " );
while($row=mysql_fetch_array($data2)){
$r=$row['Name'];
}
$data3=mysql_query("SELECT * FROM `readblog` WHERE `A_Id` = '$id2' " );
while($row=mysql_fetch_array($data3)){
$s=$row['Date'];
}
$data4=mysql_query("SELECT * FROM `readblog` WHERE `A_Id` = '$id2' " );
while($row=mysql_fetch_array($data4)){
$t=$row['Blog'];
}


?>
<p style="color:#fff;font-size:34px;font-weight:bold;text-align:center;"><?php echo $p;?></p> 
<p style="color:#fff;font-size:30px;font-weight:bold;margin-left:40px; margin-top:70px;"><?php echo $q;?></p> 
<p style="color:#fff;font-size:30px;font-weight:bold;margin-left:40px; margin-top:-1px;"><?php echo $r;?></p> 
<p style="color:#fff;font-size:30px;font-weight:bold;margin-left:40px; margin-top:1px;"><?php echo $s;?></p>
<p align="center"; style="color:#fff;font-size:36px;font-weight:bold;margin-left:20px; margin-top:120px; "><?php echo $t;?></p>  
</body>
</html>