<?php
include('db.php');
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO fcustomers (name,email,password) VALUES ('$name','$email','$password')";
$result = mysqli_query($conn, $query);

if ($result){
    header("Location: fullOptionC_Data.php ");
}else {
    echo "Error: ".mysqli_error($conn);
}
mysqli_close($conn);
?>