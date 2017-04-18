<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script type="text/javascript">
function myf()
{
	var x=document.forms['myform']['nam'].value;
	
	if(x==""||x==null)
	{
		alert("Please enter author's name");
		
		return false;
	}
	var y=document.forms['myform']['bname'].value;
	
	if(y==""||y==null)
	{
		alert("Write a nme for your blog");
		
		return false;
	}
	var z=document.forms['myform']['dob'].value;
	
	if(z==""||z==null)
	{
		alert("Please enter Date");
		
		return false;
	}
	var p=document.forms['myform']['aas'].value;
	
	if(p==""||p==null)
	{
		alert("Please enter content for your blog");
		
		return false;
	}
}
</script>

 </head>

<body style="background-image:url(pics/img16.jpg); background-size:100% 100%; background-repeat:no-repeat;">
<?php
include('lib.php');
$id=$_GET['id'];
$data4=mysql_query("SELECT * FROM `genrecategory` WHERE `g_id` = '$id' " );
while($row=mysql_fetch_array($data4)){
	$x=$row['category'];
}
?>
<form  name="myform" action="add.php" method="post" onSubmit="return myf()" enctype="multipart/form-data ">
<table cellspacing="25px" cellpadding="5px">
<tbody>
<tr>
<td><p style="font-family:Verdana, Geneva, sans-serif; font-size:24px;">NAME:</p></td>
<td><input style="width:200px;; height:20px;" type="text" name="nam" placeholder="enter your name" /><br/>
</td>
</tr>
<tr>
<td><p style="font-family:Verdana, Geneva, sans-serif; font-size:24px;">TITLE:</p></td>
<td><input style="width:200px;; height:20px;" type="text" name="bname" placeholder="blog name" /><br/>
</td>
</tr>
<tr>
<td><p style="font-family:Verdana, Geneva, sans-serif; font-size:24px;">CATEGORY:</p></td>
<td><input style="width:200px;; height:20px;" type="text" name="cat" readonly value=<?php echo $x;?> /><br/>
</td>
</tr>
<tr>
<td><p style="font-family:Verdana, Geneva, sans-serif; font-size:24px;">DATE :</p></td>
<td><input style="width:200px; height:20px;"type="date" name="dob" placeholder="enter date" /><br/>
</td>
</tr>
<tr>
<td></td>
<td>
<label><p style="font-family:Verdana, Geneva, sans-serif; font-size:24px;">WRITE BLOG:</p></label>
<textarea name="aas" rows="150" cols="150"></textarea><br/>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" value="Submit" name="enter" style="width:150px; height:30px;font-size:24px;" /></td></tr>
</form>
</tbody>
</table>

</body>
</html>