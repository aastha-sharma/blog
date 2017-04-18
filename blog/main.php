<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="style4.css" type="text/css" rel="stylesheet"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="jquery-3.0.0.js"></script>
<script type="text/javascript" src="script.js"></script>

</head>

<body style="background-image:url(pics/abg.jpg); background-size:100% 100%;">
<?php
include('lib.php');
$id=$_GET['id'];
$data1=mysql_query("SELECT * FROM `bloggers` WHERE `id` = '$id' " );
while($row=mysql_fetch_array($data1)){
$p=$row['Name'];
}

?>
<div class="main">
<div class="header">
<div class="image1">
<?php 
$data2=mysql_query("SELECT * FROM `bloggers` WHERE `id` = '$id' " );
while($row=mysql_fetch_array($data2)){
echo '<img src="Uploads/'.$row['Pic'].'"  />'; 
}
?>
</div>
<p style="color:#fff;font-size:14px;font-weight:bold;margin-left:-80px; margin-top:30px;"><?php echo $p;?></p> 
<div id="logo"><p style="font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size:64px; color:#fff; margin-top:6px;margin-left:60px;">aeternum</div>
<div class="nav">
<ul>
<li id="home"><a  style="font:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font:#fff;font-size:22px;" href="#">Home</a></li>
<li id="genre"><a href="#">Genre</a></li>
<li id="crew"><a href="#">Our Team</a></li>
<li id="timeline"><a href="#">Timeline</a></li>
<li id="contact"><a href="#">Contact Us</a> </li>
</ul>
</div>
<a style="font-family:Verdana, Geneva, sans-serif; font-size:21px; float:right; color:#fff; margin-top:55px; ;margin-right:-390px; text-decoration:none;" href="logout.php">Logout</a>;
</div>
<div class="home">
<div class="content-left">
<p style="font-size:24px; font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif;">Our Vision</p>
<br/><br/>
<h4>The most important sentence in any article is the first one. If it doesn’t induce the reader to proceed to the second sentence, your article is dead. And if the second sentence doesn’t induce him to continue to the third sentence, it’s equally dead. Of such a progression of sentences, each tugging the reader forward until … safely hooked, a writer constructs that fateful unit: the lead.Here at aterneum we provide exactly that,if you have the will to write well,you have come to the right place.veryone deserves a space where they can feel safe & deeply connected to knowledge.</h4>
 <p style="font-weight:bold; font-size:28px;">A platform where every story matters, where everyone is empowered to explore, write, inspire and create magic!</p>
</div>

<div class="content-right">

<br/>

<iframe width="900" height="650" src="https://www.youtube.com/embed/9d8wWcJLnFI?modestbranding=1&autohide=1&showinfo=0&controls=0" frameborder="0" allowfullscreen></iframe>
</div>
</div>
<div class="genre">
<br/>
<?php
$data2=mysql_query("SELECT * FROM `genrecategory`  " );
while($row=mysql_fetch_array($data2)){
	echo "<div class='box'>";
	echo "<p align='center'> <a href='genre.php?id=".$row["g_id"]."' target='_blank' style='color:#fff; text-decoration:none;'> '".$row["category"]."'";
    echo "</a></p></div>";
 
}
?>
</div>
<div class="crew">
<p style="font-size:24px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our Team</p>
<p><br/></p>
<div class="c_left">
<p style="font-size:18px;"><u>Founder & Chief Executive Officer</u></p>
<img src="pics/img7.jpg" style="height:430px; width:232px;"/>
<p style="font-size:18px;">Aastha Sharma</p>
</div>
<div class="c_right">
<div class="pic">
<p style="font-size:20px;font-weight:bold; align-content:center;">Aayush</p><p style="font-size:20px;font-weight:bold;">(Publisher)</p>
<img src="pics/img6.jpg"/>
</div>
<div class="pic">
<p style="font-size:20px;font-weight:bold;align-content:center;">Divya</p><p style="font-size:20px;font-weight:bold;">(Design Creative)</p>
<img src="pics/img8.jpg"/>
</div>
<div class="pic">
<p style="font-size:20px;font-weight:bold;align-content:center;">Rahul</p><p style="font-size:20px;font-weight:bold;">(Cofounder)</p>
<img src="pics/img10.jpg" />
</div>
<div class="pic">
<p style="font-size:20px;font-weight:bold;">Soochit</p><p style="font-size:20px;font-weight:bold;">( Researcher)</p>
<img src="pics/img9.jpg" />
</div>
<div class="pic">
<p style="font-size:20px;font-weight:bold;align-text:center;">vivan</p><p style="font-size:20px;font-weight:bold;">(Editor)</p>
<img src="pics/img12.jpg" />
</div>
<div class="pic">
<p style="font-size:20px;font-weight:bold;">Shashank</p><p style="font-size:20px;font-weight:bold;">(Writer)</p>
<img src="pics/img15.jpg" />
</div>
<div class="pic">
<p style="font-size:20px;font-weight:bold;">Rohit</p><p style="font-size:20px;font-weight:bold;">(Writer)</p>
<img src="pics/img11.jpg" />
</div>
<div class="pic">
<p style="font-size:20px;font-weight:bold;">Shantanu</p><p style="font-size:20px;font-weight:bold;">(Editor)</p>
<img src="pics/img23.jpg" />
</div>
</div>
</div>
<div class="timeline">
<br /><br/>
<div class="ver" style="position:relative; left:48%; height:1000px; width:12px;background-color:#fff;">
<?php

$data11=mysql_query("SELECT * FROM `readblog` ORDER BY Date DESC limit 5");
	
while($row=mysql_fetch_array($data11)){
	
echo"<div class='b'>";
echo "<p align='center'> <a href='read.php?id=".$row["A_Id"]."' target='_blank' style='color:#fff; text-decoration:none;'> 
'".$row["BlogName"]."";
echo"</a></p>";
echo "<p align='center'><a href='read.php?id=".$row["A_Id"]."' target='_blank' style='color:#fff; text-decoration:none;'> 
'".$row["Date"]."";
    echo "</p></div>";
	
	
}
?>

</div>
</div>
<div class="contact">
<div class="content-left">
<h1>Contact Us</h1>
<p><br/></p>
<p style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif;font-size:18px;text-align: left;font:#fff;">For any Queries <br/>Contact Us at:</p>
<p><br/></p>
<h4>Jaypee University of Information Technology </h4>
<h4> Waknaghat, Himachal Pradesh 173234</h4>
<br/><br/>
<h5 style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif;font-size: 18px;font:#fff;">Call us at:</h5>
<h4>+9198888-92718, +9198889-02718</h4>
 <br/><br/>
<h5 style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif;font-size: 18px;font:#fff;">Mail us at:</h5>
<h4>aeternum@gmail.com</h4>
</div>

<div class="content-right">

<br/>
<p style="font-size:24px; font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif;">Our Office Location</p>
<br/><br/>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13677.392228105919!2d77.070159!3d31.016551!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4f4fefd65caa0317!2sJaypee+University+of+Information+Technology!5e0!3m2!1sen!2sin!4v1479906723296" width="900" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
</div>
</div>
</body>
</html>
