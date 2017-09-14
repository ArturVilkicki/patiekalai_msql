<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "shop";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
mysqli_set_charset($conn, "utf8");


$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<table width='100%'>";
    echo "<tr><td>ID</td><td>Name</td><td>PRICE</td><td>DESCRIPTION</td></tr>";

    while($row = mysqli_fetch_assoc($result)) {
    	$total+=$row["price"];
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["price"] . "</td><td>" . $row["description"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
echo "<tr><td>" . "</td><td>" . "</td><td>" .$total  . "</td><td>" ."</td></tr>";

?>
</body>
</html>

