<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "shop";
$err = "";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
} 
mysqli_set_charset($conn, "utf8");


$sql = "SELECT * FROM products"; /*SELECT * FROM products ORDER BY id jeigu eiles tvarka */
$result = mysqli_query($conn, $sql);
$products = [];
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    //echo "<table width='100%'>";
    //echo "<tr><td>ID</td><td>Name</td><td>PRICE</td><td>DESCRIPTION</td></tr>";

    while($row = mysqli_fetch_assoc($result)) {
        //$total+=$row["price"];
        array_push($products, $row);
        //echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["price"] . "</td><td>" . $row["description"] . "</td></tr>";
    }
    //echo "</table>";
} else {
    $err = "Produktu nerasta";
}
mysqli_close($conn);

include "view.php";

?>
 



