<?php  
session_start();  
  
if(!$_SESSION['username'])  
{  
  
    header("Location: loginen.php");//redirect to login page to secure the welcome page without login access.  
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
box-shadow:-5px 5px 5px 0 #8aa7fb;
margin-top:20px;
color:#fff;
font-size:14px;
text-shadow:0 1px rgba(0,0,0,0.4);
background-color:#1A237E;
border-radius:3px;
font-weight:700
}
.button6:hover{
background-color:#2E64FE;
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
        <li><a href="logout.php">LOG OUT</a></li>
      </ul>
    </div>
  </div>
</nav>
 <br><br><br>
<center>
<h1>HELLO!!!</h1>  
<h1><?php  
echo $_SESSION['username'];  
?>  </h1>
  </center>
<br><br>
<center>
<h1><strong>Select your criteria for BUA</strong></h1>
<form action = "final.php" method ="post">
<select id="soflow-color" name="area">
  <!-- This method is nice because it doesn't require extra div tags, but it also doesn't retain the style across all browsers. -->
  <option>---Select area---</option>
  <option value="Farmgate">Farmgate</option>
<option value="Mirpur">Mirpur</option>
<option value="Puran Dhaka">Puran Dhaka</option>
<option value="Uttara">Uttara</option>

</select>

<br>


<select id="soflow-color" name="category">
  <!-- This method is nice because it doesn't require extra div tags, but it also doesn't retain the style across all browsers. -->
  <option>---Select type---</option>
  <option value="part time">part time</option>
<option value="full time">full time</option>
</select>
<br>
<div class="row">
	<div  class="form">
	
	
		
            <input class="input-style" type="number" name="age1" placeholder="Age from..." min="18" max="56">
           
	<!-- /.col-lg-6 -->
			
			
	
		
	
            <input class="input-style" type="number" name="age2" placeholder="Age to..." min="18" max="56">
           
	<!-- /.col-lg-6 -->
	</div>
</div>
<br>
<button class="button6" type="submit" name="submit">SEARCH</button>

</form>
</center> 
 
  
  
</body>  
  
</html>  