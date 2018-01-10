<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<style type="text/css">
.texto {
  color: #1A237E; 
  font-size: 40px; 
  margin: 2% auto;
  text-align: center;
  font-family: 'Titan One';   
  text-shadow: 1px 2px 1px  rgba(0,0,0,.5);
  padding-top: 40px;
}

 .contact {
    text-align:center;
    background: none repeat scroll 0% 0% #7986CB;
    padding: 20px 10px;
    box-shadow: 1px 2px 1px #8FBF73;
    border-radius: 10px;
	height:610px;
 width:1300px;
 }
 #name, #contact,#area,#expected_salary,#age,#reference,#password {
    width: 250px;
    margin-bottom: 15px;
    background: none repeat scroll 0% 0% white;
    border: 1px solid #91B57C;
    height: 30px;
    color: black;
    border-radius: 8px;
    box-shadow: 1px 2px 3px;
}
#submit
{
    background:none repeat scroll 0% 0% #3F51B5;
    display: inline-block;
    padding: 5px 10px;
    line-height: 1.05em;
 box-shadow: 1px 2px 3px #1A237E;
    border-radius: 8px;
    border: 1px solid white;
    text-decoration: none;
    opacity: 0.9;
    cursor: pointer;
 color:white;
}
#er 

    color: #1A237E;
    text-align: center;
    margin: 10px 0px;
    font-size: 17px;
}
#tb1
{
	color:#1A237E;
}


h1
{
color:#1A237E;
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
  body {
	background: url('http://www.demo.amitjakhu.com/login-form/images/bg.png');
	font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
	font-weight:300;
	text-align: left;
	text-decoration: none;
	height: 500px;
}
td
{
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
        <li><a href="http://cherry67.netne.net/afsana/bua2bg.com.php#about">&#2489;&#2507;&#2478;</a></li>  
        <li><a href="http://cherry67.netne.net/afsana/bua2bg.com.php#services">&#2488;&#2503;&#2476;&#2494; </a></li> 
        <li><a href="http://cherry67.netne.net/afsana/loginbg.php">&#2439;&#2441;&#2460;&#2494;&#2480; &#2489;&#2495;&#2488;&#2503;&#2476;&#2503; &#2482;&#2455;&#2439;&#2472; </a></li>
        
        <li><a href="http://cherry67.netne.net/afsana/bua2bg.com.php#contact">&#2472;&#2496;&#2468;&#2495;&#2478;&#2494;&#2482;&#2494; </a></li> 
      </ul>
    </div>
  </div>
</nav>
<br><br><br>
<br>
<br>
<br>

     <div id="er"></div>
	 <form action="reg_userbg.php" method="post">
	 <center>
     <p class="texto"> &#2480;&#2503;&#2460;&#2495;&#2488;&#2509;&#2468;&#2509;&#2480;&#2494;&#2486;&#2472; &#2475;&#2480;&#2509;&#2478; </p> 
	 <br>
	 <br>
	 </center>
      <table id="tbl" align="center">
	  
       <tr><td>&#2472;&#2494;&#2478; </td><td><input type="text" name="name" id="name"></td></tr> 

	    <tr><td>&#2439;&#2441;&#2460;&#2494;&#2480; &#2472;&#2494;&#2478; </td><td><input type="text" name="username" id="name"></td></tr> 

       <tr><td>&#2479;&#2507;&#2455;&#2494;&#2479;&#2507;&#2455; </td><td><input type="text" name="contact" id="contact"></td></tr> 

	<tr><td>&#2447;&#2482;&#2494;&#2453;&#2494; </td><td><input type="text" name="address" id="area"></td></tr>

	<tr><td>&#2460;&#2494;&#2468;&#2496;&#2527; &#2474;&#2480;&#2495;&#2458;&#2527; &#2474;&#2468;&#2509;&#2480; &#2472;&#2434; </td><td><input type="text" name="national_id" id="area"></td></tr

	<tr><td>&#2474;&#2494;&#2488;&#2451;&#2527;&#2494;&#2480;&#2509;&#2465; </td><td> <input type="password" name="password"  id="password"></td></tr>
 


 

       <tr><td></td><td><input type="submit" name="register" id="submit" value="&#2480;&#2503;&#2460;&#2495;&#2488;&#2509;&#2468;&#2494;&#2480; "></td></tr> 
      </table>
     </form>
</body>
</html>

<?php  
  
$dbcon=mysqli_connect("mysql8.000webhost.com","a1974138_ju","juthi80");  
mysqli_select_db($dbcon,"a1974138_juthi");  
if(isset($_POST['register']))  
{  
    

  $user_name=$_POST['username'];

$name=$_POST['name'];
  $contact=$_POST['contact'];
  $address=$_POST['address'];
  $national_id=$_POST['national_id'];
  $user_pass=$_POST['password'];
   
    if($national_id==''||$name==''||$user_name==''||$user_pass==''||$contact==''||$address=='')  
    {  
        echo"<script>alert('Please enter all the fields')</script>";  
        echo"<script>window.open('reg_userbg.php','_self')</script>";  
    } 
//here query check weather if user already registered so can't register again.  
    $check_username_query="select * from userinfo1 WHERE username='$user_name'";  
    $run_query=mysqli_query($dbcon,$check_username_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('User $user_name is already exists, Please try another one!')</script>";  
echo"<script>window.open('reg_userbg.php','_self')</script>";   
    }  
//insert the user into the database.  
$insert_user="insert into userinfo1 values('','','".$user_name."','".$name."','".$contact."','".$national_id."','".$address."','".$user_pass."')";
    if(mysqli_query($dbcon,$insert_user))  
    {  
        echo"<script>window.open('loginbg.php','_self')</script>";  
    }  
  
  
  
}  
  
?>  