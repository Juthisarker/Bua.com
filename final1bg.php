<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
 
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
 
 
<style type="text/css">
 
.button1 {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
h4
{
color:red;
}
.w{color:white;
 
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
table {
  font-family: 'Verdana';
  margin: 25px auto;
  border-collapse: separate;
border-spacing: 3px;
  border: 1px solid #eee;
 
text-align:center;
border-radius:20px;
}
 
td:hover {
  color:#1A237E;
background: #f1f1f1;

}
th, td {
  color: #1A237E;
  border: 1px solid #eee;
  padding: 5px 10px;
}
th {
  background:#1A237E;
  color: #fff;
  text-transform: uppercase;
  font-size: 12px;
border-radius: 5px;
text-align:center;

}
tr, td {
transition: all 1s;
border-radius: 5px;
box-shadow: 3px 3px #808080;
}
h1{
	color:#1A237E;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 20px;
    width:5px;
}
td
{
text-align:left;
}
body {
	background: url('http://www.demo.amitjakhu.com/login-form/images/bg.png');
	font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
	font-weight:300;
	text-align: left;
	text-decoration: none;
	height: 500px;
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
        <li><a href="logout1bg.php">লগ আউট </a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br><br><br><br><br><br>

<?php
$link= new mysqli("mysql8.000webhost.com","a1974138_ju","juthi80","a1974138_juthi");

if ($link->connect_errno) {
 
  
  die ("Connect failed:".$link->connect_error);
echo "connected";
   
}
if(isset($_POST["submit"])){
	
$number=$_POST["contact"];
if($number=='')  
    {  
      echo "<script>alert('Please enter mobile number')</script>";  
    echo "<script>window.open('bua_profilebg.php','_self')</script>"; 
    }  

		
	$sql="SELECT name,contact,nid,address FROM  userinfo1 WHERE  contact= '" . $number ."' ";
	
	$records =  $link->query($sql);
	
	 if ($records->num_rows > 0) {
echo "
   <table style='width:50%'>
       <center>
<h1><strong>Employer's  Information<strong></h1>
</center>";
	while($row3 = mysqli_fetch_assoc($records))
                 { 
                      echo "<tr>";
                      echo "<th>নাম :</th>";
                      echo "<td> ".$row3['name']."</td>";
                       echo "</tr>";
                      echo "<tr>";
                      echo "<th>যোগাযোগ :</th>";
                      echo "<td> ".$row3['contact']."</td>";
                      echo "</tr>";

                       echo "<tr>";
                      echo "<th>ঠিকানা :</th>";
                      echo "<td> ".$row3['address']."</td>";
                      echo "</tr>";

                      echo "<tr>";
                      echo "<th>জাতীয় পরিচয় পত্র নং :</th>";
                      echo "<td> ".$row3['nid']."</td>";
                      echo "</tr>"; 
                      
                 }
                 
          }  
          else
          {   
              echo "<center>";
              echo "<h1><strong>কোনো ফলাফল নেই </strong></h1>";
              echo "</center>";
          }   
echo "</table>";  
}
mysqli_close($link);
?>


</body>
</html>

