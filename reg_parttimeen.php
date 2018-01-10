<html>
<head>
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<style type="text/css">
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
 color:white;
 font-size:14px;
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
 box-shadow: 1px 2px 3px white;
    border-radius: 8px;
    border: 1px solid white;
    text-decoration: none;
    opacity: 0.9;
    cursor: pointer;
 color:white;
}
#er 

    color: white;
    text-align: center;
    margin: 10px 0px;
    font-size: 17px;
}
#tb1
{
	color:black;
}
h1
{
color:#1A237E;
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
        <li><a href="#about">HOME</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#pricing">LOGIN</a></li>
        
        <li><a href="#contact">INSTRUCTIONS</a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br>
<br>
<br>
<br>
<br><br><br>
<br>


     <div id="er"></div>
	 <form action="reg_parttimeen.php" method="post" enctype="multipart/form-data">
	 <center>
     <h1><strong>REGISTRATION FOR PART TIME WORK</strong></h1>
	 <br>
	 <br>
	 </center>
      <table id="tbl" align="center">
	  <tr><td>Name:</td><td><input type="text" name="name" id="name"></td></tr>
	  <tr><td>Username:</td><td><input type="text" name="user" id="name"></td></tr>
       <tr><td>Contact:</td><td><input type="text" name="contact" id="contact"></td></tr>
    <tr><td>Age:</td><td><input type="text" name="age" id="age"></td></tr>
	<tr><td>Area:</td><td><input type="text" name="area" id="area"></td></tr>
	<tr><td>Reference:</td><td><input type="text" name="reference" id="reference"></td></tr>
	    <tr><td>Rate For Cooking:</td><td><input type="text" name="cook" id="area"></td></tr>
		<tr><td>Rate For Cleaning:</td><td><input type="text" name="clean" id="area"></td></tr>
		<tr><td>Rate ForWashing:</td><td><input type="text" name="wash" id="area"></td></tr>
	<tr><td>Password:</td><td> <input type="password" name="password"  id="password"></td></tr>
        <tr><td>image upload:</td><td>  <input type="file" name="file_img" /></td></tr>
<br><br>

       <tr><td></td><td><input type="submit" name="register" id="submit" value="register"></td></tr>
      </table>
     </form>



</body>

</html>
<?php  
  





//include("m/db_connection.php");//make connection here
$dbcon=mysqli_connect("mysql8.000webhost.com","a1974138_ju","juthi80");  
mysqli_select_db($dbcon,"a1974138_juthi");  
if(isset($_POST['register']))  
{  
    
$name=$_POST['name'];
  $user=$_POST['user'];
  $contact=$_POST['contact'];
  $age=$_POST['age'];
  $area=$_POST['area'];
  $reference=$_POST['reference'];
  $cook=$_POST['cook'];
  $clean=$_POST['clean'];
  $wash=$_POST['wash'];
  $password=$_POST['password'];

	$filetmp = $_FILES["file_img"]["tmp_name"];
 $filename = $_FILES["file_img"]["name"];
 $filetype = $_FILES["file_img"]["type"];
 $filepath = "pupimg/".$filename;
 

 move_uploaded_file($filetmp,$filepath);
  if($name==''||$user==''||$contact==''||$area==''||$age==''||$reference==''||$password==''||$cook==''||$clean==''||$wash==''||$filename=='')  
    {  
      echo "<script>alert('Please Insert all the fields')</script>";  
    echo "<script>window.open('reg_parttimeen.php','_self')</script>"; 
    }  
  
//here query check weather if user already registered so can't register again.  
    $check_username_query="select * from buapart WHERE username='$user'";  
    $run_query=mysqli_query($dbcon,$check_username_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('User $user is already exists, Please try another one!')</script>";  
exit();  
    }  
//insert the user into the database.  
    $insert_user="insert into buapart values('','".$filename."','".$name."','".$user."','".$contact."','".$age."','".$area."','".$reference."','".$cook."','".$clean."','".$wash."','".$password."')";
    if(mysqli_query($dbcon,$insert_user))  
    {  
		echo "<h4>Congratulations!!you have registered successfully<h4>";
                 echo"<script>window.open('new 1.php','_self')</script>"; 
    }  
  
  
  
}  
  
?>  