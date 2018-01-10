<?php  
session_start();  
  
if(!$_SESSION['username'])  
{  
  
    header("Location: new 1.php");//redirect to login page to secure the welcome page without login access.  
}  
  
?>  
  
<html>  
<head>  
    <title>  
        profile  
    </title> 
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<style>
.button6{
width:250px;
height:45px;
border:none;
outline:none;
box-shadow:-5px 5px 5px 0 #1A237E;
margin-top:20px;
color:#fff;
font-size:14px;
text-shadow:0 1px rgba(0,0,0,0.4);
background-color:#1A237E;
border-radius:3px;
font-weight:700
}
.button6:hover{
background-color:#1A237E;
cursor:pointer
}
.navbar {
      margin-bottom: 0;
      background-color:#1A237E;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
.select#soflow, select#soflow-color {
   -webkit-appearance: button;
   -webkit-border-radius: 2px;
   -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
   -webkit-padding-end: 20px;
   -webkit-padding-start: 2px;
   -webkit-user-select: none;
   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
   background-position: 97% center;
   background-repeat: no-repeat;
   border: 1px solid #AAA;
   color: #555;
   font-size: inherit;
   margin: 20px;
   overflow: hidden;
   padding: 5px 10px;
   text-overflow: ellipsis;
   white-space: nowrap;
   width: 300px;
}
body {
	background: url('http://www.demo.amitjakhu.com/login-form/images/bg.png');
	font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
	font-weight:300;
	text-align: left;
	text-decoration: none;
	height: 500px;
}
h1{
	color:#1A237E;
}
.inputs {
    height: 50px;
    padding: 0 10px;
    border: none;
    background: #1A237E;
    background: rgba(255, 255, 255, 0.2);
    box-shadow: inset 0 0 10px rgba(255, 255, 255, 0.5);
    font-family: 'Montserrat', sans-serif;
    text-indent: 10px;
    color: #1A237E;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
    font-size: 20px;
    width: 270px;
}

.inputs:focus {
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.2), inset 0 1px 1px rgba(0, 0, 0, 0.1), 0 0 0 3px rgba(255, 255, 255, 0.15);
    outline: none;
    background: #1A237E;
    background: rgba(255, 255, 255, 0.4);
    outline: solid 1px #1A237E;
}
p{
color:#1A237E;
}
</style> 
</head>  
  
<body> 
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout1bg.php">&#2482;&#2455; &#2438;&#2441;&#2463; </a></li>
      </ul>
    </div>
  </div>
</nav>
 <br><br><br><br><br><br><br><br>
<center>
<h1>&#2488;&#2509;&#2476;&#2494;&#2455;&#2468;&#2478; </h1>  
<h1><?php  
echo $_SESSION['username'];  
?>  </h1>
  </center> 
<br><br>
<center>
<p><strong>&#2438;&#2474;&#2472;&#2494;&#2480; &#2472;&#2495;&#2527;&#2507;&#2455;&#2453;&#2480;&#2509;&#2468;&#2494;&#2480; &#2468;&#2469;&#2509;&#2479; &#2460;&#2494;&#2472;&#2497;&#2472; &#2475;&#2507;&#2472; &#2472;&#2494;&#2478;&#2509;&#2476;&#2494;&#2480; &#2470;&#2495;&#2527;&#2503; </strong></p>

<form action = "final1bg.php" method ="post">


<br>



 <input class="inputs" type="text" name="contact" placeholder="&#2478;&#2507;&#2476;&#2494;&#2439;&#2482; &#2472;&#2494;&#2478;&#2509;&#2476;&#2494;&#2480; &#2470;&#2495;&#2472;" >

<br>
<button class="button6" type="submit" name="submit">&#2454;&#2507;&#2433;&#2460; &#2453;&#2480;&#2497;&#2472; </button>

</form>
</center> 
 
  
  
</body>  
  
</html>  