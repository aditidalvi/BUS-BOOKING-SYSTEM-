<?php
session_start();
$seat_no=$_SESSION['seat_no'];
echo " <p1 style=\"color:#000000; font-size: 15px; font-family: calibri, sans-serif;position:absolute;left:715px;top:290px;\">";
echo $seat_no;  
echo "</p1>"; 
$fare=$_SESSION['fare'];
echo " <p1 style=\"color:#4D4D4D;font-weight: bold; font-size: 30px; font-family: calibri, sans-serif;position:absolute;left:110px;top:490px;\">";
//echo"AMOUNT PAYABLE";
echo $fare;  
echo "</p1>"; 

if (isset($_POST['submit']))
{ 
  if (isset($_POST['customer_name'])&&isset($_POST['customer_age'])&&isset($_POST['mobile'])&&isset($_POST['email'])&&isset($_POST['card_no'])&&isset($_POST['card_name'])&&isset($_POST['gender']))
  {
    $name=$_POST['customer_name'];   
    $age=$_POST['customer_age'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $card_no=$_POST['card_no'];
    $card_name=$_POST['card_name'];
    $gender=$_POST['gender'];
    $conn = mysqli_connect('localhost:3307', 'root', '','bus_reservation');
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Connected successfully";
    $sql="SELECT * FROM ticket_no";
    // $result=mysql_query($sql) or trigger_error(mysql_error().$sql);
    $result = $conn->query($sql);
    while($row = mysqli_fetch_assoc($result))
    {
      $default=$row['x'];    
    }  
    $default+=1;
    $sql1="UPDATE ticket_no SET x=$default";
    $result1 = $conn->query($sql1);
    
    $bus_no=$_SESSION['bus_no'];
    $sql2="UPDATE seat_details SET status='booked',ticket_no=$default WHERE bus_no='$bus_no' and seat_no='$seat_no' ";
    // $result2=mysql_query($sql2) or trigger_error(mysql_error().$sql2);
    $result2 = $conn->query($sql2);
    $sql3="INSERT INTO customer_details VALUES($default,'$name','$gender',$age,$mobile,'$email',$card_no,'$card_name')";
    //$result3=mysql_query($sql3) or trigger_error(mysql_error().$sql3);
    $result3 = $conn->query($sql3);
    $sql4="UPDATE bus_details SET seats=seats-1 WHERE bus_no=$bus_no and seats>0";
    // $result4=mysql_query($sql4) or trigger_error(mysql_error().$sql4);
    $result4 = $conn->query($sql4);
    $_SESSION['temp']=$default;
    Header( 'Location: ticket_booked.php');
  }
  echo " <a href = \"ticket_booked.php\" > ticket </a>";
  echo " <p1 style=\"color:red; font-size: 15px; font-family: calibri, sans-serif;position:absolute;left:350px;top:540px;\">";
  echo "Error !!!  please fill all fields correctly"; 
  echo "</p1>"; 
}
?>

<html>
<head>
<title>EasytoGo</title>
  <link rel="icon" href="icon.png" type="image/png" sizes="60x60px">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<a name="TOP"></a>
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
  

<p1 style="color: #000000; font-size: 15px; font-family: calibri, sans-serif;position:absolute;left:110px;top:270px;">Name</p1>
<p2 style="color: #000000; font-size: 15px; font-family: calibri, sans-serif;position:absolute;left:430px;top:270px;">Gender</p2>
<p3 style="color: #000000; font-size: 15px; font-family: calibri, sans-serif;position:absolute;left:590px;top:270px;">Age</p3>
<p4 style="color: #000000; font-size: 15px; font-family: calibri, sans-serif;position:absolute;left:700px;top:270px;">Seat no</p4>
<p5 style="color: #000000; font-size: 15px; font-family: calibri, sans-serif;position:absolute;left:450px;top:290px;">M</p5>
<p6 style="color: #000000; font-size: 15px; font-family: calibri, sans-serif;position:absolute;left:500px;top:290px;">F</p6>
<p6 style="color: #000000; font-size: 15px; font-family: calibri, sans-serif;position:absolute;left:110px;top:340px;">Mobile</p6>
<p7 style="color: #000000; font-size: 15px; font-family: calibri, sans-serif;position:absolute;left:430px;top:340px;">E-mail</p7>
<p8 style="color: #000000; font-size: 15px; font-family: calibri, sans-serif;position:absolute;left:110px;top:410px;">Credit card no.</p8>
<p9 style="color: #000000; font-size: 15px; font-family: calibri, sans-serif;position:absolute;left:430px;top:410px;">Name on the card</p9>
<p10 style="color: #000000; font-size: 15px; font-family: calibri, sans-serif;position:absolute;left:110px;top:480px;">Amount payable</p10>

<form method="post" action="customer_details.php">
<input size="50" type="text" name="customer_name"style="width:250px;position:absolute;left:110px;top:290px">
<input type="radio" name="gender" value="M"style="position:absolute;left:425px;top:290px">
<input type="radio" name="gender" value="F"style="position:absolute;left:475px;top:290px">
<input size="50" type="text" name="customer_age"style="width:60px;position:absolute;left:590px;top:290px">
<input size="50" type="text" name="mobile"style="width:250px;position:absolute;left:110px;top:360px">
<input size="50" type="text" name="email"style="width:300px;position:absolute;left:430px;top:360px">
<input size="50" type="text" name="card_no"style="width:250px;position:absolute;left:110px;top:430px">
<input size="50" type="text" name="card_name"style="width:250px;position:absolute;left:430px;top:430px">
<input onclick="location.href=http://localhost/ticket_booked.php" style="color:White; background-color:#00009C;position:absolute;left:670px;top:490px" type="submit" value="  Book now  " name="submit">
</form>



</body>
</html>

