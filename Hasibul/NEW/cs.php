<!DOCTYPE html>
<html>
   <head>
       <title>Bike</title>
  <style>
.muk{margin: 9% 38%}
input{width: 84%;height: 20px;}
input[type="submit"] {width: 45%;margin: 5% 20%;}
h2{margin: 2% 20%;padding-top: 21px }
form {background-color: lightblue;width: 120%;padding-left: 40px; margin: 0% -25%}


*
{
    margin: 0;
    padding: 0;
}

body
    {
    background-image: url(1.jpg);
    color:#000; 
    font-family:Arial;
    background-repeat: no-repeat;
    background-size: cover;
    }
ul{
    margin:0px;
    padding:0px;
    list-style:none;
}
ul li{
    float:left;
        width: 20%;
    hight:40px;
    background-color:black;
    opacity:.8;
    line-height:40px;
    text-align:center;
    font-size:20px;
    
    
}
ul li a {
    text-decoration: none;
    color: white;
    display:block;
}
ul li a:hover{
    background-color:green;
}
ul li ul li{
    display:none;
        width: 100%;
}
ul li:hover ul li{
    display:block;
}

.uu p {
    
    padding-top: 44px;
}
.uu {
    font-size: x-large;
    background-color: cadetblue;
    width: 100%;
    height: 113px;
    margin-top: 49%;
    text-align: center;
}
img {
    height: auto;
    width: 100%;
}
.left {
    width: 45%;
    float: left;
    margin-right: 10%;
}
.right {
    width: 45%;
    float: left;
}

footer h3
{
    color: red;
    text-align: center;
    width: 100%;
    height: 50px;

}  
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: blue;
   color: white;
   text-align: center;
}

       </style>
   </head>
   <body >

    <header>
                    <div class="container-fluid" style=" background-color:blue;color:#fff;">       
            <center>
                  

                       <i> <h3 style="font-size:50px;margin-left:80px; color: white">BIKE SELLING MANAGEMENT SYSTEM</h3></i>
                   
</center>
    </div>
        </header>

     <ul>
        <li><a href="http://localhost/NEW/index1.php">Home</a></li>
      <li><a>Insert</a>
         <ul>
         <li><a href="http://localhost/NEW/Bike.php">Bike</a></li>
               <li><a href="http://localhost/NEW/Customer.php">Customer</a></li>
               <li><a href="http://localhost/NEW/Payment.php">Payment</a></li>
       </ul>
      </li>
      <li><a>View</a>
     <ul>
         <li><a href="http://localhost/NEW/display.php">Bike</a></li>
         <li><a href="http://localhost/NEW/display1.php">Customer</a></li>
         <li><a href="http://localhost/NEW/display3.php">Payment</a></li>
       </ul>


      </li>
      </li>
      <li><a>Search</a>
            <ul>
			   <li><a href="http://localhost/NEW/bs.php">Bike</a></li>
			   <li><a href="http://localhost/NEW/cs.php">Customer</a></li>
			   <li><a href="http://localhost/NEW/ps.php">Payment</a></li>
         <li><a href="http://localhost/NEW/rs.php">Receipt</a></li>
			 </ul>
      </li>
      <li><a href="http://localhost/NEW/bill.php">Report</a></li>
     </ul>
   </div>
      
      <div class="muk">
     <form method="POST" action="search1.php">
     	<center>
     	<h2>Customer Information</h2></center>
        Search:
         <?php
  $servername="localhost";
$username="root";
$password="";
$db_name="db_bike";
$conn=mysqli_connect($servername,$username,$password,$db_name);
?>
<select name="searchKeyword" class="form-control">
<option value="pick">Customer Id</option>
<?php
$sql = mysqli_query($conn, "SELECT Id FROM `customer`");
$row = mysqli_num_rows($sql);
while ($row = mysqli_fetch_array($sql)){
echo "<option value='". $row['Id'] ."'>" .$row['Id'] ."</option>" ;
}
?>
        <input type="submit" value="submit">
    </form>
</div>
 <div class="footer">
        
  <i><h3>Created By Md Hasibul Hasan 
  ID: 17103121</h3></i>
  <h3>Sec: D</h3>
</div>
     
   </body>
</html>