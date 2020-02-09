<!DOCTYPE html>
<html>
   <head>
      
      <style>
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
    margin-right: 100%;
}
.right {
    width: 100%;
    float: left;
}

footer h2
{
    width: 100%;
    background-color: #222;
    padding: 60px 0px;

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
    <body>
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
<body>
    <div class="table"><div id="printableArea">

<?php
$conn = mysqli_Connect('localhost','root','','db_bike');
$sql="SELECT bike.Id,bike.Model,bike.Company,customer.Name,customer.Address,customer.Contact,payment.Date,payment.Price,payment.Vat,payment.Total_Cost
FROM ((bike
INNER JOIN customer ON bike.Id = customer.Id)
INNER JOIN payment ON bike.Id = payment.Id);
";
$result = mysqli_query($conn,$sql);

?>
<style>
table, th, td {
    border: 1px solid black; text-align: center;
} 
</style>
</head>

<body style="background-image:url('')">
<table style="width:100%">
  <tr style="color:blue">
  	<center style="color: blue">
      <h1>Devil Bike Showroom</h1>
      <p>Address:Road-12,Shop-32,Uttara,Dhaka-1230</p>
      <p>Contace: 01795-443674, Email: hhasibul677@gmail.com</p>
  	<h3 style="color:blue;text-align: center;padding: 20px">Sales Receipt(Admin Copy)</h3>
     
      </center>

    <th>Id</th>
    <th>Model</th> 
    <th>Company</th>
    <th>Name</th>
    <th>Address</th>
    <th>Contact</th>
    <th>Date</th>
    <th>Price</th>
    <th>Vat</th>
    <th>Total_Cost</th>
  </tr>
  

<?php
while ($accused=mysqli_fetch_assoc($result)) 
{
	echo "<tr>";
	echo"<td>".$accused['Id']."</td>";
	echo"<td>".$accused['Model']."</td>";
	echo"<td>".$accused['Company']."</td>";
	echo"<td>".$accused['Name']."</td>";
	echo"<td>".$accused['Address']."</td>";
	echo"<td>".$accused['Contact']."</td>";
	echo"<td>".$accused['Date']."</td>";
	echo"<td>".$accused['Price']."</td>";
	echo"<td>".$accused['Vat']."</td>";
	echo"<td>".$accused['Total_Cost']."</td>";
	echo "</tr>";
	}
?>
</table>
<center><p style="color: red; text-align: center;padding: 10px">THIS VEHICLE IS DESIGNED AND REQUIRES THE RIDER TO USE ACTIVE
RIDING - IF YOU HAVE NOT BEEN TRAINED IN ACTIVE RIDING, DO NOT
HAVE THE PHYSICAL CAPACITY OR CAN NOT APPLY ACTIVE RIDING WHEN 
YOU ARE RIDING, THEN DO NOT USE THIS VEHICLE. IT IS UNSAFE FOR YOU
</p>
 <p style="color:blue;text-align: right;  padding: 40px">-------------------------<br>Manager signature</p>
<img src="t.jpg" style="width:225px;height:45px;"></center>
<div>
<input type="button" onclick="printDiv('printableArea')" value="PRINT" /></div>

<script>
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}</script><br>
<div class="footer">
        
 <i> <h2>Created By Md Hasibul Hasan 
  ID: 17103121</h2></i>
  <h2>Sec: D</h2>
</div>
</body>
</html>
