
<?php
session_start();
 
 
 if (isset($_POST['submit']))
 {
   if(empty($_POST['date'])||($_POST['From']==$_POST['To']))
 {
           echo " <p1 style=\"color:red; font-size: 15px; font-family: calibri, sans-serif;position:absolute;left:240px;top:410px;\">";
			echo "Error ocurred!!! please enter again"; 
			echo "</p1>";

 }
 else
 {
 $_SESSION['from']=$_POST['From']; 
 $_SESSION['to']=$_POST['To'];
 $_SESSION['date']=$_POST['date'];
 Header( 'Location: bus_table.php');
} 
}
?>
<!DOCTYPE html>
<html>
<head>
<title>EasytoGo</title>
  <link rel="icon" href="icon.png" type="image/png" sizes="60x60px">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("bus8.png");

  min-height: 400px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  /*position: absolute;
  right: 0;*/
  margin: 130px auto;
  max-width: 300px;
  padding: 16px;
  background-color: white;
  font-size:large;
}

/* Full-width input fields 
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
*/
/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

footer{
    background-color: #343434;
    color:white;
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
    <ul class="nav navbar-nav navbar-left">
      <li ><a href="howtobook.html">how to book</a></li>
    </ul>
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




<!--<h2>Form on Hero Image</h2>-->
<div ><!--class="bg-img"-->
  <form method = "post" action="home2.php" class="container">
    <!--<h1>Login</h1>-->

    <label  for="sel1">From:</label>
      <select class="form-control" id="sel1" name="From">
      <option value="Goa">Goa</option>
      <option value="Bombay">Bombay</option>
      </select>
      <br>
      <label for="sel1">To:</label>
      <select class="form-control" id="sel1" name="To">
      <option value="Goa">Goa</option>
      <option value="Bombay">Bombay</option>
      </select>
      <br>

      <label for="pwd">Date:</label>
      <input type="text" class="form-control" id="pwd" placeholder="dd-mm-yyyy" name="date">
<br>
      <input onclick="location.href=http://localhost/bus_table.php" type="submit" class="btn btn-default"  value = "Search Buses"name="submit">

    <!--<button type="submit" class="btn">Search Buses</button>-->
  </form>
</div>

<!--
<p>This example creates a form on a responsive image. Try to resize the browser window to see how it always will cover the whole width of the screen, and that it scales nicely on all screen sizes.</p>
<p>Making the right travel arrangements is the genesis of any good holiday. Providing exceptional bus travel arrangements is the mantra that’s followed at AbhiBus. India’s largest online bus ticketing platform has driven the country’s bus booking journey over the past 13+ years through thousands of bus operators and routes. Striving to reach new heights when it comes to online bus booking in India, AbhiBus has become the right tool to use to have a smooth bus ticket booking experience. Anybody can use the official website of redBus or the user-friendly app to book their bus tickets from anywhere in the country. From the comfort of your home or from or office or vehicle, you can now make an online bus booking with ease. With these successful USPs, redBus has expanded internationally to countries like Singapore, Malaysia, Indonesia, Peru and Columbia. Abhibus is a online bus reservation system. You can now choose your bus and your seat easily, have the tickets delivered to your mail and online payments. Try Abhibus experience today.</p>
--> 




</body>
</html>