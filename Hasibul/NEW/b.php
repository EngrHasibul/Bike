/<style>
table, th, td {
    border: 1px solid black; text-align: center;
}
</style>
</head>
<body style="background-image:url('')">
<table style="width:100%">
  <tr style="color:blue">
  	<center>
  	<h1>Bike Information</h1></center>
    <th>Id</th>
    <th>Model</th> 
    <th>Company</th>
    <th>Description</th>
  </tr>

<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbName = "db_bike"; 
  $connection = mysqli_connect($servername, $username, $password, $dbName);
  if ($connection) {
    echo "Connected Successfully.<br>";
  } else {
    die("Connection failed.<br>".mysqli_connect_error());
  }

  $searchKeyword = $_POST["searchKeyword"]; 
  $SQL = "SELECT * FROM `bike` WHERE Id LIKE \"%".$searchKeyword."%\""; 
  $result = mysqli_query($connection, $SQL);
  if (!$result || mysqli_num_rows($result) > 0) {
   
   while($row = mysqli_fetch_assoc($result)) 
   {
	echo "<tr>";
	echo"<td>".$row['Id']."</td>";
	echo"<td>".$row['Model']."</td>";
	echo"<td>".$row['Company']."</td>";
	echo"<td>".$row['Description']."</td>";
	echo "</tr>";
	}
  } 
  else 
  {
    echo "0 Result";
  }
?>