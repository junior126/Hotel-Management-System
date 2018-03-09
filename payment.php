<?php session_start();
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Bergewater Hotel
</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />

<SCRIPT LANGUAGE="JavaScript">

<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->

<!-- Begin
function Start(page) {
OpenWin = this.open(page, "CtrlWindow", "toolbar=no,menubar=no,location=yes,scrollbars=yes,resizable=yes,width=300");
}
</SCRIPT>
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

	function createRandomPassword() {



    $chars = "abcdefghijkmnopqrstuvwxyz023456789";

    srand((double)microtime()*1000000);

    $i = 0;

    $pass = '' ;



    while ($i <= 7) {

        $num = rand() % 33;

        $tmp = substr($chars, $num, 1);

        $pass = $pass . $tmp;

        $i++;

    }



    return $pass;



}
$confirmation = createRandomPassword();
	$arival = $_POST['start'];
	$departure = $_POST['end'];
	$adults = $_POST['adult'];
	$child = $_POST['child'];	
	$nroom = $_POST['n_room'];
	$roomid = $_POST['rm_id'];
	$result = $_POST['result'];
	$cname = $_POST['cname'];
	$surname = $_POST['surname'];
	$cellphone = $_POST['cellphone'];
	$address = $_POST['address'];
	$country = $_POST['country'];
	$password = $_POST['password'];
	$username = $_POST['username'];
	$customerid= $_POST['customerid'];
	$gender = $_POST['gender'];
	
	
	
$stat= 'Active';
	$result1 = mysql_query("SELECT * FROM room where room_id='$roomid'");
while($row = mysql_fetch_array($result1))
  {
  $rate=$row['rate'];
  $type=$row['type'];
  
  }
  $payable= $rate*$result*$nroom;
	
	
	
	//send the email
		$to = $email;
		$subject="Reservation notification From Bergewater Hotel";
		$from = 'contactus@bergwater.com';
		$body = "First Name: $name\n".
		"Last Name: $last\n".
		"Email: $email \n".
		"address: $address \n".
		"Country: $country \n".
		"Contact Number: $cnumber \n".
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
		//$headers .= "Reply-To: $$from \r\n";
		
		//mail($to, $subject, $body,$headers);
	
	mysql_query("INSERT INTO reservation ( username, arrival, departure,  adults, child, result, room_id, no_room, payable, confirmation) VALUES ('$username','$arival','$departure','$adults','$child','$result','$roomid','$nroom','$payable','$confirmation')");

mysql_query("INSERT INTO roominventory (arrival, departure, qty_reserve, room_id, confirmation, status) VALUES ('$arival','$departure','$nroom','$roomid','$confirmation','$stat')");

mysql_query("INSERT INTO customer(customerid, cname, surname, gender, cellphone, username, address, country) VALUES('$customerid','$cname','$surname','$gender','$cellphone','$username','$address','$country')");

$sql="INSERT INTO user(username, password, position) VALUES ('$username', '$password' ,'user')";

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
<label style="margin-left: 133px;">Email : <?php echo $username; ?></label><br />
<label style="margin-left: 56px;">Contact Number : <?php echo $cellphone; ?></label><br />      <BR />
  </div>
<form action ="index.php" method="post">
  <input name="refresh" type="submit" value="Done"/></td>
  </form>
      
	</div> 
	</div>
    </div>
  </div>

  <div class="rightother">

  </div>
  
</div>
<div class="footer" style="text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:12px;">copyright © Bergewater All Rights reserved</div>

</body>
</html>