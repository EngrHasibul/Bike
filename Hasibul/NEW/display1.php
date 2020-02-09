<!DOCTYPE html>
<html>
<title>View</title>
   <head>
      
      <style>
      *
{
    margin: 0;
    padding: 0;
}
body
    {
    background-image: url();
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
       <div class="table"><div id="printableArea">
        
       <style>
table, th, td {
    border: 1px solid black; text-align: center;
}
</style>
<body>
<table style="width:100%">
  <tr style="color:blue">
    <center>
    <h1>Customer Information</h1></center>

    <th>Id</th>
    <th>Name</th> 
    <th>Address</th>
    <th>Contact</th>
    <th>Email</th>
    <th>Edit</th>
    <th>Delete</th>
    <th>Print</th>
    
  </tr>

  
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_bike";
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //echo "Connected successfully\n";

        $sql = "SELECT * FROM `customer`";

        $result = $conn->query($sql);
       
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // HERE EVERY TABLE DATA WILL CONTAIN DIFFRENT ID TO PRINT
                echo "
                <tr>
                <td Id='a".$row['Id']."'>".$row['Id']."</td>
                <td id='b".$row['Id']."'>".$row['Name']."</td>
                <td Id='c".$row['Id']."'>".$row['Address']."</td>
                <td Id='d".$row['Id']."'>".$row['Contact']."</td>
                <td Id='e".$row['Id']."'>".$row['Email']."</td>";

                // EDIT BUTTON CREATION
                echo "<td><form action='' method='GET'><input type='submit' name=".$row['Id']." value='Edit'></form></td>";
                // DELETE BUTTON CREATION
                echo "<td><form action='' method='GET'><input type='submit' name='delete".$row['Id']."' value='Delete'></form></td>";
                // PDF BUTTON CREATION
                echo "<td><form action='' method='GET'><input type='submit' name='print".$row['Id']."' value='Print'></form></td></tr>";

                // UPDATE CODE STARTS FROM HERE
                if(isset($_GET[$row['Id']])){
                    echo"<form action='' method='POST'><div class='p' Id='close'>";// CLASS P IS USED TO DECORATION AND ID CLOSE IS USED TO CLOSE THE POPUP PAGE
                    echo"Update Information</br></br>";
                    echo "Id: <input type='text' name='Id' value=".$row['Id'].">";
                    echo "</br></br>";
                    echo "Name: <input type='text' name='Name' value=".$row['Name'].">";
                    echo "</br></br>";
                    echo "Address: <input type='text' name='Address' value=".$row['Address'].">";
                    echo "</br></br>";
                    echo "Contact: <input type='text' name='Contact' value=".$row['Contact'].">";
                    echo "</br></br>";
                     echo "Email: <input type='text' name='Email' value=".$row['Email'].">";
                    echo "</br></br>";
                    
                    echo"<input type='submit' name = 'submit' value='Update'>";
                    echo"<input type='submit' name = 'cancle' value='Cancle'>";
                    echo "</div></form>";

                    if(isset($_POST['submit'])){
                        $Id = $_POST["Id"];
                        $Name = $_POST["Name"];
                        $Address = $_POST["Address"];
                        $Contact = $_POST["Contact"];
                         $Email = $_POST["Email"];


                        $ssql = "UPDATE `customer` SET Id='$Id', Name='$Name', Address='$Address', Contact='$Contact',Email='$Email'
                        WHERE Id=".$row['Id']."";
                        
                        if ($conn->query($ssql) === TRUE) {
                        echo "<script type='text/javascript'>alert('Submitted successfully!')</script>";
                        } else {
                        echo "Upadate Unsucessful". $conn->error;
                        }

                    }
                    if(isset($_POST['cancle'])){
                        echo "<script>document.getElementById('close').style.display='none'</script>";
                    }
                }

                // DELETE CODE STARTS FORM HERE
                if(isset($_GET['delete'.$row['Id']])){
                    $delete = "DELETE FROM `customer` WHERE Id=".$row['Id']."";
                    if ($conn->query($delete) === TRUE) {
                    echo "<script type='text/javascript'>alert('Deleted successfully!')</script>";
                    echo "<meta http-equiv='refresh' content='0'>"; // THIS IS FOR AUTO REFRESH CURRENT PAGE
                    } else {
                    echo "Delete Unsucessful". $conn->error;
                    }
                }

                // PDF STARTS FROM HERE
                if(isset($_GET['print'.$row['Id']])){

                    echo "<script>
                    var mywindow = window.open('', 'PRINT', 'height=400,width=600');
                    mywindow.document.write('<html><head><title>' + document.title  + '</title>');
                    mywindow.document.write('</head><body >');
                    mywindow.document.write('<center><h1>' + 'Devil Bike Showroom'  + '</h1><center>');
                    mywindow.document.write('<p>' + 'Address:Road-12,Shop-32,Uttara,Dhaka-1230'  + '</p>');
                    mywindow.document.write('<p>' + 'Contace: 01795-443674, Email: hhasibul677@gmail.com'  + '</p></center>');

                    mywindow.document.write(document.getElementById('a".$row['Id']."').innerHTML);
                    mywindow.document.write(' -- ');
                    mywindow.document.write(document.getElementById('b".$row['Id']."').innerHTML);
                    mywindow.document.write(' -- ');
                    mywindow.document.write(document.getElementById('c".$row['Id']."').innerHTML);
                    mywindow.document.write(' -- ');
                    mywindow.document.write(document.getElementById('d".$row['Id']."').innerHTML);
                     mywindow.document.write(' -- ');
                    mywindow.document.write(document.getElementById('e".$row['Id']."').innerHTML);

                    mywindow.document.write('<center><p>' + 'THIS VEHICLE IS DESIGNED AND REQUIRES THE RIDER TO USE ACTIVE'  + '</p><center>');
                    mywindow.document.write('<center><p>' + 'RIDING - IF YOU HAVE NOT BEEN TRAINED IN ACTIVE RIDING, DO NOT'  + '</p><center>');
                    mywindow.document.write('<center><p>' + 'HAVE THE PHYSICAL CAPACITY OR CAN NOT APPLY ACTIVE RIDING WHEN '  + '</p><center>');
                    mywindow.document.write('<center><p>' + 'YOU ARE RIDING, THEN DO NOT USE THIS VEHICLE. IT IS UNSAFE FOR YOU'  + '</p><center>');

                    mywindow.document.write('</body></html>');
                    mywindow.document.close(); // necessary for IE >= 10
                    mywindow.focus(); // necessary for IE >= 10*/

                    mywindow.print();
                    mywindow.close();
                    history.back(); // IT WILL TAKE YOU BAKE PAGE
                    </script>";
                }





            }echo"</table>";
        }else{
                echo "No search found!!!";
        }
    $conn->close();
     ?>
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
      
  <i><h3>Created By Md Hasibul Hasan 
  ID: 17103121</h3></i>
  <h3>Sec: D</h3>
</div>
</body>
</center>
</html>