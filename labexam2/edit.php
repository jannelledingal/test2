<?php include "db.php";

$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM products WHERE id=$id");

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<h2 class="text-center mb-4">Edit Product</h2>

<form action="update.php" method="POST" enctype="multipart/form-data" class="card p-4 shadow">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

<div class="mb-3">

<label class="form-label">Name</label>

<input type="text" name="product_name" class="form-control" value="<?php echo $row['product_name']; ?>">

</div>

<div class="mb-3">

<label class="form-label">Description</label>

<textarea name="description" class="form-control"><?php echo $row['description']; ?></textarea>

</div>

<div class="mb-3">

<label class="form-label">Current Image</label>

<br>

<img src="usethis/<?php echo $row['picture']; ?>" width="100">

</div>

<div class="mb-3">

<label class="form-label">New Image</label>

<input type="file" name="picture" class="form-control">

</div>

<button type="submit" class="btn btn-warning">Update</button>

<a href="index.php" class="btn btn-secondary">Back</a>

</form>

</div>

</body>
</html>