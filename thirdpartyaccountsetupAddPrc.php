<?php
include('db.php');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO customers (name,email,password) VALUES ('$name','$email','$password')";
$result = mysqli_query($conn, $query);

if ($result){
    header("Location: thirdPrtyC_Data.php ");
}else {
    echo "Error: ".mysqli_error($conn);
}
mysqli_close($conn);
?>