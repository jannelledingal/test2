<?php include "db.php"; ?>

<!DOCTYPE html>
<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<h2 class="text-center mb-4">Add Product</h2>

<form action="insert.php" method="POST" enctype="multipart/form-data" class="card p-4 shadow">

<div class="mb-3">

<label class="form-label">Product Type</label>

<select name="product_type_id" class="form-control">

<?php
$result = mysqli_query($conn,"SELECT * FROM product_types");

while($row = mysqli_fetch_assoc($result)){
echo "<option value='{$row['id']}'>{$row['type_name']}</option>";
}
?>

</select>

</div>

<div class="mb-3">

<label class="form-label">Brand</label>

<select name="brand_id" class="form-control">

<?php
$result = mysqli_query($conn,"SELECT * FROM brands");

while($row = mysqli_fetch_assoc($result)){
echo "<option value='{$row['id']}'>{$row['brand_name']}</option>";
}
?>

</select>

</div>

<div class="mb-3">

<label class="form-label">Name</label>

<input type="text" name="product_name" class="form-control">

</div>

<div class="mb-3">

<label class="form-label">Description</label>

<textarea name="description" class="form-control"></textarea>

</div>

<div class="mb-3">

<label class="form-label">Image</label>

<input type="file" name="picture" class="form-control">

</div>

<button type="submit" class="btn btn-success">Save Product</button>

<a href="index.php" class="btn btn-secondary">Back</a>

</form>

</div>

</body>
</html>