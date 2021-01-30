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
  body{
    background:white;
  }
  p
  {
    color:#000080; font-weight:bold; font-size: 40px; font-family: calibri, sans-serif;position:absolute;left:500px;top:145px;
  }
  h2{
    color:#000080; font-weight:bold; font-size: 50px; font-family: calibri, sans-serif;position:absolute;left:370px;top:60px;
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

<!--<pos3 style="position:absolute;left:100px;top:210px;">
<img src="17.jpg" alt="workhead">
</pos3>-->
<div align="center">
<image src="ticket.gif" >
<h2>Thank you for boooking with busbus</h2>
<p>Your ticket number is</p>
</div>


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
<!--<button  onclick="location.href='http://www.hotels.com/?dateless=true'" style="color:White; background-color:#00009C;position:absolute;left:540px;top:510px" type="button" >Click here</button>-->

<?php
session_start();
$t=$_SESSION['temp'];
echo " <p1 style=\"color:#000080; font-weight:bold; font-size: 40px; font-family: calibri, sans-serif;position:absolute;left:870px;top:145px;\">";
echo $t;  
echo "</p1>"; 
?>
</body>
</html>