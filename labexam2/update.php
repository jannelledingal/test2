<?php

include "db.php";

$id = $_POST['id'];
$product_name = $_POST['product_name'];
$description = $_POST['description'];

$image = $_FILES['picture']['product_name'];
$tmp = $_FILES['picture']['tmp_name'];

if($image != ""){

move_uploaded_file($tmp,"uploads/".$image);

$query = "UPDATE products SET name='$product_name',description='$description',picture='$image' WHERE id=$id";

}else{

$query = "UPDATE products SET name='$product_name',description='$description' WHERE id=$id";

}

mysqli_query($conn,$query);

header("Location: index.php");

?>