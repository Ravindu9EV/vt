<?php
include('db.php');

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


$query = "UPDATE fcustomers SET name='$name', email='$email', password='$password' WHERE id=$id";
$result = mysqli_query($conn, $query);

if ($result) {
    header("Location: fullOptionC_Data.php");

}else {
    echo "Error: ". mysqli_error($conn);

}

mysqli_close($conn);
?>