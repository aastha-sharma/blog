<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="style1.css" type="text/css" rel="stylesheet"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script type="text/javascript">
function myf()
{
	var x=document.forms['myform']['name'].value;
	
	if(x==""||x==null)
	{
		alert("Please enter your name");
		
		return false;
	}
	var y=document.forms['myform']['username'].value;
	
	if(y==""||y==null)
	{
		alert("Please enter username");
		
		return false;
	}
	var q=document.forms['myform']['password'].value;
	
	if(q==""||q==null)
	{
		alert("Please enter password");
		
		return false;
	}
	var z=document.forms['myform']['dob'].value;
	
	if(z==""||z==null)
	{
		alert("Please enter Date of birth");
		
		return false;
	}
	var p=document.forms['myform']['add'].value;
	
	if(p==""||p==null)
	{
		alert("Please enter address");
		
		return false;
	}
}
</script>
</head>

<body>
<div class="slider">
<div class="header"></div>
<h1 align="center" style="color:#FFF; font-size:36px; font-family:Verdana, Geneva, sans-serif;">SET UP YOUR ACCOUNT</h1>
</h1>
<div class="content">
<form  name="myform" action="register.php" method="post" onsubmit="return myf()" enctype="multipart/form-data">
<table cellspacing="25px" cellpadding="5px">
<tbody>
<tr>
<td><p style="font-family:Verdana, Geneva, sans-serif; font-size:24px;">NAME:</p></td>
<td><input style="width:200px;; height:20px;" type="text" name="name" placeholder="enter your name" /><br/>
</td>
</tr>
<tr>
<td><p style="font-family:Verdana, Geneva, sans-serif; font-size:24px;">USERNAME:</p></td>
<td><input style="width:200px;; height:20px;"type="text" name="username" placeholder="username" /><br/>
</td>
</tr>
<tr>
<td><p style="font-family:Verdana, Geneva, sans-serif; font-size:24px;">GENDER:</p></td>
<td>MALE<input type="radio" name="gender" value="Male"/>
FEMALE<input type="radio" name="gender" value="Female"/><br/>
</td>
</tr>
<tr>
<td><p style="font-family:Verdana, Geneva, sans-serif; font-size:24px;">PASSWORD:</p></td>
<td><input style="width:200px;; height:20px;"type="password" name="pass" placeholder="enter your password" /><br/>
</td>
</tr>
<tr>
<td><p style="font-family:Verdana, Geneva, sans-serif; font-size:24px;">DATE OF BIRTH:</p></td>
<td><input style="width:200px; height:20px;"type="date" name="dob" placeholder="enter your date of birth" /><br/>
</td>
</tr>
<tr>
<td><p style="font-family:Verdana, Geneva, sans-serif; font-size:24px;">CITY:</p></td>
<td>
<select  name="city" style="width:200px; height:20px;">
<option value="chd">CHANDIGARH</option>
<option value="jal">JALANDHER</option>
<option value="lud">LUDHIANA</option>
<option value="amr">AMRITSAR</option>
<option value="moh">MOHALI</option>
</select><br/>
</td>
</tr>
<tr>
<td><p style="font-family:Verdana, Geneva, sans-serif; font-size:24px;">ADDRESS:</p></td>
<td><textarea name="add" rows="3" cols="26" placeholder="full address">
</textarea>
</td>
</tr>
<tr>
<td><p style="font-family:Verdana, Geneva, sans-serif; font-size:24px;">PROFILE PIC:</p></td>
<td><input type="file" name="doc"/>
</td>
</tr>
<tr>
<td><input type="reset" value="RESET" /></td>
<td><input type="submit" value="SUBMIT"  name="submit"/></td>
</tr>
</tbody>
</table>
</form>
</body>
</html>
