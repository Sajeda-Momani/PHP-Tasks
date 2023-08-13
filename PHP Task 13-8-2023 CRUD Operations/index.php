<!doctype html>
<html lang="en">

<head>
  <title>shop</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container my-5">
    <h2> List of Products</h2>
    <br>
    <a class="btn btn-primary" href="../CRUD Operations/creat.php" role="button">Add New Product</a>
    <br>
    <br>
    <table class="table">
      <thead>
        <tr>
          <th>Product_ID</th>
          <th>Product_Name</th>
          <th>Product_Description</th>
          <th>Product_Price</th>
          <th>Product_Image</th>
          <!-- <th>Product_Category</th>
          <th>Product_Status</th> -->
          <th>Delete</th>
          <th>Update</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include('connection.php');

        $select = "SELECT * FROM products";
        $result = mysqli_query($conn, $select);

        while ($row = mysqli_fetch_array($result)) {
          echo '<tr>';
          echo '<td>' . $row['Product_ID'] . '</td>';
          echo '<td>' . $row['Product_Name'] . '</td>';
          echo '<td>' . $row['Product_Description'] . '</td>';
          echo '<td>' . $row['Product_Price'] . '</td>';
          echo '<td>' . $row['Product_Image'] . '</td>';
          echo '<td>
          <a href="delete.php?id=' . $row['Product_ID'] . '" class="btn btn-danger btn-sm">Delete</a>
          </td>';
          echo '<td>
          <a href="edit.php?id=' . $row['Product_ID'] . '" class="btn btn-primary btn-sm">Update</a>
          </td>';
          // echo '<td>'. $row['Product_Category']. '</td>';
          // echo '<td>'. $row['Product_Status'].
          echo '</tr>';
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>