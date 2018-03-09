<?php
error_reporting(0);
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Panel</title>
<script src="js/jquery-1.2.1.pack.js" type="text/javascript"></script>
	<script src="js/jquery-easing.1.2.pack.js" type="text/javascript"></script>
	<script src="js/jquery-easing-compatibility.1.2.pack.js" type="text/javascript"></script>
	<script src="js/coda-slider.1.1.1.pack.js" type="text/javascript"></script>
<link href="css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
		jQuery(window).bind("load", function() {
			jQuery("div#slider1").codaSlider()
			// jQuery("div#slider2").codaSlider()
			// etc, etc. Beware of cross-linking difficulties if using multiple sliders on one page.
		});
	</script>
	
	<style type="text/css">
<!--
a img {border: none; }
-->
</style>
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
<style type="text/css">
<!--
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #000000;
}
a:hover {
	text-decoration: none;
	color: #006600;
}
a:active {
	text-decoration: none;
	color: #006600;
}
-->
</style>


</head>

<body>
<div class="mainwrapper">
  <div class="leftother">
    <div class="l">
	<div style="margin-top: 225px; margin-right: 10px;">
	 <?php
if ($_SESSION['SESS_FIRST_NAME']=="admin"){
	
  echo '<a href="#2" class="cross-link">Search</a><br />';
  echo '<a href="#1" class="cross-link">Monitor Reservation</a><br />';
  echo '<a href="#3" class="cross-link">Generate Reports</a><br />';
  echo '<a href="#5" class="cross-link">Room Inventory</a><br />';
  echo '<a href="#4" class="cross-link">Rooms</a><br />';
  echo '<a href="admin_index.php">logout</a><br />';
 
 }
 ?> 
 <?php
if ($_SESSION['SESS_FIRST_NAME']=="frontdesk"){
	
  echo '<a href="#2" class="cross-link">View Booker Comments</a><br />';
  echo '<a href="#1" class="cross-link">Monitor Reservation</a><br />';
  echo '<a href="#3" class="cross-link">Generate Reports</a><br />';
  echo '<a href="admin_index.php">logout</a><br />';
 }
 ?> 
	</div>
	
	
	</div>
	<div class="r">
	
	
	
	
<div class="right3">
  
    <div class="slider-wrap">
      <div id="slider1" class="csw">
        <div class="panelContainer">
          <div class="panel" title="Panel 1">
            <div class="wrapper">
			  <div class="view">
			  <table id="mytable" cellspacing="0">
  <tr>
    <td width="191" id="label">Name</td>
    <td width="73" id="label">Arrival</td>
    <td width="85" id="label">Departure</td>
    <td width="96" id="label">Room Type </td>
    <td width="105" id="label">No. of Nights</td>
    <td width="90" id="label">Action</td>
  </tr>
              <?php
			   $con = mysql_connect("localhost", "root", "");
								if (!$con)
								  {
								  die('Could not connect: ' . mysql_error());
								  }
								
								mysql_select_db("hotel", $con);
								
								$result2 = mysql_query("SELECT * FROM reservation inner join customer where reservation.username=customer.username and status != 'out'");
								
								
								while($row = mysql_fetch_array($result2))
								  {
								 echo '<tr>';
    								echo '<td class="contacts">'.$row['cname'].' ' .$row['surname'].'</td>';
    								echo '<td class="contacts">'.$row['arrival'].'</td>';
									echo '<td class="contacts">'.$row['departure'].'</td>';
									echo '<td class="contacts">';
									$r=$row['room_id'];
									$result1 = mysql_query("SELECT * FROM room WHERE room_id = '$r'");
			while($row1 = mysql_fetch_array($result1))
			{
			echo $row1['type'];
			}
									echo '</td>';
									echo '<td class="contacts">'.$row['result'].'</td>';
									echo '<td class="contacts">'.'<a href=out.php?id=' . $row["reservation_id"] . '>' . 'Check Out' . '</a>'.'</td>';
  								echo '</tr>';
							
								  }
			  
			  ?>
			  </table>
			  </div>
            </div>
          </div>
		  
		  
		  
		  
		  
		  
		  
		  
          <div class="panel" title="Panel 2">
            <div class="wrapper">
			<table id="mytable" cellspacing="0">
  <!--tr>
    <td width="150" id="label">Customer ID</td>
    <td width="150" id="label">Name</td>
    <td width="150" id="label">Surname</td>
	<td width="150" id="label">Room No</td>
	<td width="150" id="label">Checkin</td>
	<td width="150" id="label">Checkout</td>
	
  </tr-->
              <?php
			   $con = mysql_connect("localhost", "root", "");
								if (!$con)
								  {
								  die('Could not connect: ' . mysql_error());
								  }
								
								mysql_select_db("hotel", $con);
								
								//$result3 = mysql_query("SELECT * FROM customer inner join reservation where customer.username = reservation.username");
								
								
								//while($row3 = mysql_fetch_array($result3))
								 // {
								 //echo '<tr>';
    							//	echo '<td class="contacts">'.$row3['customerid'].'</td>';
    								//echo '<td class="contacts">'.$row3['cname'].'</td>';
									//echo '<td class="contacts">'.$row3["surname"].'</td>';
									//echo '<td class="contacts">'.$row3["no_room"].'</td>';
									//echo '<td class="contacts">'.$row3["arrival"].'</td>';
									//echo '<td class="contacts">'.$row3["departure"].'</td>';
									
  								//echo '</tr>';
								$customers="";
if($_REQUEST['p']){
	echo '<script "text/javascript">alert("Operation completed Successfully !!!!");</script>';
}
	
	$sql=mysql_query("SELECT * FROM customer inner join reservation where customer.username = reservation.username") or die(mysql_error());
	$existCount=mysql_num_rows($sql);
    if($existCount>0){
		while($row=mysql_fetch_array($sql)){		
   $customerid=$row['customerid'];
	$cname=$row['cname'];
	$surname=$row['surname'];
	$no_room=$row['no_room'];
	$arrival=$row['arrival'];
	$departure=$row['departure'];
	
	
	$customers.=' <tr style="color:#b29477; font-family:Verdana, Arial, Helvetica, sans-serif;font-size:10px; padding:15px;">
 <td>'.$customerid.'</td>
	<td>'.$cname.'</td>
    <td>'.$surname.'</td>
	 <td>'.$no_room.'</td>
	  <td>'.$arrival.'</td>
	   <td>'.$departure.'</td>
  </tr>';
		}
	}else{
		$customer="<tr><td colspan='4'>There are no transactions<td></tr>";
							
								  }
								  if($_REQUEST['search']){
		$customers="";
		$id=$_REQUEST['text'];
		if($_REQUEST['by']=="customerid")
		$sql=mysql_query("SELECT * FROM customer inner join reservation where customer.username = reservation.username and customerid='$id'") or die(mysql_error());
		else if($_REQUEST['by']=="cname")
		$sql=mysql_query("SELECT * FROM customer inner join reservation where customer.username = reservation.username and cname='$id'") or die(mysql_error());
		else if($_REQUEST['by']=="surname")
		$sql=mysql_query("SELECT * FROM customer inner join reservation where customer.username = reservation.username and surname='$id'") or die(mysql_error());
		else if($_REQUEST['by']=="no_room")
		$sql=mysql_query("SELECT * FROM customer inner join reservation where customer.username = reservation.username and no_room='$id'") or die(mysql_error());
		else if($_REQUEST['by']=="arrival")
		$sql=mysql_query("SELECT * FROM customer inner join reservation where customer.username = reservation.username and arrival='$id'") or die(mysql_error());
		else if($_REQUEST['by']=="departure")
		$sql=mysql_query("SELECT * FROM customer inner join reservation where customer.username = reservation.username and departure='$id'") or die(mysql_error());
		
		
		$existCount=mysql_num_rows($sql);
    if($existCount>0){
		while($row=mysql_fetch_array($sql)){		
   $customerid=$row['customerid'];
   $cname=$row['cname'];
	$surname=$row['surname'];
	$no_room=$row['no_room'];
	$arrival=$row['arrival'];
	$departure=$row['departure'];
	
	$customers.=' <tr style="color:#b29477; font-family:Verdana, Arial, Helvetica, sans-serif;font-size:10px; padding:15px;">
    <td>'.$customerid.'</td>
	<td>'.$cname.'</td>
    <td>'.$surname.'</td>
	 <td>'.$no_room.'</td>
	  <td>'.$arrival.'</td>
	   <td>'.$departure.'</td>
  </tr>';
		}
	}else{
		$customers="<tr><td colspan='4'>There are no transactions<td></tr>";
	}
	}
			  
			  ?>
			  <form action ="home_admin.php#2" method="post">
			  <label style="margin-left: 8px;">Search : </label>
     <input name="text" type="text" /> 
	 <label style="margin-left: 8px;">Filter : </label>
     <select name="by">
      <option value="customerid">Customer ID</option>
      <option value="cname">Name</option>
      <option value="surname">Surname</option>
      <option value="no_room">Room No</option>
	  <option value="arrival">Check In</option>
	  <option value="departure">Check Out</option>
    </select>
	 <input name="search" type="submit" value="Go" />
	 <br />
      <BR />
	  </form>
			  </table>
			   <table width="100%">
  
               
  <tr id="menu">
 
    <td >Customer ID</td>
    <td>Name</td>
    <td >Surname</td>
    <td >Room No</td>
    <td >Check In</td>
	<td >Check Out</td>
	
  </tr>
  
 
  <?php echo $customers; ?>
  
  <tr>
  <td>
  <form action ="home_admin.php#2" method="post">
  <input name="refresh" type="submit" value="Refresh"/></td>
  </form>
  </tr>
   
  
</table>
            </div>
          </div>
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
          <div class="panel" title="Panel 3">
            <div class="wrapper">
              <div class="view">
			  <table id="mytable" cellspacing="0">
  <tr>
    <td width="191" id="label">Name</td>
    <td width="73" id="label">Arrival</td>
    <td width="85" id="label">Departure</td>
    <td width="96" id="label">Room Type </td>
    <td width="105" id="label">No. of Nights</td>
    <td width="90" id="label">Action</td>
  </tr>
              <?php
			   $con = mysql_connect("localhost", "root", "");
								if (!$con)
								  {
								  die('Could not connect: ' . mysql_error());
								  }
								
								mysql_select_db("hotel", $con);
								
								$result2 = mysql_query("SELECT * FROM reservation inner join customer where reservation.username=customer.username and status != 'out'");
								
								
								while($row = mysql_fetch_array($result2))
								  {
								 echo '<tr>';
    								echo '<td class="contacts">'.$row['cname'].' ' .$row['surname'].'</td>';
    								echo '<td class="contacts">'.$row['arrival'].'</td>';
									echo '<td class="contacts">'.$row['departure'].'</td>';
									echo '<td class="contacts">';
									$r=$row['room_id'];
									$result1 = mysql_query("SELECT * FROM room WHERE room_id = '$r'");
			while($row1 = mysql_fetch_array($result1))
			{
			echo $row1['type'];
			}
									echo '</td>';
									echo '<td class="contacts">'.$row['result'].'</td>';
									echo '<td class="contacts">'.'<a href=viewreservation.php?id=' . $row["reservation_id"] . '>' . 'Preview' . '</a>'.'</td>';
  								echo '</tr>';
							
								  }
			  
			  ?>
			  </table>
			  </div>
            </div>
          </div>
		  
		  
		  
		  
		  
          <div class="panel" title="Panel 4">
            <div class="wrapper">
              <div class="view">
			  <table id="mytable" cellspacing="0">
				  <tr>
					<td width="93" id="label">Type</td>
					<td width="44" id="label">Price (R)</td>
					<td width="298" id="label">Description</td>
					<td width="72" id="label">Image</td>
					<td width="51" id="label">Total Rooms</td>
					<td width="80" id="label">Action</td>
				  </tr>
				  <?php
			   $con = mysql_connect("localhost", "root", "");
								if (!$con)
								  {
								  die('Could not connect: ' . mysql_error());
								  }
								
								mysql_select_db("hotel", $con);
								
								$result3 = mysql_query("SELECT * FROM room");
								
								
								while($row3 = mysql_fetch_array($result3))
								  {
								 echo '<tr>';
									echo '<td>'.$row3['type'].'</td>';
									echo '<td>'.$row3['rate'].'</td>';
									echo '<td>'.$row3['description'].'</td>';
									echo '<td>';
									echo'<a rel="facebox" href=editpic.php?id=' . $row3["room_id"] . '>' . '<img width=72 height=52 alt="Unable to View" src=' . $row3["image"] . '>' . '</a>';
								
									echo '</td>';
									echo '<td>'.$row3['qty'].'</td>';
									echo '<td>';
									echo'<a rel="facebox" href=editroom.php?id=' . $row3["room_id"] . '>' . 'Edit' . '</a>';
									echo ' | ';
									echo'<a rel="facebox" href=deleteroom.php?id=' . $row3["room_id"] . '>' . 'Delete' . '</a>';
									echo '</td>';
								 echo '</tr>';
							
								  }
			  
			  ?>
			  
			  
			  </table><br />
			  <a rel="facebox" href="addroom.php">Add Rooms Category
			  
			  </a></div>
            </div>
          </div>
		  
		  
		  
		

 <div class="panel" title="Panel 5">
            <div class="wrapper">

			<div class="view">
			  <table id="mytable" cellspacing="0">
				  <tr>
					<td width="93" id="label">Arrival</td>
					<td width="44" id="label">Departure</td>
					<td width="100" id="label">Quantity Reserve</td>
					<td width="149" id="label">Room Type</td>
					<td width="180" id="label">Confirmation Number</td>
                                        <td width="80" id="label">Status</td>
				  </tr>
				  <?php
			   $con = mysql_connect("localhost", "root", "");
								if (!$con)
								  {
								  die('Could not connect: ' . mysql_error());
								  }
								
								mysql_select_db("hotel", $con);
								
								$result3 = mysql_query("SELECT * FROM roominventory where status != 'out'");
								
								
								while($row3 = mysql_fetch_array($result3))
								  {
								 echo '<tr>';
									echo '<td>'.$row3['arrival'].'</td>';
									echo '<td>'.$row3['departure'].'</td>';
									echo '<td>'.$row3['qty_reserve'].'</td>';
									
									echo '<td>';
                                                               $ro=$row3['room_id'];
                                                             $result4 = mysql_query("SELECT * FROM room where room_id='$ro'");
								
								
								while($row4 = mysql_fetch_array($result4))
								  {
echo $row4['type'];
                                                                  }


									echo '</td>';
                                                                        echo '<td>'.$row3['confirmation'].'</td>';
                                                                        echo '<td>'.$row3['status'].'</td>';
								 echo '</tr>';





								  }




							$result5 = mysql_query("SELECT sum(qty_reserve) FROM roominventory where status != 'out' and room_id='7'");
				                        while($row5 = mysql_fetch_array($result5))
				                           {
echo 'Total Number of Single Rooms reserved: ';
echo $row5['sum(qty_reserve)'];
echo '<br>';
                                                           }
$result6 = mysql_query("SELECT sum(qty_reserve) FROM roominventory where status != 'out' and room_id='8'");
				                        while($row6 = mysql_fetch_array($result6))
				                           {
echo 'Total Number of Double Rooms reserved: ';
echo $row6['sum(qty_reserve)'];
echo '<br>';
                                                           }
$result7 = mysql_query("SELECT sum(qty_reserve) FROM roominventory where status != 'out' and room_id='9'");
				                        while($row7 = mysql_fetch_array($result7))
				                           {
echo 'Total Number of Executive Rooms reserved: ';
echo $row7['sum(qty_reserve)'];
echo '<br>';
                                                           }



			  
			  ?>
			  
			  
			  </table><br />
	
			  
			  </div>
            </div>
          </div>


  
		  
		  
		  
		  
        </div>
        <!-- .panelContainer -->
      </div>
      <!-- #slider1 -->
    </div>
  </div>
	
	
	
	
	
	
	
	
	
	</div>
  </div>
  
  
  
  
  
  
  <div class="rightother"></div>
  
  
  
  
  
  
</div>
<div class="footer" style="text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:12px;">Copyright © bergewater 2014 All Rights reserved</div>
</body>
</html>
