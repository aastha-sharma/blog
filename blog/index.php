<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="style2.css" rel="stylesheet" type="text/css"/>
<script>
  function preventBack()
  {window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
</script>
</head>

<body>
<div class="content-left">
<p style=" margin-top:300px; margin-left:120px; font-size:32px; color:#fff; font-weight:bold;">Share knowledge in the most<br/> beautiful way on aeternum</p>
<h1 style="margin-left:120px; margin-top:30px; color:#fff;">Login</h1>
<form action="login.php" method="post" enctype="multipart/form-data">
<br/>
<label style="margin-left:120px">User Id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input type="text" name="username" placeholder="username"/>
<br/>
<br/>
<label style="margin-left:120px">Password&nbsp;&nbsp;</label>
<input type="password" name="password" placeholder="password" />
<br/><br/>
<input type="submit"  name="submit" style="margin-left:195px;" value="Login"  /><br/><br/>
</form>
<p style="margin-left:185px">New User?<a  style="font:#200874; color:#05175E;;"href="form.php">Register Here</p>
</a>
<p>&nbsp;</p><br/><br/><br/>
<pre style="font-size:15px; color:#fff; font-weight:bold; margin-left:40px;">
<a href="policy.php" target="_blank" >Private Policy</a>  <a href="terms.php" target="_blank">Terms of Services</a>  <a href="about.php" target="_blank">About</a>  <a href="help.php" target="_blank">Help </a> <a href="index.php" target="_blank">@Aeternum Private Limited</a>
</pre>
</div>
<div class="content-right">
<img src="pics/img2.jpg"/>
</div>
</body>
</html>