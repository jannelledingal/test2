<?php include "db.php"; ?>

<!DOCTYPE html>
<html>
<head>
<title>Product Management</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<h2 class="text-center mb-4">Product Management System</h2>

<a href="add.php" class="btn btn-primary mb-3">Add Product</a>

<table class="table table-bordered table-striped text-center">

<tr class="table-dark">
<th>ID</th>
<th>ProductType</th>
<th>Brand</th>
<th>Name</th>
<th>Description</th>
<th>Image</th>
<th>Action</th>
</tr>

<?php

$query = "SELECT products.*, product_types.type_name, brands.brand_name
FROM products
JOIN product_types ON products.product_type_id = product_types.id
JOIN brands ON products.brand_id = brands.id";

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result)){
?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['type_name']; ?></td>
<td><?php echo $row['brand_name']; ?></td>
<td><?php echo $row['product_name']; ?></td>
<td><?php echo $row['description']; ?></td>

<td>
<img src="uploads/<?php echo $row['picture']; ?>" width="80" class="rounded">
</td>

<td>

<a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>

<a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>

</td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>