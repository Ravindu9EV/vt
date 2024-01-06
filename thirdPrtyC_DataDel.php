<?php
include('db.php');

$id = $_GET['id'];
$query = "DELETE FROM customers WHERE id='$id'";
$result = mysqli_query($conn, $query);

if ($result) {
    header("Location: thirdPrtyC_Data.php");
}else {
    echo "Error: ".mysqli_error($conn);
}

mysqli_close($conn);
?>