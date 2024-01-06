<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers List</title>
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" /> -->
    <link rel="stylesheet" href="css/customers.css">
    
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
</head>
<body>

<div class="container">
    <div class="heading">
         <h1>Third Party Customer Data</h1>
    </div>

    <div class="customerTable"><table>
        <thead>
        <tr>
            <th>No</th>
            <th>User Name</th>
            <th>Email ‍</th>
            <th>Password</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
      
        <?php
        include('db.php');
        $query = "SELECT *FROM customers";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='clist_d'>";
            echo "<tbody>";
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['password']."</td>";
            echo "<td><a href='thirdPrtyC_DataEdit.php?id=".$row['id']."'><span class='edit material-symbols-outlined'>
            edit
            </span></a>";
            echo "<td><a href='thirdPrtyC_DataDel.php?id=".$row['id']."'><span class='delete material-symbols-outlined'>
            delete
            </span></a></td>";
            echo "</tr>";
            echo "</tbody>";
            echo "</div>";
            
        }
        mysqli_close($conn);
        ?>

    </table></div><br>
    
    
</div>
<div class="backbtn"><a href="home.php"><button>Back</a></div>
    
   
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
  </body>
</html>