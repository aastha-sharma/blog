<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body style="background-image:url(pics/img22.jpg); background-size:cover; background-repeat:no-repeat;">
<?php
include('lib.php');
$id1=$_GET['id'];
$data3=mysql_query("SELECT * FROM `genrecategory` WHERE `g_id` = '$id1' " );
while($row=mysql_fetch_array($data3)){
$p=$row['category'];
}


?>

<p align="center" style="color:#fff;font-size:34px;font-weight:bold; margin-top:30px;"><?php echo $p;?></p>
<p style="font-family:Verdana, Geneva, sans-serif; font-size:34px; color:#FFF;">
<?php

$data=mysql_query("SELECT * FROM `readblog` WHERE `category` ='$p' " );


if($data)
{
	
		echo "<table  class='table1' align='center' cellpadding='10px' cellspacing='40px'  bordercolor='#fff' >";

echo "<tr>";
	echo "<td style='color:#FFF; font-family:Verdana, Geneva, sans-serif; font-size:34px;'>Author</td>";
	echo "<td style='color:#FFF; font-family:Verdana, Geneva, sans-serif; font-size:34px;'>Blog</td>";
	echo "<td style='color:#FFF; font-family:Verdana, Geneva, sans-serif; font-size:34px;'>Date</td>";
	echo "</tr>";
	
while($row=mysql_fetch_array($data))
{
	echo "<tr>";
	echo "<td style='color:#fff;'>".$row['Name']."</td>";
	echo"<td style='color:#fff;'>".$row['BlogName'].'" </td>';
	echo "<td style='color:#fff;'>".$row['Date']."</td>";
	echo '<td ><a style="color:#55EDF4;text-decoration:none" href="read.php?id='.$row['A_Id'].'">Read</a></td>';
    echo "</tr>";

	
	}
	
echo "</table>";
}
else
{
echo"<p style='font-family:Verdana, Geneva, sans-serif; font-size:34px; color:#FFF;'>";
echo"No Blog In This Category";
echo"</p>";

}

?>
<?php
echo'<a href="blog.php?id='.$id1.'" style="text-decoration:none;color:#fff;">';
echo '<p style="font-family:Verdana, Geneva, sans-serif; font-size:28px; color:#FFF;">';
echo "Write a Blog";
echo "</a></p>";
?>
</body>
</html>`