<?php include "db.php";

$product_type_id = $_POST['product_type_id'];
$brand_id = $_POST['brand_id'];
$product_name = $_POST['product_name'];
$description = $_POST['description'];

$image = $_FILES['picture']['product_name'];
$tmp = $_FILES['picture']['tmp_name'];


move_uploaded_file($tmp, "uploads/".$image);

$query = "INSERT INTO products(product_type_id, brand_id, product_name, description,image)
VALUES('$product_type_id','$brand_id','$product_name','$description','$image')";

mysqli_query($conn,$query);

header("Location: index.php");

?>