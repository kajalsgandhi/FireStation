<!DOCTYPE html>
<html>
<head>
<title>
Application Received</title>
<style>
.b
{list-style-type:none;
margin:0;
padding:0;
overflow:hidden;
background-color:#990000;
padding:3em;
}
li{float:left;}
li a{
display:block;
color:white;
text-align:center;
padding:14px 16px;
text-decoration:none;
font-size:19px;
font-weight:bold;
}
li a.hover{background-color:#111;}
li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #990000;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color:#8585ad;}

.dropdown:hover .dropdown-content {
  display: block;
}
#navbar{background-color:#8585ad;}
th{font-size:25px; color:white;}
td{font-size:23px; color:white;}
body{background-image:url(back1.jpg); background-size:cover;}
.table{
    text-align:center;
  }
  #myydiv{background-color:black;}
  td a{text-decoration:none;}
  th a{text-decoration:none;}
  th{color:white;}
  a:visited{color:white;}
  hr{color:white;}
  h2{font-size:25px; color:white;}
  .d{float:right;}
  </style>
  <body>
    <div id='navbar'>
<ul class='b'>
<li class='a'><a href='home.html'>About Us</a></li>
 <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Services</a>
    <div class="dropdown-content">
      <a href='find.html'>Find Your Station</a>
      <a href='station.html'>List Of Stations</a>
	  </div>
  </li>
 <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Safety</a>
    <div class="dropdown-content">
      <a href='firesafety.html'>Fire Safety</a>
      <a href='evacuation.html'>Evacuation Info</a>
	  </div>
  </li>
    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Preventive Measures</a>
    <div class="dropdown-content">
      <a href='train.html'>Train Your Management</a>
      <a href='guidelines.html'>Safety Guidelines</a>
    </div>
  </li>
 <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Hazards</a>
    <div class="dropdown-content">
      <a href='hazard.html'>Causes Of Fire</a>
      <a href='levels.html'>Levels Of Fire</a>
    </div>
  </li>

<li class='a'><a href='book.html'>Book A Session</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Support Us</a>
    <div class="dropdown-content">
      <a href='volunteer.html'>Volunteer</a>
      <a href='payment.html'>Donate</a>
    </div>
  </li>
  <li class='a'><a href='contact_us.html'>Contact Us</a></li>
  <li class='d'><a href='home.html'><img src='mfd3.jpg'></a></li>
</ul>
</div>
<?php
$conn=new mysqli("localhost","root","","map");
$f=$_POST['t1'];
$ln=$_POST['t2'];
$em=$_POST['t3'];
$ad=$_POST['t4'];
$no=$_POST['t5'];
$co=$_POST['t6'];
if ($conn->connect_error)
{
	print("Sql connection failed");
}
else
{
	$qry="Insert into volunteers values('".$f."','".$ln."','".$em."','".$ad."',".$no.",'".$co."')";
	$res=$conn->Query($qry);
	if($res==true)
		echo "<h2>Request Granted. We will get back to you soon,".$x."</h2>";
	else
		echo "<h2>Try Again</h2>";
	$conn->close();
}
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<div id='myydiv'>
<table cellspacing="20px" cellpadding="15px">
  <tr rowspan="2">
    <th><a href='home.html'>About Us</a></th>
    <th>Services</th>
    <th>Safety</th>
    <th>Hazard</th>
    <th>Preventive Measure</th>
    <th><a href='book.html'>Book A Session</a></th>
    <th>Support Us</th>
    <th><a href='contact_us.html'>Contact Us</a></th>
   </tr>

<tr>
    <td></td>
      <td><a href='find.html'>-Find Your Station</a></td>
      <td><a href='firesafety.html'>-Fire Safety</a></td>
      <td><a href='hazard.html'>-Causes of Fire</a></td>
      <td><a href='guidelines.html'>-Fire Safety Guidrelines</a></td>
      <td></td>
      <td><a href='volunteer.html'>-Volunteers</a></td>
      <td></td>
</tr>

<tr>
  <td></td>
    <td><a href='station.html'>-List of Stations</a></td>
      <td><a href='evacuation.html'>-Evacuation Information</a></td>
      <td><a href='levels.html'>-Level of Fire</a></td>
      <td><a href='train.html'>-Train Your Management</a></td>
      <td></td>
      <td><a href='payment.html'>-Donate</a></td>
      <td></td>
</tr>
</table>
</div>