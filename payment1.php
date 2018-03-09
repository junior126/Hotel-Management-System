<?php 
	session_start();
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Payment</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
<?php
if (!isset($_POST['submit'])) {

	$errmsg_arr = array();
	
	$errflag = false;
	
	$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("hotel", $con);

	
$confirmation = $_POST['confirmation'];
	$arival = $_POST['start'];
	$departure = $_POST['end'];
	$adults = $_POST['adult'];
	$child = $_POST['child'];	
	$nroom = $_POST['n_room'];
	$roomid = $_POST['rm_id'];
	$result = $_POST['result'];
	$email = $_POST['username'];
	$password = $_POST['password'];
	$result5 = mysql_query("SELECT * FROM reservation inner join customer inner join user where reservation.username = customer.username = user.username and user.username='$username' and user.password='$password'");
while($row2 = mysql_fetch_array($result5))
  {
  $name = $row2['cname'];
	$last = $row2['surname'];
	$address = $row2['address'];
	
	$country = $row2['country'];
	$password = $row2['password'];
	$email = $row2['username'];
	$cnumber = $row2['cellephone'];
  
  }
	$result1 = mysql_query("SELECT * FROM room where room_id='$roomid'");
while($row = mysql_fetch_array($result1))
  {
  $rate=$row['rate'];
  $type=$row['type'];
  
  }
  $payable= $rate*$result*$nroom;
	
	
	
	//send the email
		$to = $email;
		$subject="Reservation notification from Bergwater Hotel";
		$from = 'contactus@bergwater.com';
		$body = "First Name: $cname\n".
		"Last Name: $surname\n".
		"Email: $username \n".
		
		"Country: $country \n".
		"Contact Number: $cellphone \n".
		"Password: $password \n".
		"Check In: $arival\n ".
		"Check Out: $departure\n ".
		"Number of Adults: $adults\n ".
		"Number of child: $child\n ".
		"Total nights of stay: $result\n ".
		"Room Type: $type\n ".
		"Number of rooms: $nroom\n ".
		"Payable amount: $payable\n ".
		"Confirmation Number: $confirmation\n ";	
		
		$headers = "From: $from \r\n";
		$headers .= "Reply-To: $$from \r\n";
		
		//mail($to, $subject, $body,$headers);
	
	$sql="INSERT INTO reservation (username, arrival, departure, adults, child, result, room_id, no_room, payable, confirmation)
VALUES
('$usename','$arival','$departure','$adults','$child','$result','$roomid','$nroom','$payable','$confirmation')";
mysql_query("INSERT INTO roominventory (arrival, departure, qty_reserve, room_id, confirmation) VALUES ('$arival','$departure','$nroom','$roomid','$confirmation')");

//$sql="INSERT INTO customer( cname, surname, gender, cellphone, username, address, country)
//VALUES
//('$cname','$surname','$gender','cellphone','username','address','country')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

}
mysql_close($con)

	
?>

</head>

<body>
<div class="mainwrapper">
  <div class="leftother">
    <div class="l"></div>
	<div class="r">
	
	
	
	
	<div class="right3">



        <!-- the cmd parameter is set to _xclick for a Buy Now button -->
        
	 <div class="reservation" style="margin-left: 176px; width: 400px;">
	  <div align="center" style="padding-top: 7px; font-size:24px;"><strong>RESERVATION  DETAILS</strong></div>
	<div style="margin-top: 14px;">
<label style="margin-left: 73px;">Check In Date : <?php echo $arival; ?></label><br />
<label style="margin-left: 58px;">Check Out Date : <?php echo $departure; ?></label><br />
<label style="margin-left: 130px;">Adults : <?php echo $adults; ?></label><br />
<label style="margin-left: 137px;">Child : <?php echo $child; ?></label><br />
<label style="margin-left: 42px;">Number of Rooms : <?php echo $nroom; ?></label><br />
<label style="margin-left: 110px;">Room ID : <?php echo $roomid; ?></label><br />
<label style="margin-left: 52px;">Number of nights : <?php echo $result; ?></label><br />
<label style="margin-left: 101px;">Firstname : <?php echo $cname; ?></label><br />
<label style="margin-left: 102px;">Lastname : <?php echo $surname; ?></label><br />
<label style="margin-left: 114px;">Address : <?php echo $address; ?></label><br />
<label style="margin-left: 117px;">Country : <?php echo $country; ?></label><br />
<label style="margin-left: 133px;">Email : <?php echo $usename; ?></label><br />
<label style="margin-left: 56px;">Contact Number : <?php echo $cellphone; ?></label><br />      <BR />
  </div>
	
	<form action="viewreservation2.php method="post">	
<input type="button" name="btn" value="Print Confirmation Receipt" onclick="Start('viewreservation2.php')" /></td>	
</form>
    
 
  </div>
	
	
	
	
	
	
	
	
	
	</div>
  </div>
  
  
  
  
  
  
  <div class="rightother">
  
 
  
  
  </div>
  
  
  
  
  
  
</div>
<div class="footer" style="text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:12px;">copyright © Bergwater Hotel All Rights reserved</div>
</body>
</html>
