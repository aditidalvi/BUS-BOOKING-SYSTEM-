<?php
   
   session_start();
   $ticket_no=$_SESSION['ticket_no'];
   
   $conn = mysqli_connect('localhost:3307', 'root', '','bus_reservation');

   // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  //echo "Connected successfully";

  $sql="SELECT name,gender,age FROM customer_details WHERE ticket_no=$ticket_no";
    
  $result = $conn->query($sql);

  while($row= mysqli_fetch_assoc($result))
 {
       $age=$row['age'];
       $name=$row['name']; 
       $gender=$row['gender']; 
 }

 echo " <p1 style=\"color:#000000; font-size: 20px; font-family: calibri, sans-serif;position:absolute;left:230px;top:350px;\">";
  echo $name;  
  echo "</p1>"; 
echo " <p1 style=\"color:#000000; font-size: 20px; font-family: calibri, sans-serif;position:absolute;left:230px;top:150px;\">";
  echo $ticket_no;  
  echo "</p1>";
echo " <p1 style=\"color:#000000; font-size: 20px; font-family: calibri, sans-serif;position:absolute;left:780px;top:350px;\">";
  echo $age;  
  echo "</p1>";  
echo " <p1 style=\"color:#000000; font-size: 20px; font-family: calibri, sans-serif;position:absolute;left:480px;top:350px;\">";
  echo $gender;  
  echo "</p1>";   

  $sql1="SELECT d,bus_no,seat_no FROM seat_details WHERE ticket_no=$ticket_no"; 
  // $result1=mysql_query($sql1) or trigger_error(mysql_error().$sql1);
 $result1 = $conn->query($sql1);
 while($row1= mysqli_fetch_assoc($result1))
 {
       $dates=$row1['d'];
       $bus_nos=$row1['bus_no']; 
       $seat_nos=$row1['seat_no']; 
 }

 echo " <p1 style=\"color:#000000; font-size: 20px; font-family: calibri, sans-serif;position:absolute;left:760px;top:150px;\">";
  echo $dates;  
  echo "</p1>";
echo " <p1 style=\"color:#000000; font-size: 20px; font-family: calibri, sans-serif;position:absolute;left:780px;top:250px;\">";
  echo $seat_nos;  
  echo "</p1>"; 
echo " <p1 style=\"color:#000000; font-size: 20px; font-family: calibri, sans-serif;position:absolute;left:230px;top:250px;\">";
  echo $bus_nos;  
  echo "</p1>"; 


  $sql2="SELECT travels FROM bus_details WHERE bus_no=$bus_nos";
  $result2 = $conn->query($sql2);

  while($row2= mysqli_fetch_assoc($result2))
  {
        $travels=$row2['travels'];       
  }
   echo " <p1 style=\"color:#000000; font-size: 20px; font-family: calibri, sans-serif;position:absolute;left:490px;top:250px;\">";
   echo $travels;  
   echo "</p1>"; 
   
   if (isset($_POST['submit']))
   {
   Header( 'Location: home1.php');
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
  <style>
      html {
    box-sizing: border-box;
  }
  *, *:before, *:after {
    box-sizing: inherit;
  }

      body {
    color: #343434;
    background-color:white;

    margin: 0;
    padding: 0;
    font-family: 'Montserrat', sans-serif;
    font-size: 15px;
    line-height: 1.5;
  }

  .container {
  position: relative;
  text-align: center;
  color: white;
}

      .centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.HeroMain{
    width: 790px;
    height: 300px;
    background-color75#fff;
    border: 1px solid black;
    border-top-color: black;
    border-top-style: solid;
    border-top-width: 2px;
    border-right-color: black;
    border-right-style: solid;
    border-right-width: 2px;
    border-bottom-color: black;
    border-bottom-style: solid;
    border-bottom-width: 2px;
    border-left-color: black;
    border-left-style: solid;
    border-left-width: 2px;
    border-image-source: initial;
    border-image-slice: initial;
    border-image-width: initial;
    border-image-outset: initial;
    border-image-repeat: initial;
    margin: 0 auto;
    margin-top: 50px;
    margin-right: auto;
    margin-bottom: 0px;
    margin-left:90px;
    margin-top: 50px;
}

        footer {
    background: #343434;
    color: #F7FFF7;
  }
        a{
        color: #FFE66D;
    }
    #printable { display: none; }

    @media print
    {
        #non-printable { display: none; }
        #printable { display: block; }
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



<p1 style="color: #000000; font-size: 20px; font-family: calibri, sans-serif;position:absolute;left:150px;top:150px;">Ticket no:</p1>
<p1 style="color: #000000; font-size: 20px; font-family: calibri, sans-serif;position:absolute;left:150px;top:250px;">Bus no:</p1>
<p1 style="color: #000000; font-size: 20px; font-family: calibri, sans-serif;position:absolute;left:400px;top:250px;">Travels:</p1>
<p1 style="color: #000000; font-size: 20px; font-family: calibri, sans-serif;position:absolute;left:690px;top:150px;">Date:</p1>
<p1 style="color: #000000; font-size: 20px; font-family: calibri, sans-serif;position:absolute;left:690px;top:250px;">Seat no:</p1>
<p2 style="color: #000000; font-size: 20px; font-family: calibri, sans-serif;position:absolute;left:400px;top:350px;">Gender:</p2>
<p3 style="color: #000000; font-size: 20px; font-family: calibri, sans-serif;position:absolute;left:690px;top:350px;">Age:</p3>
<p4 style="color: #000000; font-size: 20px; font-family: calibri, sans-serif;position:absolute;left:150px;top:350px;">Name:</p4>
  
  

<div id="printable">
<form method="post" action="print_ticket2.php">
  </div>

<div id="non-printable">
<input onclick="window.print()" style="color:White; font-size:20px; background-color:#00009C;position:absolute;left:750px;top:425px" type="submit" value=" Print ticket " name="submit">
  </div>
</form>


</body>
</html>