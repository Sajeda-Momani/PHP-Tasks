<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $productID = $_GET["id"];

    // Delete data from database
    $sql = "DELETE FROM products WHERE Product_ID = '$productID'";

    if ($conn->query($sql) === TRUE) {
        echo "Data deleted successfully.";
    } else {
        echo "Error deleting data: " . $conn->error;
    }

    $conn->close();

    // Redirect back to index.php after deleting
    header("Location: index.php");
    exit(); // Terminate the script after redirection
} else {
    echo "Invalid request.";
}
?>
