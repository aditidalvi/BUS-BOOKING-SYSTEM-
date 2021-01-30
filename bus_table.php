<?php
session_start();
$from=$_SESSION['from'];
$to=$_SESSION['to'];
$date=$_SESSION['date'];
// @mysql_connect('localhost:3307','root','')or die('Could not connect to database');
$conn = mysqli_connect('localhost:3307', 'root', '','bus_reservation');

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

// mysql_select_db('bus_reservation');
$sql="SELECT B.bus_no,B.travels,B.type,B.dept_time,B.seats,B.fare FROM route as A INNER JOIN bus_details as B ON A.bus_no=B.bus_no WHERE A.from='$from' and A.to='$to' and A.date='$date'";
// $result=mysql_query($sql) or trigger_error(mysql_error().$sql);
$result = $conn->query($sql);

$fields_num = mysqli_num_fields($result);

$t1=260;
$t2=285;
while($row = mysqli_fetch_assoc($result))
{
  
  echo " <p1 style=\"color:#000000; font-size: 16px; font-family: calibri, sans-serif;position:absolute;left:30px;top:";
  echo $t1;
  echo "px;\">";
  echo $row['bus_no'];  
  echo "</p1>";
  echo " <p1 style=\"color:#000000; font-size: 16px; font-family: calibri, sans-serif;position:absolute;left:145px;top:";
  echo $t1;
  echo "px;\">";
  echo $row['travels'];  
  echo "</p1>";
  echo " <p1 style=\"color:#000000; font-size: 16px; font-family: calibri, sans-serif;position:absolute;left:360px;top:";
  echo $t1;
  echo "px;\">";
  echo $row['type'];
  echo "</p1>";
  echo " <p1 style=\"color:#000000; font-size: 16px; font-family: calibri, sans-serif;position:absolute;left:505px;top:";
  echo $t1;
  echo "px;\">";
  echo $row['dept_time'];  
  echo "</p1>";
    echo " <p1 style=\"color:#000000; font-size: 16px; font-family: calibri, sans-serif;position:absolute;left:645px;top:";
  echo $t1;
  echo "px;\">";
  echo $row['seats'];  
  echo "</p1>";  
    echo " <p1 style=\"color:#000000; font-size: 16px; font-family: calibri, sans-serif;position:absolute;left:750px;top:";
  echo $t1;
  echo "px;\">";
  echo $row['fare'];  
  echo "</p1>";
  echo "<pos3 style=\"position:absolute;left:20px;top:";
  echo $t2;
  echo"px;\">";
  
  echo "</pos3>";

  $t1+=45;
  $t2+=50;
 
  
  
  }
 if (isset($_POST['submit']))
 {
  
  $_SESSION['bus_no']=$_POST['bus_no'];  
  $bus_no1=$_SESSION['bus_no'];
  $sql1="SELECT fare FROM bus_details WHERE bus_no='$bus_no1'";
  // $result1=mysql_query($sql1) or trigger_error(mysql_error().$sql1);
  $result1 = $conn->query($sql1);
  while($row1 = mysqli_fetch_assoc($result1)) 
 {
       $fare=$row1['fare'];
 
 }
 $_SESSION['fare']=$fare;
 Header( 'Location: select_seat.php');
 }
?>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" href="nav.css">-->
    <title>EasytoGo</title>
  <link rel="icon" href="icon.png" type="image/png" sizes="60x60px">

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
        <li class="active"><a href=home1.php>Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Manage booking<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="http://localhost/Aditi 2/cancellation.php"><strong>Cancel</strong></a></li>
            <li><a href="http://localhost/Aditi 2/show_ticket.php"><strong>Show my ticket</strong></a></li>
              <li><a href="http://localhost/Aditi 2/print_ticket.php"><strong>Print </strong></a></li>
          </ul>
        </li>
        <li><a href="http://localhost/Aditi 2/fixed-about.html">About</a></li>
        <li><a href="#">Faq</a></li>
      </ul>
      
    </div>
  </div>
</nav>

<pos3 style="position:absolute;left:20px;top:210px;">
<img src="11.jpg" >
</pos3>

<script type="text/javascript">
<!--
var step=1
function slideit(){
document.images.slide.src=eval("image"+step+".src")
if(step<3)
step++
else
step=1
setTimeout("slideit()",2500)
}
slideit()
//-->

</script>
<p3 style="color: #000000; font-size: 15px; font-family: calibri, sans-serif;position:absolute;left:240px;top:520px;">Enter bus number</p3>
<form method="post" action="bus_table.php">
<input size="30" type="text" name="bus_no"style="width:200px;position:absolute;left:240px;top:540px">
<input onclick="location.href=http://localhost/select_seat.php" style="color:White; background-color:#00009C;position:absolute;left:590px;top:540px" type="submit" value="View seats" name="submit">
</form>




</body>
</html>