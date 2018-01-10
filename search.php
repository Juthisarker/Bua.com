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
text-decoration: underline;
}
th, td {
  color: #1A237E;
  border: 1px solid #eee;
  padding: 12px 35px;
}
th {
  background:#1A237E;
  color: #fff;
  text-transform: uppercase;
  font-size: 12px;
border-radius: 5px;
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
	   
        <li><a href="http://cherry67.netne.net/afsana/bua2.com.php#about">HOME</a></li>
        <li><a href="http://cherry67.netne.net/afsana/bua2.com.php#services">SERVICES</a></li>
 
        
        <li><a href="http://cherry67.netne.net/afsana/bua2.com.php#contact">INSTRUCTIONS</a></li>
    <li><a href="http://cherry67.netne.net/afsana/reg_useren.php">SHOW MORE DETAILS</a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br><br>




        
  
<?php

$link= new mysqli("mysql8.000webhost.com","a1974138_ju","juthi80","a1974138_juthi");

if ($link->connect_errno) {
 
  
  die ("Connect failed:".$link->connect_error);
   
}


if(isset($_POST["submit"]))
{

	
	
$area =$_POST["area"];

$Age1=$_POST["age1"];
$Age2=$_POST["age2"];

$category=$_POST["category"];
 $a="full time"; 


if($area==''||$Age1==''||$Age2==''||$category=='')
{
echo"<script>alert('All the fields must be inserted')</script>";  
echo"<script>window.open('criteriaenglish.php','_self')</script>";  
    
}


 
//echo "3hello world <br>";
if($category == $a)
	

{
	
	
	
  $sql="SELECT name,area,age,salary,image_url FROM  buafull WHERE  area= '" . $area ."' AND age BETWEEN '" . $Age1 ."' AND '" . $Age2 ."' ";

	$records =  $link->query($sql);	echo '<h1><strong>Full Time maids available in '.$area.'</strong></h1>';
	//echo '<h1>'.$area.'</h1>';
	//echo'<table border="1" ><th >id</th><th>Name</th><th>Area</th><th>Expected Salary</th>';
	
	
	
	
	 if ($records->num_rows > 0) {




		 
		 echo "
   <div class='container'>
          <div class='row'>
          <div class='col-lg-12 col-sm-12'>
		  <table style='width:100%'>
 <thead> 
 <tr>
 
  <th>name</th>
  

  
 <th>age</th>
 <th>area</th>
<th>salary</th>
<th>Photo</th>
 
 </tr> 
 </thead> 
 </div>
 </div>
 </div>
 </tbody>" ;
	
	while($emp = mysqli_fetch_assoc($records))
       {   
	//echo'<tr><td>'.$emp['name'].'</td><td>'.$emp['age'].'</td><td>'.$emp['area'].'</td><td>'.$emp['salary'].'</td></tr>';
	
	echo "<tr>" ;
	echo "<td>".$emp['name']."</td>" ;
	echo "<td>".$emp['age']."</td>" ;
	echo "<td>".$emp['area']."</td>" ;
	echo "<td>".$emp['salary']."</td>" ;

      

     




   echo "<td><img src='upimg/".$emp['image_url']."' width='150' height='150'></td>";





  


	echo "</tr>" ;
	
        }
}

else {
       echo "<center>";
		  echo "<h4>No results to show</h4>";
		  echo "</center>";
    }
}
else 
	{
		
	$sql1="SELECT name,age,area,cook,clean,wash,image_url FROM  buapart WHERE  area= '" .$area."' AND age BETWEEN '" . $Age1 ."' AND '" . $Age2 ."' " ;
	
	$records1 =  mysqli_query($link,$sql1);
	echo "<center>";

	echo '<h1><strong>Full Time maids available in '.$area.'</strong></h1>';
	echo "</center>";
	if($records1->num_rows > 0)
		
	
	{
	
	
  echo "
   <div class='container'>
          <div class='row'>
          <div class='col-lg-12 col-sm-12'>
		  <table style='width:100%'>
 <thead> 
 <tr>
 
  <th>name</th>

 <th>age</th>
 <th>area</th>
<th> cook</th> 
<th> clean</th> 
<th>wash</th>
<th>photo</th>
 
 </tr> 
 </thead> 
 </div>
 </div>
 </div>
 </tbody>" ;
 
 
	while($emp1 = mysqli_fetch_assoc($records1 ))
{
	
	//echo'<tr><td>'.$emp1['Name'].'</td><td>'.$emp1['Area'].'</td><td>';
	
	echo "<tr>" ;
	echo "<td> ".$emp1['name']."</td>" ;
	echo "<td>".$emp1['age']."</td>" ;
	echo "<td>".$emp1['area']."</td></br>" ;

	echo "<td>".$emp1['cook']."</td>" ;
	echo "<td>".$emp1['clean']."</td>" ;
	echo "<td>".$emp1['wash']."</td>" ;
 
   

  echo "<td><img src='pupimg/".$emp1['image_url']."' width='150' height='150'></td>";

 
	
	
	
	echo "</tr>" ;
	
		
	}
	}
	
	else {
         echo "<center>";
		  echo "<h4>No results to show</h4>";
		  echo "</center>";
    }
	echo "</table>";

	}	
	
}


	mysqli_close($link);
	

?>