<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h2>Edit Product</h2>

    <?php
    include('connection.php');

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
        $productID = $_GET["id"];

        // Fetch data for the selected product
        $sql = "SELECT * FROM products WHERE Product_ID = '$productID'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
    ?>
            <div class="container my-5">

                <form action="insert.php" method="post">
                    <div class="form-group">
                        <label for="productName">Product Name</label>
                        <input type="text" class="form-control" id="productName" name="Product_Name" aria-describedby="emailHelp" placeholder="Enter Product Name" value="<?php echo $row['Product_Name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="productPrice">Product Price</label>
                        <input type="text" class="form-control" id="productPrice" name="Product_Price" placeholder="Enter Price" value="<?php echo $row['Product_Price']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="productDescription">Product Description</label>
                        <input type="text" class="form-control" id="productDescription" name="Product_Description" placeholder="Enter Description" value="<?php echo $row['Product_Description']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="productImage">Product Image</label>
                        <input type="file" class="form-control" id="productImage" name="Product_Image" placeholder="Enter Image" value="<?php echo $row['Product_Image']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="productCategory">Category</label>
                        <select class="form-control" id="productCategory" name="Product_Category" value="<?php echo $row['Product_Category']; ?>">
                            <option>Select Category</option>
                            <option>Smart Assistants</option>
                            <option>Security Cameras</option>
                            <option>Smart Entry</option>
                            <option>Smart Lights</option>
                            <option>Smart Switches</option>
                            <option>Smart Thermostats</option>
                            <option>Smart Sensors</option>
                            <option>Smart TVs</option>
                            <option>Streaming Devices</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="productStatus">Product Status</label>
                        <select class="form-control" id="productStatus" name="Product_Status" value="<?php echo $row['Product_Status']; ?>">
                            <option>Select Status</option>
                            <option>In Stock</option>
                            <option>Out of Stock</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
    <?php
        } else {
            echo "Product not found.";
        }

        $conn->close();
    } else {
        echo "Invalid request.";
    }
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>