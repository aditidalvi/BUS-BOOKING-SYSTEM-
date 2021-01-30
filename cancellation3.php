<?php
   
   session_start();
   $ticket_no=$_SESSION['ticket_no1'];
   $email=$_SESSION['email'];
   //@mysql_connect('localhost','root','')or die('Could not connect to database');
    //mysql_select_db('bus_reservation');

    
$conn = mysqli_connect('localhost:3307', 'root', '','bus_reservation');

// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";



	$sql="SELECT name,gender,age FROM customer_details WHERE ticket_no=$ticket_no and email='$email' ";
    
    // $result=mysql_query($sql) or trigger_error(mysql_error().$sql);
    $result = $conn->query($sql);

     while($row= mysqli_fetch_assoc($result))
 {
       $age=$row['age'];
       $name=$row['name']; 
       $gender=$row['gender']; 
 }
echo " <p1 style=\"color:#000000; font-size: 20px; font-family: calibri, sans-serif;position:absolute;left:230px;top:300px;\">";
  echo $name;  
  echo "</p1>"; 
echo " <p1 style=\"color:#000000; font-size: 20px; font-family: calibri, sans-serif;position:absolute;left:230px;top:100px;\">";
  echo $ticket_no;  
  echo "</p1>";
echo " <p1 style=\"color:#000000; font-size: 20px; font-family: calibri, sans-serif;position:absolute;left:780px;top:300px;\">";
  echo $age;  
  echo "</p1>";  
echo " <p1 style=\"color:#000000; font-size: 20px; font-family: calibri, sans-serif;position:absolute;left:480px;top:300px;\">";
  echo $gender;  
  echo "</p1>";   

$sql1="SELECT d,bus_no,seat_no FROM seat_details WHERE ticket_no=$ticket_no";    
//$result1=mysql_query($sql1) or trigger_error(mysql_error().$sql1);
$result1 = $conn->query($sql1);
     while($row1= mysqli_fetch_assoc($result1))
 {
       $date=$row1['d'];
       $bus_no=$row1['bus_no']; 
       $seat_no=$row1['seat_no']; 
 }

echo " <p1 style=\"color:#000000; font-size: 20px; font-family: calibri, sans-serif;position:absolute;left:760px;top:100px;\">";
  echo " $date " ;  
  echo "</p1>";
echo " <p1 style=\"color:#000000; font-size: 20px; font-family: calibri, sans-serif;position:absolute;left:780px;top:200px;\">";
  echo $seat_no;  
  echo "</p1>"; 
echo " <p1 style=\"color:#000000; font-size: 20px; font-family: calibri, sans-serif;position:absolute;left:230px;top:200px;\">";
  echo $bus_no;  
  echo "</p1>"; 

$sql2="SELECT travels FROM bus_details WHERE bus_no=$bus_no";    
//$result2=mysql_query($sql2) or trigger_error(mysql_error().$sql2);
$result2 = $conn->query($sql2);

    while($row2= mysqli_fetch_assoc($result2))
 {
       $travels=$row2['travels'];       
 }
  echo " <p1 style=\"color:#000000; font-size: 20px; font-family: calibri, sans-serif;position:absolute;left:490px;top:200px;\">";
  echo $travels;  
  echo "</p1>";  
   if (isset($_POST['submit']))
{
  $sql3="DELETE FROM customer_details WHERE ticket_no=$ticket_no and email='$email'";    
  // $result3=mysql_query($sql3) or trigger_error(mysql_error().$sql3);
  $result3 = $conn->query($sql3); 
  
   $sql5="SELECT d,bus_no FROM seat_details WHERE ticket_no=$ticket_no";    
  //$result5=mysql_query($sql5) or trigger_error(mysql_error().$sql5);
  $result5 = $conn->query($sql5);

     while($row3= mysqli_fetch_assoc($result5))
 {
       $day=$row3['d'];       
       $num=$row3['bus_no'];
 }
  
  
  $sql4="UPDATE seat_details SET status='available',ticket_no=0 WHERE ticket_no=$ticket_no";    
  //$result4=mysql_query($sql4) or trigger_error(mysql_error().$sql4); 
  $result4 = $conn->query($sql4);

  $sql6="UPDATE bus_details SET seats=seats+1 WHERE d='$day' and bus_no=$num";    
  //$result6=mysql_query($sql6) or trigger_error(mysql_error().$sql6);
  $result6 = $conn->query($sql6);
  
  Header( 'Location: cancellation2.php');
}
?>

<html>
<head>
<title>EasytoGo</title>
  <link rel="icon" href="icon.png" type="image/png" sizes="60x60px">
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
        <li class="active"><a href="http://localhost/Aditi 2/home1.php">Home</a></li>
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



<p1 style="color: #000000; font-size: 20px; font-family: calibri, sans-serif;position:absolute;left:150px;top:100px;">Ticket no:</p1>
<p1 style="color: #000000; font-size: 20px; font-family: calibri, sans-serif;position:absolute;left:150px;top:200px;">Bus no:</p1>
<p1 style="color: #000000; font-size: 20px; font-family: calibri, sans-serif;position:absolute;left:400px;top:200px;">Travels:</p1>
<p1 style="color: #000000; font-size: 20px; font-family: calibri, sans-serif;position:absolute;left:690px;top:100px;">Date:</p1>
<p1 style="color: #000000; font-size: 20px; font-family: calibri, sans-serif;position:absolute;left:690px;top:200px;">Seat no:</p1>
<p2 style="color: #000000; font-size: 20px; font-family: calibri, sans-serif;position:absolute;left:400px;top:300px;">Gender:</p2>
<p3 style="color: #000000; font-size: 20px; font-family: calibri, sans-serif;position:absolute;left:690px;top:300px;">Age:</p3>
<p4 style="color: #000000; font-size: 20px; font-family: calibri, sans-serif;position:absolute;left:150px;top:300px;">Name:</p4>

<form method="post" action="cancellation3.php">
<input onclick="location.href=cancellation2.php" style="color:White; font-size:20px; background-color:#00009C;position:absolute;left:690px;top:420px" type="submit" value=" Cancel ticket " name="submit">
</form>

</body>
</html>