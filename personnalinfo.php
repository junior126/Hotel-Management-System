<?php
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>New User</title>

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
<!--sa show content of text java script-->
<script language="javascript" type="text/javascript">
function showHide(shID) {
	if (document.getElementById(shID)) {
		if (document.getElementById(shID+'-show').style.display != 'none') {
			document.getElementById(shID+'-show').style.display = 'none';
			document.getElementById(shID).style.display = 'block';
		}
		else {
			document.getElementById(shID+'-show').style.display = 'inline';
			document.getElementById(shID).style.display = 'none';
		}
	}
}
</script>
<style type="text/css">
	

	/* This CSS is used for the Show/Hide functionality. */
	.more {
		display: none;
		border-top: 1px solid #666;
		border-bottom: 1px solid #666; }
	a.showLink, a.hideLink {
		text-decoration: none;
		color: #36f;
		padding-left: 8px;
		background: transparent url(down.gif) no-repeat left; }
	a.hideLink {
		background: transparent url(up.gif) no-repeat left; }
	a.showLink:hover, a.hideLink:hover {
		border-bottom: 1px dotted #36f; }
.style5 {color: #FF9900}
a:link {
	color: #0000FF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
	color: #FFFF00;
}
a:active {
	text-decoration: none;
}
 #errmsg { color:red; }
 #errmsg1 { color:red; }
</style>


<script type="text/javascript">
function validateForm()
{

var y=document.forms["personal"]["cname"].value;
var a=document.forms["personal"]["surname"].value;
var z=document.forms["personal"]["customerid"].value;
var b=document.forms["personal"]["address"].value;
var e=document.forms["personal"]["country"].value;
var f=document.forms["personal"]["username"].value;
var g=document.forms["personal"]["cusername"].value;
var x=document.forms["personal"]["cellphone"].value;
var i=document.forms["personal"]["password"].value;
var atpos=f.indexOf("@");
var dotpos=f.lastIndexOf(".");

if ((a=="Surname" || a=="") || (b=="Address" || b=="") || (e=="Country" || e=="") || (f=="Email" || f=="") || (g=="Confirm Email" || g=="")|| (x=="Contact Number" || x=="") || (y=="Firstname" || y=="") || (i=="Password" || i=="") || (z=="Customer ID" || z=="") )
  {
  alert("all field are required!");
  return false;
  }
  
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=f.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
if( f != g ) {
alert("Email does not match");
  return false;
} 

 
if (document.personal.condition.checked == false)
{
alert ('Please agree the term and condition of this hotel');
return false;
}
else
{
return true;
}
}
</script>
<script type="text/javascript">
function validateForm1()
{
var r=document.forms["log"]["username"].value;
var g=document.forms["log"]["password"].value;
var atpos=r.indexOf("@");
var dotpos=r.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=r.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }  

if ((a==null || a==""))
  {
  alert("please enter your password");
  return false;
  }
}
</script>

<!--sa watermark-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.watermarkinput.js"></script>
<script type="text/javascript">
jQuery(function($){
   $("#cname").Watermark("Firstname");
   $("#surname").Watermark("Lastname");
   $("#gender").Watermark("gender");
   $("#customerid").Watermark("South African ID");
   
   $("#address").Watermark("Fill in your Address");
   $("#country").Watermark("Country");
   $("#username").Watermark("Email");
   $("#cusername").Watermark("Confirm Email");
   $("#cellphone").Watermark("Contact Number");
   $("#password").Watermark("Password");
   $("#em").Watermark("Email Address");
   $("#pass").Watermark("Password");
   });
</script>

<!--sa input that accept number only-->
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    
    //called when key is pressed in textbox
	$("#customerid").keypress(function (e)  
	{ 
	  //if the letter is not digit then display error and don't type anything
	  if( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57))
	  {
		//display error message
		$("#errmsg").html("Number Only").show().fadeOut("slow"); 
	    return false;
      }	
	});
	$("#cellphone").keypress(function (a)  
	{ 
	  //if the letter is not digit then display error and don't type anything
	  if( a.which!=8 && a.which!=0 && (a.which<48 || a.which>57))
	  {
		//display error message
		$("#errmsg1").html("Number Only").show().fadeOut("slow"); 
	    return false;
      }	
	});

  });
  </script>


</head>

<body>
<div style="display:none;">
<?php

	
	$arival = $_POST['start'];
	$departure = $_POST['end'];
	$adults = $_POST['adult'];
	$child = $_POST['child'];	
	$no_rooms = $_POST['no_rooms'];
	$roomid = $_POST['roomid'];
	$result = $_POST['result'];
	
?>
</div>
<div class="mainwrapper">
  <div class="leftother">
    <div class="l"></div>
	<div class="r">
	
	
	
	
	<div class="right3">
  <div style="float: left; margin-left: 25px; margin-top: 12px; font-family:Arial, Helvetica, sans-serif;">
  
 
  <br />
 
            <a href="#" id="example-show" class="showLink" onclick="showHide('example');return false;" >login</a>
            </p>
            <div id="example" style="border-top-width: 0px; border-bottom-width: 0px;" class="more">
              <div class="f" style="margin-left: 5px;">
			  <form action="payment1.php" method="post" style="height: 89px; margin-top: -31px;" onsubmit="return validateForm1()" name="log">
  <input name="start" type="hidden" value="<?php echo $arival; ?>" />
  <input name="end" type="hidden" value="<?php echo $departure; ?>" />
  <input name="adult" type="hidden" value="<?php echo $adults; ?>" />
  <input name="child" type="hidden" value="<?php echo $child; ?>" />
  <input name="n_room" type="hidden" value="<?php echo $no_rooms; ?>" />
  <input name="rm_id" type="hidden" value="<?php echo $roomid; ?>" />
  <input name="result" type="hidden" value="<?php echo $result; ?>" />
                  <input name="email" type="text" class="ed" id="em" /><br />
                  <input name="password" type="password" class="ed" id="pass" /><br />
                  <input name="login" type="submit" value="login" />
				  </form>
              </div>
              <p style="margin-bottom: 0px; margin-top: 0px;"><a href="#" id="example-hide" class="hideLink" onclick="showHide('example');return false;">
			  Cancel</a></p>
            </div>
      <br />
  
  </div>
   <div style="float: right; margin-right: 0px; margin-top: 12px; color:#000000; font-family:Arial, Helvetica, sans-serif; width:489px;">
    
 <form action="payment.php" method="post" style="margin-top: -31px;" onsubmit="return validateForm()" name="personal">
  <input name="start" type="hidden" value="<?php echo $arival; ?>" />
  <input name="end" type="hidden" value="<?php echo $departure; ?>" />
  <input name="adult" type="hidden" value="<?php echo $adults; ?>" />
  <input name="child" type="hidden" value="<?php echo $child; ?>" />
  <input name="n_room" type="hidden" value="<?php echo $no_rooms; ?>" />
  <input name="rm_id" type="hidden" value="<?php echo $roomid; ?>" />
  <input name="result" type="hidden" value="<?php echo $result; ?>" />
<?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>


  <br />
  <fieldset>
<legend>Customer Registration: </legend>
<input name="cname" type="text" class="ed" id="cname" />
<br />
 <input name="surname" type="text" class="ed" id="surname" /> <br />
 
 <input name="customerid" type="text" class="ed" id="customerid" maxlength="13" /><span id="errmsg"></span>  <br />
 <select name="gender" required>
   <option value="">Choose Your Gender</option>
<option value="male" selected="selected">Male</option>
<option value="female">Female</option>
</select> <br>
<textarea name="address" class="ed" id="address" cols="20" rows="4"></textarea><br />
<!--input name="address" type="text" class="ed" id="address" /--> 
<select name="country" required>
  <option value="">Please select your country</option>
<option value="Angola">Angola</option>
<option value="South Africa" selected="selected">South Africa</option>

<option value="Uganda">Uganda</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
<option value="Lesotho">Lesotho</option>
<option value="Namibia">Namibia</option>
<option value="Botswana">Botswana</option>
<option value="Mozambique">Mozambique</option>
<option value="Swaziland">Swaziland</option>
<option value="Nigeria">Nigeria</option>
<option value="Malawi">Malawi</option>
<option value="Congo">Congo</option>
</select><br />
 <input name="username" type="text" class="ed" id="username" /> <br />
 <input name="cusername" type="text" class="ed" id="cusername" /> <br />
 <input name="password" type="password" class="ed" id="password" />  <br />
 <input name="cellphone" type="text" class="ed" id="cellphone" maxlength="10" /><span id="errmsg1"></span>  <br />
 <label>
 <input type="checkbox" name="condition" value="checkbox" />
  <small>I agree the <a rel="facebox" href="terms_condition.php">terms and condition</a> of this hotel</small></label>
 <br />
  
 <input name="but" type="submit" value="Confirm" />
  
  </fieldset>
  
  </form>


  </div>
  </div>
	
	
	
	
	
	
	
	
	
	</div>
  </div>
  
  
  
  
  
  
  <div class="rightother">
  
  <div class="reservation">
	  <div align="center" style="padding-top: 7px; font-size:24px;"><strong>RESERVATION  DETAILS</strong></div>
	<div style="margin-top: 14px;">
<label style="margin-left: 16px;">Check In Date : <?php echo $arival; ?></label><br />
<label style="margin-left: 3px;">Check Out Date : <?php echo $departure; ?></label><br />
<label style="margin-left: 71px;">Adults : <?php echo $adults; ?></label><br />
<label style="margin-left: 78px;">Child : <?php echo $child; ?></label><br />
<label style="margin-left: -12px;">Number of Rooms : <?php echo $no_rooms; ?></label><br />
<label style="margin-left: 53px;">Room ID : <?php echo $roomid; ?></label><br />
<label style="margin-left: -9px;">Number Of Nights : <?php echo $result; ?></label><br />
      <BR />
  </div>
	
	
	</div>
  
  
  </div>
  
  
  
  
  
  
</div>
<div class="footer" style="text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:12px;">copyright � Bergewater Hotel All Rights reserved</div>
<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
</body>
</html>
