<?php
 if (isset($_POST['submit']))
{
 session_start();
$_SESSION['ticket_no']=$_POST['ticket_no'];
$ticket_no=$_SESSION['ticket_no'];
// @mysql_connect('localhost','root','')or die('Could not connect to database');
 // mysql_select_db('bus_reservation');

 $conn = mysqli_connect('localhost:3307', 'root', '','bus_reservation');

 // Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

	$sql="SELECT ticket_no FROM customer_details";
 // $result=mysql_query($sql) or trigger_error(mysql_error().$sql);
 $result= $conn->query($sql);

     while($row= mysqli_fetch_assoc($result))
 {
       $t1=$row['ticket_no'];
	   if($t1==$ticket_no)
       {
             Header( 'Location: print_ticket2.php');  
	   
	   } 
 }
echo " <p1 style=\"color:red; font-size: 15px; font-family: calibri, sans-serif;position:absolute;left:340px;top:380px;\">";
echo "Error !!! ticket number is incorrect"; 
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
  <style>
      html {
    box-sizing: border-box;
  }
  *, *:before, *:after {
    box-sizing: inherit;
  }
  .bg-img {
  /* The image used */
  background-image: url("bus10.jpg");

  min-height: 400px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

      body {
    color: #343434;
    background-color:#F0F1F2;

    margin: 0;
    padding: 0;
    font-family: 'Montserrat', sans-serif;
    font-size: 15px;
    line-height: 1.5;
  }

  

        footer {
    background: #343434;
    color: #F7FFF7;
  }
        a{
        color: #FFE66D;
    }
    </style>
</head>
<body class = "bg-img">
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



<center><h1><strong>Print Your Ticket<strong></h1></center>
<hr>
<div class="container-fluid ">


<br>
  <form class="form-horizontal" method="post" action="print_ticket.php">
    <div class="form-group">
      <label class="control-label col-sm-4" for="ticket" style="font-size:large">Ticket number:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="ticket" placeholder="ENTER TICKET NO" name="ticket_no">
      </div>
    </div>
   
    <div class="form-group">        
      <div class="col-sm-offset-4 col-md-4">
<!--</form>-->
        <button onclick="location.href=http://localhost/print_ticket2.php" type="submit" class="btn btn-default btn-block btn-primary" value="Get ticket details" name="submit">Submit</button>
      </div>
    </div>
  </form>
</div>


<!--
<p1 style="color: #000000; font-size: 15px; font-family: calibri, sans-serif;position:absolute;left:240px;top:280px;">Ticket number</p1>
<form method="post" action="print_ticket.php">
<input size="30" type="text" name="ticket_no"style="width:200px;position:absolute;left:340px;top:275px">
<input onclick="location.href=http://localhost/print_ticket1.php" style="color:White; background-color:#00009C;position:absolute;left:340px;top:330px" type="submit" value=" Submit " name="submit">
</form>-->

<!--
<a href="home.php" style="color: #454545; font-size: 15px; font-family: calibri, sans-serif;font-weight: bold;position:absolute;left:900px;top:170px;">HOME</a>
<a href="print_ticket.php" style="color: #454545; font-size: 15px; font-family: calibri, sans-serif;font-weight: bold;position:absolute;left:970px;top:170px;">PRINT TICKET</a>
<a href="cancellation.php" style="color: #454545; font-size: 15px; font-family: calibri, sans-serif;font-weight: bold;position:absolute;left:1085px;top:170px;">CANCELLATION</a>-->


<body>
</html>
