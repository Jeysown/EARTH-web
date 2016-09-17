
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "earth";
$safe = array();
$danger = array();
$all = array();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}
//safe
$sql = "SELECT * FROM reports where status = 'safe'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
		 $j=0;
     while($row = $result->fetch_assoc()) {
				 $safe[$j]=array($row["Status"],$row["Date"],$row["Time"],$row["lat"],$row["lng"]);
				 $j++;
     }
} else {
     echo "0 results";
}


//danger

$sql = "SELECT * FROM reports where status = 'danger'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
		 $i=0;
     while($row = $result->fetch_assoc()) {

			 $danger[$i]=array($row["Status"],$row["Date"],$row["Time"],$row["lat"],$row["lng"]);
			 $i++;
     }
} else {
     echo "0 results";
}
//all
//safe
$sql = "SELECT * FROM reports";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
		 $j=0;
     while($row = $result->fetch_assoc()) {
				 $all[$j]=array($row["Status"],$row["Date"],$row["Time"],$row["lat"],$row["lng"]);
				 $j++;
     }
} else {
     echo "0 results";
}

$conn->close();
?>
