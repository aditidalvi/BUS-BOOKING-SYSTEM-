<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" href="nav.css">-->

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>footer {
    background:black;
    color:white;
  }
    </style>
</head>
    <body>
        
        <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">EasytoGo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="home1.php">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Manage booking<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="http://localhost/Aditi 2/cancellation.php"><strong>Cancel</strong></a></li>
            <li><a href="http://localhost/Aditi 2/show_ticket.php"><strong>Show my ticket</strong></a></li>
              <li><a href="http://localhost/Aditi 2/print_ticket.php"><strong>Print </strong></a></li>
          </ul>
        </li>
        <li><a href="http://localhost/Aditi 2/fixed-about.html">About</a></li>
        <li><a href="http://localhost/Aditi 2/i2.html">Help</a></li>
      </ul>
      
    </div>
  </div>
</nav>

<pos3 style="position:absolute;left:240px;top:210px;">
<img src="13.jpg" alt="workhead">
</pos3>


<p1 style="color: #000000; font-size: 15px; font-family: calibri, sans-serif;position:absolute;left:240px;top:275px;">Select seat</p1>
<form method="post" action="select_seat.php">

<?php
session_start();
$bus_no=$_SESSION['bus_no'];
/*
@mysql_connect('localhost:3307','root','')or die('Could not connect to database');
mysql_select_db('bus_reservation');*/

// @mysql_connect('localhost:3307','root','')or die('Could not connect to database');
$conn = mysqli_connect('localhost:3307', 'root', '','bus_reservation');

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

$sql1="SELECT seat_no FROM seat_details WHERE bus_no='$bus_no' and status='available'";
// $result1=mysql_query($sql1) or trigger_error(mysql_error().$sql1);
$result1 = $conn->query($sql1);

echo "<select style=\"width:100px;position:absolute;left:330px;top:275px; \"name=\"seat_no\" size=\"3\">";
while($row1 = mysqli_fetch_assoc($result1))
{
     $temp1=$row1['seat_no'];
     echo"<option value=";
	echo $temp1;
	echo ">";
	echo $temp1; 
	 echo "</option>";
	 }
echo "</select>";
?>
<input onclick="location.href=http://localhost/customer_details.php" style="color:White; background-color:#00009C;position:absolute;left:550px;top:275px" type="submit" value="  Next  " name="submit">
</form>

<?php


$sql="SELECT type FROM bus_details WHERE bus_no='$bus_no'";
//$result=mysql_query($sql) or trigger_error(mysql_error().$sql); 
$result = $conn->query($sql);

while($row = mysqli_fetch_assoc($result))
{
     $temp=$row['type'];
}
if($temp=="seater")
{
 echo "<pos2 style=\"position:absolute;left:260px;top:375px;\">";
 echo "<img src=\"14.jpg\">";
 echo "</pos2>";

}
else
{
 echo "<pos2 style=\"position:absolute;left:260px;top:375px;\">";
 echo "<img src=\"15.jpg\">";
 echo "</pos2>";

}
 if (isset($_POST['submit']))
 {
  $_SESSION['seat_no']=$_POST['seat_no'];  
  
   Header( 'Location: customer_details.php');
 }

?>
</body>
</html>