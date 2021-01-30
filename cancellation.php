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
  
  .bg-img {
  /* The image used */
  background-image: url("bus9.jpg");

  min-height: 400px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
    </style>
</head>
    <body class="bg-img">
        
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
<center><h1><strong>Cancel Your Ticket</h2></strong></h1></center>


<div class="container-fluid ">


<br>
  <form class="form-horizontal" method="post" action="cancellation.php">
    <div class="form-group">
      <label class="control-label col-sm-4" for="ticket" style="font-size:large">Ticket number:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="ticket" placeholder="ENTER TICKET NO" name="ticket_no">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="email" style="font-size:large">Email:</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" id="email" placeholder="ENTER EMAIL" name="email_id">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-4 col-md-4">
</form>
        <button onclick="cancellation3.php" type="submit" class="btn btn-default btn-block btn-primary" value="Get ticket details" name="submit">Submit</button>
      </div>
    </div>
  </form>
</div>

<!--
<a href="home.php" style="color: #454545; font-size: 15px; font-family: calibri, sans-serif;font-weight: bold;position:absolute;left:900px;top:170px;">HOME</a>
<a href="print_ticket.php" style="color: #454545; font-size: 15px; font-family: calibri, sans-serif;font-weight: bold;position:absolute;left:970px;top:170px;">PRINT TICKET</a>
<a href="cancellation.php" style="color: #454545; font-size: 15px; font-family: calibri, sans-serif;font-weight: bold;position:absolute;left:1085px;top:170px;">CANCELLATION</a>-->

<?php

 if (isset($_POST['submit']))
{
 session_start();
$_SESSION['ticket_no1']=$_POST['ticket_no'];
$_SESSION['email']=$_POST['email_id'];
$ticket_no=$_POST['ticket_no'];
$email=$_POST['email_id'];

$conn = mysqli_connect('localhost:3307', 'root', '','bus_reservation');

   // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";

  $sql="SELECT ticket_no,email FROM customer_details";

  $result = $conn->query($sql);

  while($row= mysqli_fetch_assoc($result))
  {
        $t1=$row['ticket_no'];
        $t2=$row['email'];
        if($t1==$ticket_no&&$t2==$email)
        {
              Header( 'Location: cancellation3.php');  
        
        } 
  }

  echo " <p1 style=\"color:red; font-size: 15px; font-family: calibri, sans-serif;position:absolute;left:340px;top:430px;\">";
echo "Error !!! ticket number or e-mail id is incorrect"; 
echo "</p1>";

}
?>


</body>
</html>