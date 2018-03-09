<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Panel</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
<!--sa poip up-->
 <link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
  
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
  <!--sa validate from-->
<script type="text/javascript">
function validateForm()
{

var y=document.forms["login"]["user"].value;
var a=document.forms["login"]["password"].value;
if ((y==null || y==""))
  {
  alert("you must enter your username");
  return false;
  }
  if ((a==null || a==""))
  {
  alert("you must enter your password");
  return false;
  }
 

}
</script>

</head>

<body>
<div class="login">
  <form id="form1" name="login" method="post" action="login.php" onsubmit="return validateForm()">
    <fieldset>
<legend>Admin Login: </legend>
<table>
<tr>
<td>
    <label>UserName</label></td>
     <td> <input type="text" name="user" required autofocus placeholder="User Name" pattern="[a-zA-Z]{2,}" title="User Name should be more than 3 Letters" />
	 </td>
	 </tr>
    
    <tr>
	<td>
      <label>Password</label></td>
	  <td>
      <input type="password" name="password" required autofocus placeholder="Your Password" /></td>
	  </tr>
      
    <tr>
	<td>
   <label>
      <input type="submit" name="Submit" value="login" />
      </label>
    </td>
	<td>
      
	   <a rel="facebox" href=recover.php>Forgot Password? </a></td></tr>
	  </table>
    </fieldset>
  </form>
</div>
</body>
</html>
