<?php
session_start();
if (isset($_GET['logout'])) {
        session_destroy();
        $_SESSION ['user'] = null;
}
if (isset($_SESSION['user'])) {
    

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
    //ar bandoma prideti irasa
    if (isset($_POST['submit'])) {
        if ($_FILES['image']) {
            move_uploaded_file($_FILES["image"]["tmp_name"], "../images/" . $_FILES["image"]["name"]);
        }
        $sql = "INSERT INTO products (name, price, description, image, weight, qty) VALUES ('" . $_POST['name'] ."', '" . $_POST['price'] ."', '" . $_POST['description'] ."','" . $_FILES["image"]["name"] ."', '" . $_POST['weight'] ."', '" . $_POST['qty'] ."')";
        //die($sql);
        $result = mysqli_query($conn, $sql);
    }
    //ar bandoma pasalinti irasa
    if (isset($_GET['delete'])) {
        //$_GET['delete'] reiksme gaunama is nuorodos
        $sql = "DELETE FROM products WHERE id =" . $_GET['delete'];
        $result = mysqli_query($conn, $sql);
    }
    $sql = "SELECT * FROM products ORDER BY id"; /*SELECT * FROM products ORDER BY id jeigu eiles tvarka */
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
} else {
    header('Location: login.php');
}






?>