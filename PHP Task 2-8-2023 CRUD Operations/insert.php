<?php

include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = $_POST["Product_Name"];
    $productPrice = $_POST["Product_Price"];
    $productDescription = $_POST["Product_Description"];

    // $productCategory = $_POST["productCategory"];
    // $productStatus = $_POST["productStatus"];

    // Validate and sanitize data here if needed

    $conn = new mysqli("localhost", "root", "", "store");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO products (Product_Name, Product_Price, Product_Description, Product_Image) 
            VALUES ('$productName', '$productPrice', '$productDescription', '$productImage' )";
 if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully.";
    header("Location: index.php");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>