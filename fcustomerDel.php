<?php
include('db.php');

$id = $_GET['id'];
$query = "DELETE FROM fcustomers WHERE id='$id'";
$result = mysqli_query($conn, $query);

if ($result) {
    header("Location: fullOptionC_Data.php");
}else {
    echo "Error: ".mysqli_error($conn);
}

mysqli_close($conn);
?>