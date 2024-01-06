<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customers </title>
</head>
<body>
    <h1>Edit Customers</h1>

    <?php
    include('db.php');
    $id = $_GET['id'];
    $query = "SELECT *FROM customers WHERE id=$id";
    $result = mysqli_query($conn, $query);

    if($row = mysqli_fetch_assoc($result)){
        echo "<form action='thirdPrtyC_DataEditPrcs.php' method='POST'>";
        echo "<input type='hidden' name='id' value='".$row['id']."'>";
        echo "<label>Name: <input type='text' name='name' value='".$row['name']."'></label><br>";
        echo "<label>Email: <input type='email' name='email' value='".$row['email']."'></label><br>";
        echo "<label>Password: <input type='password' name='password' value='".$row['password']."'></label><br>";
        echo "<input type='submit' value='Update Customer'>";
        echo "</form>";
    }
    mysqli_close($conn);
    ?>
</body>
</html>